<?php 
	include_once("config.php");
	include_once("style.php");
	include_once("adminheader.php");
?>	

<?php
error_reporting(0);

if(isset($_GET['select'])){

$query2 = "select * from sprtslist where id='".$_GET['select']."'";
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
<center><font color="black" size="8">Sports Update Details </font></center>
</br>

 id<br />
 <input name="id" type="text" value="<?php  echo $row['id']; ?>" />
 <br />
category<br />
 <input name="cat" type="text"  value="<?php  echo $row['category']; ?>" />
 <br /> 
name<br />
 <input name="name" type="text" value="<?php  echo $row['name']; ?>" class="ed" id="cou" /> 
 <br />
 games<br />
 <input type="text" name="gam" value="<?php  echo $row['games']; ?>" class="ed"><br />
 </br>



  <input type="submit" name="submit" value="Update" id="button1" />
  <br>

 </center>
 </form>

</div>



<?php
 
 
if(isset($_POST['submit'])){

	$query = "update sprtslist set id='".$_POST['id']."', category='".$_POST['cat']."', name='".$_POST['name']."', games='".$_POST['gam']."'  where id= '".$_GET['select']."'";
	echo $query;
      
	   
	if(mysql_query($query)){
		echo 'UPDATE SUCCESSFULLY';

	}
	else{
		echo 'NOT UPDATE';
	}
	header("location:sports.php");
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