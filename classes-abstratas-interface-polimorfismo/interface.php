<?php

/*
** Trabalhar com Interfaces é mais ou menos parecido com trabalhar  com classe abstrata
** Porém na Interface a assinatura da classe é diferente não inicia com 'class' e sim com 'interface'
** E todos os metodos criados dentro da interface deve obrigatóriomente ser criada dentro das classes filhas que implementar essa interface
** Importante uma interface não é extendida com 'extends' ela é implementada com 'implements' 
*/

interface Animal 
{
    public function sound();
    public function run();
}

class Dog implements Animal
{
    public function sound()
    {
        return "Au au au";
    }
    public function run()
    {
        return "Dog is running...";
    }
}

$dog = new Dog;
print $dog->run();
print "\n";
print $dog->sound();