<?php

/**
 * Interface InterfaceCity
 * @package Creational\ObjectPool
 */
interface CityInterface
{
    /**
     * City constructor.
     * @param string $name
     */
    public function __construct(string $name);
    /**
     * @return string
     */
    public function getName(): string;
}

class City implements CityInterface
{
    /**
     * @var string
     */
    protected $name;

    /**
     * City constructor.
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
}

class ObjectPool
{
    /**
     * @var array
     */
    protected $pool = [];
    /**
     * @param string $name
     * @return CityInterface
     */
    public function getObject(string $name): CityInterface
    {
        return $this->pool[$name];
    }
    /**
     * @param CityInterface $object
     * @return void
     */
    public function setObject(CityInterface $object) : void
    {
        $this->pool[$object->getName()] = $object;
    }
}