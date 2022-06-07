<?php

require_once 'animal.php';

class Cat extends Animal 
{
    public function miar()
    {
        return 'miawmiae';
    }

    public function toStringCat()
    {
        return "ESSE É UM METODO POLIMORFICO";
        //return $this->toString() . "<br><br>" . $this->miar();
    }
}

/*

    
CONTEUDO DA AULA 08/12 


Ainda na questão de herença, (codigo de exemplo o PETSHOP )
!Se detem duplicidade de codigo esta errado, então havera que refazer o codigo de uma maneira mais pratica aonde nao possua duplicidade!

criar classe que vai ter todas as caracateristicas comuns das outras, para evitar a duplicação. 

extends -> é a função que classifica a entidade filho (chamando no arquivo php, removendo as classes abaixo que nao possui no pai )
						
"class Dog { !!!!}" ===== "class Dog extends °Animal° " (animal sendo a classe pai em outro arquivo php )

fazer o inport apos o nome do arquivo require_once -> chamando a tela de entidade pai (como um techbouhigthlite)
 
	+arquivo Dog+
   "require_once 'Animal.php';"


polimorfismo 
 é uma palavra que vem do grego poli forma, fismo formas, ( muitas formas)
entao muitas coisas  nesse objeto pode obter muitas formas.
exemplo : 
ele pode ser usado para reescrever o mesmo metodo em varios animais como o do cachorro e do gato TO STRING
!!
quase como o metodo herença, mas fazendo modificação dos recursos, sobreescrevendo o metodo. 







*/