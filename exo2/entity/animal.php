<?php 

class Animal {
    private string $name;
    private string $weight;
    private int $age;

    public function __construct($name,$weight,$age)
    {
        $this->name = $name;
        $this -> weight = $weight;
        $this -> age = $age;
    }

    public function info(){
        return 'je suis un animal';
    }
}
?>