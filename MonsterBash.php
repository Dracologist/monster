<?php
/**
 * Created by PhpStorm.
 * User: ejcka
 * Date: 2/8/2018
 * Time: 1:56 PM
 */
include("Monster.php");
include("Vampire.php");

class MonsterBash
{
    private $_mon;
    private $_vamp;

    function __construct()
    {
        $this->testConstructor();
    }

    function testConstructor(){
        $this->_mon = new Monster;
        $this->_vamp = new Vampire("Dracula");
        if(isset($this->_mon)) {
            echo "Monster made!<br>";
        }
        if(isset($this->_vamp)) {
            echo "Vampire made!<br>";
            echo "Vampire Name: ".$this->_vamp->test_name;
        }
    }
    function testSetName(){
        $this->_mon->setName("Moogle");
        $this->_vamp->setName("Nosferatu");
        echo "Set Monster Name: ".$this->_mon->test_name;
        echo "<br>Set Vampire Name: ".$this->_vamp->test_name;
    }
    function testGetName(){
        echo "Got Monster Name: ".$this->_mon->getName();
        echo "<br>Got Vampire Name: ".$this->_vamp->getName();
    }
    function testAttack(){
        $this->_mon->attack();
        echo "<br>";
        $this->_vamp->attack();
    }
    function testGetVictims(){
        echo $this->_vamp->getVictims();
    }
}