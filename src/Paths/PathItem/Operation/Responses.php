<?php

namespace JoshPJackson\OpenApi\Paths\PathItem\Operation;

use JoshPJackson\OpenApi\Traits\CanJsonSerialise;
use JoshPJackson\OpenApi\Paths\PathItem\Operation\Responses\Response;

/**
 * Class Responses
 * @package JoshPJackson\OpenApi\Paths\PathItem\Operation
 */
class Responses implements \JsonSerializable
{
    use CanJsonSerialise;

    /**
     * @var array
     */
    private array $responses;

    /**
     * @param Response $response
     * @return $this
     */
    public function addResponse(Response $response)
    {
        $this->responses[] = $response;

        return $this;
    }

    /**
     * @return array
     */
    public function getResponses() : array
    {
        return $this->responses;
    }
}