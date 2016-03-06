<?php


	$company=array();
	$company_data=array();
    $file = "tophp2.txt";
    $fp = fopen($file, "r");
    while(!feof($fp)) {
	$name = fgets($fp, 1024);
	$name=preg_replace('/[^a-z]/i', '', $name);
    $data = fgets($fp, 1024);
	$data=preg_replace('/[^0-9.]/i', '', $data);
	


	//echo $name.$data ."<br>";
	array_push($company,$name);
	array_push($company_data,$data);
    }
	
//	foreach($company as $cname)
	//	echo "$cname<br />";
	
	//foreach($company_data as $cdata)
		//echo "$cdata<br />";
		
	$values=array_combine($company,$company_data);
	//print_r($values);
	
    fclose($fp);



include('mylib/phpgraphlib.php');
include('mylib/phpgraphlib_pie.php');
$graph=new PHPGraphLibPie(400,200);
//$data=array("CBS" => 6.3, "NBS" => 4.5);
$graph->addData($values);
$graph->setLabelTextColor('50,50,50,');
$graph->setLegendTextColor('50,50,50,');
$graph->createGraph();
?>