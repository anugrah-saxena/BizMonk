<?php
session_start();
?>
<h1><center>Business Feasibility GUI</center></h1>
<HR />

<?php

$file='geoquery.pl';
$geo='geo:-';
$country=$_POST['state'];

$location=$_POST['loc'];
$d='[';
$numloc=count($location);


for($numloc=0,$i=0;$location[$i]!=NULL;$i++)
	$numloc++;


for($i=0;$i<$numloc;$i++)
	{
	//echo $location[$i];
		$d=$d.$location[$i];
		if($i<$numloc-1&$location[$i]!=NULL)
			$d=$d.',';
	}
	$d=$d.']';
	echo $d;



echo $product=$_SESSION['company_product'];
echo "<br>";
echo $name=$_SESSION['company_name'];
echo "<br>";
echo $budget=$_SESSION['company_budget'];
echo "<br>";
echo $scale=$_SESSION['company_scale'];
echo "<br>";
echo $type=$_SESSION['company_type'];
echo "<br>";
echo $point_amenities=$_SESSION['point_amenities'];
echo "<br>";
echo $point_hr=$_SESSION['point_hr'];
echo "<br>";
echo $point_political=$_SESSION['point_political'];




$queryamenities='r('.$type.','.$d.'),';
$queryhr='q('.$d.','.$type.'),';
$querypolitical='k('.$scale.','.$type.','.$country.','.$d.'),';
$queryoutput_geo='w('.$d.','.$point_amenities.','.$point_hr.','.$point_political.').';

	file_put_contents($file,$geo);
	file_put_contents($file,$queryamenities, FILE_APPEND | LOCK_EX);
	file_put_contents($file,$queryhr, FILE_APPEND | LOCK_EX);
    file_put_contents($file,$querypolitical, FILE_APPEND | LOCK_EX);
    file_put_contents($file,$queryoutput_geo, FILE_APPEND | LOCK_EX);
	

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
