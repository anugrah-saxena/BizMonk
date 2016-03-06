<?php
session_start();
?>
<h1><center>Business Feasibility GUI</center></h1>

<?php
$name=$_POST[1];
$budget=$_POST[4];

$_SESSION['company_name']=$name;
$_SESSION['company_budget']=$budget;


echo "<hr />";
?>

<center><a  href="market.php?var2=ssi"><img src="images/SSI.png" width="360" height="80" alt="ssi" /><a/></center><br />
<center><a  href="market.php?var2=msi"><img src="images/MSI.png" width="360" height="80" alt="msi" /></a></center><br />
<center><a  href="market.php?var2=lsi"><img src="images/LSI.png" width="360" height="80" alt="lsi" /></a></center><br />