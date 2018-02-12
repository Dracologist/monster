<?php
/**
 * Created by PhpStorm.
 * User: ejcka
 * Date: 2/12/2018
 * Time: 1:45 PM
 */

class Werewolf extends Monster
{

    private $_transformed;

    function __construct($werewolf_name) {
        parent::setName($werewolf_name);
        $this->_transformed = false;
    }

    function transform(){
        $this->_transformed = !$this->_transformed;
    }

    function printForm(){
        echo $this->getName()." is a ";
        if($this->_transformed){
            echo "wolf.";
        }
        else{
            echo "human.";
        }
    }
}