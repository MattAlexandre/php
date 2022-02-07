<?php


class CabinInf extends TicketVip
{

    public function localization()
    {
        return "<a> 
                localização inferior =}
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