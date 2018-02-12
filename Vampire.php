<?php
/**
 * Created by PhpStorm.
 * User: ejcka
 * Date: 2/12/2018
 * Time: 12:34 PM
 */

class Vampire extends Monster
{
    private $_name;
    private $_victims;
    var $test_name;
    function __construct($vampire_name) {
        parent::setName($vampire_name);
        $this->_victims = 0;
    }

    function attack()
    {
        echo $this->getName()." is biting someone!";
        $this->_victims = $this->_victims + 1;
    }

    function getVictims(){
        return $this->_victims;
    }
}