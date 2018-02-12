<?php
/**
 * Created by PhpStorm.
 * User: ejcka
 * Date: 2/8/2018
 * Time: 1:56 PM
 */
include("Monster.php");
include("Vampire.php");
include("Werewolf.php");

class MonsterBash
{
    private $_mon;
    private $_vamp;
    private $_wolf;

    function __construct()
    {
        $this->testConstructor();
    }

    function testConstructor(){
        $this->_mon = new Monster;
        $this->_vamp = new Vampire("Dracula");
        $this->_wolf = new Werewolf("Harry");
        if(isset($this->_mon)) {
            echo "Monster made!<br>";
        }
        if(isset($this->_vamp)) {
            echo "Vampire made!<br>";
            echo "Vampire Name: ".$this->_vamp->test_name;
        }
        if(isset($this->_wolf)) {
            echo "<br>Werewolf made!<br>";
            echo "Werewolf Name: ".$this->_wolf->test_name;
        }
    }
    function testSetName(){
        $this->_mon->setName("Moogle");
        $this->_vamp->setName("Nosferatu");
        $this->_wolf->setName("Wolf");
        echo "Set Monster Name: ".$this->_mon->test_name;
        echo "<br>Set Vampire Name: ".$this->_vamp->test_name;
        echo "<br>Set Werewolf Name: ".$this->_wolf->test_name;
    }
    function testGetName(){
        echo "Got Monster Name: ".$this->_mon->getName();
        echo "<br>Got Vampire Name: ".$this->_vamp->getName();
        echo "<br>Got Werewolf Name: ".$this->_wolf->getName();
    }
    function testAttack(){
        $this->_mon->attack();
        echo "<br>";
        $this->_vamp->attack();
        echo "<br>";
        $this->_wolf->attack();
    }
    function testGetVictims(){
        echo $this->_vamp->getVictims();
    }
    function testTransform(){
        $this->_wolf->printForm();
        echo "<br>";
        $this->_wolf->transform();
        $this->_wolf->printForm();
        echo "<br>";
        $this->_wolf->transform();
        $this->_wolf->printForm();
    }
}