<?php
session_start();
?>
<h1><center>Business Feasibility GUI</center></h1>
<hr />

<?php
$scale=$_GET['var2'];
$_SESSION['company_scale']=$scale;

$name=$_SESSION['company_name'];
$budget=$_SESSION['company_budget'];

echo "<pre>"."<pre>";
echo "PLEASE BE PATIENCE OUR SYSTEM IS ANALYSING INFORMATION";
echo "<pre>"."<pre>";
echo "finalcheck"."(".$name.",".$scale.",".$budget.")".".";

echo "<hr />";
?>

<center><a  href="market2.php?var3=product_based"><img src="images/user.png" width="360" height="80" alt="ssi" /><a/></center><br />
<center><a  href="market2.php?var3=services"><img src="images/services.png" width="360" height="80" alt="msi" /></a></center><br />
<center><a  href="market2.php?var3=software"><img src="images/3p.png" width="360" height="80" alt="lsi" /></a></center><br />