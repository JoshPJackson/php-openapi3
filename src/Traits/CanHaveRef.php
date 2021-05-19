<?php

namespace JoshPJackson\OpenApi\Traits;

/**
 * Trait CanHaveRef
 * @package JoshPJackson\OpenApi\Traits
 */
trait CanHaveRef
{
	use IsArrayable;

	/**
	 * @var string
	 */
	private string $ref = '';

	/**
	 * @return mixed
	 */
	public function getRef()
	{
		return $this->ref;
	}

	/**
	 * @param mixed $ref
	 * @return CanHaveRef
	 */
	public function setRef($ref)
	{
		$this->ref = $ref;
		return $this;
	}

	/**
	 * @return bool
	 */
	public function hasRef(): bool
	{
		return !empty($this->getRef());
	}

	/**
	 * @return array
	 */
	public function toArray(): array
	{
		return [
			'$ref' => $this->getRef()
		];
	}
}