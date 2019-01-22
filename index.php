<?php
$pirm_pask = rand(1, 100);
$antr_pask = rand(101, 200);
$trec_pask = rand(201, 300);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
    <link: rel="stylesheet" href="css/style.css"
           <meta charset="utf-8">
        <title>babushka</title>      
    </head>
    <body>
        <div>
            <h1>Skolos skaiciuokle</h1>
            <p>jei paemei <?php print $pirm_pask ?>jievru<br>
                su dviem kabanciais grazinsi <?php print $trec_pask ?><br>
                su vienu kabanciu grazinsi <?php $antr_pask ?>
            </p>
        </div>
    </body>
</html>