<?php
include("dbcon1.php");
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

<form id="form5" name="form5" method="post" action="register_action3.php " onSubmit="return finalchek();" , enctype="multipart/form-data">
  <label>
  <div align="center">
    <p>&nbsp;</p>
    <h2 >Publicity Strategy</h2>
    <h5 > <em class="third" >(all fields are mandatory ##LowerCase only)</em></h5>     
  </div>
  </label>

  <p>&nbsp;</p>
  <fieldset class="first"> 


 
     
  


    

<div> 
<label>Sex: </label> <select name="1" id="1">
      <option value="male">Male</option>      
      <option value="female">Female</option>
	  <option value="_">Any</option>
  </select> </div>  


 <div>
   <label>Language : </label>
    <select name="2" id="2">
      <option value="english">English</option>      
      <option value="hindi">Hindi</option>
  </select> </div>  


<div> <label>Publicity Budget: </label> 
<input type="text" name="3" id="3" ></input>   </div> 


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
		   
		   <div>
   <label>Type  : </label>
    <select name="10" id="10">
      <option value="1">Cost Effective</option>      
      <option value="0">Brand Creation</option>
  </select> </div> 
<div>
<label>Frequency  : </label>
    <select name="11" id="11">
      <option value="1">high</option>      
      <option value="0">low</option>
  </select> </div>  
  <div>
<label>Adv Policy : </label>
    <select name="12" id="12">
      <option value="1">Smart targetting</option>      
      <option value="0">Mass Targetting</option>
  </select> </div>  


 

 <p>&nbsp;</p>
  </fieldset>  
 

  </p>
  <label>
  <input type="checkbox" name="aud[]" id="5" value="kids" />
  kids</label>
  <p>
    <label>
    <input type="checkbox" name="aud[]" id="6" value="housewife" />
    housewife</label>
  </p>
  <p>
    <label>
    <input type="checkbox" name="aud[]" id="7" value="teens" />
    teens</label>
  </p>
  <p>
    <label>
    <input type="checkbox" name="aud[]" id="8" value="college_student" />
    college students</label>
  </p>
  <p>
    <label>
    <input type="checkbox" name="aud[]" id="9" value="working" />
    Working Class</label>
    <br />
          </p>
		  
		  
		  
		  
	
          
  <fieldset> <input type="submit" name="40" id="40" value="Proceed" />      <input type="reset" name="41"  value="Reset" onClick="clearall(6)" />  </fieldset>
  
  

  
</form>
<div align="center"></div>
</body>
</html>
