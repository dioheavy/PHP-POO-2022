<?php
//public    -> Pode ser acessada pela Classe Pai, Classe Filha e no escopo do projeto.
//protected -> Pode ser acessada pela Classe Pai e Class filha apenas.
//private   -> Só pode ser acessada de dentro da Classe Pai.


class Person{
    public $name;
    protected $age = 38;
    private $idade = 42;

    public function showName(){
        return $this->name;
    }

    public function showIdade(){
        return $this->idade;
    }

}

class Woman extends Person{
    public function showWomanAge(){        
        return $this->age;
    }
}

$person = new Person;
$person->name = 'Andre';
print $person->showName();
print "\n";
print $person->showIdade();

print "\n";

$woman = new Woman;
$woman->name = 'Suellen';
print $woman->showName();
print "\n";
print $woman->showWomanAge();

