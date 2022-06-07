<?php
                                    // require = requerir o arquivo 
require_once 'user.php';           // _once carregado apenas uma vez 


class user{       //atributos sempre privados
    private $birthday;
    private $name;
    private $cel;
    private $sexo;
    private $password;
    private $cep;
    private $zipcode;
    private $city;
    private $state;
    private $cNum;
    private $street;

    public function __construct($name) // qm constroi o objeto- metodo inplicito
    {
        $this->setName($name);
        echo'<br>construindo classe user <br>' .$this->getName() .'<br>';
    }

    
    # Name
    public function setName($name)
    {
       $this->name = $name;
    }
    
    public function getName()
    {
        return $this->name;
    }

    # Email
    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function getEmail()
    {
        return $this->email;
    }

    # Cel
    public function setCel($cel)
    {
        $this->cel = $cel;
    }
    public function getCel()
    {
        return $this->cel;
    }

    # sexo
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;
    }
    public function getSexo()
    {
        return $this->sexo;
    }

    # CEP
    public function setCep($cep)
    {
        $this->cep = $cep;
    }
    public function getCep()
    {
        return $this->cep;
    }

    # City
    public function setCity($cep)
    {
        $this->cep = $cep;
    }
    public function getCity()
    {
        return $this->cep;
    }

    # state
    public function setState($state)
    {
        $this->state = $state;
    }
    public function getState()
    {
        return $this->state;
    }

    # cNum
    public function setCNum($cNum)
    {
        $this->cNum = $cNum;
    }
    public function getcNum()
    {
        return $this->cNum;
    }

    # Street
    public function setStreet($street)
    {
        $this->street = $street;
    }
    public function getStreet()
    {
        return $this->street;
    }

    #Aniversario
    
    public function setBirthday($birthDay)
    {
        $this->birthDay = $birthDay  ; 
    }
    public function getBirthday()
    {
        return $this->birthDay;
    }

    public function getIdade()
    {
        $birthdayoDateTime = new DateTime($this->birthDay);
        $date = new DateTime();
        $age =  $birthdayoDateTime->diff($date);
        return $age->y;
    }
   
    

    public function toString()
    {
        "<div class=".  'content-array' .  ">".
            "<div class=". 'content-center' . ">".
    
                '<table border= "2">'.
                    
                            
                    
                                '<tr>'.
                                '<th> Nome: </th>'.
                                '<th> E-mail: </th>'.
                                '<th> Celular: </th>'.
                                '<th> Idade: </th>'.
                                '<th> Gênero: </th>'.
                                '<th> Estado:</th>'.
                                '<th> Rua: </th>'.
                                '<th> CEP:</th>'.
                                '<th> Num. Casa: </th>'.
                                '<th> Nascimento: </th>'.
                                '</tr>'.


                                '<tr>';
                                '<td>' . $this->name . '</td>';
                                '<td>' . $this->email . '</td>';
                                '<td>' . $this->cel . '</td>';
                                '<td>' . $this->getIdade() . '</td>';
                                '<td>' . $this->sexo .'</td>';
                                '<td>' . '' . $this->state . ' ' .'</td>';
                                '<td>' . '' . $this->street . ' ' .'</td>';
                                '<td>' . '' . $this->cep . ' ' .'</td>';
                                '<td>' . '' . $this->cNum . ' ' .'</td>';
                                '<td>' . '' . $this->birthDay . ' ' .'</td>';
                                '</tr>';
                    
                                
                            
                                                
                '</table>';    
            "</div>";                            
        "</div>";
    } 
}
?>