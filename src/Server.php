<?php

namespace JoshPJackson\OpenApi;

use JoshPJackson\OpenApi\Traits\CanJsonSerialise;
use JoshPJackson\OpenApi\Traits\HasRequiredFields;

/**
 * Class Server
 * @package JoshPJackson\OpenApi
 */
class Server implements \JsonSerializable
{
    use CanJsonSerialise;
    use HasRequiredFields;

    /**
     * @var array|string[]
     */
    protected array $required = [
        'url'
    ];

    /**
     * @var string
     */
    private string $url;

    /**
     * @var string
     */
    private string $description;

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @param string $url
     * @return Server
     */
    public function setUrl(string $url): Server
    {
        $this->url = $url;
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
     * @return Server
     */
    public function setDescription(string $description): Server
    {
        $this->description = $description;
        return $this;
    }
}