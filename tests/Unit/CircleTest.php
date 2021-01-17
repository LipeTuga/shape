<?php

namespace Tests\Unit;

use App\Circle;
use http\Exception\InvalidArgumentException;
use PHPUnit\Framework\TestCase;

class CircleTest extends TestCase {

    public $circle;

    public function setUp(): void
    {
        parent::setUp(); // TODO: Change the autogenerated stub
        $this->circle = new Circle(2);
    }


    /** @test */
    public function accepts_only_numeric_values_for_the_radius()
    {
        $this->expectException("InvalidArgumentException");
        new Circle('test');
    }


    /** @test */
    public function can_set_the_name()
    {
        $this->circle->setName('nome');
        $this->assertEquals('nome', $this->circle->getName());
    }

    /** @test */
    public function can_get_the_shape_type()
    {
        $this->assertEquals(3, Circle::shapeType());
        $this->assertEquals(3,Circle::SHAPE_TYPE);
    }

    /** @test */
    public function can_generate_a_new_object_with_the_same_properties()
    {
        $this->circle->setName('nome');
        $new_circle = $this->circle->getObject();
        $this->circle->setName('test');

        $this->assertEquals('test', $this->circle->getName());
        $this->assertNotEquals('test', $new_circle->getName());
    }

    /** @test */
    public function can_return_a_standart_object_with_the_properties()
    {
        $new_object = $this->circle->getStandartObject();
        $this->assertEquals(2, $new_object->radius);
    }

    /** @test */
    public function area_calculation()
    {
        $this->assertEquals(pi() * 4, $this->circle->area());
        $this->assertEquals(pi()*100, (new Circle(10))->area());
    }





}
