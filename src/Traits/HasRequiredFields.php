<?php

namespace JoshPJackson\OpenApi\Traits;

/**
 * Trait HasRequiredFields
 * @package JoshPJackson\OpenApi\Traits
 */
trait HasRequiredFields
{
    /**
     * @var array
     */
    protected array $required = [];

    /**
     * @return bool
     */
    protected function validate() : bool
    {
        foreach ($this->required as $requiredField) {
            if (empty($requiredField)) {
                return false;
            }
        }

        return true;
    }
}