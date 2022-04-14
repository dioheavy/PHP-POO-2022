<?php

/*
** Importante: Classe do tipo abstrata não pode ser instanciada diretamente
** Uma classe abastrata pode ser instanciada apenas pela classe filha ou seja esta classe só pode ser extendida pela classe filha 
** Um outro exemplo é quando temos uma function marcada como abstract mas sem nenhuma ação, isso que dizer que toda classe que herdar 
** dessa classe pai, é obrigada a criar essa function dentro da classe filha.
*/

abstract class Animal
{
    private $name;
    public function run()
    {
        return "Animal is running...";
    }
    abstract public function sound();
}

class Dog extends Animal
{
    public function sound()
    {
        return 'Au au';
    }
}

$animal = new Dog; 
print $animal->run();
print "\n";
print $animal->sound();