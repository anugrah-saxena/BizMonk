<?php
include('mylib/phpgraphlib.php');

$file = "city_basic_amenities_graph.txt";
$fp = fopen($file, "r");

//for the variable 1
$var=array();
$var_name=array();

$city_name = fgets($fp, 1024);
if($city_name!=NULL)
{

	//1
	$data = fgets($fp, 1024);
	$name=preg_replace('/[^a-z]/i', '', $data);
	array_push($var_name,$name);
	
	$data = fgets($fp, 1024);
	$value=preg_replace('/[^0-9.]/i', '', $data);
	array_push($var,$value);
	
	
	//2
	$data = fgets($fp, 1024);
	$name=preg_replace('/[^a-z]/i', '', $data);
	array_push($var_name,$name);


	$data = fgets($fp, 1024);
	$value=preg_replace('/[^0-9.]/i', '', $data);
	array_push($var,$value);


	//3
	$data = fgets($fp, 1024);
	$name=preg_replace('/[^a-z]/i', '', $data);
	array_push($var_name,$name);

	$data = fgets($fp, 1024);
	$value=preg_replace('/[^0-9.]/i', '', $data*10);
	array_push($var,$value);

	//4

	$data = fgets($fp, 1024);
	$name=preg_replace('/[^a-z]/i', '', $data);
	array_push($var_name,$name);



	$data = fgets($fp, 1024);
	$value=preg_replace('/[^0-9.]/i', '', $data*10);
	array_push($var,$value);

	//5
	$data = fgets($fp, 1024);
	$name=preg_replace('/[^a-z]/i', '', $data);
	array_push($var_name,$name);


	$data = fgets($fp, 1024);
	$value=preg_replace('/[^0-9.]/i', '', $data*10);
	array_push($var,$value);

	//6
	$data = fgets($fp, 1024);
	$name=preg_replace('/[^a-z]/i', '', $data);
	array_push($var_name,$name);


	$data = fgets($fp, 1024);
	$value=preg_replace('/[^0-9.]/i', '', $data);
	array_push($var,$value);

	$var_final=array_combine($var_name,$var);

}//bracket to be closed here

$var2=array();
$var_name2=array();
$city_name2 = fgets($fp, 1024);
if($city_name2!=NULL)
{

	//1
	$data = fgets($fp, 1024);
	$name=preg_replace('/[^a-z]/i', '', $data);
	array_push($var_name2,$name);
	
	$data = fgets($fp, 1024);
	$value=preg_replace('/[^0-9.]/i', '', $data);
	array_push($var2,$value);
	
	
	//2
	$data = fgets($fp, 1024);
	$name=preg_replace('/[^a-z]/i', '', $data);
	array_push($var_name2,$name);


	$data = fgets($fp, 1024);
	$value=preg_replace('/[^0-9.]/i', '', $data);
	array_push($var2,$value);


	//3
	$data = fgets($fp, 1024);
	$name=preg_replace('/[^a-z]/i', '', $data);
	array_push($var_name2,$name);

	$data = fgets($fp, 1024);
	$value=preg_replace('/[^0-9.]/i', '', $data*10);
	array_push($var2,$value);

	//4

	$data = fgets($fp, 1024);
	$name=preg_replace('/[^a-z]/i', '', $data);
	array_push($var_name2,$name);



	$data = fgets($fp, 1024);
	$value=preg_replace('/[^0-9.]/i', '', $data*10);
	array_push($var2,$value);

	//5
	$data = fgets($fp, 1024);
	$name=preg_replace('/[^a-z]/i', '', $data);
	array_push($var_name2,$name);


	$data = fgets($fp, 1024);
	$value=preg_replace('/[^0-9.]/i', '', $data*10);
	array_push($var2,$value);

	//6
	$data = fgets($fp, 1024);
	$name=preg_replace('/[^a-z]/i', '', $data);
	array_push($var_name2,$name);


	$data = fgets($fp, 1024);
	$value=preg_replace('/[^0-9.]/i', '', $data);
	array_push($var2,$value);

	$var_final2=array_combine($var_name2,$var2);

}//bracket to be closed here


$var3=array();
$var_name3=array();
$city_name3 = fgets($fp, 1024);
if($city_name3!=NULL)
{

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
	$value=preg_replace('/[^0-9.]/i', '', $data*10);
	array_push($var3,$value);

	//4

	$data = fgets($fp, 1024);
	$name=preg_replace('/[^a-z]/i', '', $data);
	array_push($var_name3,$name);



	$data = fgets($fp, 1024);
	$value=preg_replace('/[^0-9.]/i', '', $data*10);
	array_push($var3,$value);

	//5
	$data = fgets($fp, 1024);
	$name=preg_replace('/[^a-z]/i', '', $data);
	array_push($var_name3,$name);


	$data = fgets($fp, 1024);
	$value=preg_replace('/[^0-9.]/i', '', $data*10);
	array_push($var3,$value);

	//6
	$data = fgets($fp, 1024);
	$name=preg_replace('/[^a-z]/i', '', $data);
	array_push($var_name3,$name);


	$data = fgets($fp, 1024);
	$value=preg_replace('/[^0-9.]/i', '', $data);
	array_push($var3,$value);

	$var_final3=array_combine($var_name3,$var3);

}//bracket to be closed here


