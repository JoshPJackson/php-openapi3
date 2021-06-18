<?php

namespace JoshPJackson\OpenApi;

use Exception;
use Illuminate\Support\Str;
use JoshPJackson\OpenApi\Interfaces\Arrayable;
use JoshPJackson\OpenApi\Paths\PathItem\Operation\RequestBody;
use JoshPJackson\OpenApi\Paths\PathItem\Operation\Responses\Response;
use JoshPJackson\OpenApi\Paths\PathItem\Operation\SecurityScheme;
use JoshPJackson\OpenApi\Traits\IsArrayable;

/**
 * Class Components
 * @package JoshPJackson\OpenApi
 */
class Components implements Arrayable
{
	use IsArrayable {
		IsArrayable::toArray as IsArrayableToArray;
	}

	/**
	 * @var Collection
	 */
	private Collection $schemas;

	/**
	 * @var Collection
	 */
	private Collection $responses;

	/**
	 * @var Collection
	 */
	private Collection $parameters;

	/**
	 * @var Collection
	 */
	private Collection $examples;

	/**
	 * @var Collection
	 */
	private Collection $requestBodies;

	/**
	 * @var Collection
	 */
	private Collection $headers;

	/**
	 * @var Collection
	 */
	private Collection $securitySchemes;

	/**
	 * @var Collection
	 */
	private Collection $links;

	/**
	 * @var Collection
	 */
	private Collection $callbacks;

	/**
	 * Components constructor.
	 */
	public function __construct()
	{
		$this->schemas = new Collection();
		$this->callbacks = new Collection();
		$this->examples = new Collection();
		$this->links = new Collection();
		$this->securitySchemes = new Collection();
		$this->responses = new Collection();
		$this->parameters = new Collection();
	}

	/**
	 * @return Collection
	 */
	public function getSchemas(): Collection
	{
		return $this->schemas;
	}

	/**
	 * @param Schema $schema
	 * @return Components
	 */
	public function addSchema(Schema $schema): Components
	{
		$this->schemas[] = $schema;

		return $this;
	}

    /**
     * @param array $schemas
     * @return $this
     */
	public function addSchemas(array $schemas): Components
    {
        foreach ($schemas as $schema) {
            $this->addSchema($schema);
        }

        return $this;
    }

	/**
	 * @return Collection
	 */
	public function getResponses(): Collection
	{
		return $this->responses;
	}

	/**
	 * @param Response $response
	 * @return Components
	 */
	public function addResponse(Response $response): Components
	{
		$this->responses[] = $response;
		return $this;
	}

	/**
	 * @return Collection
	 */
	public function getParameters(): Collection
	{
		return $this->parameters;
	}

	/**
	 * @param Collection $parameter
	 * @return Components
	 */
	public function addParameter(Collection $parameter): Components
	{
		$this->parameters[] = $parameter;
		return $this;
	}

	/**
	 * @return Collection
	 */
	public function getExamples(): Collection
	{
		return $this->examples;
	}

	/**
	 * @param mixed $examples
	 * @return Components
	 */
	public function setExamples(mixed $examples): Components
	{
		$this->examples = $examples;
		return $this;
	}

	/**
	 * @return Collection
	 */
	public function getRequestBodies(): Collection
	{
		return $this->requestBodies;
	}

	/**
	 * @param RequestBody $requestBody
	 * @return Components
	 */
	public function addRequestBody(RequestBody $requestBody): Components
	{
		$this->requestBodies[] = $requestBody;
		return $this;
	}

	/**
	 * @return Collection
	 */
	public function getHeaders(): Collection
	{
		return $this->headers;
	}

	/**
	 * @param Collection $headers
	 * @return Components
	 */
	public function setHeaders(Collection $headers): Components
	{
		$this->headers = $headers;
		return $this;
	}

	/**
	 * @return Collection
	 */
	public function getSecuritySchemes(): Collection
	{
		return $this->securitySchemes;
	}

	/**
	 * @param SecurityScheme $securityScheme
	 * @return Components
	 */
	public function addSecurityScheme(SecurityScheme $securityScheme): Components
	{
		$this->securitySchemes[] = $securityScheme;
		return $this;
	}

	/**
	 * @return Collection
	 */
	public function getLinks(): Collection
	{
		return $this->links;
	}

	/**
	 * @param Collection $links
	 * @return Components
	 */
	public function setLinks(Collection $links): Components
	{
		$this->links = $links;
		return $this;
	}

	/**
	 * @return Collection
	 */
	public function getCallbacks(): Collection
	{
		return $this->callbacks;
	}

	/**
	 * @param Collection $callbacks
	 * @return Components
	 */
	public function setCallbacks(Collection $callbacks): Components
	{
		$this->callbacks = $callbacks;
		return $this;
	}

	/**
	 * @return array
	 * @throws Exception
	 */
	public function toArray(): array
	{
		$array = $this->IsArrayableToArray();
		$schemas = [];

		if (!empty($this->schemas)) {
			foreach ($this->schemas as $schema) {
				$schemas[Str::slug($schema->getName())] = $schema->toArray();
			}
		}

		$responses = [];

		if (!empty($this->responses)) {
			foreach ($this->responses as $response) {
				$responses[$response->getCode()] = $response->toArray();
			}
		}

		$array['schemas'] = $schemas;
		$array['responses'] = $responses;

		return $array;
	}
}
