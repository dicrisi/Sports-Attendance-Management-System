<?php 
	include_once("config.php");
	include_once("style.php");
	include_once("adminheader.php");
?>	

<?php
error_reporting(0);

if(isset($_GET['select'])){

$query2 = "select * from tutorin where id='".$_GET['select']."'";
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
<center><font color="black" size="8">Tutor  Update Details </font></center>
</br>

 Id<br />
 <input name="id" type="text" value="<?php  echo $row['id']; ?>" />
 <br />
  Name<br />
 <input name="name" type="text" value="<?php  echo $row['name']; ?>" />
 <br />
Usermail<br />
 <input name="usermail" type="text"  value="<?php  echo $row['usermail']; ?>" />
 <br /> 
Password<br />
 <input name="password" type="password" value="<?php  echo $row['password']; ?>" class="ed" id="cou" /> 
 <br />
 Address<br />
 <input type="text" name="address" value="<?php  echo $row['address']; ?>" class="ed"><br />
 </br>

 Mobile<br />
 <input name="mobile" type="text" value="<?php  echo $row['mobile']; ?>" />
 <br />

  <input type="submit" name="submit" value="Update" id="button1" />
  <br>

 </center>
 </form>

</div>


<?php
 
 
if(isset($_POST['submit'])){

	$query = "update tutorin set id='".$_POST['id']."', name='".$_POST['name']."', usermail='".$_POST['usermail']."', password='".$_POST['password']."', Address='".$_POST['address']."',  Mobile='".$_POST['mobile']."'  where id= '".$_GET['select']."'";
	echo $query;
      
	   
	if(mysql_query($query)){
		echo 'UPDATE SUCCESSFULLY';

	}
	else{
		echo 'NOT UPDATE';
	}
	header("location:viewtutor.php");
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