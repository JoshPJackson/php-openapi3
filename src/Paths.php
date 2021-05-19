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
	 * @var PathItem[]
	 */
	private array $pathItems;

	/**
	 * @return PathItem[]
	 */
	public function getPathItems(): array
	{
		return $this->pathItems;
	}

	/**
	 * @param PathItem $pathItem
	 * @return Paths
	 */
	public function addPathItem(PathItem $pathItem): Paths
	{
		$this->pathItems[] = $pathItem;
		return $this;
	}

    /**
     * @return array
     * @throws \Exception
     */
	public function toArray(): array
    {
        $data = [];

        foreach ($this->getPathItems() as $pathItem) {
            $data[$pathItem->getUri()] = $pathItem->toArray();
        }

        return $data;
    }
}