<?php
//include("newm2.php");
?>


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

</script>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Software Credentials</title>
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

<form id="form1" name="form1" method="post" action="scale.php " onSubmit="return finalchek();" , enctype="multipart/form-data">
  <label>
  <div align="center">
    <p>&nbsp;</p>
    <h2 >GUI Based feasibilty starts here</h2>
    <h5 > <em class="third" >(all fields are mandatory ##LowerCase only)</em></h5>     
  </div>
  </label>

  <p>&nbsp;</p>
	<fieldset class="first"> 



		<div> <label>Company Name : </label> 
		<input type="text" name="1" id="1" ></input>    </div> 
     
		<div> <label>Company Budget: </label> 
		<input type="text" name="4" id="4" ></input>   </div> 
	
    
	</fieldset>  
 


<br />

 
<fieldset> <input type="submit" name="40" id="40" value="Proceed" />      <input type="reset" name="41"  value="Reset" onClick="clearall(6)" />  </fieldset>
  
  

  
</form>
<div align="center"></div>
</body>
</html>
