<?php

use JoshPJackson\OpenApi\Components;
use JoshPJackson\OpenApi\Info;
use JoshPJackson\OpenApi\Info\Contact;
use JoshPJackson\OpenApi\Info\License;
use JoshPJackson\OpenApi\OpenApi;
use JoshPJackson\OpenApi\Schema;
use JoshPJackson\OpenApi\Schema\Property;
use JoshPJackson\OpenApi\Server;
use JoshPJackson\OpenApi\TypeFactory;

require('../../vendor/autoload.php');

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
$contact = new Contact();
$contact->setName('Swagger API Team')
	->setEmail('apiteam@swagger.io')
	->setUrl('http://swagger.io');

// create license item
$license = new License();
$license->setName('Apache 2.0')
	->setUrl('https://www.apache.org/license/LICENSE-2.0.html');

$info->setContact($contact)->setLicense($license);

/* make servers */
$server = new Server();
$server->setUrl('http://petstore.swagger.io/api');

/* make schemas */
$errorSchema = new Schema();
$errorSchema->setTypeAndFormatFromType(TypeFactory::object())
	->setRequired(['code', 'message']);

// add properties
$code = new Property('code', TypeFactory::integer32());
$message = new Property('message', TypeFactory::string());

$errorSchema->addProperty($code)->addProperty($message);

/* make components object */
$components = new Components();
$components->addSchema($errorSchema);

/* add objects to root api object */
$openApi->setInfo($info);
$openApi->addServer($server);
$openApi->setComponents($components);

$fh = fopen(__DIR__ . '/full.json', 'w+');
fwrite($fh, $openApi->jsonSerialize());
fclose($fh);