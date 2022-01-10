<?php 
// echo "Hello World";
// phpinfo();

class fruit {
    public $name = null;
    public $color = null;
    function __construct()
    {
        echo "=====================<br>";
        echo "========FRUIT========<br>";
        echo "=====================<br>"; 
    }
    function setName($name){
        return $this->name = $name;
    }
    function setColor($color){
        return $this->color = $color;
    }
    function displayInfo()
    {
        echo "Name: ".$this->name.'<br>';
        echo "Color: ".$this->color.'<br>';
    }
}

$apple = new fruit();
$apple->setName('Japanese Apple');
$apple->setColor('Red');
$apple->displayInfo();
?>