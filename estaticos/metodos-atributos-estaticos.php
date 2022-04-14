<?php

/*
** Metodo e/ou atributo estatico é uma classe com metodos que não são alterados e podem ser chamados sem precisar ser instanciados
** Para criar um metodo estatico basta criar uma function e adicionar a palavra 'static'
** Para chamar um metodo estatico basta chamar o nome da classe com '::' e o metodo 
*/

class Html
{
    public static $mainTag = '<html>';
    const END_TAG = "</html>";

    public static function openTagHtml()
    {
        //return "<html>";
        return self::$mainTag;
    }

    public static function endTagHtml()
    {
        return self::END_TAG;
    }
}

print Html::openTagHtml();
print "\n";
print Html::endTagHtml();

print "\n";

print Html::$mainTag;
print "\n";
print Html::END_TAG;