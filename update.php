<?php 
	include_once("config.php");
	include_once("style.php");
	include_once("adminheader.php");
?>	

<?php
error_reporting(0);



$query2 = "select * from student where id='".$_GET['select']."'";
			//echo $query2;
			$result = mysql_query($query2);
			if(mysql_num_rows($result)){
			$row = mysql_fetch_assoc($result);
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
<center><font color="black" size="8">Update Student Details </font></center>
</br>

  Name<br />
 <input name="name" type="text" value="<?php  echo $row['Name']; ?>" />
 <br />

Register No<br />
 <input name="regno" type="text"  value="<?php  echo $row['Registernumber']; ?>" />
 <br /> 
Course<br />
 <input name="cou" type="text" value="<?php  echo $row['Course']; ?>" class="ed" id="cou" /> 
 <br />
Department<br />
 <input name="dep" type="text" value="<?php  echo $row['Department']; ?>" />
 <br />
 Address<br />
 <input type="text" name="address" value="<?php  echo $row['Address']; ?>" class="ed"><br />
 </br>
 Mobile<br />
 <input name="mob" type="text" class="ed" value="<?php  echo $row['Mobile']; ?>" id="DAT" />
<br>


  <input type="submit" name="submit" value="Update" id="button1" />
  <br>

 </center>
 </form>

</div>


<?php
 
 
if(isset($_POST['submit'])){

	$query = "update student set Name='".$_POST['name']."', Registernumber='".$_POST['regno']."', Course='".$_POST['cou']."', Department='".$_POST['dep']."', Address='".$_POST['address']."',  Mobile='".$_POST['mob']."'  where id= '".$_GET['select']."'";
	echo $query;
      
	   
	if(mysql_query($query)){
		echo 'UPDATE SUCCESSFULLY';

	}
	else{
		echo 'NOT UPDATE';
	}
	header("location:student.php");
	exit;
//}
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