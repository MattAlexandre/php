<?php

require_once 'pet.php';


class bearded_dragon  extends pet
{

  public function gethiberna()
  {
     return ' a mimir   ';
  }

  public function toString()
  {
    echo ' <div class="'" "'" '
    echo ' pet-shop';

    echo ' name:        '.$this->getName();
    echo ' specie:      '.$this->getSpecies();
    echo ' breed:       '.$this->getBreed();
    echo ' size :       '.$this->getSize();
    echo ' birthdate:   '.$this->getBirthdate();
    echo ' genre:       '.$this->getGenre();
    echo ' namme_owner: '.$this->getName_owner();
    echo ' contact:     '.$this->getContact();
    echo ' weight:      '.$this->getWeight();

    echo ' metd - animal';

    echo $this->gethiberna();

  }

}
