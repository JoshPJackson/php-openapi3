<?php

namespace JoshPJackson\OpenApi\Traits;

/**
 * Trait CanJsonSerialise
 * @package JoshPJackson\OpenApi\Traits
 */
trait CanJsonSerialise
{
    use IsArrayable;

    /**
     * @return string
     * @throws \Exception
     */
    public function jsonSerialize() : string
    {
        return json_encode($this->toArray());
    }
}