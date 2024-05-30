<?php 
	include_once("config.php");
	include_once("style.php");
	include_once("tutorheader.php");
?>	

<?php
error_reporting(0);

if(isset($_GET['select'])){

$query2 = "select * from student where id='".$_GET['select']."'";
			//echo $query2;
			$result = mysql_query($query2);
			if(mysql_num_rows($result)){
			$row = mysql_fetch_assoc($result);
			}
}
?>


<style>
h2 {
  color: white;
  font-family: verdana;
  font-size: 240%;

}
p  {
  color: white;
  font-family: Georgia, serif;
  font-size: 100%;
   font-weight: bold;
}
</style>

  <!-- Carousel Start -->
  
                       <div class="container">




<form action="" method="post" enctype="multipart/form-data" name="addroom">
<center>

 <style>
body  {
  background-image: url("image.jpg");
}
</style>
<br>
<br>
<br>
<br>
<center><font color="black" size="8">Attendance Details </font></center>
</br>

  Name<br />
 <input name="name" type="text" value="<?php  echo $row['Name']; ?>" readonly />
 <br />
Course<br />
 <input name="cou" type="text" value="<?php  echo $row['Course']; ?>" class="ed" id="cou" readonly /> 
 <br />
Department<br />
 <input name="dep" type="text" value="<?php  echo $row['Department']; ?>"readonly />
 <br />
 Incharge mail<br />
 <input type="text" name="imail" value="<?php  echo $row['Inchargemail']; ?>"readonly class="ed"> <br />
 </br>
 Date<br />
 <input name="dat" type="date" class="ed" value="" id="DAT" />
<br>
 Attendance<br />
	<select name="att" id="Attendance">
    <option value="present">present</option>
    <option value="absent">absent</option>
<br> 
<br> 
<br> 
</br> 
  <input type="submit" name="submit" value="Update" id="button1" />
  <br>

 </center>
 </form>

</div>


<?php

 include_once("config.php");  

 if(isset($_POST['submit']))
	 {
	 	         		
	$query = "INSERT INTO `attend` VALUES (null,'".$_POST['name']."', '".$_POST['cou']."', '".$_POST['dep']."' ,'".$_POST['imail']."', '".$_POST['dat']."','".$_POST['att']."')";

	if(mysql_query($query)){
		echo ' SUCCESSFULLY';
	  echo '<script> alert("REGISTERED SUCCESSFULLY");</script>';
	}
	else{
		echo 'NOT REGISTERD';
	}
	header("location:tutorattr.php");
//	exit;
 
 }




?>


<br>
<br>
<br>
<br>
<br>

<?php 
	include_once("footer.php");
	?>