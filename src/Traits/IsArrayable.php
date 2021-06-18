<?php

namespace JoshPJackson\OpenApi\Traits;

use Exception;
use JoshPJackson\OpenApi\Collection;

use function method_exists;

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

		$jsonArray = [];

		foreach (get_object_vars($this) as $name => $value) {
			if (!in_array($name, ['requiredFields', 'ignore']) && (empty($this->ignore) || !in_array($name, $this->ignore))) {

			    if ($name === 'ref') {
			        $name = '$ref';
                }

				if (!empty($value)) {
					if (!is_object($value)) {
						$jsonArray[$name] = $value;
					} else {
						if (method_exists($value, 'toArray')) {
							if ($value instanceof Collection && $value->isNotEmpty()) {
								$jsonArray[$name] = $value->toArray();
							} elseif (!($value instanceof Collection)) {
								$jsonArray[$name] = $value->toArray();
							}
						}
					}
				}
			}
		}

		return $jsonArray;
	}
}