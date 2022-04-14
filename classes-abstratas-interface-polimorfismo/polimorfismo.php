<?php

/*
** Polimorfismo é utilizado para extenter uma classe ou classe abstrata e reescerver o metodo dentro das classes filhas 
*/

class Printer
{
    public function toPrint()
    {
        return "Printing data...";
    }
}

class HpPrinter extends Printer
{
    public function toPrint()
    {
        return "HP printing data...";
    }
}

class EpsonPrinter extends Printer
{
    public function toPrint()
    {
        return "Epson printing data...";
    }
}

/*
** Neste exemplo de polimorfismo
** Basta alterar o nome da instancia e manter a chamada do metodo toPrint que vai funcionar para todas as outras instancias
*/
$printer = new EpsonPrinter; 
print $printer->toPrint();