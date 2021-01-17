<?php


namespace App;


class Circle extends Shape {
    const SHAPE_TYPE =3;
    protected $radius;

    public function __construct($radius)
    {
        parent::__construct($width = 0, $height = 0);
        if(!is_numeric($radius))
            throw new \InvalidArgumentException('The width and height must be numeric');

        $this->radius = $radius;
    }

    public function area(){
        return pi() * $this->radius * $this->radius;
    }

    public function getStandartObject()
    {
        $obj = new \stdClass();
        $obj->radius = $this->radius;
        $obj->id = $this->getId();
        return $obj;
    }



}