<?php
$miArray = array("Uno", "Dos", "Tres", "Cuatro", "Cinco");

reset($miArray);
echo "Elemento actual: " . current($miArray) . "<br>";

next($miArray);
echo "Elemento siguiente: " . current($miArray) . "<br>";

next($miArray);
echo "Elemento siguiente: " . current($miArray) . "<br>";

prev($miArray);
echo "Elemento anterior: " . current($miArray) . "<br>";

next($miArray);
echo "Elemento siguiente: " . current($miArray) . "<br>";
?>
