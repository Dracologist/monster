<?php


class Monster
{
    var $name;
    function __construct($monster_name) {
        $this->name = $monster_name;
    }

    function setName($new_mon_name){
        $this->name = $new_mon_name;
    }
    function getName(){
        return $this->name;
    }
}