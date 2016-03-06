<?php
session_start();
include("dbcon1.php");


echo $name=$_SESSION['company_name'];
echo $budget=$_SESSION['company_budget'];
echo $scale=$_SESSION['company_scale'];
echo $type=$_SESSION['company_type'];
echo $product=$_SESSION['company_product'];
echo $point_amenities=$_POST[1];
echo $point_hr=$_POST[2];
echo $point_political=$_POST[3];
$_SESSION['point_amenities']=$point_amenities;
$_SESSION['point_hr']=$point_hr;
$_SESSION['point_political']=$point_political;

?>
<h1><center>Business Feasibility GUI</center></h1>
<hr />
<script>
function getXMLHTTP() { //fuction to return the xml http object
		var xmlhttp=false;	
		try{
			xmlhttp=new XMLHttpRequest();
		}
		catch(e)	{		
			try{			
				xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
			}
			catch(e){
				try{
				xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
				}
				catch(e1){
					xmlhttp=false;
				}
			}
		}
		 	
		return xmlhttp;
	}
	
	
	
	function getCity(strURL) {		
		
		var req = getXMLHTTP();
		
		if (req) {
			
			req.onreadystatechange = function() {
				if (req.readyState == 4) {
					// only if "OK"
					if (req.status == 200) {						
						document.getElementById('citydiv').innerHTML=req.responseText;						
					} else {
						alert("There was a problem while using XMLHTTP:\n" + req.statusText);
					}
				}				
			}			
			req.open("GET", strURL, true);
			req.send(null);
		}
				
	}
</script>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Feasbility Study</title>
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

<form id="form5" name="form5" method="post" action="gui2.php " onSubmit="return finalchek();" , enctype="multipart/form-data">
  <label>
  <div align="center">
    <p>&nbsp;</p>
    
    
  </div>
  </label>

  <p>&nbsp;</p>
  <fieldset class="first"> 


 
     
  


    




<div> <label>Country : </label> <select name="state" id="23" onChange="getCity('findcity.php?state='+this.value)">
 
	<option value="">Select Country</option>
	<option value="india">India</option>
	<option value="bangladesh">Bangladesh</option>
        </select>
  
    <div> <label>City  Codes:</label>
    <div id="citydiv"><select name="arpit" id="111">
	<option>Select City</option>
        </select></div>
  
<div> <label>Enter 1st Choice : </label> 
<input type="text" name="loc[]" id="11" ></input>   </div>   

<div> <label>Enter 2nd Choice : </label> 
<input type="text" name="loc[]" id="12" ></input>   </div> 

<div> <label>Enter 3rd Choice: </label> 
<input type="text" name="loc[]" id="13" ></input>   </div> 

<div> <label>Enter 4th Choice: </label> 
<input type="text" name="loc[]" id="14" ></input>   </div> 

<div> <label>Enter 5th Choice: </label> 
<input type="text" name="loc[]" id="15" ></input>   </div> 
 



 <p>&nbsp;</p>
  </fieldset>  
 

 
          
  <fieldset> <input type="submit" name="40" id="40" value="Proceed" />      <input type="reset" name="41"  value="Reset" onClick="clearall(6)" />  </fieldset>
  
  

  
</form>
<div align="center"></div>
