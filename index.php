<?php
$kelintadienis = date('d');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title><?php print 'as' . $kelintadienis . 'ir PHP' ?></title>
    </head>
    <body>
        <h1>Tadas- HTML <?php print 'ir PHP' ?> asas jau nuo <?php print date('y') . ' metu' ?> </h1>
        <p>Viskas prasidejo <?php print date("m") . ' Menesio ' . date("d") . ' diena' ?></p>
    </body>
</html>