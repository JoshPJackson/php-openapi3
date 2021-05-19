<?php

namespace JoshPJackson\OpenApi\Schema;

use JoshPJackson\OpenApi\Schema;
use JoshPJackson\OpenApi\Type;

/**
 * Class Property
 * @package JoshPJackson\OpenApi\Schema
 */
class Property extends Schema
{
	/**
	 * Property constructor.
	 * @param ?string $name
	 * @param Type $type
	 */
	public function __construct(private ?string $name, Type $type)
	{
		parent::__construct($this->name);
		$this->setTypeAndFormatFromType($type);
	}

	/**
	 * @return string
	 */
	public function getType(): string
	{
        return $this->type;
    }

    /**
     * @param string $type
     * @return Property
     */
    public function setType(string $type): Property
    {
        $this->type = $type;
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
     * @return Property
     */
    public function setDescription(string $description): Property
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
		$array = $this->IsArrayableToArray();
        unset ($array['name']);

        return $array;
    }
}