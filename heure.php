
<?php


include ('personnes.php');

echo "<br>". "La personne est :".$p1->nom;"<br>";

?>

<br>

<?php

setlocale(LC_TIME, 'fra_fra');

echo strftime('%A %d %B %Y, %H:%M');


?>