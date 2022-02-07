<?php



class  Pet
{ 
    private $Name;           //nome
    private $Specie;         //especie  
    private $Breed;         
    private $Size;
    private $Birthdate;      
    private $Genre;
    private $NameOwner;
    private $Contact;
    private $Weigh;

     // var-close..

     // metodo construtor
     
     public function __constructor()
     {

     }
     
     //name
     public function setName($Name) 
     {
        return $this->Name = $Name;
     }
     
     public function getName()
     {
         return $this->Name;
     }
    
     //especies
     public function setSpecies($Species)
     {
        return $this->Species = $Species;
     }
     
     public function getSpecies()
     {
         return $this->Species;
     }

     //breed
     public function setBreed($Breed)
     {
        return   $this->Breed = $Breed;
     }
     
     public function getBreed()
     {
         return $this->Breed;
     }

     //size
     public function setSize($Size)
     {
        return  $this->Size = $Size;
     }
     
     public function getSize()
     {
         return $this->Size;
     }

     //birthdate
     public function setBirthDate($Birthdate)
     {
        return  $this->Birthdate = $Birthdate;
     }
     
     public function getBirthDate()
     {
         return $this->Birthdate;
     }

     //genre
     public function setGenre($Genre)
     {
        return  $this->Genre = $Genre;
     }
     
     public function getGenre()
     {
         return $this->Genre;
     }

     //name_owner
     public function setNameOwner($NameOwner)
     {
        return  $this->NameOwver = $nameOwner;
     }
     
     public function getNameOwner()
     {
         return $this->nameOwver;
     }

     //contact
     public function setContact($Contact)
     {
        return  $this->Contact = $Contact;
     }
     
     public function getContact()
     {
         return $this->Contact;
     }

     //weight
     public function setWeight($Weight)
     {
        return  $this->Weight = $Weight;
     }
     
     public function getWeight()
     {
         return $this->Weight;
     }

     public function setIdade($Birthdate)
     {
         $BirthdayoDateTime = new DateTime($this->BirthDay);
         $Date = new DateTime();
         $Age =  $birthdayoDateTime->diff($date);
         
     }
     public function getIdade()
     {
        return $Age->y;
     }
 
}

