<?php


class Monster
{
    private $_name;
    var $test_name;

    function setName($new_mon_name){
        $this->_name = $new_mon_name;
        $this->test_name = $new_mon_name;
    }
    function getName(){
        return $this->_name;
    }
    function attack(){
        echo $this->getName()." is attacking!";
    }
}