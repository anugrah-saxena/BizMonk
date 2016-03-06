<?php
include('mylib/phpgraphlib.php');
include('mylib/phpgraphlib_stacked.php');

$file = "city_hr_resource_analysis_graph.txt";
$fp = fopen($file, "r");

//for the variable 1
$data_L=array();
$data_T=array();
$data_M=array();
$cvar_name=array();

while(($city_name = fgets($fp, 1024))!=NULL)
{

	// city name pushed
	$city_name=preg_replace('/[^a-z]/i', '', $city_name);
	array_push($cvar_name,$city_name);
	
	//1	
	$data = fgets($fp, 1024);
	$value=preg_replace('/[^0-9.]/i', '', $data);
	array_push($data_L,$value);
	
	
	//2
	$data = fgets($fp, 1024);
	$value=preg_replace('/[^0-9.]/i', '', $data);
	array_push($data_T,$value);


	//3
	$data = fgets($fp, 1024);
	$value=preg_replace('/[^0-9.]/i', '', $data);
	array_push($data_M,$value);

}//bracket to be closed here

$l_final=array_combine($cvar_name,$data_L);
$t_final2=array_combine($cvar_name,$data_T);
$m_final3=array_combine($cvar_name,$data_M);

$graph = new PHPGraphLibStacked(500,480);
$graph->addData($l_final,$t_final2,$m_final3);
$graph->setTitle('City HR Analysis');
$graph->setTitleLocation('left');
$graph->setXValuesHorizontal(TRUE);
$graph->setTextColor('blue');
$graph->setBarColor('#0066CC', '#669999', '#66CCCC');
$graph->setLegend(TRUE);
$graph->setLegendTitle('Labour Skill','Technical Skill','Management Skill');


$graph->createGraph();
print_r($l_final);
?>