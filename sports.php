<?php
include('adminheader.php');
include('style.php');
include('config.php');
error_reporting(0);
session_start();
?>


<style>
table.tab tr td,table.tab tr th{
	padding:5px;
	border:1px solid #000;
}
</style>
 <style>
body {
  background-image: url('image.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
</style> 


<form  method="post"> 
 
      <div >
	  
<br>
<br>
<br>
<br>
<br> 
           <center> <a href="addsports.php"><b>Addnew<b></a><center> 
		   <br>

             <h2 align="center">Sports Details</h2>

	<table border="2" cellspacing="6" class="displaycontent"  width="1000" height="120" style="border:4px solid lightblue;" align="center">
	<tr>
	    
			<th bgcolor=white><font color=black size=2>id</font></th>
			<th bgcolor=white><font color=black size=2>category</font></th> 
		    <th bgcolor=white><font color=black size=2>name</font></th>
		     <th bgcolor=white><font color=black size=2>games</font></th> 
			<th bgcolor=white><font color=black size=2>Update</font></th>
			<th bgcolor=white><font color=black size=2>Delete</font></th>

			  
	</tr>
	<br><br> 
<br> 
<br> 

<br>
	<?php
	
	$query = "select * from sprtslist";
	$result = mysql_query($query) or die(mysql_error());
	while($row = mysql_fetch_assoc($result))
		{
 ?>
	<tr>

		<td bgcolor=white><font color=black size=2><?php echo $row['id']; ?></font></td>
		<td bgcolor=white><font color=black size=2><?php echo $row['category']; ?></font></td>
		<td bgcolor=white><font color=black size=2><?php echo $row['name']; ?></font></td> 
	    <td bgcolor=white><font color=black size=2><?php echo $row['games']; ?></font></td>
		<td bgcolor=white><font color=black size=2><a href="sprtupdate.php?select=<?php echo $row['id'];?>">Update</a></font></td>
		<td bgcolor=white><font color=black size=2><a href="?delete=<?php echo $row['id'];?>">Delete</a></font></td>



		
	</tr>
	<?php }  ?>
	
	
	
	</table>
</div>

</form> 
 
 <?php 

if(isset($_GET['delete']))
	{
	
	$query = "delete from sprtslist where id='".$_GET['delete']."'";
	mysql_query($query);
		echo '<script>alert("Deleted");</script>';
	
		
header("location:sports.php");
	exit;
	}
?>
<br> 
<br> 
<br> 
<br> 
<br> 



<?php
include('footer.php');
?>


