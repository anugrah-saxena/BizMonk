<?php
session_start();

$name=$_POST[1];
$type=$_POST[2];
$scale=$_POST[3];
$budget=$_POST[4];
$market=$_POST[5];
$country=$_POST[6];
$city=$_POST[7];


echo "<pre>"."<pre>";
echo "THANKS FOR YOUR SUPPORT : X.pl";
echo "<pre>"."<pre>";
echo "feasiblity"."(".$name.",".$type.",".$scale.",".$budget.",".$market.",".$country.",".$city.")".".";

?>