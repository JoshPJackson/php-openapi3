<?php

namespace JoshPJackson\OpenApi\Interfaces;

/**
 * Interface Arrayable
 * @package JoshPJackson\OpenApi\Arrayable
 */
interface Arrayable
{
    /**
     * @return array
     */
    public function toArray() : array;
}