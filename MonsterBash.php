<?php
/**
 * Created by PhpStorm.
 * User: ejcka
 * Date: 2/8/2018
 * Time: 1:56 PM
 */
include("Monster.php");

class MonsterBash
{
    function testConstructor(){
        $test_mon = new Monster;
        if(isset($test_mon)) {
            echo "Monster made!";
        }
    }
    function testSetName(){
        $test_mon = new Monster;
        $test_mon->setName("Moogle");
        echo $test_mon->name;
    }
    function testGetName(){
        $test_mon = new Monster;
        echo $test_mon->getName();
        $test_mon->setName("Moogle");
        echo $test_mon->getName();
    }
    function testAttack(){
        $test_mon = new Monster;
        $test_mon->setName("Moogle");
        $test_mon->attack();
    }
}