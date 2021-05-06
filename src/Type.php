<?php

namespace JoshPJackson\OpenApi;

use JoshPJackson\OpenApi\Interfaces\Arrayable;
use JoshPJackson\OpenApi\Traits\IsArrayable;

/**
 * Class Type
 * @package JoshPJackson\OpenApi
 */
class Type implements Arrayable
{
	use IsArrayable;

	/**
	 * @var string
	 */
	private string $type;

	/**
	 * @var ?string
	 */
	private ?string $format;

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return Type
     */
    public function setType(string $type): Type
    {
        $this->type = $type;
        return $this;
    }

	/**
	 * @return ?string
	 */
	public function getFormat(): ?string
	{
		return $this->format;
	}

    /**
     * @param string $format
     * @return Type
     */
	public function setFormat(?string $format): Type
	{
		$this->format = $format;
		return $this;
	}
}