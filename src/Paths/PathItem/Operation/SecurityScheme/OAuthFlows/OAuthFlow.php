<?php

namespace JoshPJackson\OpenApi\Paths\PathItem\Operation\SecurityScheme\OAuthFlows;

use JoshPJackson\OpenApi\Interfaces\Arrayable;
use JoshPJackson\OpenApi\Traits\IsArrayable;

/**
 * Class OAuthFlow
 * @package JoshPJackson\OpenApi\Paths\PathItem\Operation\SecurityScheme\OAuthFlows
 */
class OAuthFlow implements Arrayable
{
	use IsArrayable;

	/**
	 * @var string
	 */
	protected string $refreshUrl;

	/**
	 * @var array
     */
    protected array $scopes;

    /**
     * @return string
     */
    public function getRefreshUrl(): string
    {
        return $this->refreshUrl;
    }

    /**
     * @param string $refreshUrl
     * @return OAuthFlow
     */
    public function setRefreshUrl(string $refreshUrl): OAuthFlow
    {
        $this->refreshUrl = $refreshUrl;
        return $this;
    }

    /**
     * @return array
     */
    public function getScopes(): array
    {
        return $this->scopes;
    }

    /**
     * @param string $scope
     * @return OAuthFlow
     */
    public function addScope(string $scope): OAuthFlow
    {
        $this->scopes[] = $scope;
        return $this;
    }
}