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

             <h2 align="center">Attendance Details</h2>

	<table border="2" cellspacing="6" class="displaycontent"  width="1000" height="120" style="border:4px solid lightblue;" align="center">
	<tr>
	    
			<th bgcolor=white><font color=black size=2>aID</font></th>
		
			<th bgcolor=white><font color=black size=2>Name</font></th> 
			<th bgcolor=white><font color=black size=2>Course</font></th> 
			<th bgcolor=white><font color=black size=2>Department</font></th> 
		   <th bgcolor=white><font color=black size=2>Inchargemail</font></th>
			<th bgcolor=white><font color=black size=2>Date</font></th> 
			<th bgcolor=white><font color=black size=2>Status</font></th>



			  
	</tr>
	<br><br> 
<br> 
<br> 

<br>
	<?php
	
	$query = "select * from attend";
	$result = mysql_query($query) or die(mysql_error());
	while($row = mysql_fetch_assoc($result))
		{
 ?>
	<tr>

		<td bgcolor=white><font color=black size=2><?php echo $row['aid']; ?></font></td>
	
		<td bgcolor=white><font color=black size=2><?php echo $row['name']; ?></font></td>
	    <td bgcolor=white><font color=black size=2><?php echo $row['course']; ?></font></td>
		<td bgcolor=white><font color=black size=2><?php echo $row['department']; ?></font></td> 
         <td bgcolor=white><font color=black size=2><?php echo $row['inchargemail']; ?></font></td>
	    <td bgcolor=white><font color=black size=2><?php echo $row['date']; ?></font></td>
		    <td bgcolor=white><font color=black size=2><?php echo $row['attendance']; ?></font></td>
		
		
		
	</tr>
	<?php }  ?>
	
	
	</table>
</div>

</form> 

<br> 
<br> 
<br> 
<br> 
<br> 



<?php
include('footer.php');
?>


