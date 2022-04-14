<?php

class Animal
{
    public $name;
    public function sleep()
    {
        return $this->name . ' are sleeping...';
    }
}

class Dog extends Animal{

}

$dog = new Dog;
$dog->name = 'Ted';

print $dog->sleep();