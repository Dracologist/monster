<?php


class Monster
{
    var $name;

    function setName($new_mon_name){
        $this->name = $new_mon_name;
    }
    function getName(){
        return $this->name;
    }
    function attack(){
        echo $this->name." is attacking";
    }
}