<?php
session_start();
?>
<h1><center>Business Feasibility GUI</center></h1>
<hr />

<?php
$type=$_GET['var3'];
echo $type;
$name=$_SESSION['company_name'];
$budget=$_SESSION['company_budget'];
$scale=$_SESSION['company_scale'];
$_SESSION['company_type']=$type;


echo "<pre>"."<pre>";
echo "PLEASE BE PATIENCE OUR SYSTEM IS ANALYSING INFORMATION";
echo "<pre>"."<pre>";
echo "finalcheck"."(".$name.",".$scale.",".$budget.",".$type.")".".";

echo "<hr />";

if($type==product_based)
{
	
		echo "<br /><center><a  href=\"decide.php?var4=websites\"><img src=\"images/websites.png\" width=\"360\" height=\"80\" alt=\"ssi\" /><a/></center><br />";
		echo "<center><a  href=\"decide.php?var4=socialnetworks\"><img src=\"images/socialnetworks.png\" width=\"360\" height=\"80\" alt=\"ssi\" /><a/></center><br />";
		echo "<br /><center><a  href=\"decide.php?var4=food\"><img src=\"images/food.png\" width=\"360\" height=\"80\" alt=\"ssi\" /><a/></center><br />";
		echo "<center><a  href=\"decide.php?var4=clothing\"><img src=\"images/clothing.png\" width=\"360\" height=\"80\" alt=\"ssi\" /><a/></center><br />";
	
}


	if($type==services)
	{
		echo "<br /><center><a  href=\"decide.php?var4=telecommunication\"><img src=\"images/tele.png\" width=\"360\" height=\"80\" alt=\"ssi\" /><a/></center><br />";
		echo "<br /><center><a  href=\"decide.php?var4=hotels\"><img src=\"images/hotels.png\" width=\"360\" height=\"80\" alt=\"ssi\" /><a/></center><br />";
		echo "<br /><center><a  href=\"decide.php?var4=sap\"><img src=\"images/sap.png\" width=\"360\" height=\"80\" alt=\"ssi\" /><a/></center><br />";
		echo "<br /><center><a  href=\"decide.php?var4=battery\"><img src=\"images/battery.png\" width=\"360\" height=\"80\" alt=\"ssi\" /><a/></center><br />";
}

	if($type==services)
	{
		echo "<br /><center><a  href=\"decide.php?var4=telecommunication\"><img src=\"images/tele.png\" width=\"360\" height=\"80\" alt=\"ssi\" /><a/></center><br />";
		echo "<br /><center><a  href=\"decide.php?var4=hotels\"><img src=\"images/hotels.png\" width=\"360\" height=\"80\" alt=\"ssi\" /><a/></center><br />";
		echo "<br /><center><a  href=\"decide.php?var4=sap\"><img src=\"images/sap.png\" width=\"360\" height=\"80\" alt=\"ssi\" /><a/></center><br />";
		echo "<br /><center><a  href=\"decide.php?var4=battery\"><img src=\"images/battery.png\" width=\"360\" height=\"80\" alt=\"ssi\" /><a/></center><br />";
}


?>