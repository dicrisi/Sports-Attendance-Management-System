<?php
	include_once("tutorheader.php");
	include_once("style.php");
	include_once("config.php");
?>	
<style>
table.tab tr td,table.tab tr th{
	padding:5px;
	border:1px solid #000;
}
</style>


 <section id="hero-slider" class="hero-slider">
      <div class="container-md" data-aos="fade-in"> 

        <div class="row">

          <div class="col-12">
            <div class="swiper sliderFeaturedPosts">
            
                  <a  class="img-bg d-flex align-items-end" style="background-image: url('img.jpg');">
                    <div class="img-bg-inner">
                     <center> <h1>Welcome <?php echo $_SESSION['login_user'] ?></h1></center>

                    </div>
                  </a>
                </div>

          
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Hero Slider Section -->


<?php			
	include_once("footer.php");
?>
