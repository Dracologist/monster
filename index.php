<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Monster</title>

</head>
<body>
<p>
    <?php
    error_reporting(E_ALL);
    include("MonsterBash.php");

    $test_mon = new MonsterBash();
    echo "<br>";
    $test_mon->testSetName();
    echo "<br>";
    $test_mon->testGetName();
    echo "<br>";
    $test_mon->testAttack();
    echo "<br>";
    $test_mon->testGetVictims();
    ?>
</p>
</body>

