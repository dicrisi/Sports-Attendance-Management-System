<?php
include('adminheader.php'); 
include('style.php'); 
include('config.php');
?>  

<style> 
body{ 
   background-image: url("image.jpg ");
  background-repeat: repeat-x;
} 





</style>


<div align="center">
<form action="" name="addnew" id="addnew"  method="post">
<section id="hero">
    <div class="hero-container">
 <br> 
 <br> 
 <br> 
 
<table>
<tr>
<td> 
<h2> Sports List</h2> 
<br> 

</td>
</tr> 
<style> 


</style>
</table>

	<table border="0" cellspacing="4" cellspadding="4"  class="displaycontent"  width="300" height="300">
	
	 <label for="Cat">Category:</label>
	<select name="cars" id="category">
    <option value="Indoor">Indoor</option>
    <option value="Outdoor">Outdoor</option>
   
  </select>
	<tr>
		<td class="col" style="color: #000000"><p>Name:</p></td>
		<td><input type="text" name="name"  value=""  style="color: #000000"  class="textbox"/></td>
	</tr>

	<tr>
		<td class="col" style="color: #000000"><p>Games:</p></td>
		<td><input type="text" name="games"  value=""  style="color: #000000"  class="textbox"/></td>
	</tr>

	<tr>
		<td>&nbsp;</td>
		<td >
			<input type="submit" name="submit" value="submit"  style="color: #000000"/>
		     	
		</td>
	</tr>

	</table>
<a href="sports.php">BACK</a>


</div>
   </div>
  </section><!-- End Hero -->

  <main id="main">
</form>


<?php

 include_once("config.php");  

 if(isset($_POST['submit']))
	 {
	 	         		
	$query = "INSERT INTO `sprtslist` VALUES (null,'".$_POST['cars']."','".$_POST['name']."', '".$_POST['games']."')";

	if(mysql_query($query)){
		echo ' SUCCESSFULLY';
	  echo '<script> alert("REGISTERED SUCCESSFULLY");</script>';
	}
	else{
		echo 'NOT REGISTERD';
	}
	header("location:sports.php");
//	exit;
 
 }




?>


<?php include("footer.php")?>