<?php

class Location
{
    private $ID;
    public $name;
    public $capacity;
    public $roomCapacity;

    /**
     * @param $ID
     * @param $name
     * @param $capacity
     */
    public function __construct($ID, $name, $capacity)
    {
        $this->ID = $ID;
        $this->name = $name;
        $this->capacity = $capacity;
    }

    /**
     * @return mixed
     */
    public function getID()
    {
        return $this->ID;
    }

    /**
     * @param mixed $ID
     */
    public function setID($ID)
    {
        $this->ID = $ID;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getCapacity()
    {
        return $this->capacity;
    }

    /**
     * @param mixed $capacity
     */
    public function setCapacity($capacity)
    {
        $this->capacity = $capacity;
    }

    


}