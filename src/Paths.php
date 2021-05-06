<?php

namespace JoshPJackson\OpenApi;

use Illuminate\Contracts\Support\Arrayable;
use JoshPJackson\OpenApi\Paths\PathItem;
use JoshPJackson\OpenApi\Traits\IsArrayable;

/**
 * Class Paths
 * @package JoshPJackson\OpenApi
 */
class Paths implements Arrayable
{
	use IsArrayable;

	/**
	 * @var PathItem
	 */
	private PathItem $pathItem;

	/**
	 * @return PathItem
	 */
	public function getPathItem(): PathItem
	{
		return $this->pathItem;
	}

	/**
	 * @param PathItem $pathItem
	 * @return Paths
	 */
	public function setPathItem(PathItem $pathItem): Paths
	{
		$this->pathItem = $pathItem;
		return $this;
	}
}