<?php

namespace JoshPJackson\OpenApi\Paths\PathItem\Operation\RequestBody\MediaType;

use JoshPJackson\OpenApi\Traits\CanJsonSerialise;

/**
 * Class Encoding
 * @package JoshPJackson\OpenApi\Paths\PathItem\Operation\RequestBody\MediaType
 */
class Encoding implements \JsonSerializable
{
    use CanJsonSerialise;

    /**
     * @var string
     */
    private string $contentType;

    /**
     * @return string
     */
    public function getContentType(): string
    {
        return $this->contentType;
    }

    /**
     * @param string $contentType
     * @return Encoding
     */
    public function setContentType(string $contentType): Encoding
    {
        $this->contentType = $contentType;
        return $this;
    }
}