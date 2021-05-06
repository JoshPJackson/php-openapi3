<?php

namespace JoshPJackson\OpenApi;

/**
 * Class TypeFactory
 * @package JoshPJackson\OpenApi
 */
class TypeFactory
{
    /**
     * @param string $type
     * @param string|null $format
     * @return Type
     */
    private static function create(string $type, string $format = null) : Type
    {
        $typeObject = new Type();
		$typeObject->setType($type);
        $typeObject->setFormat($format);

        return $typeObject;
    }

    /**
     * @return Type
     */
    public static function integer32() : Type
    {
        return self::create('integer', 'int32');
    }

    /**
     * @return Type
     */
    public static function integer64() : Type
    {
        return self::create('integer', 'int64');
    }

    /**
     * @return Type
     */
    public static function float() : Type
    {
        return self::create('number', 'float');
    }

    /**
     * @return Type
     */
    public static function double() : Type
    {
        return self::create('number', 'double');
    }

    /**
     * @return Type
     */
    public static function string() : Type
    {
        return self::create('string');
    }

    /**
     * @return Type
     */
    public static function byte() : Type
    {
        return self::create('string', 'byte');
    }

    /**
     * @return Type
     */
    public static function binary() : Type
    {
        return self::create('string', 'binary');
    }

    /**
     * @return Type
     */
    public static function boolean() : Type
    {
        return self::create('boolean');
    }

    /**
     * @return Type
     */
    public static function date() : Type
    {
        return self::create('string', 'date');
    }

    /**
     * @return Type
     */
    public static function dateTime() : Type
    {
		return self::create('string', 'date-time');
	}

	/**
	 * @return Type
	 */
	public static function password(): Type
	{
		return self::create('string', 'password');
	}

	/**
	 * @return Type
	 */
	public static function object(): Type
	{
		return self::create('object');
	}
}