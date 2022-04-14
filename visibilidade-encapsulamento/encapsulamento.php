<?php
/*
** Emcapsulamento é incluir toda a logica todo o código dentro de uma classe 
** E utilizar a visibilidade dos atributos 'public, private ou protected, extends class' para ser manipulado por um objeto
*/

class Bankaccount
{    

    private $balance = 0;

    public function __construct()
    {
        $this->balance = 30;
    }

    public function deposit($money)
    {
        $this->balance += $money;
    }

    public function withdraw($money)
    {

        if ($money > $this->balance)
            return false;

        $this->balance -= $money;
    }

    public function getBalance(){
        return $this->balance;
    }
}

$bankaccount = new Bankaccount;
$bankaccount->deposit(50);

//print "\n";

$bankaccount->withdraw(15);
print $bankaccount->getBalance();