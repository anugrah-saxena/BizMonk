<?php
session_start();
include("dbcon1.php");


echo $name=$_SESSION['company_name'];
echo "<br>";
echo $budget=$_SESSION['company_budget'];
echo "<br>";
echo $scale=$_SESSION['company_scale'];
echo "<br>";
echo $type=$_SESSION['company_type'];
echo "<br>";
echo $product=$_SESSION['company_product'];

?>
<h1><center>Business Feasibility GUI</center></h1>
<h2><center>Importance Given to :</center></h2>
<hr />


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Importance given to :</title>
<link rel="stylesheet" type="text/css" href="css/form.css" />

<script type="text/javascript" src="student_register_js.js"></script>
   
<style type="text/css">
#form1 div p .third {
	color: #F00;
}
#form1 div h5 .third {
	color: #F00;
}
</style>
</head>

<form id="form5" name="form5" method="post" action="citysearch.php " onSubmit="return finalchek();" , enctype="multipart/form-data">
  <label>
  <div align="center">
    <p>&nbsp;</p>
    
    
  </div>
  </label>

  <p>&nbsp;</p>
  <fieldset class="first"> 


 
     
  

 <div>
   <label>Mordernisation: </label>
    <select name="1" id="1">
	  <option value="10">Very High</option>
	<option value="8.5">High</option>
	<option value="7">Medium</option>
	<option value="5.5">Low</option>
	<option value="4">Very Low</option>
  </select> </div>  
    
	 <div>
   <label>Skilled HR: </label>
    <select name="2" id="2">
	  <option value="10">Very High</option>
	<option value="8.5">High</option>
	<option value="7">Medium</option>
	<option value="5.5">Low</option>
	<option value="4">Very Low</option>
  </select> </div> 

 <div>
   <label>Political Factors location: </label>
    <select name="3" id="3">
	  <option value="10">Very High</option>
	<option value="8.5">High</option>
	<option value="7">Medium</option>
	<option value="5.5">Low</option>
	<option value="4">Very Low</option>
  </select> </div> 
 
   


 
    
		
	
  

 



 <p>&nbsp;</p>
  </fieldset>  
 

 
          
  <fieldset> <input type="submit" name="40" id="40" value="Proceed" />      <input type="reset" name="41"  value="Reset" onClick="clearall(6)" />  </fieldset>
  
  

  
</form>
<div align="center"></div>
