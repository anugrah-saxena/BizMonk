<?php
session_start();
?>
<h1><center>Business Feasibility GUI</center></h1>
<HR />

<?php

$product=$_GET['var4'];
$_SESSION['company_product']=$product;
echo $name=$_SESSION['company_name'];
echo $budget=$_SESSION['company_budget'];
echo $scale=$_SESSION['company_scale'];
echo $type=$_SESSION['company_type'];
echo $product;
?>
<center><a  href="country.php"><img src="images/country.png" width="360" height="80" alt="ssi" /><a/></center><br />
<center><a  href="userchoice.php"><img src="images/citysearch.png" width="360" height="80" alt="msi" /></a></center><br />
