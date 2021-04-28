<?php

namespace JoshPJackson\OpenApi\Paths\PathItem\Operation\SecurityScheme\OAuthFlows;

use JoshPJackson\OpenApi\Traits\HasRequiredFields;

/**
 * Class ClientCredentialsFlow
 * @package JoshPJackson\OpenApi\Paths\PathItem\Operation\SecurityScheme\OAuthFlows
 */
class ClientCredentialsFlow extends OAuthFlow
{
    use HasRequiredFields;

    /**
     * @var array|string[]
     */
    protected array $required = [
        'tokenUrl'
    ];

    /**
     * @var string
     */
    private string $tokenUrl;

    /**
     * @return string
     */
    public function getTokenUrl(): string
    {
        return $this->tokenUrl;
    }

    /**
     * @param string $tokenUrl
     * @return ClientCredentialsFlow
     */
    public function setTokenUrl(string $tokenUrl): ClientCredentialsFlow
    {
        $this->tokenUrl = $tokenUrl;
        return $this;
    }
}