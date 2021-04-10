<?php $Page="Home" ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Nitesh Saini | Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
<!-- start header css -->
	<?php include('inc/head-css.php') ?>
	<!-- End header css -->
  </head>
  <body>
  	<!-- start menu -->
	<?php include('inc/nav-menu.php') ?>
	
    <!-- END nav -->

    <!-- start slider -->
	<?php include('inc/banner.php') ?>
	<!-- End slider -->
		
		<section class="ftco-section bg-light">
      <div class="container">
        
        	<div class="row justify-content-end">
	        <div class="col-md-6 ftco-animate fadeInUp ftco-animated">
	          <div class="">
	            <img src="images/ashta-yoga.jpg" class="img-thumbnail">
	          </div>
	        </div>
	        
					<div class="col-md-6">
						<div class="heading-section ftco-animate">
	            <!--<h2 class="mb-4">Nitesh Saini</h2>-->
	          </div>
	          <p class="ftco-animate">A surprising moment of truth, a simple act of courage. And life can change forever. 
Five years ago, I was a young and ambitious executive who could never have imagined a future in teaching Yoga. But then I took a split decision to follow my calling – and life changed forever.
<a href="../aboutus.php" target="_blank"> Read my story HERE.</a> </p>
			  <!--<p>I had known enough struggle in my young life to appreciate the security and validation that this executive position could give me. All I had to do was commit to it, to this company and to its aspirations for me. I hesitated. And then I found myself calmly saying : I would like to practice yoga, to heal myself physically and be fit.</p>
			   <p>I had known enough struggle in my young life to appreciate the security and validation that this executive position could give me. All I had to do was commit to it, to this company and to its aspirations for me. I hesitated. And then I found myself calmly saying : I would like to practice yoga, to heal myself physically and be fit.</p>-->
	          
				<div class="col-md-12" style="text-align:center; padding:10px;">
	              <img src="images/yoga-nitesh.jpg" class="img-thumbnail">
	            </div>
			</div>
	      </div>
      </div>
	  
	  
    </section>
    
       
    

	  <section class="ftco-section contact-section">
      <div class="container">
	  <div class="row justify-content-center mb-5 pb-3">
	 <div class="col-md-7 heading-section ftco-animate text-center">
            <!--<h3 class="subheading">Enquire</h3>-->
            <h2 class="mb-1">Contact</h2>
          </div>
          
		  </div>
        <div class="row block-9">
		
					<div class="col-md-4 contact-info ftco-animate  p-4 fadeInUp ftco-animated">
						<div class="row">
						
	            <div class="col-md-12 mb-3">
	              <img src="images/getintouch.jpg" class="img-thumbnail">
	            </div>
						</div>
					</div>
					<div class="col-md-1"></div>
          <div class="col-md-6 ftco-animate fadeInUp ftco-animated">
		  <div class="col-md-12 mb-3">
	              <p>Please send all enquiries to ashtanganitesh@gmail.com 
or leave a message here :</p>
	            </div>
				  <form name="contactform" id="form-contact"  method="post" action="send_form_email.php">
            	<div class="row">
            		<div class="col-md-6">
	                <div class="form-group">
	                  <input type="text" name="first_name" maxlength="50" size="30" class="form-control" placeholder="First Name" reqiured>
	                </div>
                </div>
				
				<div class="col-md-6">
	                <div class="form-group">
	                  <input type="text" name="last_name" maxlength="50" size="30" class="form-control" placeholder="Last Name" reqiured>
	                </div>
                </div>
                <div class="col-md-6">
	                <div class="form-group">
	                  <input type="text" name="email" maxlength="80" size="30" class="form-control" placeholder="Email" reqiured>
	                </div>
	                </div>
					
					<div class="col-md-6">
	                <div class="form-group">
	                  <input type="text"  name="telephone" maxlength="30" size="30" class="form-control" placeholder="Phone" reqiured>
	                </div>
	                </div>
					
              </div>
              
              <div class="form-group">
                <textarea name="comments" maxlength="1000" cols="25" rows="6" cols="30" rows="7" class="form-control" placeholder="Message" reqiured></textarea>
              </div>
			  
			 <div class="g-recaptcha" data-sitekey="6LfMJ6oUAAAAABAopy0bM_l2OhIw9PbglBHqytg1"></div> <br>
              <div class="form-group">
                <input type="submit" value="Submit" id="contact_submit" class="btn btn-primary py-3 px-5">
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>


    


    


    <!--<section class="ftco-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h3 class="subheading">Blog</h3>
            <h2 class="mb-1">Recent Posts</h2>
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/gallery/1.jpg');">
              </a>
              <div class="text p-4 float-right d-block">
              	<div class="d-flex align-items-center pt-2 mb-4">
              		<div class="one">
              			<span class="day">31</span>
              		</div>
              		<div class="two">
              			<span class="yr">2019</span>
              			<span class="mos">December</span>
              		</div>
              	</div>
                <h3 class="heading mt-2"><a href="#">Our Yoga Blog</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/gallery/2.jpg');">
              </a>
              <div class="text p-4 float-right d-block">
              	<div class="d-flex align-items-center pt-2 mb-4">
              		<div class="one">
              			<span class="day">27</span>
              		</div>
              		<div class="two">
              			<span class="yr">2019</span>
              			<span class="mos">December</span>
              		</div>
              	</div>
                <h3 class="heading mt-2"><a href="#">Our Yoga Blog</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/gallery/3.jpg');">
              </a>
              <div class="text p-4 float-right d-block">
              	<div class="d-flex align-items-center pt-2 mb-4">
              		<div class="one">
              			<span class="day">25</span>
              		</div>
              		<div class="two">
              			<span class="yr">2019</span>
              			<span class="mos">December</span>
              		</div>
              	</div>
                <h3 class="heading mt-2"><a href="#">Our Yoga Blog</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>-->

		

		

    <!-- start fotter -->
	<?php include('inc/fotter.php') ?>
	<!-- End fotter -->
    
  
<!-- start fotter css-->
	<?php include('inc/fotter-css.php') ?>
	<!-- End fotter css-->
    
  </body>
</html>

<script>
$(document).ready(function(){
  $("form").submit(function(){
    alert("Thank you for contacting us. We will be in touch with you very soon");
  });
});
</script>


