<?php
include('mylib/phpgraphlib.php');

$file = "budget_rating_graph.txt";
$fp = fopen($file, "r");

$var3=array();
$var_name3=array();

	//1
	$data = fgets($fp, 1024);
	$name=preg_replace('/[^a-z]/i', '', $data);
	array_push($var_name3,$name);
	
	$data = fgets($fp, 1024);
	$value=preg_replace('/[^0-9.]/i', '', $data);
	array_push($var3,$value);
	
	
	//2
	$data = fgets($fp, 1024);
	$name=preg_replace('/[^a-z]/i', '', $data);
	array_push($var_name3,$name);


	$data = fgets($fp, 1024);
	$value=preg_replace('/[^0-9.]/i', '', $data);
	array_push($var3,$value);


	//3
	$data = fgets($fp, 1024);
	$name=preg_replace('/[^a-z]/i', '', $data);
	array_push($var_name3,$name);

	$data = fgets($fp, 1024);
	$value=preg_replace('/[^0-9.]/i', '', $data);
	array_push($var3,$value);

	//4

	$data = fgets($fp, 1024);
	$name=preg_replace('/[^a-z]/i', '', $data);
	array_push($var_name3,$name);



	$data = fgets($fp, 1024);
	$value=preg_replace('/[^0-9.]/i', '', $data);
	array_push($var3,$value);

	//5
	$data = fgets($fp, 1024);
	$name=preg_replace('/[^a-z]/i', '', $data);
	array_push($var_name3,$name);


	$data = fgets($fp, 1024);
	$value=preg_replace('/[^0-9.]/i', '', $data);
	array_push($var3,$value);

	//6
	$data = fgets($fp, 1024);
	$name=preg_replace('/[^a-z]/i', '', $data);
	array_push($var_name3,$name);


	$data = fgets($fp, 1024);
	$value=preg_replace('/[^0-9.]/i', '', $data);
	array_push($var3,$value);

	$var_final3=array_combine($var_name3,$var3);

$graph = new PHPGraphLib(640,480);
$graph->setBackgroundColor("black");
$graph->addData($var_final3);
$graph->setBarColor('255,255,204');
$graph->setTitle('Budget Rating');
$graph->setTitleColor('yellow');
$graph->setupYAxis(12, 'yellow');
$graph->setupXAxis(20, 'yellow');
$graph->setGrid(false);
$graph->setGradient('silver', 'gray');
$graph->setBarOutlineColor('white');
$graph->setTextColor('white');
$graph->setDataPoints(true);
$graph->setDataPointColor('yellow');
$graph->setLine(true);
$graph->setLineColor('yellow');
$graph->createGraph();
?>