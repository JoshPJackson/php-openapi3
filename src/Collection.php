<?php

namespace JoshPJackson\OpenApi;

class Collection extends \Illuminate\Support\Collection
{
	/**
	 * @return array
	 */
	public function toArray(): array
	{
		$items = [];

		foreach ($this->items as $item) {
			$items[] = $item->toArray();
		}

		return $items;
	}
}