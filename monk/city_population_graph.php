<?php // content="text/plain; charset=utf-8"
require_once ('jpgraph/jpgraph.php');
require_once ('jpgraph/jpgraph_bar.php');


$file = "staff_skill_analysis_graph.txt";
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



// Create the graph. These two calls are always required
$graph = new Graph(550,400,'auto');
$graph->SetScale("textlin");

//$theme_class=new UniversalTheme;
//$graph->SetTheme($theme_class);

$graph->yaxis->SetTickPositions(array(0,30,60,90,120,150), array(15,45,75,105,135));
$graph->SetBox(false);

$graph->ygrid->SetFill(false);
$graph->xaxis->SetTickLabels($cvar_name);
$graph->yaxis->HideLine(false);
$graph->yaxis->HideTicks(false,false);

// Create the bar plots
$b1plot = new BarPlot($data_L);
$b2plot = new BarPlot($data_T);
$b3plot = new BarPlot($data_M);

// Create the grouped bar plot
$gbplot = new GroupBarPlot(array($b1plot,$b2plot,$b3plot));
// ...and add it to the graPH
$graph->Add($gbplot);


$b1plot->SetColor("white");
$b1plot->SetFillColor("#cc1111");

$b2plot->SetColor("white");
$b2plot->SetFillColor("#11cccc");

$b3plot->SetColor("white");
$b3plot->SetFillColor("#1111cc");

$graph->title->Set('City HR Skill Analysis');

$t1 = new Text("Red: Labour Staff");
$t1->SetPos(0.05,0.07);
$t1->SetOrientation("h");
$t1->SetFont(FF_FONT1,FS_NORMAL);
$t1->SetBox("white","black",'gray');
$t1->SetColor("black");
$graph->AddText($t1);

$t2 = new Text("Cyan: Technical Staff");
$t2->SetPos(0.35,0.07);
$t2->SetOrientation("h");
$t2->SetFont(FF_FONT1,FS_NORMAL);
$t2->SetBox("white","black",'gray');
$t2->SetColor("black");
$graph->AddText($t2);

$t3 = new Text("Blue: Management Staff");
$t3->SetPos(0.7,0.07);
$t3->SetOrientation("h");
$t3->SetFont(FF_FONT1,FS_NORMAL);
$t3->SetBox("white","black",'gray');
$t3->SetColor("black");
$graph->AddText($t3);
// Display the graph
$graph->Stroke();
?>
