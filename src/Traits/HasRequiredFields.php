<?php

namespace JoshPJackson\OpenApi\Traits;

/**
 * Trait HasRequiredFields
 * @package JoshPJackson\OpenApi\Traits
 */
trait HasRequiredFields
{
    /**
     * @return bool
     */
    protected function validate() : bool
    {
        if (!empty($this->requiredFields)) {
            foreach ($this->requiredFields as $requiredField) {
                if (empty($requiredField)) {
                    return false;
                }
            }
        }
        return true;
    }
}