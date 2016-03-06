<?php
include('mylib/phpgraphlib.php');

$file = "city_location_finder_graph.txt";
$fp = fopen($file, "r");

//for the variable 1
$var=array();
$var_name=array();

$t_name = fgets($fp, 1024);
if($t_name!=NULL)
{
$t_code = fgets($fp, 1024);

//buidling rating name
$data = fgets($fp, 1024);
$name=preg_replace('/[^a-z]/i', '', $data);
array_push($var_name,$name);

//buidling rating
$data = fgets($fp, 1024);
$value=preg_replace('/[^a-z]/i', '', $data);
if($value=='aplus')
				$point=10;
			else if($value=='a')
					$point=9;
			else if($value=='bplus')
				$point=8.5;
			else if($value=='b')
				$point=7;
			else if($value=='c')
				$point=6;
			else
				$point=0;
array_push($var,$point);


//building cost name
$data = fgets($fp, 1024);
$name=preg_replace('/[^a-z]/i', '', $data);
array_push($var_name,$name);

//building cost value
$data = fgets($fp, 1024);
$value=preg_replace('/[^0-9]/i', '', $data);
array_push($var,$value);


//building area name
$data = fgets($fp, 1024);
$name=preg_replace('/[^a-z]/i', '', $data);
array_push($var_name,$name);

//buidling area value
$data = fgets($fp, 1024);
$value=preg_replace('/[^0-9]/i', '', $data);
array_push($var,$value/10);

//area rating name

$data = fgets($fp, 1024);
$name=preg_replace('/[^a-z]/i', '', $data);
array_push($var_name,$name);


//area rating value
$data = fgets($fp, 1024);
$value=preg_replace('/[^a-z]/i', '', $data);
if($value=='aplus')
				$point=10;
			else if($value=='a')
					$point=9;
			else if($value=='bplus')
				$point=8.5;
			else if($value=='b')
				$point=7;
			else if($value=='c')
				$point=6;
			else
				$point=0;
array_push($var,$point);

//Airport Distance name
$data = fgets($fp, 1024);
$name=preg_replace('/[^a-z]/i', '', $data);
array_push($var_name,$name);

//Airport Distance value
$data = fgets($fp, 1024);
$value=preg_replace('/[^0-9]/i', '', $data);
array_push($var,$value);

//Train Distance name
$data = fgets($fp, 1024);
$name=preg_replace('/[^a-z]/i', '', $data);
array_push($var_name,$name);

//Train Distance value
$data = fgets($fp, 1024);
$value=preg_replace('/[^0-9]/i', '', $data);
array_push($var,$value);

//bus depot Distance name
$data = fgets($fp, 1024);
$name=preg_replace('/[^a-z]/i', '', $data);
array_push($var_name,$name);

//busdepot Distance value
$data = fgets($fp, 1024);
$value=preg_replace('/[^0-9]/i', '', $data);
array_push($var,$value);


$var_final=array_combine($var_name,$var);

}//bracket to be closed here


//for the variable 2
$var2=array();
$var_name2=array();

