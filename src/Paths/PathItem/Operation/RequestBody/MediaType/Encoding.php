<?php

namespace JoshPJackson\OpenApi\Paths\PathItem\Operation\RequestBody\MediaType;

use JoshPJackson\OpenApi\Interfaces\Arrayable;
use JoshPJackson\OpenApi\Traits\IsArrayable;

/**
 * Class Encoding
 * @package JoshPJackson\OpenApi\Paths\PathItem\Operation\RequestBody\MediaType
 */
class Encoding implements Arrayable
{
	use IsArrayable;

	/**
	 * @var string
	 */
	private string $contentType;

	/**
	 * @return string
     */
    public function getContentType(): string
    {
        return $this->contentType;
    }

    /**
     * @param string $contentType
     * @return Encoding
     */
    public function setContentType(string $contentType): Encoding
    {
        $this->contentType = $contentType;
        return $this;
    }
}