<?php

interface WarungIndomie 
{
    public function harga(); 
}

class IndomiePolos implements WarungIndomie 
{
    public function  harga()
    {
        return 10000;
    }
}


class ToppingKuahKeju implements WarungIndomie 
{
    
    protected $warungIndomie;

    function __construct(WarungIndomie $warungIndomie) 
    {
        $this->warungIndomie = $warungIndomie;        
    } 

    public function  harga()
    {
        return $this->warungIndomie->harga() + 6000;
    }
}

class ToppingTelor implements WarungIndomie 
{
    
    protected $warungIndomie;

    function __construct(WarungIndomie $warungIndomie) 
    {
        $this->warungIndomie = $warungIndomie;        
    } 

    public function  harga()
    {
        return $this->warungIndomie->harga() + 5000;
    }
}

echo (new ToppingTelor(new ToppingKuahKeju(new IndomiePolos)))->harga();