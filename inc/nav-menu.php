
	  
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	       <a class="navbar-brand" href="index.php"><img src="images/logo.png" /></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item <?php if ($Page=="Home") {echo "active"; } else  {echo "noactive";}?>"><a href="index.php" class="nav-link">Home</a></li>
			   <li class="nav-item <?php if ($Page=="About") {echo "active"; } else  {echo "noactive";}?>"><a href="aboutus.php" class="nav-link">About</a></li>
	          <li class="nav-item <?php if ($Page=="Ashtanga") {echo "active"; } else  {echo "noactive";}?>"><a href="ashtanga-yoga.php" class="nav-link">Ashtanga Yoga </a></li>
	          <li class="nav-item <?php if ($Page=="Gallery") {echo "active"; } else  {echo "noactive";}?>"><a href="our-gallery.php" class="nav-link">Gallery</a></li>
			   <!--<li class="nav-item <?php if ($Page=="Videos") {echo "active"; } else  {echo "noactive";}?>"><a href="video.php" class="nav-link">Videos</a></li>-->
	         
	        </ul>
	      </div>
		  </div>
	  </nav>

		