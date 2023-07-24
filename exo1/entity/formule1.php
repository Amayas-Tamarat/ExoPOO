<?php 
class Formule1
{
    private int $speed;

    public function __construct($speed)
    {
        $this->speed = $speed;
    }

   
    public function setSpeed($speed)
    {
        $this->speed = $speed;

        return $this;
    }

  
    public function getSpeed()
    {
        return $this->speed;
    }



    public function drive() :string 
    {
        return 'vroum vroum à '. $this->speed.'km/h';
    }


    public function shitfGear($sift) 
    {
        $this->speed = $sift;
    }

    
}
?>