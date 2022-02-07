<?php

require_once "ticket.php";

class TicketVip  extends Ticket
{


    public function Vip()
    {
        return ' ingresso vip ,valor: '.$this->getValue()+35 .'
                ';
    }

    public function ToString()
    {
        return
              parent::Tostring().'<a><br>'
              .$this->Vip().'<br>
              
        </a>';
    }
,


    
}