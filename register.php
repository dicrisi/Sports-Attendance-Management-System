<?php
include('header.php'); 
include('style.php'); 
include('config.php');
?>  

<style> 
body{ 
  background-image: url("img2.jpg"); 

}
</style>


<div align="center">
<form action="" name="register" id="register"  method="post">
<section id="hero">
    <div class="hero-container">
 <br> 
 <br> 
 <br> 
 
<table>
<tr>
<td> 
<h2> Sports Incharge Registration Form</h2> 
<br> 

</td>
</tr> 
<style> 


</style>
</table>

	<table border="0" cellspacing="4" cellspadding="4"  class="displaycontent"  width="300" height="300">
	
	
	<tr>
		<td class="col" style="color: #000000"><p>Name:</p></td>
		<td><input type="text" name="name"  value=""  style="color: #000000"  class="textbox"/></td>
	</tr>
    <tr>
		<td class="col" style="color: #000000"><p>Usermail:</p></td>
		<td><input type="text" name="umail"  value=""  style="color: #000000"  class="textbox"/></td>
	</tr>  

	<tr>
		<td class="col" style="color: #000000"><p>Password:</p></td>
		<td><input type="password" name="password"  value=""  style="color: #000000"  class="textbox"/></td>
	</tr> 


 <tr>
		<td class="col" style="color: #000000"><p>Address:</p></td>
		<td><input type="text" name="address"  value=""  style="color: #000000"  class="textbox"/></td>
	</tr>

	<tr>
		<td class="col" style="color: #000000"><p>Mobile:</p></td>
		<td><input type="text" name="mob" value=""  style="color: #000000" class="textbox"/></td>
	</tr>
	
	
	<tr>
		<td>&nbsp;</td>
		<td >
			<input type="submit" name="register" value="Register"  style="color: #000000"/>
		     	
		</td>
	</tr>

	
		
	
	</table>
<a href="sprtlogin.php">BACK</a>


</div>
   </div>
  </section><!-- End Hero -->

  <main id="main">
</form>


<?php

 include_once("config.php");  

 if(isset($_POST['register']))
	 {
	 	         		
	$query = "INSERT INTO `sprtsin` VALUES (null,'".$_POST['name']."', '".$_POST['umail']."', '".$_POST['password']."' ,'".$_POST['address']."' ,'".$_POST['mob']."')";

	if(mysql_query($query)){
		echo ' SUCCESSFULLY';
	  echo '<script> alert("REGISTERED SUCCESSFULLY");</script>';
	}
	else{
		echo 'NOT REGISTERD';
	}
	header("location:sprtlogin.php");
//	exit;
 
 }




?>


<?php include("footer.php")?>