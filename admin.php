<?php
  include_once("header.php"); 
  include_once("style.php");
 if(isset($_POST['login']))
 {
	
	if($_POST['uid']=="admin" && $_POST['password']=="admin")
	 {
		 echo '<script> alert("Login success");</script>';
	 header("location:adminhome.php");

	 }
	 else
	 {
	 	 	echo '<script> alert("Login Failed");</script>';
	 }
 }
 
?>


<div align="center">

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
 
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: "10";
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
<style> 
input[type=button], input[type=submit], input[type=reset] {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
}
</style>

<div align="r">
	<form action=""  name="login_form" id="login_form"  method="post">


 <section id="hero-slider" class="hero-slider"> 
      <div class="container-md" data-aos="fade-in">
        <div class="row">
          <div class="col-12">
            <div class="swiper sliderFeaturedPosts">
            
                  <a class="img-bg d-flex align-items-end" style="background-image: url('img.jpg');">
                    <div class="img-bg-inner">
                     <div class="container" > 

 <h1> <b>Admin Login</b><h1>
  <table class="displaycontent" width="400" height="120">
  	<tr>
    <td><label for="uname"><b>Username</b></label></td>
  <td> <input type="text" placeholder="Enter Username" name="uid" required></td>
		</tr>

	<tr>
	<td>
    <label for="psw"><b>Password</b></label></td>
   <td> <input type="password" placeholder="Enter Password" name="password" required></td>
		</tr>
		  </table>
        <br>
    <input type="submit" name="login" value="Login" style="color: #000000"/>
 
  </div>
                    </div>
                  </a>
                </div>

          </div>
        </div>
      </div>
	  </div>
    </section><!-- End Hero Slider Section -->
  
  
  


	</form>

</div>




<?php include("footer.php")?>