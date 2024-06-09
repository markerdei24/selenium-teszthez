<?php

class Event
{
    private $ID;
    private $capacity;
    private $startDate;
    private $endDate;
    private $locationID;

    /**
     * @param $ID
     * @param $capacity
     * @param $startDate
     * @param $endDate
     * @param $locationID
     */
    public function __construct($ID, $capacity, $startDate, $endDate, $locationID)
    {
        $this->ID = $ID;
        $this->capacity = $capacity;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
        $this->locationID = $locationID;
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

    /**
     * @return mixed
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @param mixed $startDate
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
    }

    /**
     * @return mixed
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * @param mixed $endDate
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
    }

    /**
     * @return mixed
     */
    public function getLocationID()
    {
        return $this->locationID;
    }

    /**
     * @param mixed $locationID
     */
    public function setLocationID($locationID)
    {
        $this->locationID = $locationID;
    }



}