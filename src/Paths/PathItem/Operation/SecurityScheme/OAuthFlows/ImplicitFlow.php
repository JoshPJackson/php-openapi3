<?php

namespace JoshPJackson\OpenApi\Paths\PathItem\Operation\SecurityScheme\OAuthFlows;

use JoshPJackson\OpenApi\Traits\HasRequiredFields;

/**
 * Class ImplicitFlow
 * @package JoshPJackson\OpenApi\Paths\PathItem\Operation\SecurityScheme\OAuthFlows
 */
class ImplicitFlow extends OAuthFlow
{
    use HasRequiredFields;

    protected array $requiredFields = [
        'authorizationFlow'
    ];

    /**
     * @var string
     */
    private string $authorizationUrl;

    /**
     * @return string
     */
    public function getAuthorizationUrl(): string
    {
        return $this->authorizationUrl;
    }

    /**
     * @param string $authorizationUrl
     * @return ImplicitFlow
     */
    public function setAuthorizationUrl(string $authorizationUrl): ImplicitFlow
    {
        $this->authorizationUrl = $authorizationUrl;
        return $this;
    }
}