//for the variable 1
$var4=array();
$var_name4=array();

$city_name4 = fgets($fp, 1024);
if($city_name4!=NULL)
{

	//1
	$data = fgets($fp, 1024);
	$name=preg_replace('/[^a-z]/i', '', $data);
	array_push($var_name4,$name);
	
	$data = fgets($fp, 1024);
	$value=preg_replace('/[^0-9.]/i', '', $data);
	array_push($var4,$value);
	
	
	//2
	$data = fgets($fp, 1024);
	$name=preg_replace('/[^a-z]/i', '', $data);
	array_push($var_name4,$name);


	$data = fgets($fp, 1024);
	$value=preg_replace('/[^0-9.]/i', '', $data);
	array_push($var4,$value);


	//3
	$data = fgets($fp, 1024);
	$name=preg_replace('/[^a-z]/i', '', $data);
	array_push($var_name4,$name);

	$data = fgets($fp, 1024);
	$value=preg_replace('/[^0-9.]/i', '', $data*10);
	array_push($var4,$value);

	//4

	$data = fgets($fp, 1024);
	$name=preg_replace('/[^a-z]/i', '', $data);
	array_push($var_name4,$name);



	$data = fgets($fp, 1024);
	$value=preg_replace('/[^0-9.]/i', '', $data*10);
	array_push($var4,$value);

	//5
	$data = fgets($fp, 1024);
	$name=preg_replace('/[^a-z]/i', '', $data);
	array_push($var_name4,$name);


	$data = fgets($fp, 1024);
	$value=preg_replace('/[^0-9.]/i', '', $data*10);
	array_push($var4,$value);

	//6
	$data = fgets($fp, 1024);
	$name=preg_replace('/[^a-z]/i', '', $data);
	array_push($var_name4,$name);


	$data = fgets($fp, 1024);
	$value=preg_replace('/[^0-9.]/i', '', $data);
	array_push($var4,$value);

	$var_final4=array_combine($var_name4,$var4);

}//bracket to be closed here


//for the variable 1
$var5=array();
$var_name5=array();

$city_name5 = fgets($fp, 1024);
if($city_name5!=NULL)
{

	//1
	$data = fgets($fp, 1024);
	$name=preg_replace('/[^a-z]/i', '', $data);
	array_push($var_name5,$name);
	
	$data = fgets($fp, 1024);
	$value=preg_replace('/[^0-9.]/i', '', $data);
	array_push($var5,$value);
	
	
	//2
	$data = fgets($fp, 1024);
	$name=preg_replace('/[^a-z]/i', '', $data);
	array_push($var_name5,$name);


	$data = fgets($fp, 1024);
	$value=preg_replace('/[^0-9.]/i', '', $data);
	array_push($var5,$value);


	//3
	$data = fgets($fp, 1024);
	$name=preg_replace('/[^a-z]/i', '', $data);
	array_push($var_name5,$name);

	$data = fgets($fp, 1024);
	$value=preg_replace('/[^0-9.]/i', '', $data*10);
	array_push($var5,$value);

	//4

	$data = fgets($fp, 1024);
	$name=preg_replace('/[^a-z]/i', '', $data);
	array_push($var_name5,$name);



	$data = fgets($fp, 1024);
	$value=preg_replace('/[^0-9.]/i', '', $data*10);
	array_push($var5,$value);

	//5
	$data = fgets($fp, 1024);
	$name=preg_replace('/[^a-z]/i', '', $data);
	array_push($var_name5,$name);


	$data = fgets($fp, 1024);
	$value=preg_replace('/[^0-9.]/i', '', $data*10);
	array_push($var5,$value);

	//6
	$data = fgets($fp, 1024);
	$name=preg_replace('/[^a-z]/i', '', $data);
	array_push($var_name5,$name);


	$data = fgets($fp, 1024);
	$value=preg_replace('/[^0-9.]/i', '', $data);
	array_push($var5,$value);

	$var_final5=array_combine($var_name5,$var5);

}//bracket to be closed here








$graph = new PHPGraphLib(640,600);

$graph->addData($var_final,$var_final2,$var_final3,$var_final4,$var_final5);
$graph->setupYAxis("15");
$graph->setGradient('teal', '#0000FF');
$graph->setXValuesHorizontal(true);
$graph->setXAxisTextColor ('navy');
$graph->setLegend(true);
$l1="'".$city_name."'";
$l1=preg_replace('/[^a-z0-9_]/i', '', $l1);
$l2="'".$city_name2."'";
$l2=preg_replace('/[^a-z0-9_]/i', '', $l2);
$l3="'".$city_name3."'";
$l3=preg_replace('/[^a-z0-9_]/i', '', $l3);
$l4="'".$city_name4."'";
$l4=preg_replace('/[^a-z0-9_]/i', '', $l4);
$l5="'".$city_name5."'";
$l5=preg_replace('/[^a-z0-9_]/i', '', $l5);
$graph->setLegendTitle($l1,$l2,$l3,$l4,$l5);
$graph->createGraph();
?>