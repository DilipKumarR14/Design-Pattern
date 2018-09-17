<?php
abstract class Emp
{
    protected $name;
    abstract public function __clone();
    public function getTitle()
    {
        return $this->name;
    }
    public function setTitle($name)
    {
        $this->name = $name;
    }
}
