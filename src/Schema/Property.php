<?php

namespace JoshPJackson\OpenApi\Schema;

use JoshPJackson\OpenApi\Interfaces\Arrayable;
use JoshPJackson\OpenApi\Schema;
use JoshPJackson\OpenApi\Traits\CanJsonSerialise;
use JoshPJackson\OpenApi\Type;

/**
 * Class Property
 * @package JoshPJackson\OpenApi\Schema
 */
class Property extends Schema implements \JsonSerializable, Arrayable
{
    use CanJsonSerialise;

    /**
     * Property constructor.
     * @param string $name
     * @param Type $type
     */
    public function __construct(private string $name, Type $type)
    {
        $this->setType($type->getType());
        $this->setFormat($type->getFormat());
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
    public function getFormat(): string
    {
        return $this->format;
    }

    /**
     * @param string $format
     * @return Property
     */
    public function setFormat(string $format): Property
    {
        $this->format = $format;
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
     * @return Schema
     */
    public function getAllOf(): Schema
    {
        return $this->allOf;
    }

    /**
     * @param Schema $allOf
     * @return Property
     */
    public function setAllOf(Schema $allOf): Property
    {
        $this->allOf = $allOf;
        return $this;
    }

    /**
     * @return Schema
     */
    public function getOneOf(): Schema
    {
        return $this->oneOf;
    }

    /**
     * @param Schema $oneOf
     * @return Property
     */
    public function setOneOf(Schema $oneOf): Property
    {
        $this->oneOf = $oneOf;
        return $this;
    }

    /**
     * @return Schema
     */
    public function getNot(): Schema
    {
        return $this->not;
    }

    /**
     * @param Schema $not
     * @return Property
     */
    public function setNot(Schema $not): Property
    {
        $this->not = $not;
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
     * @return array
     */
    public function getProperties(): array
    {
        return $this->properties;
    }

    /**
     * @param array $properties
     * @return Property
     */
    public function setProperties(array $properties): Property
    {
        $this->properties = $properties;
        return $this;
    }

    /**
     * @return array
     */
    public function getAdditionalProperties(): array
    {
        return $this->additionalProperties;
    }

    /**
     * @param array $additionalProperties
     * @return Property
     */
    public function setAdditionalProperties(array $additionalProperties): Property
    {
        $this->additionalProperties = $additionalProperties;
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
        $array = $this->toArray();
        unset ($array['name']);

        return $array;
    }
}