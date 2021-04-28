<?php

namespace JoshPJackson\OpenApi\Paths\PathItem\Operation\SecurityScheme\OAuthFlows;

use JoshPJackson\OpenApi\Traits\HasRequiredFields;

/**
 * Class PasswordFlow
 * @package JoshPJackson\OpenApi\Paths\PathItem\Operation\SecurityScheme\OAuthFlows
 */
class PasswordFlow extends OAuthFlow
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
     * @return PasswordFlow
     */
    public function setTokenUrl(string $tokenUrl): PasswordFlow
    {
        $this->tokenUrl = $tokenUrl;
        return $this;
    }
}