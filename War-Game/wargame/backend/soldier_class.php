<?php

//RANDOM ARRAYS
$names = array("Mehmet","Mustafa","Ahmet","Ali","Hüseyin","Hasan","Ibrahim","Murat","Ömer","Mahmut"
,"Fatih","Salih","Ramazan","Halil");

$lastnames = array("Yılmaz","Kaya","Demir","Celik","Sahin","Yıldız","Yıldırım","Oztürk","Aydın","Orsdemir",
    "Arslan","Doğan","Kılıç","Cetin","Koç","Kurt");

$ranks = array("Private","Sergeant","Captain","Major","Colonel","General");

//SOLDIER CLASS
class Soldier {
    public $name;
    public $lastname;
    public $age;
    public $rank;

    function __construct($name,$lastname,$age,$rank) {
        $this->name = $name;
        $this->lastname = $lastname;
        $this->age = $age;
        $this->rank = $rank;
    }
}
?>