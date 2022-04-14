<?php

/*
** IMPORTANTE: Foi instalado uma extenção no cod pra gerar os getters and  setters para manipular os atributos privados
** Agora quando criar uma variavel do tipo 'private', basta clicar sobre ela com o btn direito do mouse e selecionar a opção 'Insert PHP Getter & Setter'
** Esta opção vai gerar o código automaticamente, fazer o procedimento para cada uma das variaveis
*/

class Product
{
    private $name;
    private $price;
    private $description;
    private $category;
    
    

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

    /**
     * Get the value of price
     */ 
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of price
     *
     * @return  self
     */ 
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get the value of description
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of category
     */ 
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set the value of category
     *
     * @return  self
     */ 
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }
}

$product = new Product;
$product->setName('Curso de Php');
$product->setPrice(19.90);
$product->setDescription('Curso de php orientado a objetos');
$product->setCategory('Cursos');

print $product->getName() . ' R$'. $product->getPrice();