<?php
$state=$_REQUEST['state'];

$link = mysql_connect('localhost', 'root', ''); //changet the configuration in required
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
mysql_select_db('mhrd1');
?>
<div><select name="city" id="11"> 
       <?php
		

		
$result2 = mysql_query("SELECT city FROM state WHERE state='$state'"); 
while($row = mysql_fetch_array($result2))
{$c_name=$row['city'];
		echo "<option value={$c_name}>{$c_name}</option>";
  ?>
  
  <?php }  ?>  
       </select> </div>  




