<?php

namespace JoshPJackson\OpenApi;

use JoshPJackson\OpenApi\Interfaces\Arrayable;
use JoshPJackson\OpenApi\Schema\Property;
use JoshPJackson\OpenApi\Traits\CanJsonSerialise;

/**
 * Class Schema
 * @package JoshPJackson\OpenApi
 */
class Schema implements \JsonSerializable, Arrayable
{
    use CanJsonSerialise;

    /**
     * @var bool
     */
    private bool $nullable = true;

    /**
     * @var bool
     */
    private bool $readOnly = false;

    /**
     * @var bool
     */
    private bool $writeOnly = false;

    /**
     * @var string
     */
    private string $title;

    /**
     * @var int|float
     */
    private mixed $multipleOf;

    /**
     * @var int|float
     */
    private mixed $maximum;

    /**
     * @var int|float
     */
    private mixed $exclusiveMaximum;

    /**
     * @var int|float
     */
    private mixed $minimum;

    /**
     * @var int|float
     */
    private mixed $exclusiveMinimum;

    /**
     * @var int
     */
    private int $maxLength;

    /**
     * @var int
     */
    private int $minLength;

    /**
     * @var string
     */
    private string $pattern;

    /**
     * @var int
     */
    private int $maxItems;

    /**
     * @var int
     */
    private int $minItems;

    /**
     * @var bool
     */
    private bool $uniqueItems;

    /**
     * @var int
     */
    private int $maxProperties;

    /**
     * @var int
     */
    private int $minProperties;

    /**
     * @var array
     */
    private array $required;

    /**
     * @var array
     */
    private array $enum;

    /**
     * @var Type
     */
    private Type $type;

    /**
     * @var array
     */
    private array $allOf;

    /**
     * @var array
     */
    private array $oneOf;

    /**
     * @var array
     */
    private array $anyOf;

    /**
     * @var array
     */
    private array $not;

    /**
     * @var array
     */
    private array $items;

    /**
     * @var Property[]
     */
    private array $properties;

    /**
     * @var Property[]
     */
    private array $additionalProperties;

    /**
     * @var string
     */
    private string $description;

    /**
     * @var Schema
     */
    private Schema $default;

    /**
     * @return bool
     */
    public function isNullable(): bool
    {
        return $this->nullable;
    }

    /**
     * @param bool $nullable
     * @return Schema
     */
    public function setNullable(bool $nullable): Schema
    {
        $this->nullable = $nullable;
        return $this;
    }

    /**
     * @return bool
     */
    public function isReadOnly(): bool
    {
        return $this->readOnly;
    }

    /**
     * @param bool $readOnly
     * @return Schema
     */
    public function setReadOnly(bool $readOnly): Schema
    {
        $this->readOnly = $readOnly;
        return $this;
    }

    /**
     * @return bool
     */
    public function isWriteOnly(): bool
    {
        return $this->writeOnly;
    }

