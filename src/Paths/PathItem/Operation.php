<?php

namespace JoshPJackson\OpenApi\Paths\PathItem;

use JoshPJackson\OpenApi\Collection;
use JoshPJackson\OpenApi\Interfaces\Arrayable;
use JoshPJackson\OpenApi\Paths\PathItem\Operation\Parameter;
use JoshPJackson\OpenApi\Paths\PathItem\Operation\RequestBody;
use JoshPJackson\OpenApi\Paths\PathItem\Operation\Responses;
use JoshPJackson\OpenApi\Traits\IsArrayable;

/**
 * Class Operation
 * @package JoshPJackson\OpenApi\Paths\PathItem
 */
class Operation implements Arrayable
{
    use IsArrayable;

    /**
     * @var array
     */
    private array $tags;

    /**
     * @var string
     */
    private string $summary;

    /**
     * @var string
     */
    private string $description;

    /**
     * @var string
     */
    private string $operationId;

    /**
     * @var Collection
     */
    private Collection $parameters;

    /**
     * @var RequestBody
     */
    private RequestBody $requestBody;

    /**
     * @var Responses
     */
    private Responses $responses;

    /**
     * @var array
     */
    private array $securities;

    /**
     * Operation constructor.
     */
    public function __construct()
    {
        $this->parameters = new Collection();
    }

    /**
     * @return array
     */
    public function getTags(): array
    {
        return $this->tags;
    }

    /**
     * @param array $tags
     * @return Operation
     */
    public function setTags(array $tags): Operation
    {
        $this->tags = $tags;
        return $this;
    }

    /**
     * @return string
     */
    public function getSummary(): string
    {
        return $this->summary;
    }

    /**
     * @param string $summary
     * @return Operation
     */
    public function setSummary(string $summary): Operation
    {
        $this->summary = $summary;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return Operation
     */
    public function setDescription(string $description): Operation
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return string
     */
    public function getOperationId(): string
    {
        return $this->operationId;
    }

    /**
     * @param string $operationId
     * @return Operation
     */
    public function setOperationId(string $operationId): Operation
    {
        $this->operationId = $operationId;
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
     * @param Parameter $parameters
     * @return $this
     */
    public function addParameter(Parameter $parameters): Operation
    {
        $this->parameters[] = $parameters;
        return $this;
    }

    /**
     * @return RequestBody
     */
    public function getRequestBody(): RequestBody
    {
        return $this->requestBody;
    }

    /**
     * @param RequestBody $requestBody
     * @return Operation
     */
    public function setRequestBody(RequestBody $requestBody): Operation
    {
        $this->requestBody = $requestBody;
        return $this;
    }

    /**
     * @return Responses
     */
    public function getResponses(): Responses
    {
        return $this->responses;
    }

    /**
     * @param Responses $responses
     * @return Operation
     */
    public function setResponses(Responses $responses): Operation
    {
        $this->responses = $responses;
        return $this;
    }

    /**
     * @return array
     */
    public function getSecurities(): array
    {
        return $this->securities;
    }

    /**
     * @param array $securities
     * @return Operation
     */
    public function setSecurities(array $securities): Operation
    {
        $this->securities = $securities;
        return $this;
    }
}