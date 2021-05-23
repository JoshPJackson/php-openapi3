<?php

namespace JoshPJackson\OpenApi\Traits;

use Exception;

use const JSON_UNESCAPED_SLASHES;

/**
 * Trait CanJsonSerialise
 * @package JoshPJackson\OpenApi\Traits
 */
trait CanJsonSerialise
{
	use IsArrayable;

	/**
	 * @return string
	 * @throws Exception
	 */
	public function jsonSerialize() : string
	{
		return json_encode($this->toArray(), JSON_UNESCAPED_SLASHES);
	}
}