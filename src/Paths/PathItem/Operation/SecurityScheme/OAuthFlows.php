<?php

namespace JoshPJackson\OpenApi\Paths\PathItem\Operation\SecurityScheme;

use JoshPJackson\OpenApi\Paths\PathItem\Operation\SecurityScheme\OAuthFlows\AuthorizationCodeFlow;
use JoshPJackson\OpenApi\Paths\PathItem\Operation\SecurityScheme\OAuthFlows\ClientCredentialsFlow;
use JoshPJackson\OpenApi\Paths\PathItem\Operation\SecurityScheme\OAuthFlows\ImplicitFlow;
use JoshPJackson\OpenApi\Paths\PathItem\Operation\SecurityScheme\OAuthFlows\PasswordFlow;
use JoshPJackson\OpenApi\Traits\CanJsonSerialise;
use JsonSerializable;

/**
 * Class OAuthFlows
 * @package JoshPJackson\OpenApi\Paths\PathItem\Operation\SecurityScheme
 */
class OAuthFlows implements JsonSerializable
{
	use CanJsonSerialise;

	/**
	 * @var ImplicitFlow
	 */
	private ImplicitFlow $implicitFlow;

	/**
	 * @var PasswordFlow
     */
    private PasswordFlow $passwordFlow;

    /**
     * @var ClientCredentialsFlow
     */
    private ClientCredentialsFlow $clientCredentialsFlow;

    /**
     * @var AuthorizationCodeFlow
     */
    private AuthorizationCodeFlow $authorizationCodeFlow;

    /**
     * @return ImplicitFlow
     */
    public function getImplicitFlow(): ImplicitFlow
    {
        return $this->implicitFlow;
    }

    /**
     * @param ImplicitFlow $implicitFlow
     * @return OAuthFlows
     */
    public function setImplicitFlow(ImplicitFlow $implicitFlow): OAuthFlows
    {
        $this->implicitFlow = $implicitFlow;
        return $this;
    }

    /**
     * @return PasswordFlow
     */
    public function getPasswordFlow(): PasswordFlow
    {
        return $this->passwordFlow;
    }

    /**
     * @param PasswordFlow $passwordFlow
     * @return OAuthFlows
     */
    public function setPasswordFlow(PasswordFlow $passwordFlow): OAuthFlows
    {
        $this->passwordFlow = $passwordFlow;
        return $this;
    }

    /**
     * @return ClientCredentialsFlow
     */
    public function getClientCredentialsFlow(): ClientCredentialsFlow
    {
        return $this->clientCredentialsFlow;
    }

    /**
     * @param ClientCredentialsFlow $clientCredentialsFlow
     * @return OAuthFlows
     */
    public function setClientCredentialsFlow(ClientCredentialsFlow $clientCredentialsFlow): OAuthFlows
    {
        $this->clientCredentialsFlow = $clientCredentialsFlow;
        return $this;
    }

    /**
     * @return AuthorizationCodeFlow
     */
    public function getAuthorizationCodeFlow(): AuthorizationCodeFlow
    {
        return $this->authorizationCodeFlow;
    }

	/**
	 * @param AuthorizationCodeFlow $authorizationCodeFlow
	 * @return OAuthFlows
	 */
	public function setAuthorizationCodeFlow(AuthorizationCodeFlow $authorizationCodeFlow): OAuthFlows
	{
		$this->authorizationCodeFlow = $authorizationCodeFlow;
		return $this;
	}

	/**
	 * Override trait to only include the first set OAuth flow
	 *
	 * @return array
	 */
	public function toArray(): array
	{
		$jsonArray = [];

		foreach (get_object_vars($this) as $name => $value) {
			if (!empty($value)) {
				$jsonArray[$name] = $value;
				return $jsonArray;
			}
		}

		return [];
	}
}