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
        $test_mon = new Monster("Mog");
        echo $test_mon->name;
    }
    function testSetName(){
        $test_mon = new Monster("Mog");
        $test_mon->setName("Moogle");
        echo $test_mon->name;
    }
    function testGetName(){
        $test_mon = new Monster("Mog");
        echo $test_mon->getName();
        $test_mon->setName("Moogle");
        echo $test_mon->getName();
    }
}