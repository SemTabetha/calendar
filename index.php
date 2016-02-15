<!doctype html>
<?php
    require("config.php");
?>
<html>
    <head>
        <title>Birthdaycalendar</title>
        <link href="CSS/main.css" rel="stylesheet" type="text/css">
        <link rel="icon" href="images/s.png">
    </head>

    <body>
        <h1>january</h1>
<?php
    $query = "SELECT * FROM birthday WHERE month = 1 ORDER BY month, day, year";
    $result = $db->query($query);

    $birthdays = $result->fetch_all(MYSQLI_ASSOC);
    foreach($birthdays as $birthday):
?>
        <h2><?=$birthday['day'];?></h2>
        <p>
            <a href="edit.php?id=<?= $birthday['id'];?>">
                <?=$birthday['person'];?>
                (<?=$birthday['year'];?>)</a>
                
            <a href="delete.php?id=<?= $birthday['id'];?>">x</a>
        </p>
<?php 
endforeach;
?>

        <h1>february</h1>
<?php
    $query = "SELECT * FROM birthday WHERE month = 2 ORDER BY month, day, year";
    $result = $db->query($query);

    $birthdays = $result->fetch_all(MYSQLI_ASSOC);
    foreach($birthdays as $birthday):
?>
        <h2><?=$birthday['day'];?></h2>
        <p>
            <a href="edit.php?id=<?= $birthday['id'];?>">
                <?=$birthday['person'];?>
                (<?=$birthday['year'];?>)</a>
                
            <a href="delete.php?id=<?= $birthday['id'];?>">x</a>
        </p>
<?php 
endforeach;
?>

        <h1>march</h1>
<?php
    $query = "SELECT * FROM birthday WHERE month = 3 ORDER BY month, day, year";
    $result = $db->query($query);

    $birthdays = $result->fetch_all(MYSQLI_ASSOC);
    foreach($birthdays as $birthday):
?>
        <h2><?=$birthday['day'];?></h2>
        <p>
            <a href="edit.php?id=<?= $birthday['id'];?>">
                <?=$birthday['person'];?>
                (<?=$birthday['year'];?>)</a>
                
            <a href="delete.php?id=<?= $birthday['id'];?>">x</a>
        </p>
<?php 
endforeach;
?>

        <h1>april</h1>
<?php
    $query = "SELECT * FROM birthday WHERE month = 4 ORDER BY month, day, year";
    $result = $db->query($query);

    $birthdays = $result->fetch_all(MYSQLI_ASSOC);
    foreach($birthdays as $birthday):
?>
        <h2><?=$birthday['day'];?></h2>
        <p>
            <a href="edit.php?id=<?= $birthday['id'];?>">
                <?=$birthday['person'];?>
                (<?=$birthday['year'];?>)</a>
                
            <a href="delete.php?id=<?= $birthday['id'];?>">x</a>
        </p>
<?php 
endforeach;
?>

        <h1>may</h1>
<?php
    $query = "SELECT * FROM birthday WHERE month = 5 ORDER BY month, day, year";
    $result = $db->query($query);

    $birthdays = $result->fetch_all(MYSQLI_ASSOC);
    foreach($birthdays as $birthday):
?>
        <h2><?=$birthday['day'];?></h2>
        <p>
            <a href="edit.php?id=<?= $birthday['id'];?>">
                <?=$birthday['person'];?>
                (<?=$birthday['year'];?>)</a>
                
            <a href="delete.php?id=<?= $birthday['id'];?>">x</a>
        </p>
<?php 
endforeach;
?>

        <h1>june</h1>
<?php
    $query = "SELECT * FROM birthday WHERE month = 6 ORDER BY month, day, year";
    $result = $db->query($query);

    $birthdays = $result->fetch_all(MYSQLI_ASSOC);
    foreach($birthdays as $birthday):
?>
        <h2><?=$birthday['day'];?></h2>
        <p>
            <a href="edit.php?id=<?= $birthday['id'];?>">
                <?=$birthday['person'];?>
                (<?=$birthday['year'];?>)</a>
                
            <a href="delete.php?id=<?= $birthday['id'];?>">x</a>
        </p>
