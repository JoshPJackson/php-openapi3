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
    protected array $requiredFields = [];

    /**
     * @return bool
     */
    protected function validate() : bool
    {
        foreach ($this->requiredFields as $requiredField) {
            if (empty($requiredField)) {
                return false;
            }
        }

        return true;
    }
}