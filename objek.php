<?php

$anggur = new Fruit();
$banana = new Fruit();
$anggur->set_name('Anggur');
$banana->set_name('Banana');

echo $anggur->get_name();
echo "<br>";
echo $banana->get_name();
?>