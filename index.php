<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>PHP lydes ir <?php print date('d', strtotime('+1 day')) ?></title>
    </head>
    <body>
        <h1>PHP su manim buvo ir <?php print date('H', strtotime('-1 hour')) . 'valanda' ?> </h1>
        <p><?php print date('y', strtotime('+1 year')) . ' ne uz kalnu' ?></p>
    </body>
</html>