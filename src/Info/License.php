<?php

namespace JoshPJackson\OpenApi\Info;

use JoshPJackson\OpenApi\Interfaces\Arrayable;
use JoshPJackson\OpenApi\Traits\HasRequiredFields;
use JoshPJackson\OpenApi\Traits\IsArrayable;

/**
 * Class License
 * @package JoshPJackson\OpenApi\Info
 */
class License implements Arrayable
{
	use IsArrayable;
	use HasRequiredFields;

	/**
	 * @var array|string[]
	 */
	protected array $requiredFields = [
		'name'
	];

    /**
     * @var string
     */
    private string $name;

    /**
     * @var string
     */
    private string $url;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return License
     */
    public function setName(string $name): License
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @param string $url
     * @return License
     */
    public function setUrl(string $url): License
    {
        $this->url = $url;
        return $this;
    }
}