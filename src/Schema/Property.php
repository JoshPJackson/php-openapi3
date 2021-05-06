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
	 * @param string $name
	 * @param Type $type
	 */
	public function __construct(private string $name, Type $type)
	{
		parent::__construct();
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
    public function getRef(): string
    {
        return $this->ref;
    }

    /**
     * @param string $ref
     * @return Property
     */
    public function setRef(string $ref): Property
    {
        $this->ref = $ref;
        return $this;
    }

    /**
     * @return array
     */
    public function getItems(): array
    {
        return $this->items;
    }

    /**
     * @param array $items
     * @return Property
     */
    public function setItems(array $items): Property
    {
        $this->items = $items;
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
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
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