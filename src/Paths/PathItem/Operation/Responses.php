<?php

namespace JoshPJackson\OpenApi\Paths\PathItem\Operation;

use JoshPJackson\OpenApi\Interfaces\Arrayable;
use JoshPJackson\OpenApi\Paths\PathItem\Operation\Responses\Response;
use JoshPJackson\OpenApi\Traits\IsArrayable;

/**
 * Class Responses
 * @package JoshPJackson\OpenApi\Paths\PathItem\Operation
 */
class Responses implements Arrayable
{
    use IsArrayable;

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

    public function toArray(): array
    {
        $responses = [];

        foreach ($this->getResponses() as $response) {
            if ($response->hasRef()) {
                $responses[$response->getCode()] = [
                    '$ref' => $response->getRef()
                ];
            } else {
                $responses[$response->getCode()] = $response->toArray();
            }
        }

        return $responses;
    }
}