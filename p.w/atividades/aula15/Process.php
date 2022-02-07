<?php

require_once 'classes/Dog.php';
require_once 'classes/Cat.php';
require_once 'classes/Bunny.php';
require_once 'classes/Chameleon.php';
require_once 'classes/Ferret.php';
require_once 'classes/Hamster.php';
require_once 'classes/Horse.php';
require_once 'classes/Parrot.php';
require_once 'classes/Snake.php';
require_once 'classes/BeardedDragon.php';
?>
<?php
    //dados gerais

    $Name = $_POST['Name'];              
    $Species = $_POST['Species'];        
    $Breed = $_POST['Breed'];
    $Size = $_POST['Size'];
    $Birthdate = $_POST['Birthdate'];
    $Genre = $_POST['Genre'];
    $Name_owner = $_POST['NameOowner'];
    $Contact = $_POST['Contact'];
    $Weight = $_POST['Weight'];


    
    
    // instanciamento 

    
    //setando os dados no set


    //Setando os Dados no - SET

     
     switch ($Species){
         case 'Dog':

            $Dog = new Dog();

            $Dog->setName($Name);
            $Dog->setSpecies($Species);
            $Dog->setBreed($Breed);
            $Dog->setSize($Size);
            $Dog->setBirthDate($Birthdate);
            $Dog->setGenre($Genre);
            $Dog->setName_owner($NameOwner);
            $Dog->setContact($Contact);
            $Dog->SetWeight($Weight);

            echo $Dog->toString();

            break;

        case 'Cat':
            $Cat = new Cat();

            $Cat->setName($Name);
            $Cat->setSpecies($Species);
            $Cat->setBreed($Breed);
            $Cat->setSize($Size);
            $Cat->setBirthDay($birthdate);
            $Cat->setGenre($genre);
            $Cat->setName_owner($name_owner);
            $Cat->setContact($contact);
            $Cat->SetWeight($Weight);

            $Cat->toString();               //class;
            break;

        case 'Parrot':
            $Parrot = new Parrot();

            $Parrot->setName($Name);
            $Parrot->setSpecies($Species);
            $Parrot->setBreed($Breed);
            $Parrot->setSize($Size);
            $Parrot->setBirthDay($birthdate);
            $Parrot->setGenre($genre);
            $Parrot->setName_owner($name_owner);
            $Parrot->setContact($contact);
            $Parrot->SetWeight($Weight);


            $Parrot->toString();      //class;
            break;
                
        case 'Hamster':
            $Hamster = new Hamster();

            $Hamster->setName($Name);
            $Hamster->setSpecies($Species);
            $Hamster->setBreed($Breed);
            $Hamster->setSize($Size);
            $Hamster->setBirthDay($birthdate);
            $Hamster->setGenre($genre);
            $Hamster->setName_owner($name_owner);
            $Hamster->setContact($contact);
            $Hamster->SetWeight($Weight);


            $Hamster->toString();         //class;
            break;

        case 'Ferrat':
            $Ferrat = new Ferrat();

            $Ferrat->setName($name);
            $Ferrat->setSpecies($species);
            $Ferrat->setBreed($breed);
            $Ferrat->setSize($size);
            $Ferrat->setBirthDay($birthdate);
            $Ferrat->setGenre($genre);
            $Ferrat->setName_owner($name_owner);
            $Ferrat->setContact($contact);
            $Ferrat->SetWeight($Weight);

            $Ferrat->toString();          //class;
            break;
                    
        case 'Snake':
            $Snake = new Snake();

            $Snake->setName($name);
            $Snake->setSpecies($species);
            $Snake->setBreed($breed);
            $Snake->setSize($size);
            $Snake->setBirthDay($birthdate);
            $Snake->setGenre($genre);
            $Snake->setName_owner($name_owner);
            $Snake->setContact($contact);
            $Snake->SetWeight($Weight);

            $Snake->toString();          //class;
            break;

        case 'Chamaleon':
            $Chamaleon =  new Chamaleon();

            $Chamaleon->setName($name);
            $Chamaleon->setSpecies($species);
            $Chamaleon->setBreed($breed);
            $Chamaleon->setSize($size);
            $Chamaleon->setBirthDay($birthdate);
            $Chamaleon->setGenre($genre);
            $Chamaleon->setName_owner($name_owner);
            $Chamaleon->setContact($contact);
            $Chamaleon->SetWeight($Weight);

            $Chamaleon->toString();         //class;
            break;
    
        case 'Horse':
            $Horse = new Horse();

            $Horse->setName($name);
            $Horse->setSpecies($species);
            $Horse->setBreed($breed);
            $Horse->setSize($size);
            $Horse->setBirthDay($birthdate);
            $Horse->setGenre($genre);
            $Horse->setName_owner($name_owner);
            $Horse->setContact($contact);
            $Horse->SetWeight($Weight);

            $Horse->toString();            //class;
            break;
    
        case 'Bearded Dragon':
            $beardedDragon = new beardedDragon();

            $Bearded_dragon->setName($name);
            $Bearded_dragon->setSpecies($species);
            $Bearded_dragon->setBreed($breed);
            $Bearded_dragon->setSize($size);
            $Bearded_dragon->setBirthDay($birthdate);
            $Bearded_dragon->setGenre($genre);
            $Bearded_dragon->setName_owner($name_owner);
            $Bearded_dragon->setContact($contact);
            $Bearded_dragon->SetWeight($Weight);

            $BeardedDragon->toString();  //class;
            break;
                    
        case 'Bunny':
            $Bunny = new Bunny();

            $Bunny->setName($name);
            $Bunny->setSpecies($species);
            $Bunny->setBreed($breed);
            $Bunny->setSize($size);
            $Bunny->setBirthDay($birthdate);
            $Bunny->setGenre($genre);
            $Bunny->setName_owner($name_owner);
            $Bunny->setContact($contact);
            $Bunny->SetWeight($Weight);

            $Bunny->toString();            //class;
             break;
    
            
     }






/* IDADE CAL */

/* 

//var

var idade, nas_p, ano_at;


//browser1

 var  parsetInt(prompt(" digite a vossa idade: "));
 var  parseInt(prompt(" digite o ano atual: "));

//cont
 
idade  nas - ano_at;

//browser-f

document.write(" a sua idade é: ${idade} ");



*/ 

?>

