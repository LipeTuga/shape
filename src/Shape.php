<?php


namespace App;


use http\Exception\InvalidArgumentException;
use function PHPUnit\Framework\throwException;

class Shape {

    public $name;
    protected $width;
    protected $height;
    private $id;
    const SHAPE_TYPE =1;

    public function __construct($width, $height)
    {
        if(!is_numeric($width) || !is_numeric($height))
            throw new \InvalidArgumentException('The width and height must be numeric');

        $this->width = (float) $width;
        $this->height = (float) $height;
        $this->id = uniqid('shape', true);
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function area()
    {
        return $this->width*$this->height;
    }

    public static function shapeType()
    {
        return self::SHAPE_TYPE;
    }

    public function getObject()
    {
        return clone $this;
    }
}