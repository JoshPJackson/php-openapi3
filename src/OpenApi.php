<?php

namespace JoshPJackson\OpenApi;

use JoshPJackson\OpenApi\Traits\CanJsonSerialise;
use JoshPJackson\OpenApi\Paths\PathItem\Operation\SecurityScheme;
use JoshPJackson\OpenApi\Traits\HasRequiredFields;

/**
 * Class OpenApi
 * @package JoshPJackson\OpenApi
 */
class OpenApi implements \JsonSerializable
{
    use CanJsonSerialise;
    use HasRequiredFields;

    /**
     * @var array|string[]
     */
    protected array $required = [
        'openapi',
        'info'
    ];

    /**
     * @var string
     */
    private string $openapi = '3.1.0';

    /**
     * @var Info
     */
    private Info $info;

    /**
     * @var array
     */
    private array $servers;

    /**
     * @var Components
     */
    private Components $components;

    /**
     * @var Paths
     */
    private Paths $paths;

    /**
     * @var array
     */
    private array $securities;

    /**
     * @var array
     */
    private array $tags;

    /**
     * @return string
     */
    public function getOpenapi(): string
    {
        return $this->openapi;
    }

    /**
     * @param string $openapi
     * @return OpenApi
     */
    public function setOpenapi(string $openapi): OpenApi
    {
        $this->openapi = $openapi;
        return $this;
    }

    /**
     * @return Info
     */
    public function getInfo(): Info
    {
        return $this->info;
    }

    /**
     * @param Info $info
     * @return OpenApi
     */
    public function setInfo(Info $info): OpenApi
    {
        $this->info = $info;
        return $this;
    }

    /**
     * @return array
     */
    public function getServers(): array
    {
        return $this->servers;
    }

    /**
     * @param Server $server
     * @return OpenApi
     */
    public function addServer(Server $server): OpenApi
    {
        $this->servers[] = $server;
        return $this;
    }

    /**
     * @return Paths
     */
    public function getPaths(): Paths
    {
        return $this->paths;
    }

    /**
     * @param Paths $paths
     * @return OpenApi
     */
    public function setPaths(Paths $paths): OpenApi
    {
        $this->paths = $paths;
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
     * @param SecurityScheme $security
     * @return OpenApi
     */
    public function addSecurity(SecurityScheme $security): OpenApi
    {
        $this->securities[] = $security;
        return $this;
    }

    /**
     * @return array
     */
    public function getTags(): array
    {
        return $this->tags;
    }

    /**
     * @param Tag $tag
     * @return OpenApi
     */
    public function addTag(Tag $tag): OpenApi
    {
        $this->tags[] = $tag;
        return $this;
    }

    /**
     * @return Components
     */
    public function getComponents(): Components
    {
        return $this->components;
    }

    /**
     * @param Components $components
     * @return OpenApi
     */
    public function setComponents(Components $components): OpenApi
    {
        $this->components = $components;
        return $this;
    }
}