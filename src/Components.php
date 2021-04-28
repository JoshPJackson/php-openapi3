<?php

namespace JoshPJackson\OpenApi;

use JoshPJackson\OpenApi\Traits\CanJsonSerialise;

/**
 * Class Components
 * @package JoshPJackson\OpenApi
 */
class Components implements \JsonSerializable
{
    use CanJsonSerialise;

    /**
     * @var array
     */
    private array $schemas;

    /**
     * @var array
     */
    private array $responses;

    /**
     * @var array
     */
    private array $parameters;

    /**
     * @var array
     */
    private array $examples;

    /**
     * @var array
     */
    private array $requestBodies;

    /**
     * @var array
     */
    private array $headers;

    /**
     * @var array
     */
    private array $securitySchemes;

    /**
     * @var array
     */
    private array $links;

    /**
     * @var array
     */
    private array $callbacks;

    /**
     * @return array
     */
    public function getSchemas(): array
    {
        return $this->schemas;
    }

    /**
     * @param array $schemas
     * @return Components
     */
    public function setSchemas(array $schemas): Components
    {
        $this->schemas = $schemas;
        return $this;
    }

    /**
     * @return array
     */
    public function getResponses(): array
    {
        return $this->responses;
    }

    /**
     * @param array $responses
     * @return Components
     */
    public function setResponses(array $responses): Components
    {
        $this->responses = $responses;
        return $this;
    }

    /**
     * @return array
     */
    public function getParameters(): array
    {
        return $this->parameters;
    }

    /**
     * @param array $parameters
     * @return Components
     */
    public function setParameters(array $parameters): Components
    {
        $this->parameters = $parameters;
        return $this;
    }

    /**
     * @return array
     */
    public function getExamples(): array
    {
        return $this->examples;
    }

    /**
     * @param array $examples
     * @return Components
     */
    public function setExamples(array $examples): Components
    {
        $this->examples = $examples;
        return $this;
    }

    /**
     * @return array
     */
    public function getRequestBodies(): array
    {
        return $this->requestBodies;
    }

    /**
     * @param array $requestBodies
     * @return Components
     */
    public function setRequestBodies(array $requestBodies): Components
    {
        $this->requestBodies = $requestBodies;
        return $this;
    }

    /**
     * @return array
     */
    public function getHeaders(): array
    {
        return $this->headers;
    }

    /**
     * @param array $headers
     * @return Components
     */
    public function setHeaders(array $headers): Components
    {
        $this->headers = $headers;
        return $this;
    }

    /**
     * @return array
     */
    public function getSecuritySchemes(): array
    {
        return $this->securitySchemes;
    }

    /**
     * @param array $securitySchemes
     * @return Components
     */
    public function setSecuritySchemes(array $securitySchemes): Components
    {
        $this->securitySchemes = $securitySchemes;
        return $this;
    }

    /**
     * @return array
     */
    public function getLinks(): array
    {
        return $this->links;
    }

    /**
     * @param array $links
     * @return Components
     */
    public function setLinks(array $links): Components
    {
        $this->links = $links;
        return $this;
    }

    /**
     * @return array
     */
    public function getCallbacks(): array
    {
        return $this->callbacks;
    }

    /**
     * @param array $callbacks
     * @return Components
     */
    public function setCallbacks(array $callbacks): Components
    {
        $this->callbacks = $callbacks;
        return $this;
    }
}
