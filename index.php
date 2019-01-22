<?php
$sunny = rand(0, 1);
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="/css/style.css">
        <title>babushka</title>      
    </head>
    <body>
        <?php
        if ($sunny) {
            print '<img src="images/1.jpg"> afigenas oras';
        } else {
            print '<img src="images/2.jpg"> sudinas oras';
        }
        ?>
    </body>
</html>