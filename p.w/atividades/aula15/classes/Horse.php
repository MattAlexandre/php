<?php

require_once 'pet.php';


class horse  extends pet
{

  public function gettrota()
  {
     return ' pocoto pocoto ';
  }

  public function toString()
  {
    echo ' pet-shop';

    echo ' name:        '.$this->getName().'<br>';
    echo ' specie:      '.$this->getSpecies().'<br>';
    echo ' breed:       '.$this->getBreed().'<br>';
    echo ' size :       '.$this->getSize().'<br>';
    echo ' birthdate:   '.$this->getBirthdate().'<br>';
    echo ' genre:       '.$this->getGenre().'<br>';
    echo ' namme_owner: '.$this->getName_owner().'<br>';
    echo ' contact:     '.$this->getContact().'<br>';
    echo ' weight:      '.$this->getWeight().'<br>';

    echo ' metd - animal';

    echo $this->gettrota();

  }

}
