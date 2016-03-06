<?php
session_start();
?>
<h1><center>Business Feasibility GUI</center></h1>
<HR />

<?php


echo $name=$_SESSION['company_name'];
echo $budget=$_SESSION['company_budget'];
echo $scale=$_SESSION['company_scale'];
echo $type=$_SESSION['company_type'];
echo "<pre>"."<pre>";
echo "PLEASE SELECT yOUR PREFERRED COUNTRY TO PROCEED FURTHER";
echo "<pre>"."<pre>";



?>

<html>
<head>
<body>
<hr />
<br />
<br />
<pre>
<center><h3>Please click on the Country to go further for City selection</h3></center>
<center><img src="images/wm.gif" width="640" height="381" alt="bizmonk" usemap="#bizmonk" /></center>
<map name="bizmonk">
	<acronym title="India"><area shape="rectangle" coords="453,201,471,211" alt="india" href="city.php?var=india"></acronym>
	<acronym title="USA"><area shape="rectangle" coords="100,120,200,180" alt="usa" href="city.php?var=usa"></acronym>
</map>
</body>
</head>
</html>