$t_name2 = fgets($fp, 1024);
if($t_name2!=NULL)
{
$t_code2 = fgets($fp, 1024);

//buidling rating name
$data = fgets($fp, 1024);
$name=preg_replace('/[^a-z]/i', '', $data);
array_push($var_name2,$name);

//buidling rating
$data = fgets($fp, 1024);
$value=preg_replace('/[^a-z]/i', '', $data);
if($value=='aplus')
				$point=10;
			else if($value=='a')
					$point=9;
			else if($value=='bplus')
				$point=8.5;
			else if($value=='b')
				$point=7;
			else if($value=='c')
				$point=6;
			else
				$point=0;
array_push($var2,$point);


//building cost name
$data = fgets($fp, 1024);
$name=preg_replace('/[^a-z]/i', '', $data);
array_push($var_name2,$name);

//building cost value
$data = fgets($fp, 1024);
$value=preg_replace('/[^0-9]/i', '', $data);
array_push($var2,$value);


//building area name
$data = fgets($fp, 1024);
$name=preg_replace('/[^a-z]/i', '', $data);
array_push($var_name2,$name);

//buidling area value
$data = fgets($fp, 1024);
$value=preg_replace('/[^0-9]/i', '', $data);
array_push($var2,$value/10);

//area rating name

$data = fgets($fp, 1024);
$name=preg_replace('/[^a-z]/i', '', $data);
array_push($var_name2,$name);


//area rating value
$data = fgets($fp, 1024);
$value=preg_replace('/[^a-z]/i', '', $data);
if($value=='aplus')
				$point=10;
			else if($value=='a')
					$point=9;
			else if($value=='bplus')
				$point=8.5;
			else if($value=='b')
				$point=7;
			else if($value=='c')
				$point=6;
			else
				$point=0;
array_push($var2,$point);

//Airport Distance name
$data = fgets($fp, 1024);
$name=preg_replace('/[^a-z]/i', '', $data);
array_push($var_name2,$name);

//Airport Distance value
$data = fgets($fp, 1024);
$value=preg_replace('/[^0-9]/i', '', $data);
array_push($var2,$value);

//Train Distance name
$data = fgets($fp, 1024);
$name=preg_replace('/[^a-z]/i', '', $data);
array_push($var_name2,$name);

//Train Distance value
$data = fgets($fp, 1024);
$value=preg_replace('/[^0-9]/i', '', $data);
array_push($var2,$value);

//bus depot Distance name
$data = fgets($fp, 1024);
$name=preg_replace('/[^a-z]/i', '', $data);
array_push($var_name2,$name);

//busdepot Distance value
$data = fgets($fp, 1024);
$value=preg_replace('/[^0-9]/i', '', $data);
array_push($var2,$value);


$var_final2=array_combine($var_name2,$var2);

}//bracket to be closed here


//for the variable 1
$var3=array();
$var_name3=array();

$t_name3 = fgets($fp, 1024);
if($t_name3!=NULL)
{
$t_code3 = fgets($fp, 1024);

//buidling rating name
$data = fgets($fp, 1024);
$name=preg_replace('/[^a-z]/i', '', $data);
array_push($var_name3,$name);

//buidling rating
$data = fgets($fp, 1024);
$value=preg_replace('/[^a-z]/i', '', $data);
if($value=='aplus')
				$point=10;
			else if($value=='a')
					$point=9;
			else if($value=='bplus')
				$point=8.5;
			else if($value=='b')
				$point=7;
			else if($value=='c')
				$point=6;
			else
				$point=0;
array_push($var3,$point);


//building cost name
$data = fgets($fp, 1024);
$name=preg_replace('/[^a-z]/i', '', $data);
array_push($var_name3,$name);

//building cost value
$data = fgets($fp, 1024);
$value=preg_replace('/[^0-9]/i', '', $data);
array_push($var3,$value);


//building area name
$data = fgets($fp, 1024);
$name=preg_replace('/[^a-z]/i', '', $data);
array_push($var_name3,$name);

//buidling area value
$data = fgets($fp, 1024);
$value=preg_replace('/[^0-9]/i', '', $data);
array_push($var3,$value/10);

//area rating name

$data = fgets($fp, 1024);
$name=preg_replace('/[^a-z]/i', '', $data);
array_push($var_name3,$name);


//area rating value
$data = fgets($fp, 1024);
$value=preg_replace('/[^a-z]/i', '', $data);
if($value=='aplus')
				$point=10;
			else if($value=='a')
					$point=9;
			else if($value=='bplus')
				$point=8.5;
			else if($value=='b')
				$point=7;
			else if($value=='c')
				$point=6;
			else
				$point=0;
array_push($var3,$point);

//Airport Distance name
$data = fgets($fp, 1024);
$name=preg_replace('/[^a-z]/i', '', $data);
array_push($var_name3,$name);

//Airport Distance value
$data = fgets($fp, 1024);
$value=preg_replace('/[^0-9]/i', '', $data);
array_push($var3,$value);

//Train Distance name
$data = fgets($fp, 1024);
$name=preg_replace('/[^a-z]/i', '', $data);
array_push($var_name3,$name);

//Train Distance value
$data = fgets($fp, 1024);
$value=preg_replace('/[^0-9]/i', '', $data);
array_push($var3,$value);

//bus depot Distance name
$data = fgets($fp, 1024);
$name=preg_replace('/[^a-z]/i', '', $data);
array_push($var_name3,$name);

//busdepot Distance value
$data = fgets($fp, 1024);
$value=preg_replace('/[^0-9]/i', '', $data);
array_push($var3,$value);


$var_final3=array_combine($var_name3,$var3);

}//bracket to be closed here


