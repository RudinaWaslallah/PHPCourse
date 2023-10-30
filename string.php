<?php

$string="Rudina Wasl";
echo $string;
echo "<br>";
echo strtolower($string);
echo "<br>";
echo strtoupper($string);
echo "<br>";
echo strlen($string);
echo "<br>";
echo $string[7];
echo "<br>";
$string[7]="r";
echo  $string;
echo "<br>";
echo str_replace("Rudina" ,"Rode",$string);
echo "<br>";
echo substr($string,2);
?>