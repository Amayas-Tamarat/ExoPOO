<?php
class Machine {
    private string $marque;
    private bool $cafe = false;
    private bool $enFonction = false;
    private int $price = 1;

    public function __construct($marque)
    {
        $this->marque = $marque; 
    }

    public function getMarque()
    {
        return $this->marque;
    }


    public function setMarque($marque)
    {
        $this->marque = $marque;

        return $this;
    }

  
    public function getCafe()
    {
        return $this->cafe;
    }

  
    public function setCafe($cafe)
    {
        $this->cafe = $cafe;

        return $this;
    }


    public function getEnFonction()
    {
        return $this->enFonction;
    }


    public function setEnFonction($enFonction)
    {
        $this->enFonction = $enFonction;

        return $this;
    }
    
 
    public function getPrice()
    {
        return $this->price;
    }

 
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }


    public function allumage()
    {
        $this->setEnFonction(true);
        return "la machine est en fonction";
    }

    public function mettreUneDosette()
    {
        if ($this->enFonction){
            $this->setCafe(true);
        return "une dosette est mise";
        }else{
            return "la machine n'est pas allumé";
        }
    }

    public function addSugar($add, $sugar)
    {
        if ($add === true){
            return $sugar.' gramme de sucre ajouté';
        } else return "sans sucre";
    }

    public function turningOff()
    {
        $this->setEnFonction(false);
        return "la machine est éteinte ";
    }
    
    public function money($money) {
        $price = $this->getPrice();
        
        if ($money >= $price) {
            return $money - $price ;
        } else {
            return "argent insuffisant  ";
        }
    }

    public function faireCafe($money) {
        if (!$this->enFonction || !$this->cafe) {
            return "La machine n'est pas allumée et il n'y a pas de dosette.";
        }
    
        $change = $this->money($money);
    
        if (is_numeric($change)) {
            return "Votre café est prêt. Voici votre monnaie : " . $change . " euros.";
        } else {
            return "argent insuffisant";
        }
    }


} 



?>