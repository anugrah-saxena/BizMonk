<?php
session_start();
?>
<h1><center>Business Feasibility GUI</center></h1>

<?php
$name=$_POST[1];
$budget=$_POST[4];

$_SESSION['company_name']=$name;
$_SESSION['company_budget']=$budget;

echo "<pre>"."<pre>";
echo "PLEASE BE PATIENCE OUR SYSTEM IS ANALYSING INFORMATION";
echo "<pre>"."<pre>";
echo "feasibility"."(".$name.",".$budget.")".".";
echo "<hr />";
?>

<center><a  href="scale.php?var1=it"><img src="images/IT.png" width="360" height="80" alt="IT" /><a/></center><br />
<center><a  href="scale.php?var1=other"><img src="images/other.png" width="360" height="80" alt="other" /></a></center><br />