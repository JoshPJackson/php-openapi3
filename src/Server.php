<?php

namespace JoshPJackson\OpenApi;

use JoshPJackson\OpenApi\Interfaces\Arrayable;
use JoshPJackson\OpenApi\Traits\HasRequiredFields;
use JoshPJackson\OpenApi\Traits\IsArrayable;

/**
 * Class Server
 * @package JoshPJackson\OpenApi
 */
class Server implements Arrayable
{
	use IsArrayable;
	use HasRequiredFields;

	/**
	 * @var array|string[]
	 */
	protected array $requiredFields = [
		'url'
	];

    /**
     * Server constructor.
     * @param string $url
     * @param string $description
     */
	public function __construct(private string $url, private string $description = '')
    {

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