    /**
     * @param bool $writeOnly
     * @return Schema
     */
    public function setWriteOnly(bool $writeOnly): Schema
    {
        $this->writeOnly = $writeOnly;
        return $this;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return Schema
     */
    public function setTitle(string $title): Schema
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMultipleOf()
    {
        return $this->multipleOf;
    }

    /**
     * @param mixed $multipleOf
     * @return Schema
     */
    public function setMultipleOf($multipleOf)
    {
        $this->multipleOf = $multipleOf;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMaximum()
    {
        return $this->maximum;
    }

    /**
     * @param mixed $maximum
     * @return Schema
     */
    public function setMaximum($maximum)
    {
        $this->maximum = $maximum;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getExclusiveMaximum()
    {
        return $this->exclusiveMaximum;
    }

    /**
     * @param mixed $exclusiveMaximum
     * @return Schema
     */
    public function setExclusiveMaximum($exclusiveMaximum)
    {
        $this->exclusiveMaximum = $exclusiveMaximum;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMinimum()
    {
        return $this->minimum;
    }

    /**
     * @param mixed $minimum
     * @return Schema
     */
    public function setMinimum($minimum)
    {
        $this->minimum = $minimum;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getExclusiveMinimum()
    {
        return $this->exclusiveMinimum;
    }

    /**
     * @param mixed $exclusiveMinimum
     * @return Schema
     */
    public function setExclusiveMinimum($exclusiveMinimum)
    {
        $this->exclusiveMinimum = $exclusiveMinimum;
        return $this;
    }

    /**
     * @return int
     */
    public function getMaxLength(): int
    {
        return $this->maxLength;
    }

    /**
     * @param int $maxLength
     * @return Schema
     */
    public function setMaxLength(int $maxLength): Schema
    {
        $this->maxLength = $maxLength;
        return $this;
    }

    /**
     * @return int
     */
    public function getMinLength(): int
    {
        return $this->minLength;
    }

    /**
     * @param int $minLength
     * @return Schema
     */
    public function setMinLength(int $minLength): Schema
    {
        $this->minLength = $minLength;
        return $this;
    }

    /**
     * @return string
     */
    public function getPattern(): string
    {
        return $this->pattern;
    }

    /**
     * @param string $pattern
     * @return Schema
     */
    public function setPattern(string $pattern): Schema
    {
        $this->pattern = $pattern;
        return $this;
    }

    /**
     * @return int
     */
    public function getMaxItems(): int
    {
        return $this->maxItems;
    }

    /**
     * @param int $maxItems
     * @return Schema
     */
    public function setMaxItems(int $maxItems): Schema
    {
        $this->maxItems = $maxItems;
        return $this;
    }

    /**
     * @return int
     */
    public function getMinItems(): int
    {
        return $this->minItems;
    }

    /**
     * @param int $minItems
     * @return Schema
     */
    public function setMinItems(int $minItems): Schema
    {
        $this->minItems = $minItems;
        return $this;
    }

    /**
     * @return bool
     */
    public function isUniqueItems(): bool
    {
        return $this->uniqueItems;
    }

    /**
     * @param bool $uniqueItems
     * @return Schema
     */
    public function setUniqueItems(bool $uniqueItems): Schema
    {
        $this->uniqueItems = $uniqueItems;
        return $this;
    }

    /**
     * @return int
     */
    public function getMaxProperties(): int
    {
        return $this->maxProperties;
    }

    /**
     * @param int $maxProperties
     * @return Schema
     */
    public function setMaxProperties(int $maxProperties): Schema
    {
        $this->maxProperties = $maxProperties;
        return $this;
    }

    /**
     * @return int
     */
    public function getMinProperties(): int
    {
        return $this->minProperties;
    }

    /**
     * @param int $minProperties
     * @return Schema
     */
    public function setMinProperties(int $minProperties): Schema
    {
        $this->minProperties = $minProperties;
        return $this;
    }

    /**
     * @return array
     */
    public function getRequired(): array
    {
        return $this->required;
    }

    /**
     * @param array $required
     * @return Schema
     */
    public function setRequired(array $required): Schema
    {
        $this->required = $required;
        return $this;
    }

    /**
     * @return array
     */
    public function getEnum(): array
    {
        return $this->enum;
    }

    /**
     * @param array $enum
     * @return Schema
     */
    public function setEnum(array $enum): Schema
    {
        $this->enum = $enum;
        return $this;
    }

    /**
     * @return Type
     */
    public function getType(): Type
    {
        return $this->type;
    }

    /**
     * @param Type $type
     * @return Schema
     */
    public function setType(Type $type): Schema
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return array
     */
    public function getAllOf(): array
    {
        return $this->allOf;
    }

    /**
     * @param array $allOf
     * @return Schema
     */
    public function setAllOf(array $allOf): Schema
    {
        $this->allOf = $allOf;
        return $this;
    }

    /**
     * @return array
     */
    public function getOneOf(): array
    {
        return $this->oneOf;
    }

    /**
     * @param array $oneOf
     * @return Schema
     */
    public function setOneOf(array $oneOf): Schema
    {
        $this->oneOf = $oneOf;
        return $this;
    }

    /**
     * @return array
     */
    public function getAnyOf(): array
    {
        return $this->anyOf;
    }

    /**
     * @param array $anyOf
     * @return Schema
     */
    public function setAnyOf(array $anyOf): Schema
    {
        $this->anyOf = $anyOf;
        return $this;
    }

    /**
     * @return array
     */
    public function getNot(): array
    {
        return $this->not;
    }

    /**
     * @param array $not
     * @return Schema
     */
    public function setNot(array $not): Schema
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
     * @return Schema
     */
    public function setItems(array $items): Schema
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
     * @return Schema
     */
    public function addProperty(Property $properties): Schema
    {
        $this->properties[] = $properties;
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
     * @param Property $additionalProperty
     * @return Schema
     */
    public function addAdditionalProperties(Property $additionalProperty): Schema
    {
        $this->additionalProperties[] = $additionalProperty;
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
     * @return Schema
     */
    public function setDescription(string $description): Schema
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return Schema
     */
    public function getDefault(): Schema
    {
        return $this->default;
    }

    /**
     * @param Schema $default
     * @return Schema
     */
    public function setDefault(Schema $default): Schema
    {
        $this->default = $default;
        return $this;
    }

    /**
     * @return string
     * @throws \Exception
     */
    public function jsonSerialize(): string
    {
        $array = $this->toArray();
        $array['properties'] = [];
        $array['additionalProperties'] = [];

        foreach ($this->properties as $property) {
            $array['properties'][$property->getName()] = $property->toArray();
        }

        foreach ($this->additionalProperties as $additionalProperty) {
            $array['additionalProperties'][$additionalProperty->getName()] = $additionalProperty->toArray();
        }

        return json_encode($array);
    }
}