//for the variable 4
$var4=array();
$var_name4=array();

$t_name4 = fgets($fp, 1024);
if($t_name4!=NULL)
{
$t_code4 = fgets($fp, 1024);

//buidling rating name
$data = fgets($fp, 1024);
$name=preg_replace('/[^a-z]/i', '', $data);
array_push($var_name4,$name);

//buidling rating
$data = fgets($fp, 1024);
$value=preg_replace('/[^a-z]/i', '', $data);
if($value=='aplus')
				$point=10;
			else if($value=='a')
					$point=9;
			else if($value=='bplus')
				$point=8.5;
			else if($value=='b')
				$point=7;
			else if($value=='c')
				$point=6;
			else
				$point=0;
array_push($var4,$point);


//building cost name
$data = fgets($fp, 1024);
$name=preg_replace('/[^a-z]/i', '', $data);
array_push($var_name4,$name);

//building cost value
$data = fgets($fp, 1024);
$value=preg_replace('/[^0-9]/i', '', $data);
array_push($var4,$value);


//building area name
$data = fgets($fp, 1024);
$name=preg_replace('/[^a-z]/i', '', $data);
array_push($var_name4,$name);

//buidling area value
$data = fgets($fp, 1024);
$value=preg_replace('/[^0-9]/i', '', $data);
array_push($var4,$value);

//area rating name

$data = fgets($fp, 1024);
$name=preg_replace('/[^a-z]/i', '', $data);
array_push($var_name4,$name);


//area rating value
$data = fgets($fp, 1024);
$value=preg_replace('/[^a-z]/i', '', $data);
if($value=='aplus')
				$point=10;
			else if($value=='a')
					$point=9;
			else if($value=='bplus')
				$point=8.5;
			else if($value=='b')
				$point=7;
			else if($value=='c')
				$point=6;
			else
				$point=0;
array_push($var4,$point);

//Airport Distance name
$data = fgets($fp, 1024);
$name=preg_replace('/[^a-z]/i', '', $data);
array_push($var_name4,$name);

//Airport Distance value
$data = fgets($fp, 1024);
$value=preg_replace('/[^0-9]/i', '', $data);
array_push($var4,$value);

//Train Distance name
$data = fgets($fp, 1024);
$name=preg_replace('/[^a-z]/i', '', $data);
array_push($var_name4,$name);

//Train Distance value
$data = fgets($fp, 1024);
$value=preg_replace('/[^0-9]/i', '', $data);
array_push($var4,$value);

//bus depot Distance name
$data = fgets($fp, 1024);
$name=preg_replace('/[^a-z]/i', '', $data);
array_push($var_name4,$name);

//busdepot Distance value
$data = fgets($fp, 1024);
$value=preg_replace('/[^0-9]/i', '', $data);
array_push($var4,$value);


$var_final4=array_combine($var_name4,$var4);

}//bracket to be closed here









$graph = new PHPGraphLib(800,600);

$graph->addData($var_final,$var_final2,$var_final3,$var_final4);
$graph->setupYAxis("15");
$graph->setGradient('teal', '#0000FF');
$graph->setXValuesHorizontal(true);
$graph->setXAxisTextColor ('navy');
$graph->setLegend(true);
$l1="'".$t_name.$t_code."'";
$l1=preg_replace('/[^a-z0-9_]/i', '', $l1);
$l2="'".$t_name2.$t_code2."'";
$l2=preg_replace('/[^a-z0-9_]/i', '', $l2);
$l3="'".$t_name3.$t_code3."'";
$l3=preg_replace('/[^a-z0-9_]/i', '', $l3);
$l4="'".$t_name4.$t_code4."'";
$l4=preg_replace('/[^a-z0-9_]/i', '', $l4);
$graph->setLegendTitle($l1,$l2,$l3,$l4);
$graph->createGraph();
?>