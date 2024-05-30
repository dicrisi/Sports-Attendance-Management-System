<?php
include('adminheader.php'); 
include('style.php'); 
include('config.php');
?>  

<style> 
body{ 
   background-image: url("image.jpg");
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
<h2> Student Registration Form</h2> 
<br> 

</td>
</tr> 
<style> 


</style>
</table>

	<table border="0" cellspacing="4" cellspadding="4"  class="displaycontent"  width="300" height="300">
	
	<tr>
		<td class="col" style="color: #000000"><p>Incharge Mail:</p></td>
		<td>
 <select name="imail" style="color: #000000" onchange="getUserInfo(this.value)" > 
	<!-- <select name="goods_id" > -->
	<option><strong>--SELECT--</strong></option> 

<?php $a = array() ;
//	  $a['U_name'] = '';
	  	 

$goods_query=mysql_query("select * from sprtsin") or die(mysql_error());
                                while($fetch_goods_id=mysql_fetch_array($goods_query))
                                {
                                  echo '<option value="'.$fetch_goods_id['usermail'].'">';;
                                    echo $fetch_goods_id['usermail'].'<br/>'; 
                                    echo ' </option>';
									if(isset($_POST['usermail']) && $_POST['usermail']==$fetch_goods_id['usermail']){
									  $a = $fetch_goods_id;
									  
									
									}
								}

?> 

</select>
</td>
	</tr>
 
	<tr>
		<td class="col" style="color: #000000"><p>Name:</p></td>
		<td><input type="text" name="name"  value=""  style="color: #000000"  class="textbox"/></td>
	</tr>
    <tr>
		<td class="col" style="color: #000000"><p>RegisterNumber:</p></td>
		<td><input type="text" name="regg"  value=""  style="color: #000000"  class="textbox"/></td>
	</tr>  

	<tr>
		<td class="col" style="color: #000000"><p>Course:</p></td>
		<td><input type="text" name="cou"  value=""  style="color: #000000"  class="textbox"/></td>
	</tr> 

 
  <tr>
		<td class="col" style="color: #000000"><p>Department:</p></td>
		<td><input type="text" name="dept"  value=""  style="color: #000000"  class="textbox"/></td>
	</tr> 

 <tr>
		<td class="col" style="color: #000000"><p>Address:</p></td>
		<td><input type="text" name="address"  value=""  style="color: #000000"  class="textbox"/></td>
	</tr>

	<tr>
		<td class="col" style="color: #000000"><p>Mobile:</p></td>
		<td><input type="text" name="mob" value=""  style="color: #000000" class="textbox"/></td>
	</tr>
	 <br>
	 <br>
	
	<tr>
		<td>&nbsp;</td>
		<td >
			<input type="submit" name="addnew" value="register"  style="color: #000000"/>
		     	
		</td>
	</tr>

	
		
	
	</table>
<a href="student.php">BACK</a>


</div>
   </div>
  </section><!-- End Hero -->

  <main id="main">
</form>


<?php

 include_once("config.php");  

 if(isset($_POST['addnew']))
	 {
	 	         		
	$query = "INSERT INTO `student` VALUES (null,'".$_POST['imail']."','".$_POST['name']."', '".$_POST['regg']."','".$_POST['cou']."','".$_POST['dept']."' ,'".$_POST['address']."' ,'".$_POST['mob']."')";

	if(mysql_query($query)){
		echo ' SUCCESSFULLY';
	  echo '<script> alert("REGISTERED SUCCESSFULLY");</script>';
	}
	else{
		echo 'NOT REGISTERD';
	}
	header("location:student.php");
//	exit;
 
 }




?>


<?php include("footer.php")?>