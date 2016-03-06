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

<form id="form1" name="form1" method="post" action="register_action.php " onSubmit="return finalchek();" , enctype="multipart/form-data">
  <label>
  <div align="center">
    <p>&nbsp;</p>
    <h2 >Feasbility Study</h2>
    <h5 > <em class="third" >(all fields are mandatory)</em></h5>     
  </div>
  </label>

  <p>&nbsp;</p>
  <fieldset class="first"> 



<div> <label>Company Name : </label> 
<input type="text" name="1" id="1" ></input>    </div> 
     
  


    

<div> 
<label>Company Type: </label> <select name="2" id="2">
      <option value="it">INFORMATION TECHNOLOGY</option>      
      <option value="manufacture">MANUFACTURING</option>
       <option value="chemical">CHEMICAL</option>
  </select> </div>  


 <div>
   <label>Industry Scale : </label>
    <select name="3" id="3">
      <option value="lsi">LARGE SCALE INDUSTRY</option>      
      <option value="msi">MEDIUM SCALE INDUSTRY</option>
       <option value="ssi">SMALL SCALE INDUSTRY</option>
  </select> </div>  


<div> <label>Company budget: </label> 
<input type="text" name="4" id="4" ></input>   </div> 
 


<div> <label>Company Market: </label> <select name="5" id="5">
      <option value="farmer">FARMERS</option>      
      <option value="retail">REATAIL</option>
       <option value="auto">AUTOMOBILES INDUSTIES</option>
       <option value="chem">CHEMICAL INDUSTIES</option>
    </select> </div>  
    
<div> <label>Country: </label> <select name="6" id="6">
      <option value="india">INDIA</option>
      <option value="uk">UK</option>
    </select> </div>  
    

<div> <label>City: </label> <select name="7" id="7">
      <option value="delhi">DELHI</option>
      <option value="jaipur">JAIPUR</option>
    	  <option value="noida">NOIDA</option>
      <option value="bangalore">BANGALORE</option>
    	  <option value="chennai">CHENNAI</option>
      
    
    </select> </div>  
    
 </fieldset>  
 


<br />

 
<fieldset> <input type="submit" name="40" id="40" value="Submit" />      <input type="reset" name="41"  value="Reset" onClick="clearall(6)" />  </fieldset>
  
  

  
</form>
<div align="center"></div>
</body>
</html>
