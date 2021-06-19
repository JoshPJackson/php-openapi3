<?php

namespace JoshPJackson\OpenApi;

use Exception;
use JoshPJackson\OpenApi\Interfaces\Arrayable;
use JoshPJackson\OpenApi\Schema\Property;
use JoshPJackson\OpenApi\Traits\CanHaveRef;
use JoshPJackson\OpenApi\Traits\IsArrayable;

/**
 * Class Schema
 * @package JoshPJackson\OpenApi
 */
class Schema implements Arrayable
{
	use IsArrayable {
		IsArrayable::toArray as IsArrayableToArray;
	}

	/**
	 * @var bool
	 */
	protected bool $nullable = false;

	/**
	 * @var bool
	 */
	protected bool $readOnly = false;

	/**
	 * @var bool
	 */
	protected bool $writeOnly = false;

	/**
	 * @var string
	 */
	protected string $title;

	/**
	 * @var int|float
	 */
	protected mixed $multipleOf;

	/**
	 * @var int|float
	 */
	protected mixed $maximum;

	/**
	 * @var int|float
	 */
	protected mixed $exclusiveMaximum;

	/**
	 * @var int|float
	 */
	protected mixed $minimum;

	/**
	 * @var int|float
	 */
	protected mixed $exclusiveMinimum;

	/**
	 * @var int
	 */
	protected int $maxLength;

	/**
	 * @var int
	 */
	protected int $minLength;

	/**
	 * @var string
	 */
	protected string $pattern;

	/**
	 * @var int
	 */
	protected int $maxItems;

	/**
	 * @var int
	 */
	protected int $minItems;

	/**
	 * @var bool
	 */
	protected bool $uniqueItems;

	/**
	 * @var int
	 */
	protected int $maxProperties;

	/**
	 * @var int
	 */
	protected int $minProperties;

	/**
	 * @var array
	 */
	protected array $required;

	/**
	 * @var array
	 */
	protected array $enum;

	/**
	 * @var string
	 */
	protected string $type;

	/**
	 * @var Collection
	 */
	protected Collection $allOf;

	/**
	 * @var array
	 */
	protected array $oneOf;

	/**
	 * @var array
	 */
	protected array $anyOf;

	/**
	 * @var array
	 */
	protected array $not;

	/**
	 * @var array|Schema
	 */
	protected array|Schema $items;

	/**
	 * @var Collection
	 */
	protected Collection $properties;

	/**
	 * @var Collection
	 */
	protected Collection $additionalProperties;

	/**
	 * @var string
	 */
	protected string $description;

	/**
	 * @var Schema
	 */
	protected Schema $default;

	/**
	 * @var ?string
	 */
	protected ?string $format;

	/**
	 * Schema constructor.
	 *
	 * @var ?string $name
	 */
	public function __construct(private ?string $name = null)
	{
		$this->properties = new Collection();
		$this->additionalProperties = new Collection();
		$this->allOf = new Collection();
	}

	/**
	 * @return ?string
	 */
	public function getName(): ?string
	{
		return $this->name;
	}

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
	 * @return string
	 */
	public function getType(): String
	{
		return $this->type;
	}

	/**
	 * @param string $type
	 * @return Schema
	 */
	public function setType(string $type): Schema
	{
		$this->type = $type;
		return $this;
	}

	/**
	 * @return Collection
	 */
	public function getAllOf(): Collection
	{
		return $this->allOf;
	}

	/**
	 * @param Schema $allOf
	 * @return Schema
	 */
	public function addAllOf(Schema $allOf): Schema
	{
		$this->allOf[] = $allOf;
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
	 * @param array|Schema $items
	 * @return Schema
	 */
	public function setItems(array|Schema $items): Schema
	{
		$this->items = $items;
		return $this;
	}

	/**
	 * @return Collection
	 */
	public function getProperties(): Collection
	{
		return $this->properties;
	}

	/**
	 * @param Property $property
	 * @return Schema
	 */
	public function addProperty(Property $property): Schema
	{
		$this->properties[] = $property;
		return $this;
	}

	/**
	 * @return Collection
	 */
	public function getAdditionalProperties(): Collection
	{
		return $this->additionalProperties;
	}

	/**
	 * @param Property $additionalProperty
	 * @return Schema
	 */
	public function addAdditionalProperty(Property $additionalProperty): Schema
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
	 * @return ?string
	 */
	public function getFormat(): ?string
	{
		return $this->format;
	}

	/**
	 * @param string $format
	 * @return Schema
	 */
	public function setFormat(string $format): Schema
	{
		$this->format = $format;
		return $this;
	}

	/**
	 * @return array
	 * @throws Exception
	 */
	public function toArray(): array
	{
		if ($this->hasRef()) {
			return $this->IsArrayableWithRef();
		}

		$array = $this->IsArrayableToArray();
		unset($array['name']);

		if ($this->properties->isNotEmpty()) {
			$array['properties'] = [];
		}

		if ($this->additionalProperties->isNotEmpty()) {
			$array['additionalProperties'] = [];
		}

		if (!$this->nullable) {
			unset($array['nullable']);
		}

		foreach ($this->properties as $property) {
			$array['properties'][$property->getName()] = $property->toArray();
		}

		foreach ($this->additionalProperties as $additionalProperty) {
			$array['additionalProperties'][$additionalProperty->getName()] = $additionalProperty->toArray();
		}

		return $array;
	}

	/**
	 * @param Type $type
	 * @return $this
	 */
	public function setTypeAndFormatFromType(Type $type): Schema
	{
		$this->setType($type->getType());

		if ($type->getFormat()) {
			$this->setFormat($type->getFormat());
		}
		return $this;
	}
}