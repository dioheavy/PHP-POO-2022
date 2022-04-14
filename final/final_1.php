<?php

/*
** Importante, quando não queremos que uma classe seja extendida, usamos a palavra 'final' antes de class
** No exemplo abaixo sera exibido um erro dizendo que a classe 'User' não pode ser extendida
*/

final class User
{
    private $name;    

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }
}

class Administrador extends User
{

}

$adm = new Administrador;
$adm->setName('SantoSoft');
print $adm->getName();