<?php
class Position{}
interface Shape{
    public function draw();

}

class Rectangle implements Shape{
    private $position;

    public function  __construct($pos)
    {
        $this->position = $pos;
    }

    public function draw()
    {
       echo 'drawing rectangle';
        // TODO: Implement draw() method.
    }

}

function drawStuff(Shape $shape){
    $shape->draw();
    //does  a bunch of complex stuff
}


class shapeFactory{
    public function create($type){
        if ($type == 'Rectangle'){
            return new Rectangle(new Position());
        }else{
             echo 'this is not a rectangle';
        }
    }
}

$factory =  new shapeFactory();

$rect = $factory->create('Rectangle');
echo $rect->draw();
