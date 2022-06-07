<?php



class client extends user // cliente é filho de user
{

    private $cpf;
    private $cel;
    private $cardNumber;
    private $cardVality;

    
    public function getCardNumber()
    {
        $this->getname();
        return $this->CardNumber
    }

    public function setCardNumber($cardNumber)
    {

    }
}