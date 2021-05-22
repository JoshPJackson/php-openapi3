<?php

namespace JoshPJackson\OpenApi\Info;

use JoshPJackson\OpenApi\Interfaces\Arrayable;
use JoshPJackson\OpenApi\Traits\IsArrayable;

/**
 * Class Contact
 * @package JoshPJackson\OpenApi\Info
 */
class Contact implements Arrayable
{
	use IsArrayable;

    /**
     * Contact constructor.
     * @param string $email
     * @param string $name
     * @param ?string $url
     */
    public function __construct(private string $email, private string $name, private ?string $url = null)
    {

    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Contact
     */
    public function setName(string $name): Contact
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return ?string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @param ?string $url
     * @return Contact
     */
    public function setUrl(?string $url): Contact
    {
        $this->url = $url;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return Contact
     */
    public function setEmail(string $email): Contact
    {
        $this->email = $email;
        return $this;
    }


}