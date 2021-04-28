<?php

namespace JoshPJackson\OpenApi\Paths\PathItem\Operation;

use JoshPJackson\OpenApi\Schema;
use JoshPJackson\OpenApi\Traits\CanJsonSerialise;
use JoshPJackson\OpenApi\Traits\HasRequiredFields;

/**
 * Class Parameter
 * @package JoshPJackson\OpenApi\Paths\PathItem\Operation
 */
class Parameter implements \JsonSerializable
{
    use CanJsonSerialise;
    use HasRequiredFields;

    protected array $requiredFields = [
        'name',
        'in'
    ];

    /**
     * @var string
     */
    private string $name;

    /**
     * @var string
     */
    private string $in;

    /**
     * @var string
     */
    private string $description;

    /**
     * @var bool
     */
    private bool $required;

    /**
     * @var bool
     */
    private bool $deprecated;

    /**
     * @var bool
     */
    private bool $allowEmptyValue;

    /**
     * @var Schema
     */
    private Schema $schema;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Parameter
     */
    public function setName(string $name): Parameter
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getIn(): string
    {
        return $this->in;
    }

    /**
     * @param string $in
     * @return Parameter
     */
    public function setIn(string $in): Parameter
    {
        $this->in = $in;
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
     * @return Parameter
     */
    public function setDescription(string $description): Parameter
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return bool
     */
    public function isRequired(): bool
    {
        return $this->required;
    }

    /**
     * @param bool $required
     * @return Parameter
     */
    public function setRequired(bool $required): Parameter
    {
        $this->required = $required;
        return $this;
    }

    /**
     * @return bool
     */
    public function isDeprecated(): bool
    {
        return $this->deprecated;
    }

    /**
     * @param bool $deprecated
     * @return Parameter
     */
    public function setDeprecated(bool $deprecated): Parameter
    {
        $this->deprecated = $deprecated;
        return $this;
    }

    /**
     * @return bool
     */
    public function isAllowEmptyValue(): bool
    {
        return $this->allowEmptyValue;
    }

    /**
     * @param bool $allowEmptyValue
     * @return Parameter
     */
    public function setAllowEmptyValue(bool $allowEmptyValue): Parameter
    {
        $this->allowEmptyValue = $allowEmptyValue;
        return $this;
    }

    /**
     * @return Schema
     */
    public function getSchema(): Schema
    {
        return $this->schema;
    }

    /**
     * @param Schema $schema
     * @return Parameter
     */
    public function setSchema(Schema $schema): Parameter
    {
        $this->schema = $schema;
        return $this;
    }
}