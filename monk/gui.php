<?php
session_start();
?>
<h1><center>Business Feasibility GUI</center></h1>
<HR />

<?php

$file='ecoquery.pl';
$eco='eco:-';

$city=$_GET['var5'];
echo $_SESSION['company_city']=$city;
echo $product=$_SESSION['company_product'];
echo $name=$_SESSION['company_name'];
echo $industry=$_SESSION['company_industry'];
echo $budget=$_SESSION['company_budget'];
echo $scale=$_SESSION['company_scale'];
echo $type=$_SESSION['company_type'];
echo $country=$_SESSION['company_country'];


$querybudget='budget_rating('.$scale.','.$product.','.$country.','.$budget.'),';
	file_put_contents($file,$eco);
	file_put_contents($file,$querybudget, FILE_APPEND | LOCK_EX);
	
$querycompetition='ecofeasibility('.$scale.','.$product.','.$country.','.$city.').';
	file_put_contents($file,$querycompetition, FILE_APPEND | LOCK_EX);

	echo $querybudget;
	echo $querycompetition;
	

// starting prolog engine
$path="/Program Files/pl/bin/swipl-win.exe";
$realpath=realpath($path);
echo "REALPATH OF SWIPL-WIN.EXE IS: ".$realpath."<br \>";

$spath="/xampp/htdocs/monk/retest.pl";
$srealpath=realpath($spath);
echo "REALPATH OF SOURCE.PL IS: ".$srealpath."<br \>";

//$cmd="start C:\\Program\" \"Files\\pl\\bin\\swipl-win.exe -f ".$srealpath." -g kola"; // here we need to check  kola ki jagah agar $query correct format me lagate hain to prolog khulta to hai but closes automatically
//echo $cmd."<br />";
//exec($cmd, $os1);
//echo $query;
?>
