<?php

namespace JoshPJackson\OpenApi\Traits;

/**
 * Trait CanHaveRef
 * @package JoshPJackson\OpenApi\Traits
 */
trait CanHaveRef
{
    private $ref;

    /**
     * @return mixed
     */
    public function getRef()
    {
        return $this->ref;
    }

    /**
     * @param mixed $ref
     * @return CanHaveRef
     */
    public function setRef($ref)
    {
        $this->ref = $ref;
        return $this;
    }
}