<?php 
endforeach;
?>

        <h1>july</h1>
<?php
    $query = "SELECT * FROM birthday WHERE month = 7 ORDER BY month, day, year";
    $result = $db->query($query);

    $birthdays = $result->fetch_all(MYSQLI_ASSOC);
    foreach($birthdays as $birthday):
?>
        <h2><?=$birthday['day'];?></h2>
        <p>
            <a href="edit.php?id=<?= $birthday['id'];?>">
                <?=$birthday['person'];?>
                (<?=$birthday['year'];?>)</a>
                
            <a href="delete.php?id=<?= $birthday['id'];?>">x</a>
        </p>
<?php 
endforeach;
?>

        <h1>august</h1>
<?php
    $query = "SELECT * FROM birthday WHERE month = 8 ORDER BY month, day, year";
    $result = $db->query($query);

    $birthdays = $result->fetch_all(MYSQLI_ASSOC);
    foreach($birthdays as $birthday):
?>
        <h2><?=$birthday['day'];?></h2>
        <p>
            <a href="edit.php?id=<?= $birthday['id'];?>">
                <?=$birthday['person'];?>
                (<?=$birthday['year'];?>)</a>
                
            <a href="delete.php?id=<?= $birthday['id'];?>">x</a>
        </p>
<?php 
endforeach;
?>

        <h1>september</h1>
<?php
    $query = "SELECT * FROM birthday WHERE month = 9 ORDER BY month, day, year";
    $result = $db->query($query);

    $birthdays = $result->fetch_all(MYSQLI_ASSOC);
    foreach($birthdays as $birthday):
?>
        <h2><?=$birthday['day'];?></h2>
        <p>
            <a href="edit.php?id=<?= $birthday['id'];?>">
                <?=$birthday['person'];?>
                (<?=$birthday['year'];?>)</a>
                
            <a href="delete.php?id=<?= $birthday['id'];?>">x</a>
        </p>
<?php 
endforeach;
?>

        <h1>october</h1>
<?php
    $query = "SELECT * FROM birthday WHERE month = 10 ORDER BY month, day, year";
    $result = $db->query($query);

    $birthdays = $result->fetch_all(MYSQLI_ASSOC);
    foreach($birthdays as $birthday):
?>
        <h2><?=$birthday['day'];?></h2>
        <p>
            <a href="edit.php?id=<?= $birthday['id'];?>">
                <?=$birthday['person'];?>
                (<?=$birthday['year'];?>)</a>
                
            <a href="delete.php?id=<?= $birthday['id'];?>">x</a>
        </p>
<?php 
endforeach;
?>

        <h1>november</h1>
<?php
    $query = "SELECT * FROM birthday WHERE month = 11 ORDER BY month, day, year";
    $result = $db->query($query);

    $birthdays = $result->fetch_all(MYSQLI_ASSOC);
    foreach($birthdays as $birthday):
?>
        <h2><?=$birthday['day'];?></h2>
        <p>
            <a href="edit.php?id=<?= $birthday['id'];?>">
                <?=$birthday['person'];?>
                (<?=$birthday['year'];?>)</a>
                
            <a href="delete.php?id=<?= $birthday['id'];?>">x</a>
        </p>
<?php 
endforeach;
?>

        <h1>december</h1>
<?php
    $query = "SELECT * FROM birthday WHERE month = 12 ORDER BY month, day, year";
    $result = $db->query($query);

    $birthdays = $result->fetch_all(MYSQLI_ASSOC);
    foreach($birthdays as $birthday):
?>
        <h2><?=$birthday['day'];?></h2>
        <p>
            <a href="edit.php?id=<?= $birthday['id'];?>">
                <?=$birthday['person'];?>
                (<?=$birthday['year'];?>)</a>
                
            <a href="delete.php?id=<?= $birthday['id'];?>">x</a>
        </p>
<?php 
endforeach;
?>

<p><a href="create.php">+ Add</a></p>

    </body>
</html>