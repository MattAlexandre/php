<?php


class CabinSup extends TicketVip
{

    public function localization()
    {
        return "<a> 
                ingresso vip , valor(adicional camarote): ".$this->getValue()+ 100 ."<br>
                localização superior =} <br>

                </a> ";
    }

    public function ToString()
    {
        return
        parent::ToString()."<br>"
        .$this->localization()."<br>"
        ;
    }

}