<?php

use JoshPJackson\OpenApi\Components;
use JoshPJackson\OpenApi\Info;
use JoshPJackson\OpenApi\Info\Contact;
use JoshPJackson\OpenApi\Info\License;
use JoshPJackson\OpenApi\OpenApi;
use JoshPJackson\OpenApi\Paths;
use JoshPJackson\OpenApi\Paths\PathItem;
use JoshPJackson\OpenApi\Paths\PathItem\Operation;
use JoshPJackson\OpenApi\Paths\PathItem\Operation\RequestBody\MediaType\Encoding;
use JoshPJackson\OpenApi\Schema;
use JoshPJackson\OpenApi\Schema\Property;
use JoshPJackson\OpenApi\Server;
use JoshPJackson\OpenApi\TypeFactory;

require(__DIR__ . '/../../vendor/autoload.php');

// here we replicated the example schema given by openapi: https://github.com/OAI/OpenAPI-Specification/blob/main/examples/v3.0/petstore-expanded.json

/* create base open api object */
$openApi = new OpenApi();
$openApi->setOpenapi('3.0.0');

/* create info object */
$info = new Info();
$info->setVersion('1.0.0')
	->setTitle('Swagger Petstore')
	->setDescription('A sample API that uses a petstore as an example to demonstrate features in the OpenAPI 3.0 specification')
	->setTermsOfService('http://swagger.io/terms/');

// create contact item
$contact = new Contact('apiteam@swagger.io', 'Swagger API Team', 'http://swagger.io');

// create license item
$license = new License('Apache 2.0', 'https://www.apache.org/license/LICENSE-2.0.html');
$info->setContact($contact)->setLicense($license);

/* make servers */
$server = new Server('http://petstore.swagger.io/api');

/* make schemas */
$errorSchema = new Schema('Error');
$newPet = new Schema('NewPet');
$pet = new Schema('Pet');

$errorSchema->setTypeAndFormatFromType(TypeFactory::object())->setRequired(['code', 'message']);
$newPet->setTypeAndFormatFromType(TypeFactory::object())->setRequired(['name']);

// add properties
$code = new Property('code', TypeFactory::integer32());
$message = new Property('message', TypeFactory::string());
$name = new Property('name', TypeFactory::string());
$tag = new Property('tag', TypeFactory::string());

$errorSchema->addProperty($code)->addProperty($message);
$newPet->addProperty($name)->addProperty($tag);

$petRef = new Schema();
$petRef->setRef('#/components/schemas/NewPet');
$pet->addAllOf($petRef);

/* make components object */
$components = new Components();
$components->addSchema($errorSchema);
$components->addSchema($newPet);
$components->addSchema($pet);

/* add objects to root api object */
$openApi->setInfo($info);
$openApi->addServer($server);
$openApi->setComponents($components);

/* now add some paths */
$pets = new PathItem('/pets');

// this path has two operations, a get and a post
$getOperation = new Operation();
$postOperation = new Operation();

// create get operation first
$getOperation->setDescription("Returns all pets from the system that the user has access to\nNam sed condimentum est. Maecenas tempor sagittis sapien, nec rhoncus sem sagittis sit amet. Aenean at gravida augue, ac iaculis sem. Curabitur odio lorem, ornare eget elementum nec, cursus id lectus. Duis mi turpis, pulvinar ac eros ac, tincidunt varius justo. In hac habitasse platea dictumst. Integer at adipiscing ante, a sagittis ligula. Aenean pharetra tempor ante molestie imperdiet. Vivamus id aliquam diam. Cras quis velit non tortor eleifend sagittis. Praesent at enim pharetra urna volutpat venenatis eget eget mauris. In eleifend fermentum facilisis. Praesent enim enim, gravida ac sodales sed, placerat id erat. Suspendisse lacus dolor, consectetur non augue vel, vehicula interdum libero. Morbi euismod sagittis libero sed lacinia.\n\nSed tempus felis lobortis leo pulvinar rutrum. Nam mattis velit nisl, eu condimentum ligula luctus nec. Phasellus semper velit eget aliquet faucibus. In a mattis elit. Phasellus vel urna viverra, condimentum lorem id, rhoncus nibh. Ut pellentesque posuere elementum. Sed a varius odio. Morbi rhoncus ligula libero, vel eleifend nunc tristique vitae. Fusce et sem dui. Aenean nec scelerisque tortor. Fusce malesuada accumsan magna vel tempus. Quisque mollis felis eu dolor tristique, sit amet auctor felis gravida. Sed libero lorem, molestie sed nisl in, accumsan tempor nisi. Fusce sollicitudin massa ut lacinia mattis. Sed vel eleifend lorem. Pellentesque vitae felis pretium, pulvinar elit eu, euismod sapien.\n")
    ->setOperationId('findPets');

// create parameters to add
$tags = new Operation\Parameter();
$tags->setName('tags')
    ->setIn('query')
    ->setDescription('tags to filter by')
    ->setRequired(false)
    ->setStyle("form");

$tagsSchema = new Schema();
$tagsSchema->setType('array')
    ->setItems(['type' => 'string']);

$tags->setSchema($tagsSchema);

$limit = new Operation\Parameter();
$limit->setName('limit')
    ->setIn('query')
    ->setDescription('maximum number of results to return')
    ->setRequired(false)
    ->setSchema((new Schema())->setTypeAndFormatFromType(TypeFactory::integer32()));

$getOperation->addParameter($tags)->addParameter($limit);

// now add responses
$response200 = new Operation\Responses\Response(200);
$response200->setDescription('pet response');

$schema = new Schema();
$schema->setType('array');
$schema->setItems((new Schema())->setRef('#/components/schemas/Pet'));

$mediaType = new Operation\RequestBody\MediaType();
$mediaType->setSchema($schema);
$mediaType->setEncoding(new Encoding('application/json'));
$response200->setContent($mediaType);

$responses = new Operation\Responses();
$responses->addResponse($response200);
$getOperation->setResponses($responses);

$pets->setGet($getOperation);

$paths = new Paths();
$paths->addPathItem($pets);

$openApi->setPaths($paths);

$fh = fopen(__DIR__ . '/full.json', 'w+');
fwrite($fh, $openApi->jsonSerialize());
fclose($fh);



















































































