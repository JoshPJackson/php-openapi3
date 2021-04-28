<?php

namespace JoshPJackson\OpenApi\Paths\PathItem\Operation\Responses;

use JoshPJackson\OpenApi\Paths\PathItem\Operation\RequestBody\MediaType;
use JoshPJackson\OpenApi\Traits\CanJsonSerialise;
use JoshPJackson\OpenApi\Traits\HasRequiredFields;

/**
 * Class Response
 * @package JoshPJackson\OpenApi\Paths\PathItem\Operation\Responses
 */
class Response implements \JsonSerializable
{
    use CanJsonSerialise;
    use HasRequiredFields;

    /**
     * @var array|string[]
     */
    protected array $requiredFields = [
        'description'
    ];

    /**
     * @var string
     */
    private string $description;

    /**
     * @var MediaType
     */
    private MediaType $content;

    /**
     * @var array
     */
    private array $links;

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return Response
     */
    public function setDescription(string $description): Response
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
     * @return Response
     */
    public function setContent(MediaType $content): Response
    {
        $this->content = $content;
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
     * @param string $link
     * @return Response
     */
    public function addLink(string $link): Response
    {
        $this->links[] = $link;
        return $this;
    }
}