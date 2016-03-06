<?php
session_start();
?>
<h1><center>Business Feasibility GUI</center></h1>
<HR />
<?php
$country=$_GET['var'];
$_SESSION['company_country']=$country;

$product=$_SESSION['company_product'];
$name=$_SESSION['company_name'];
$budget=$_SESSION['company_budget'];
$scale=$_SESSION['company_scale'];
$type=$_SESSION['company_type'];


if($country==india)
	{
	
	echo "<center><img src=\"images/india.jpg\" width=\"640\" height=\"480\" alt=\"bizmonk\" usemap=\"#india\" /></center>";
	echo "<map name=\"india\">";
		echo "<acronym title=\"Jaipur\"><area shape=\"rectangle\" coords=\"172,155,192,175\" alt=\"jaipur\" href=\"gui.php?var5=jaipur\"></acronym>";
		echo "<acronym title=\"Delhi\"><area shape=\"rectangle\" coords=\"210,120,225,135\" alt=\"delhi\" href=\"gui.php?var5=delhi\"></acronym>";
		echo "<acronym title=\"Mumbai\"><area shape=\"rectangle\" coords=\"185,260,200,280\" alt=\"mumbai\" href=\"gui.php?var5=mumbai\"></acronym>";
		//echo "<acronym title=\"Kolkata\"><area shape=\"rectangle\" coords=\"210,355,230,375\" alt=\"kolkata\" href=\"gui.php?var5=kolkata\"></acronym>";
		echo "<acronym title=\"Bangalore\"><area shape=\"rectangle\" coords=\"210,355,230,375\" alt=\"bangalore\" href=\"gui.php?var5=bangalore\"></acronym>";

		echo "</map>";

	}
if($country==usa)
	echo "Sorry, No database found for your support. Please try later!";
?>