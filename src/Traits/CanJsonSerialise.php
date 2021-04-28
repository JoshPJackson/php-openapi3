<?php

namespace JoshPJackson\OpenApi\Traits;

/**
 * Trait CanJsonSerialise
 * @package JoshPJackson\OpenApi\Traits
 */
trait CanJsonSerialise
{
    /**
     * Holds json serialised data
     *
     * @var array
     */
    protected array $jsonArray = [];

    /**
     * @return string
     * @throws \Exception
     */
    public function jsonSerialize() : string
    {
        if (method_exists($this, 'validate')) {
            if (!$this->validate()) {
                throw new \Exception(get_class($this) . ' missing one of more required fields');
            }
        }

        foreach (get_object_vars($this) as $name => $value) {
            if (!empty($value)) {
                if (!is_object($value)) {
                    $this->jsonArray[$name] = $value;
                } else {
                    $this->jsonArray[$name] = $value->jsonSerialize();
                }
            }
        }

        return json_encode($this->jsonArray);
    }
}