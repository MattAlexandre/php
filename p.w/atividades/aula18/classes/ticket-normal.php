<?php

require_once 'ticket.php';

class ticketNormal extends Ticket
{
    
    //atributos

    //metodos

    public function Normal()
    {
        return '<a>
         ingresso  normal , valor: '.$this->getValue()
         .'<br></a>';
    }

    public function ToString()
    {
        return 
        parent::toString().'<br>'
        .$this->Normal()
        .'<br>'
        ;
    }
}