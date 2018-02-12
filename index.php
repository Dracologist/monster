<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Monster</title>

</head>
<body>
<p>
    <?php
    include("MonsterBash.php");

    $test = new MonsterBash();
    echo "<br>";
    $test->testConstructor();
    echo "<br>";
    $test->testSetName();
    echo "<br>";
    $test->testGetName();
    echo "<br>";
    $test->testAttack();
    ?>
</p>
</body>

