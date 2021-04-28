<?php

namespace JoshPJackson\OpenApi\Paths\PathItem\Operation\RequestBody;

use JoshPJackson\OpenApi\Schema;
use JoshPJackson\OpenApi\Paths\PathItem\Operation\RequestBody\MediaType\Encoding;
use JoshPJackson\OpenApi\Traits\CanJsonSerialise;

class MediaType implements \JsonSerializable
{
    use CanJsonSerialise;

    /**
     * @var Schema
     */
    private Schema $schema;

    /**
     * @var
     */
    private $example;

    /**
     * @var Encoding
     */
    private Encoding $encoding;

    /**
     * @return Schema
     */
    public function getSchema(): Schema
    {
        return $this->schema;
    }

    /**
     * @param Schema $schema
     * @return MediaType
     */
    public function setSchema(Schema $schema): MediaType
    {
        $this->schema = $schema;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getExample()
    {
        return $this->example;
    }

    /**
     * @param mixed $example
     * @return MediaType
     */
    public function setExample($example)
    {
        $this->example = $example;
        return $this;
    }

    /**
     * @return Encoding
     */
    public function getEncoding(): Encoding
    {
        return $this->encoding;
    }

    /**
     * @param Encoding $encoding
     * @return MediaType
     */
    public function setEncoding(Encoding $encoding): MediaType
    {
        $this->encoding = $encoding;
        return $this;
    }
}