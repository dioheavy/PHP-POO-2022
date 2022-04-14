<?php

/*
** Importante, quando não queremos que um metodo seja reescrito, usamos a palavra 'final' antes de 'public function'
** Desse modo, quando a classe pai for extendida, a classe filha podera utilizar o metodo mas não podera reescrever esse metodo
** No exemplo abaixo, sera exibido um erro dizendo que nao pode reescrever o metodo 'setName()'
*/

class User
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

    final public function setName($name)
    {
        $this->name = $name;

        return $this;
    }
}

class Administrador extends User
{
    public function setName($name)
    {
        return 'Testando';
    }
}

$adm = new Administrador;
$adm->setName('SantoSoft');
print $adm->getName();