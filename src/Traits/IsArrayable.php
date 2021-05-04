<?php

namespace JoshPJackson\OpenApi\Traits;

use Exception;

trait IsArrayable
{
	/**
	 * @return array
	 * @throws Exception
	 */
	public function toArray(): array
	{
		if (method_exists($this, 'validate')) {
			if (!$this->validate()) {
				throw new Exception(get_class($this) . ' missing one of more required fields');
			}
		}

		foreach (get_object_vars($this) as $name => $value) {
			if ($name != 'requiredFields') {
				if (!empty($value)) {
					if (!is_object($value)) {
						$jsonArray[$name] = $value;
					} else {
						$jsonArray[$name] = $value->toArray();
					}
				}
			}
		}

		return $jsonArray;
	}
}