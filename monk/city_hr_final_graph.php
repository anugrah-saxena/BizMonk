<?php
include('mylib/phpgraphlib.php');

$file = "city_hr_final_graph.txt";
$fp = fopen($file, "r");

$var=array();
$cvar_name=array();

while(($city_name = fgets($fp, 1024))!=NULL)
{
	// city name pushed
	$city_name=preg_replace('/[^a-z]/i', '', $city_name);
	array_push($cvar_name,$city_name);
	
	//1	
	$data = fgets($fp, 1024);
	$value=preg_replace('/[^0-9.]/i', '', $data);
	array_push($var,$value);
}//bracket to be closed here

	$var_final3=array_combine($cvar_name,$var);

$graph = new PHPGraphLib(640,480);
$graph->setBackgroundColor("black");
$graph->addData($var_final3);
$graph->setBarColor('205,205,205');
$graph->setTitle('City HR FINAL RATING');
$graph->setTitleColor('yellow');
$graph->setupYAxis(12, 'red');
$graph->setupXAxis(20, 'red');
$graph->setGrid(false);
$graph->setGradient('white', 'gray');
$graph->setBarOutlineColor('white');
$graph->setTextColor('white');
$graph->setDataPoints(true);
$graph->setDataPointColor('yellow');
$graph->setLine(true);
$graph->setLineColor('yellow');
$graph->createGraph();
?>