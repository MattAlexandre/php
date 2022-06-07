<?php

require_once="";

class pessoa
{
    
    public $nome;
    public $sobrenome;
    public $idade;
    public $genero;
    public $cpf;

    public function hackear(){
        echo 'hackando a nasa <br>'
    }

    public function conserto(){
        echo ' consertei a impressora'
    }
}

class juninho {
    public $nome;
    public $especie;

    public function miar(){
        echo 'miau'
    }
}

/*          chamado classe pessoas                 */
   $matteus = new $pessoas;
   $matteus->nome = 'matteus';
   $matteus->sobrenome = 'alexandre';

   $matteus-> conserto();
   $matteus-> hackear();

/*        chamado objeto gato                       */

   $srdingles = new $gato;
   $matteus->especie = 'sphyx';

   $gato-> miaar();
   