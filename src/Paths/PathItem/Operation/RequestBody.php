<?php

namespace JoshPJackson\OpenApi\Paths\PathItem\Operation;

use JoshPJackson\OpenApi\Traits\CanJsonSerialise;
use JoshPJackson\OpenApi\Paths\PathItem\Operation\RequestBody\MediaType;

/**
 * Class RequestBody
 * @package JoshPJackson\OpenApi\Paths\PathItem\Operation
 */
class RequestBody implements \JsonSerializable
{
    use CanJsonSerialise;

    /**
     * @var string
     */
    private string $description;

    /**
     * @var MediaType
     */
    private MediaType $content;

    /**
     * @var bool
     */
    private bool $required;

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return RequestBody
     */
    public function setDescription(string $description): RequestBody
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return MediaType
     */
    public function getContent(): MediaType
    {
        return $this->content;
    }

    /**
     * @param MediaType $content
     * @return RequestBody
     */
    public function setContent(MediaType $content): RequestBody
    {
        $this->content = $content;
        return $this;
    }

    /**
     * @return bool
     */
    public function isRequired(): bool
    {
        return $this->required;
    }

    /**
     * @param bool $required
     * @return RequestBody
     */
    public function setRequired(bool $required): RequestBody
    {
        $this->required = $required;
        return $this;
    }
}