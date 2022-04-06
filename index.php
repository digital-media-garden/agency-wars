<!DOCTYPE html>
<html>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="Now in its 8th year, Agency Wars has become one of the most anticipated events of the Toronto Marketing and Advertising industry." />
	<title>Agency Wars VIII</title>
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
	<link href="https://fonts.googleapis.com/css?family=Barlow+Condensed:600|Roboto+Slab:400|Roboto+Slab:300" rel="stylesheet" />
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
	<link href="<?php echo get_template_directory_uri(); ?>/css/lity.min.css" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
	<link href="<?php echo get_template_directory_uri(); ?>/css/main-style.css" rel="stylesheet" />
	<link href="<?php echo get_template_directory_uri(); ?>/css/custom-styles.css" rel="stylesheet" />
	<style type="text/css">

.overlay-container {
    position: relative;
    width: 50%;
}

.overlay-image {
  opacity: 1;
  display: block;
  width: 100%;
  height: auto;
  transition: .5s ease;
  backface-visibility: hidden;
}

.middle {
  transition: .5s ease;
  opacity: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: center;
  text-transform: uppercase;
  font-weight: bold;
  font-family: "Barlow Condensed", sans-serif;
  font-size: 16px;
  color: white;
  line-height: 0.2em;

}

.overlay-container:hover .overlay-image {
  opacity: 0.4;
}

.overlay-container:hover .middle {
  opacity: 1;
}

/* Buttons */

/*.overlay-text {
  background-color: #000;
  padding: 10px 22px;
}
*/


.blueover:after {
    background: rgba(0,0,250, 0.5);
  }


.overlay-text-red a, .overlay-text-blue a {
	text-decoration: none;
}

.overlay-text-red {
  background-color: #EC2324;
  padding: 10px 22px;
}	
.overlay-text-blue {
  background-color: #2F70FF;
  padding: 10px 22px;
}



.buy-button, .buy-button:hover {
    border-radius: 30px;	
    background-color: #2F70FF;
    margin: 20px 0 20px 0;
    padding: 20px 80px;
	color: #FFFFFF;	
	font-family: "Barlow Condensed", serif;	
	font-size: 24px;	
	font-weight: bold;	
	line-height: 24px;	
	text-align: center;
	text-transform: uppercase;
	display: inline-block;

}


@media (max-width: 1345px) {

.middle {
	font-size: 15px;
	height: auto;
}

.middle p {
	margin: 0;
	padding: 0;
}

.overlay-text {
	padding: 5px;
}

.middle p {
	line-height: 1.5em;
}

}

@media (max-width: 767px) {

.middle {
	font-size: 10px;
}

.middle p {
	line-height: 0.5em;
}

.overlay-text {
	padding: 2px;
}

.middle p {
	line-height: 0.9em;
	font-size:10px;
}

}

@media (max-width: 500px) {

	.middle {
		font-size: 7px;
		overflow: hidden;
	}

	.middle p {
		line-height: 0.5em;
	}

	.overlay-text {
		padding: 0px;
	}

	.middle br {
		display: none;
	}

}
		
	</style>
</head>
<body>
	<div class="col-12 lights"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/lights.svg"></div>
	<nav class="navbar navbar-expand-md"> <!-- Nav -->
		<div class="container">
			<a class="navbar-brand">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/AW8-Logo.svg" alt="Agency Wars 8">
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-toggle" aria-controls="navbar-toggle" aria-expanded="false" aria-label="Toggle navigation">
				<div class="navbar-text toggler-text">
					<span class="navbar-text toggler-text close-menu">Close</span>
					<span class="navbar-text toggler-text">Menu</span>
				</div>
			</button>
			<div class="collapse navbar-collapse"  id="navbar-toggle">
				<ul class="navbar-nav text-center ml-md-auto flex-md-wrap">							
					<li class="nav-item mr-3 pt-1">
						<a class="nav-link" href="#about">ABOUT</a>
					</li>
					<li class="nav-item mr-3 pt-1">
						<a class="nav-link" href="#cause">THE CAUSE</a>
					</li>
					<li class="nav-item mr-3 pt-1">
						<a class="nav-link" href="#captains">TEAMS</a>
					</li>
					<li class="nav-item mr-3 pt-1">
						<a class="nav-link" href="#participate">EVENT DETAILS</a>
					</li>
					<li class="nav-item mb-5 mb-md-0 pt-1">
						<a class="nav-link" href="#contact">CONTACT</a>
					</li>
					<li>
						<div class="d-flex justify-content-center"><!-- Buttons -->
							<a class="nav-item nav-link r-0 ml-3" href="https://www.eventbrite.ca/e/movember-mayhem-presented-by-agency-wars-viii-toronto-real-estate-rumble-ii-tickets-51125930033" target="_blank">
								<button type="button" class="btn btn-sm btn-primary">BUY TICKETS</button><!-- Added Bootstrap classes to adjust margins -->
							</a>							
							<a class="nav-item nav-link mx-3" href="https://ca.movember.com/donate" target="_blank">
								<button type="button" class="btn btn-sm btn-danger">DONATE NOW</button>
							</a>
						</div>
					</li><!-- /Buttons -->
					<li>
						<div class="d-flex justify-content-center">
							<a class="nav-item nav-link mx-3" href="https://www.facebook.com/AgencyWarsEvent/" target="_blank">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/fb-logo.svg" alt="Facebook">
							</a>
							<a class="nav-item nav-link mx-3" href="https://twitter.com/agencywars/" target="_blank">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tw-logo.svg" alt="Twitter">
							</a>
							<a class="nav-item nav-link mx-3" href="https://www.instagram.com/agency_wars/" target="_blank">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ig-logo.svg" alt="Instagram">
							</a>
						</div>
					</li>					
				</ul>
			</div>
		</div>
	</nav> <!-- /Nav -->

	<div class="container-fluid"><!-- Banner -->
		<div class="row justify-content-center banner-background">
			<div class="video-background">
				<div class="video-foreground">
					<!-- <iframe src="https://www.youtube.com/embed/O6U51Yh7eWQ?autoplay=1&mute=1&loop=1&rel=0&controls=0&showinfo=0&playlist=15wC_fKZPp0"></iframe> -->
				</div>
			</div>
			<div class="video-filter"></div>
			<div class="col-6 col-md-2 order-1 order-md-0 text-center align-self-center text-banner">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/its.svg" alt="It's" />
			</div>
			<div class="col-12 col-md-7">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/banner-big.png" alt="Fight, Sponsor, Attend" />
				<a href="https://www.youtube.com/watch?v=O6U51Yh7eWQ" class="play-button" data-lity><img id="content-box" src="<?php echo get_stylesheet_directory_uri(); ?>/images/content-box.png" alt="Fri.Nov.23, 2018, CBC Studio 40, Toronto" /></a>
			</div>
			<div class="col-6 col-md-2 order-1 text-center align-self-center text-banner">
				<img id="on" src="<?php echo get_stylesheet_directory_uri(); ?>/images/on.svg" alt="On" />
			</div>
		</div>
	</div> <!-- /Banner -->

	<a id="about"></a>
	<div class="container-fluid about-background"><!-- About -->
		<div class="row justify-content-center">
			<div class="col-12 col-md-8 text-center about-banner">
				<img class="banner-bg" src="<?php echo get_stylesheet_directory_uri(); ?>/images/banner-aboutaw.png" alt="About agency wars">
				<img class="banner-sm" src="<?php echo get_stylesheet_directory_uri(); ?>/images/banner-aboutaw-375.png" alt="About agency wars">
			</div>
		</div>
		<div class="row justify-content-center">
			<img class="red-corner" src="<?php echo get_stylesheet_directory_uri(); ?>/images/red-corner.png" />
			<img class="blue-corner" src="<?php echo get_stylesheet_directory_uri(); ?>/images/blue-corner.png" />
			<div class="col-10 col-md-8 about-text text-center">
				<p>Now in its 8th year, Agency Wars has become one of the most anticipated events of the Toronto Marketing and Advertising industry. The event sells out every year and in its seven years, Agency Wars has introduced over 6,000 people to the sport of boxing; trained over 150 amateur boxers drawn from the ranks of Toronto’s agencies, digital shops, media houses, and broadcasters; and generated over $225,000 for charity. In 2016, for the first time ever, we held “Alumni Thunder”, making new matches from our past boxers. We broadcast the event on Facebook LIVE and you can still watch today (please LIKE us on FB).</p>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-12 text-center">
				<h2 class="sm-title">Stay Connected</h2>
				<a class="social-media social-link" href="https://www.facebook.com/AgencyWarsEvent/" target="_blank">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/fb-logo.svg" alt="Facebook">
				</a>
				<a class="social-media social-link" href="https://twitter.com/agencywars/" target="_blank">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tw-logo.svg" alt="Twitter">
				</a>
				<a class="social-media" href="https://www.instagram.com/agency_wars/" target="_blank">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ig-logo.svg" alt="Instagram">
				</a>
			</div>

		</div>
		<a id="cause"></a>
		<div class="row justify-content-center">
			<div class="col-12 col-md-8 about-cause text-center">
				<img class="banner-bg" src="<?php echo get_stylesheet_directory_uri(); ?>/images/banner-aboutthecause.png" alt="About the cause">
				<img class="banner-sm" src="<?php echo get_stylesheet_directory_uri(); ?>/images/banner-aboutthecause-375.png" alt="About the cause">
				<p>The Movember Foundation: Changing the face of men's health.</p>
			</div>
		</div>
		<div class="row justify-content-center cause">
			<div class="col-12 col-md-3 text-center">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/mf-logo.svg" alt="Movember Foundation">
			</div>
			<div class="col-12 col-md-5">
				<p class="cause-text">The Movember Foundation has one goal: to stop men dying too young. As the only global charity tackling men’s health issues year-round, the Foundation supports the following causes: prostate cancer, testicular cancer, mental health and suicide prevention. Since 2003, the support of more than 5 million men and women has funded over 1,200 innovative projects in over 20 countries.</p>
				<br />
				<p class="more-info">To donate or learn more, please visit <a class="email" href="https://ca.movember.com">movember.com</a></p>
			</div>
		</div>
	</div> <!-- /About -->

	<a id="captains"></a>
	<section class="team-captain"><!-- Team Captains -->

		<div class="container-fluid text-center banner-team">
			<h2>Team Captains</h2>
		</div>

		<div class="blue-captain d-flex flex-column flex-md-row justify-content-center align-content-center mb-5"><!-- Blue Captain -->
			<div class="row">
			  <div class="col-sm-6"><a href="https://torontosun.com/news/local-news/meet-monster-mel-first-stop-canada-next-stop-the-world"><img src="<?php echo get_template_directory_uri() . '/images/mladen-intro.png' ?>"></a></div>
			  <div class="col-sm-6"><a href="http://fightland.vice.com/blog/sandy-tsagouris-stuck-through-low-paydays-to-help-pave-way-for-golden-era-of-womens-boxing"><img src="<?php echo get_template_directory_uri() . '/images/sandy-intro.png' ?>"></a></div>
			</div>
		</div>



		<div class="container-fluid coaches-trainers"><!-- Team Coaches and Trainers -->

			<div class="row justify-content-center coach-banner">
				<div class="col-md-8 col-md-offset-4 about-cause text-center w-100 mt-4">
					<img class="banner-bg w-100 pb-5" src="<?php echo get_template_directory_uri() . '/images/coaches-banner-sketch.png' ?>" alt="Coaches and Trainers">
					<!-- <img class="banner-sm" src="http://localhost/agencywars/wp-content/themes/agencywars8/images/banner-aboutthecause-375.png" alt="About the cause"> -->
				</div>
			</div>

	        <div class="row justify-content-center">
				<div class="col-md-8 col-md-offset-4 text-center w-100">
			    	<div class="row">
				        <div class="col-sm-3">
							 <!-- use this class to hide large images on mobiles: d-md-none -->
							<img class="img-fluid float-left d-inline-block" src="<?php echo get_template_directory_uri() . '/images/img-rico.jpg' ?>" alt="Rico Mancini - Head Coach">      	
				        </div>

						<div class="col-sm-9 text-left"> 
							<h3 class="coach-heading">Rico Mancini</h3>
							<h3 class="coach-heading pb-4">Head Coach</h3>
				  
							<p class="pb-1">
								With more than 30 years experience teaching and coaching various martial arts and boxing, we are very excited to have Rico head our coaching team. Rico is a Level 4 coach (currently working on Level 5) who organizes and teaches NCCP level 1-3 technical boxing workshops to coaches province wide.
							</p>
							<p class="pb-5">
								Rico’s technical and organized method of instruction along with his friendly attitude and dedication to the sport of amateur boxing will help these teams gain the skills of pugilism over this intense 12 week program.</p>
						</div>
			        </div>
		        </div>
	        </div>		

	        <div class="row justify-content-center">
				<div class="col-md-8 col-md-offset-4 text-center w-100">
			    	<div class="row">
				        <div class="col-sm-3">
							 <!-- use this class to hide large images on mobiles: d-md-none -->
							<img class="img-fluid float-left d-inline-block" src="<?php echo get_template_directory_uri() . '/images/img-jasonfisher.jpg' ?>" alt="Jason Fisher - Head Coach">      	
				        </div>

						<div class="col-sm-9 text-left"> 
							<h3 class="coach-heading">Jason Fisher</h3>
							<h3 class="coach-heading pb-4">Strength & Conditioning Trainer, Nutritional Coach</h3>
				  
							<p>
								Jason is a Certified Strength Conditioning Specialist, and Director of High Performance for the Canadian & Ontario Soccer Association.
							</p>
							<ul>
								<li>Trained two-time NBA MVP, Steve Nash, the Canadian all-time leading NCAA basketball points scorer, Juan Mendez, and 2006 Seattle Supersonics draft pick, Denham Brown</li>
								<li>Regular appearances on CP24’s ‘Perfect Fit’</li>
								<li>Featured in magazines such as, Chatelaine, Toronto Life and Homemakers</li>
								<li>Head Conditioning Coach Agency Wars I-II</li>	
							</ul>									
						</div>
			        </div>
		        </div>
	        </div>		
		</div><!-- /Team Coaches and Trainers -->


	<!-- ******************************* ADD PORTRAIT GALLERY ***************************************** -->
		<div class="row justify-content-center coach-banner" style="margin-left: 0; margin-right: 0;">
			<div class="col-md-8 col-md-offset-4 about-cause text-center w-100">
				<!-- <img class="banner-bg w-100 pb-5" src="<?php //echo get_template_directory_uri() . '/images/banner-contenders-sketch.png' ?>"> -->
                <img  class="banner-bg w-100 pb-5"  src="<?php echo get_stylesheet_directory_uri(); ?>/images/banner-contenders-sketch.png" alt="Movember Foundation">



				<!-- <img class="banner-sm" src="/agencywars/wp-content/themes/agencywars8/images/banner-aboutthecause-375.png" alt="About the cause"> -->
			</div>
		</div>

	    <div class="container-fluid col-md-8 col-md-offset-4 w-80">
			<div class="col-md-12 text-center w-100  mx-auto">


				<div class="container"><!--gallery container-->
					<div class="my-4 text-center mx-auto">
						<a class="filter-button" data-filter="all">All</a>
						<a class="filter-button" data-filter="red">Red</a>
						<a class="filter-button" data-filter="blue">Blue</a>        	
					</div>

					<div class="row text-center text-lg-left">
					<div class="col-lg-3 col-md-4 col-xs-6 filter blue overlay-container">
					  <a href="#" class="d-block mb-4 h-100">
					    <!-- <img class="img-fluid img-thumbnail" src="http://placehold.it/400x300" alt=""> -->
						<div class="blue">
							<img class="img-fluid overlay-image blueover" src="<?php echo get_template_directory_uri() . '/images/gallery-imgs/BLUE Carly Meyers Corus Entertainment.jpg ' ?>" alt="Blue captain">
		                </div>
					  </a>
					  <div class="middle rgba-red-strong">
					  	<p>Carly Meyers</p>
					  	<p>Corus Entertainment<br>
					  	Blue Team</p>		  	
					    <div class="overlay-text-blue"><a href="https://ca.movember.com/mospace/13767258">Donate</a></div>
					  </div>          
					</div>

			        <div class="col-lg-3 col-md-4 col-xs-6 filter red overlay-container">
			          <a href="#" class="d-block mb-4 h-100">
			            <!-- <img class="img-fluid img-thumbnail" src="http://placehold.it/400x300" alt=""> -->
						<img class="img-fluid overlay-image" src="<?php echo get_template_directory_uri() . '/images/gallery-imgs/RED Bill Phillips.jpg ' ?>" alt="Red captain">            
			          </a>
					  <div class="middle">
					  	<p>Bill Phillips</p>
					  	<p>GTB<br>
					  	Red Team</p>		  	
					    <div class="overlay-text-red"><a href="https://ca.movember.com/mospace/13766742">Donate</a></div>
					  </div>          
			        </div>

			        <div class="col-lg-3 col-md-4 col-xs-6 filter blue overlay-container">
			          <a href="#" class="d-block mb-4 h-100">
			            <!-- <img class="img-fluid img-thumbnail" src="http://placehold.it/400x300" alt=""> -->
						<img class="img-fluid overlay-image" src="<?php echo get_template_directory_uri() . '/images/gallery-imgs/BLUE Carly Syme Mosaic Sales Solutions.jpg ' ?>" alt="Blue captain">            
			          </a>
					  <div class="middle">
					  	<p>Carly Syme</p>
					  	<p>Mosaic Sales Solutions<br>
					  	Blue Team</p>
					    <div class="overlay-text-blue"><a href="https://ca.movember.com/mospace/1849576">Donate</div>
					  </div>          
			        </div>

			        <div class="col-lg-3 col-md-4 col-xs-6 filter red overlay-container">
			          <a href="#" class="d-block mb-4 h-100">
			            <!-- <img class="img-fluid img-thumbnail" src="http://placehold.it/400x300" alt=""> -->
						<img class="img-fluid overlay-image" src="<?php echo get_template_directory_uri() . '/images/gallery-imgs/RED Cameron Bond Innocean.jpg ' ?>" alt="Red captain">            
			          </a>
					  <div class="middle">
					  	<p>Cameron Bond</p>
					  	<p>Innocean Worldwide<br>
					  	Blue Team</p>		  	
					    <div class="overlay-text-red"><a href="https://ca.movember.com/mospace/13766781">Donate</a></div>
					  </div>          
			        </div>

			        <div class="col-lg-3 col-md-4 col-xs-6 filter red overlay-container">
			          <a href="#" class="d-block mb-4 h-100">
			            <!-- <img class="img-fluid img-thumbnail" src="http://placehold.it/400x300" alt=""> -->
						<img class="img-fluid overlay-image" src="<?php echo get_template_directory_uri() . '/images/gallery-imgs/RED-darby-clarke.png ' ?>" alt="Red captain">            
			          </a>
					  <div class="middle">
					    <div class="overlay-text-red"><a href="https://ca.movember.com/mospace/13766771">Darby Clarke Cossette</a></div>
					    <!--- add middle text -->
					  </div>          
			        </div>

			        <div class="col-lg-3 col-md-4 col-xs-6 filter blue overlay-container">
			          <a href="#" class="d-block mb-4 h-100">
			            <!-- <img class="img-fluid img-thumbnail" src="http://placehold.it/400x300" alt=""> -->
						<img class="img-fluid overlay-image" src="<?php echo get_template_directory_uri() . '/images/gallery-imgs/BLUE Mackenzie_Chapin.jpg ' ?>" alt="Blue captain">            
			          </a>
					  <div class="middle">
					  	<p>Mackenzie Chapin</p>
					  	<p>Mosaic Sales Solutions<br>
					  	Blue Team</p>
					    <div class="overlay-text-blue"><a href="https://ca.movember.com/mospace/13767685">Donate</a></div>
					  </div>          
			        </div>

			        <div class="col-lg-3 col-md-4 col-xs-6 filter red overlay-container">
			          <a href="#" class="d-block mb-4 h-100">
			            <!-- <img class="img-fluid img-thumbnail" src="http://placehold.it/400x300" alt=""> -->
						<img class="img-fluid overlay-image" src="<?php echo get_template_directory_uri() . '/images/gallery-imgs/RED Daniel Goffenberg Rogers@2x.jpg ' ?>" alt="Red captain">            
			          </a>
					  <div class="middle">
					  	<p>Daniel Goffenberg Rogers</p>
					  	<p><br></p>		  	
					    <div class="overlay-text-red"><a href="https://ca.movember.com/mospace/13767222">Donate</a></div>
					  </div>          
			        </div>

			        <div class="col-lg-3 col-md-4 col-xs-6 filter blue overlay-container">
			          <a href="#" class="d-block mb-4 h-100">
			            <!-- <img class="img-fluid img-thumbnail" src="http://placehold.it/400x300" alt=""> -->
						<img class="img-fluid overlay-image" src="<?php echo get_template_directory_uri() . '/images/gallery-imgs/BLUE Dustin Metcalf Active International@1x.jpg ' ?>" alt="Blue captain">            
			          </a>
					  <div class="middle">
					  	<p>Dustin Metcalf</p>
					  	<p>Active International<br>
					  	Blue Team</p>
					    <div class="overlay-text-blue"><a href="https://ca.movember.com/mospace/13767680">Donate</a></div>
					  </div>          
			        </div>

			        <div class="col-lg-3 col-md-4 col-xs-6 filter blue overlay-container">
			          <a href="#" class="d-block mb-4 h-100">
			            <!-- <img class="img-fluid img-thumbnail" src="http://placehold.it/400x300" alt=""> -->
						<img class="img-fluid overlay-image" src="<?php echo get_template_directory_uri() . '/images/gallery-imgs/Blue Emily Sadler Sportsnet@2x.jpg ' ?>" alt="Blue captain">            
			          </a>
					  <div class="middle">
					  	<p>Emily Sadler</p>
					  	<p>Sportsnet<br>
					  	Blue Team</p>
					    <div class="overlay-text-blue"><a href="https://ca.movember.com/mospace/13767275">Donate</a></div>
					  </div>          
			        </div>

			        <div class="col-lg-3 col-md-4 col-xs-6 filter red overlay-container">
			          <a href="#" class="d-block mb-4 h-100">
			            <!-- <img class="img-fluid img-thumbnail" src="http://placehold.it/400x300" alt=""> -->
						<img class="img-fluid overlay-image" src="<?php echo get_template_directory_uri() . '/images/gallery-imgs/RED Hussein Popat IPG Magna@2x.jpg ' ?>" alt="Red captain">            
			          </a>
					  <div class="middle">
					  	<p>Hussein Popat</p>
					  	<p>IPG Magna<br>
					  	Red Team</p>		  	
					    <div class="overlay-text-red"><a href="https://ca.movember.com/mospace/13766801">Donate</a></div>
					  </div>          
			        </div>


			        <div class="col-lg-3 col-md-4 col-xs-6 filter blue overlay-container">
			          <a href="#" class="d-block mb-4 h-100">
			            <!-- <img class="img-fluid img-thumbnail" src="http://placehold.it/400x300" alt=""> -->
						<img class="img-fluid overlay-image" src="<?php echo get_template_directory_uri() . '/images/gallery-imgs/BLUE Erin Vassel Corus Entertainment@2x.jpg ' ?>" alt="Blue captain">            
			          </a>
					  <div class="middle">
					  	<p>Erin Vassel</p>
					  	<p>Corus-Enterta<br>
					  	Blue Team</p>
					    <div class="overlay-text-blue"><a href="https://ca.movember.com/mospace/13767667">Donate</a></div>
					  </div>          
			        </div>

			        <div class="col-lg-3 col-md-4 col-xs-6 filter red overlay-container">
			          <a href="#" class="d-block mb-4 h-100">
			            <!-- <img class="img-fluid img-thumbnail" src="http://placehold.it/400x300" alt=""> -->
						<img class="img-fluid overlay-image" src="<?php echo get_template_directory_uri() . '/images/gallery-imgs/RED Janey Tuite Cossette@2x.jpg ' ?>" alt="Red captain">            
			          </a>
					  <div class="middle">
					  	<p>Janey Tuite Cossette</p>
					  	<p><br>
					  	Red Team</p>		  	
					    <div class="overlay-text-red"><a href="https://ca.movember.com/mospace/13766720">Donate</a></div>
					  </div>          
			        </div>

			        <div class="col-lg-3 col-md-4 col-xs-6 filter red overlay-container">
			          <a href="#" class="d-block mb-4 h-100">
			            <!-- <img class="img-fluid img-thumbnail" src="http://placehold.it/400x300" alt=""> -->
						<img class="img-fluid overlay-image" src="<?php echo get_template_directory_uri() . '/images/gallery-imgs/RED Jimmy Wei Grip Limited@2x.jpg ' ?>" alt="Red captain">            
			          </a>
					  <div class="middle">
					  	<p>Jimmy Wei</p>
					  	<p>Grip Limited<br>
					  	Red Team</p>		  	
					    <div class="overlay-text-red"><a href="https://ca.movember.com/mospace/12095949">Donate</a></div>
					  </div>          
			        </div>

			        <div class="col-lg-3 col-md-4 col-xs-6 filter blue overlay-container">
			          <a href="#" class="d-block mb-4 h-100">
			            <!-- <img class="img-fluid img-thumbnail" src="http://placehold.it/400x300" alt=""> -->
						<img class="img-fluid overlay-image" src="<?php echo get_template_directory_uri() . '/images/gallery-imgs/BLUE Gustavo Moller Cadreon@2x.jpg ' ?>" alt="Blue captain">            
			          </a>
					  <div class="middle">
					  	<p>Gustavo Moller</p>
					  	<p>Cadreon<br>
					  	Blue Team</p>
					    <div class="overlay-text-blue"><a href="https://ca.movember.com/mospace/13767692">Donate</a></div>
					  </div>          
			        </div>

			        <div class="col-lg-3 col-md-4 col-xs-6 filter red overlay-container">
			          <a href="#" class="d-block mb-4 h-100">
			            <!-- <img class="img-fluid img-thumbnail" src="http://placehold.it/400x300" alt=""> -->
						<img class="img-fluid overlay-image" src="<?php echo get_template_directory_uri() . '/images/gallery-imgs/RED Karen Hong Mosaic Sales Solutions@2x.jpg ' ?>" alt="Red captain">            
			          </a>
					  <div class="middle">
					  	<p>Karen Hong</p>
					  	<p>Mosaic Sales Solutions<br>
					  	Red Team</p>		  	
					    <div class="overlay-text-red"><a href="https://ca.movember.com/mospace/13766732">Donate</a></div>
					  </div>          
			        </div>

			        <div class="col-lg-3 col-md-4 col-xs-6 filter blue overlay-container">
			          <a href="#" class="d-block mb-4 h-100">
			            <!-- <img class="img-fluid img-thumbnail" src="http://placehold.it/400x300" alt=""> -->
						<img class="img-fluid overlay-image" src="<?php echo get_template_directory_uri() . '/images/gallery-imgs/BLUE Ian Collins Zoom Media@2x.jpg ' ?>" alt="Blue captain">            
			          </a>
					  <div class="middle">
					  	<p>Ian Collins</p>
					  	<p>Zoom Media<br>
					  	Blue Team</p>
					    <div class="overlay-text-blue"><a href="https://ca.movember.com/mospace/13767675">Donate</a></div>
					  </div>          
			        </div>

			        <div class="col-lg-3 col-md-4 col-xs-6 filter blue overlay-container">
			          <a href="#" class="d-block mb-4 h-100">
			            <!-- <img class="img-fluid img-thumbnail" src="http://placehold.it/400x300" alt=""> -->
						<img class="img-fluid overlay-image" src="<?php echo get_template_directory_uri() . '/images/gallery-imgs/BLUE Ian Macdonald MiQ@1x.jpg ' ?>" alt="Blue captain">            
			          </a>
					  <div class="middle">
					  	<p>Ian Macdonald</p>
					  	<p>MiQ<br>
					  	Blue Team</p>
					    <div class="overlay-text-blue"><a href="https://ca.movember.com/mospace/4200685">Donate</a></div>
					  </div>          
			        </div>
		        
			        <div class="col-lg-3 col-md-4 col-xs-6 filter red overlay-container">
			          <a href="#" class="d-block mb-4 h-100">
			            <!-- <img class="img-fluid img-thumbnail" src="http://placehold.it/400x300" alt=""> -->
						<img class="img-fluid overlay-image" src="<?php echo get_template_directory_uri() . '/images/gallery-imgs/RED Karl Hendricks Reprise@2x.jpg ' ?>" alt="Red captain">            
			          </a>
					  <div class="middle">
					  	<p>Karl Hendricks</p>
					  	<p>Reprise<br>
					  	Red Team</p>		  	
					    <div class="overlay-text-red"><a href="https://ca.movember.com/mospace/13766745">Donate</a></div>
					  </div>          
			        </div>


			        <div class="col-lg-3 col-md-4 col-xs-6 filter blue overlay-container">
			          <a href="#" class="d-block mb-4 h-100">
			            <!-- <img class="img-fluid img-thumbnail" src="http://placehold.it/400x300" alt=""> -->
						<img class="img-fluid overlay-image" src="<?php echo get_template_directory_uri() . '/images/gallery-imgs/BLUE Victoria Larranaga (Oath)@2x.jpg ' ?>" alt="Blue captain">            
			          </a>
					  <div class="middle">
					  	<p>Victoria Larranaga</p>
					  	<p>Oath<br>
					  	Blue Team</p>
					    <div class="overlay-text-blue"><a href="https://ca.movember.com/mospace/13767702">Donate</a></div>
					  </div>          
			        </div>

			        <div class="col-lg-3 col-md-4 col-xs-6 filter red overlay-container">
			          <a href="#" class="d-block mb-4 h-100">
			            <!-- <img class="img-fluid img-thumbnail" src="http://placehold.it/400x300" alt=""> -->
						<img class="img-fluid overlay-image" src="<?php echo get_template_directory_uri() . '/images/gallery-imgs/RED Katie Stephenson Astral Bell Media@2x.jpg ' ?>" alt="Red captain">            
			          </a>
					  <div class="middle">
					  	<p>Katie Stephenson Astral</p>
					  	<p>Bell Media<br>
					  	Red Team</p>		  	
					    <div class="overlay-text-red">Donate</div>
					  </div>          
			        </div>		        

			        <div class="col-lg-3 col-md-4 col-xs-6 filter red overlay-container">
			          <a href="#" class="d-block mb-4 h-100">
			            <!-- <img class="img-fluid img-thumbnail" src="http://placehold.it/400x300" alt=""> -->
						<img class="img-fluid overlay-image" src="<?php echo get_template_directory_uri() . '/images/gallery-imgs/RED Liban Ahmed Wavemaker Canana@2x.jpg ' ?>" alt="Red captain">            
			          </a>
					  <div class="middle">
					  	<p>Liban Ahmed Wavemaker</p>
					  	<p>Canana<br>
					  	Red Team</p>		  	
					    <div class="overlay-text-red"><a href="https://ca.movember.com/mospace/13766775">Donate</a></div>
					  </div>          
			        </div>		


			        <div class="col-lg-3 col-md-4 col-xs-6 filter blue overlay-container">
			          <a href="#" class="d-block mb-4 h-100">
			            <!-- <img class="img-fluid img-thumbnail" src="http://placehold.it/400x300" alt=""> -->
						<img class="img-fluid overlay-image" src="<?php echo get_template_directory_uri() . '/images/gallery-imgs/BLUE Jeremy Torres Cadreon@2x.jpg ' ?>" alt="Blue captain">            
			          </a>
					  <div class="middle">
					  	<p>Jeremy Torres</p>
					  	<p>Cadreon<br>
					  	Blue Team</p>
					    <div class="overlay-text-blue"><a href="https://ca.movember.com/mospace/13767690">Donate</a></div>
					  </div>          
			        </div>


			        <div class="col-lg-3 col-md-4 col-xs-6 filter red overlay-container">
			          <a href="#" class="d-block mb-4 h-100">
			            <!-- <img class="img-fluid img-thumbnail" src="http://placehold.it/400x300" alt=""> -->
						<img class="img-fluid overlay-image" src="<?php echo get_template_directory_uri() . '/images/gallery-imgs/RED Lynn Sheehy School Editing@2x.jpg ' ?>" alt="Red captain">            
			          </a>
					  <div class="middle">
					  	<p>Lynn Sheehy</p>
					  	<p>School Editing<br>
					  	Red Team</p>		  	
					    <div class="overlay-text-red"><a href="https://ca.movember.com/mospace/13766721">Donate</div>
					  </div>          
			        </div>	


			        <div class="col-lg-3 col-md-4 col-xs-6 filter blue overlay-container">
			          <a href="#" class="d-block mb-4 h-100">
			            <!-- <img class="img-fluid img-thumbnail" src="http://placehold.it/400x300" alt=""> -->
						<img class="img-fluid overlay-image" src="<?php echo get_template_directory_uri() . '/images/gallery-imgs/BLUE Jessica Cabral Eyereturn Marketing@1x.jpg ' ?>" alt="Blue captain">            
			          </a>
					  <div class="middle">
					  	<p>Jessica Cabral</p>
					  	<p>Eyereturn Marketing<br>
					  	Blue Team</p>
					    <div class="overlay-text-blue"><a href="https://ca.movember.com/mospace/13767272">Donate</a></div>
					  </div>          
			        </div>


			        <div class="col-lg-3 col-md-4 col-xs-6 filter blue overlay-container">
			          <a href="#" class="d-block mb-4 h-100">
			            <!-- <img class="img-fluid img-thumbnail" src="http://placehold.it/400x300" alt=""> -->
						<img class="img-fluid overlay-image" src="<?php echo get_template_directory_uri() . '/images/gallery-imgs/BLUE Julian Weiman JWT@2x.jpg ' ?>" alt="Blue captain">            
			          </a>
					  <div class="middle">
					  	<p>Julian Weiman</p>
					  	<p>JWT<br>
					  	Blue Team</p>
					    <div class="overlay-text-blue"><a href="https://ca.movember.com/mospace/13767695">Donate</a></div>
					  </div>          
			        </div>


			        <div class="col-lg-3 col-md-4 col-xs-6 filter red overlay-container">
			          <a href="#" class="d-block mb-4 h-100">
			            <!-- <img class="img-fluid img-thumbnail" src="http://placehold.it/400x300" alt=""> -->
						<img class="img-fluid overlay-image" src="<?php echo get_template_directory_uri() . '/images/gallery-imgs/RED Mark Broxterman Embr Events@2x.jpg ' ?>" alt="Red captain">            
			          </a>
					  <div class="middle">
					  	<p>Mark Broxterman</p>
					  	<p>Embr Events<br>
					  	Red Team</p>		  	
					    <div class="overlay-text-red"><a href="https://ca.movember.com/mospace/13767207">Donate</a></div>
					  </div>          
			        </div>	


			        <div class="col-lg-3 col-md-4 col-xs-6 filter blue overlay-container">
			          <a href="#" class="d-block mb-4 h-100">
			            <!-- <img class="img-fluid img-thumbnail" src="http://placehold.it/400x300" alt=""> -->
						<img class="img-fluid overlay-image" src="<?php echo get_template_directory_uri() . '/images/gallery-imgs/BLUE Justin Turco UNION Creative@2x.jpg ' ?>" alt="Blue captain">            
			          </a>
					  <div class="middle">
					  	<p>Justin Turco</p>
					  	<p>UNION Creative<br>
					  	Blue Team</p>
					    <div class="overlay-text-blue"><a href="https://ca.movember.com/mospace/13767697">Donate</a></div>
					  </div>          
			        </div>

			        <div class="col-lg-3 col-md-4 col-xs-6 filter red overlay-container">
			          <a href="#" class="d-block mb-4 h-100">
			            <!-- <img class="img-fluid img-thumbnail" src="http://placehold.it/400x300" alt=""> -->
						<img class="img-fluid overlay-image" src="<?php echo get_template_directory_uri() . '/images/gallery-imgs/RED Michael Di Mascio Prospect Media@2x.jpg ' ?>" alt="Red captain">            
			          </a>
					  <div class="middle">
					  	<p>Michael Di Mascio</p>
					  	<p>Prospect Media<br>
					  	Red Team</p>		  	
					    <div class="overlay-text-red"><a href="https://ca.movember.com/mospace/2559962">Donate</a></div>
					  </div>          
			        </div>	

			        <div class="col-lg-3 col-md-4 col-xs-6 filter red overlay-container">
			          <a href="#" class="d-block mb-4 h-100">
			            <!-- <img class="img-fluid img-thumbnail" src="http://placehold.it/400x300" alt=""> -->
						<img class="img-fluid overlay-image" src="<?php echo get_template_directory_uri() . '/images/gallery-imgs/RED Sarah Barker Innocean@2x.jpg ' ?>" alt="Red captain">            
			          </a>
					  <div class="middle">
					  	<p>Sarah Barker</p>
					  	<p>Innocean<br>
					  	Red Team</p>		  	
					    <div class="overlay-text-red"><a href="https://ca.movember.com/mospace/13766711">Donate</a></div>
					  </div>          
			        </div>	

			        <div class="col-lg-3 col-md-4 col-xs-6 filter blue overlay-container">
			          <a href="#" class="d-block mb-4 h-100">
			            <!-- <img class="img-fluid img-thumbnail" src="http://placehold.it/400x300" alt=""> -->
						<img class="img-fluid overlay-image" src="<?php echo get_template_directory_uri() . '/images/gallery-imgs/BLUE Kirill Popov MadeByKirill@2x.jpg ' ?>" alt="Blue captain">            
			          </a>
					  <div class="middle">
					  	<p>Kirill Popov</p>
					  	<p>MadeByKirill<br>
					  	Blue Team</p>
					    <div class="overlay-text-blue"><a href="https://ca.movember.com/mospace/13767694">Donate</a></div>
					  </div>          
			        </div>

			        <div class="col-lg-3 col-md-4 col-xs-6 filter red overlay-container">
			          <a href="#" class="d-block mb-4 h-100">
			            <!-- <img class="img-fluid img-thumbnail" src="http://placehold.it/400x300" alt=""> -->
						<img class="img-fluid overlay-image" src="<?php echo get_template_directory_uri() . '/images/gallery-imgs/RED Steven Fogel StackAdapt@2x.jpg ' ?>" alt="Red captain">            
			          </a>
					  <div class="middle">
					  	<p>Steven Fogel</p>
					  	<p>StackAdapt<br>
					  	Red Team</p>		  	
					    <div class="overlay-text-red"><a href="https://ca.movember.com/mospace/13766743">Donate</a></div>
					  </div>          
			        </div>	

			        <div class="col-lg-3 col-md-4 col-xs-6 filter blue overlay-container">
			          <a href="#" class="d-block mb-4 h-100">
			            <!-- <img class="img-fluid img-thumbnail" src="http://placehold.it/400x300" alt=""> -->
						<img class="img-fluid overlay-image" src="<?php echo get_template_directory_uri() . '/images/gallery-imgs/BLUE Lindsay Goeldner Skin and Bones Film Company@1x.jpg ' ?>" alt="Blue captain">            
			          </a>
					  <div class="middle">
					  	<p>Lindsay Goeldner</p>
					  	<p>Skin and Bones Film Company<br>
					  	Blue Team</p>
					    <div class="overlay-text-blue"><a href="https://ca.movember.com/mospace/13767264">Donate</a></div>
					  </div>          
			        </div>

			        <div class="col-lg-3 col-md-4 col-xs-6 filter blue overlay-container">
			          <a href="#" class="d-block mb-4 h-100">
			            <!-- <img class="img-fluid img-thumbnail" src="http://placehold.it/400x300" alt=""> -->
						<img class="img-fluid overlay-image" src="<?php echo get_template_directory_uri() . '/images/gallery-imgs/BLUE Nicole Park Initiative@2x.jpg ' ?>" alt="Blue captain">            
			          </a>
					  <div class="middle">
					  	<p>Nicole Park</p>
					  	<p>Initiative<br>
					  	Blue Team</p>
					    <div class="overlay-text-blue"><a href="https://ca.movember.com/mospace/13767262">Donate</a></div>
					  </div>          
			        </div>

			        <div class="col-lg-3 col-md-4 col-xs-6 filter red overlay-container">
			          <a href="#" class="d-block mb-4 h-100">
			            <!-- <img class="img-fluid img-thumbnail" src="http://placehold.it/400x300" alt=""> -->
						<img class="img-fluid overlay-image" src="<?php echo get_template_directory_uri() . '/images/gallery-imgs/RED Tim Wong Innocean@2x.jpg ' ?>" alt="Red captain">            
			          </a>
					  <div class="middle">
					  	<p>Tim Wong</p>
					  	<p>Innocean<br>
					  	Red Team</p>		  	
					    <div class="overlay-text-red"><a href="https://ca.movember.com/mospace/1841744">Donate</a></div>
					  </div>          
			        </div>	

			        <div class="col-lg-3 col-md-4 col-xs-6 filter blue overlay-container">
			          <a href="#" class="d-block mb-4 h-100">
			            <!-- <img class="img-fluid img-thumbnail" src="http://placehold.it/400x300" alt=""> -->
						<img class="img-fluid overlay-image" src="<?php echo get_template_directory_uri() . '/images/gallery-imgs/BLUE Ryan Quiring Starcom@2x.jpg ' ?>" alt="Blue captain">            
			          </a>
					  <div class="middle">
					  	<p>Ryan Quiring</p>
					  	<p>Starcom<br>
					  	Blue Team</p>
					    <div class="overlay-text-blue"><a href="https://ca.movember.com/mospace/11602665">Donate</a></div>
					  </div>          
			        </div>

			        <div class="col-lg-3 col-md-4 col-xs-6 filter red overlay-container">
			          <a href="#" class="d-block mb-4 h-100">
			            <!-- <img class="img-fluid img-thumbnail" src="http://placehold.it/400x300" alt=""> -->
						<img class="img-fluid overlay-image" src="<?php echo get_template_directory_uri() . '/images/gallery-imgs/RED Wade Kuiken-Rogers MiQ@2x.jpg ' ?>" alt="Red captain">            
			          </a>
					  <div class="middle">
					  	<p>Wade Kuiken-Rogers</p>
					  	<p>MiQ<br>
					  	Red Team</p>		  	
					    <div class="overlay-text-red"><a href="https://ca.movember.com/mospace/8584653">Donate</a></div>
					  </div>          
			        </div>	


			        <div class="col-lg-3 col-md-4 col-xs-6 filter blue overlay-container">
			          <a href="#" class="d-block mb-4 h-100">
			            <!-- <img class="img-fluid img-thumbnail" src="http://placehold.it/400x300" alt=""> -->
						<img class="img-fluid overlay-image" src="<?php echo get_template_directory_uri() . '/images/gallery-imgs/BLUE Susan Boratynska (Grip)@2x.jpg ' ?>" alt="Blue captain">            
			          </a>
					  <div class="middle">
					  	<p>Susan Boratynska</p>
					  	<p>Grip Limited<br>
					  	Blue Team</p>
					    <div class="overlay-text-blue"><a href="https://ca.movember.com/mospace/13767267">Donate</a></div>
					  </div>          
			        </div>

	            </div><!--/gallery container div-->
	        </div>
        </div>

	</section><!-- /Team Captains -->


	<div class="container-fluid text-center movember"> <!-- Movember -->
		<h2>Stop Men Dying Too Young</h2>
		<h3>Join the movement for men's health</h3>
		<h3>movember.com</h3>
	</div> <!-- /Movember -->

	<div class="container-fluid text-center">
		<div class="row pt-5 pb-5">
			<div class="col-12">
				<h2 class="divider-title ml-3 mr-3">Event Details</h2><br>
				<img class="align-self-center" src="<?php echo get_template_directory_uri() . '/images/divider-red-blue.svg' ?>" alt="divider line">	
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<img class="align-self-center img-responsive w-25" src="<?php echo get_template_directory_uri() . '/images/mm-event-poster@2x.jpg' ?>" alt="Event poster">
			</div>
		</div>

		<div class="row pt-5 pb-5">
			<div class="col-12 pt-3">
				<h2 class="divider-title ml-3 mr-3 pt-5">Sponsorships</h2><br>
				<img class="align-self-center" src="<?php echo get_template_directory_uri() . '/images/divider-red-blue.svg' ?>" alt="divider line">	
			</div>
		</div>

		<div class="row pt-1 pb-5">
			<div class="col-12">
				<p>For sponsorship details contact <a href="#">gcross@optimumseg.com</a></p>
			</div>
		</div>

		<div class="row pt-5 pb-5">
			<div class="col-12">
				<h2 class="divider-title ml-3 mr-3">What's in it for you?</h2><br>
				<img class="align-self-center" src="<?php echo get_template_directory_uri() . '/images/divider-red-blue.svg' ?>" alt="divider line">	
			</div>
		</div>

		<div class="row pt-1 pb-5>
			<div class="col-12 text-center justify-content-center">
				<p class="w-50 mx-auto pb-5">Here’s an opportunity to associate your brand with an amazing night and a worthy charitable cause. Network with the who's-who of Toronto’s Advertising, Marketing, and Media industries. Expose your brand to potential clients and customers. Enhance your company’s image within the community.</p>
			</div>
		</div>


		<div class="row  justify-content-center pt-5" style="margin-left:0; margin-right:0;"><!-- Social Media Feeds -->
			<div class="col-12 wd-80 text-center mx-auto pb-5">
				<img class="align-self-center" src="<?php echo get_template_directory_uri() . '/images/social-sketch.png' ?>" alt="Social banner">
			</div>
		</div>

		<div class="row  justify-content-center visible-md hidden-sm" style="margin-left:0; margin-right:0;">
			<div class="col-10 col-md-offset-2 text-center mx-auto">

			<div class="col-12 text-center"><!-- display on mobile only: hidden-lg-up to d-lg-none -->
				<!-- <h2 class="sm-title">Stay Connected</h2> -->
				<a class="social-media social-link" href="https://www.facebook.com/AgencyWarsEvent/" target="_blank">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/fb-logo.svg" alt="Facebook">
				</a>
				<a class="social-media social-link" href="https://twitter.com/agencywars/" target="_blank">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tw-logo.svg" alt="Twitter">
				</a>
				<a class="social-media" href="https://www.instagram.com/agency_wars/" target="_blank">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ig-logo.svg" alt="Instagram">
				</a>
			</div>

<!-- 
				<div class="row d-flex justify-content-center">
				  		<div class="col-sm-4 hidden-md-down to d-none d-lg-block">
							<div class="fb-page" data-href="https://www.facebook.com/AgencyWarsEvent/" data-tabs="timeline" data-height="702" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/AgencyWarsEvent/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/AgencyWarsEvent/">Agency Wars</a></blockquote></div>
				  		</div>

				        <div class="col-sm-4 hidden-md-down to d-none d-lg-block">
							<div class="d-inline align-bottom"><a class="twitter-timeline" data-width="300" data-height="702" href="https://twitter.com/agencywars?ref_src=twsrc%5Etfw">Tweets by agencywars</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
							</div>
					    </div>

						<div class="col-sm-4 hidden-md-down to d-none d-lg-block">
							InstaWidget -->
							<!-- <a href="https://instawidget.net/v/user/agency_wars" id="link-98afcadd87e1fcc6212cff153bf9c50694f840c9b9078be311b339ad5029da8e">@agency_wars</a>
							<script src="https://instawidget.net/js/instawidget.js?u=98afcadd87e1fcc6212cff153bf9c50694f840c9b9078be311b339ad5029da8e&width=300px"></script>
					    </div>
				</div> -->
		    <!-- </div> -->
		</div><!--/Social Media Feeds -->	

	<div class="container-fluid partners-background"><!-- PARTNERS -->
		<div class="row justify-content-center">

			<div class="col-12 col-md-6 cta-title flex-column">
				<h2 class="divider-title ml-3 mr-3 text-center">Partners</h2><br>
				<img class="align-self-center d-block" src="<?php echo get_template_directory_uri() . '/images/divider-red-blue.svg' ?>" alt="divider line">	
			</div>
		</div>

		<div class="row justify-content-center">
			<div class="col-12 text-center">
				<a class="" href="#" target="_blank">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/partner-fsr.png" alt="">
				</a>
				<a class="" href="#" target="_blank">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/partner-ama.png" alt="">
				</a>
				<a class="" href="#" target="_blank">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/partner-clif.png" alt="">
				</a>
				<a class="" href="#" target="_blank">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/partner-lyft.png" alt="">
				</a>
			</div>

		</div>
	</div>
</div>

<a id="contact"></a>
<div class="container-fluid footer-background"> <!-- Footer -->
	<!-- Footer -->

	<div class="row justify-content-center">
		<div class="col-12 text-center">
			<h3>Clancy's Boxing Academy</h3>
			<p>100 Sunrise Avenue, Unit 119<br>
			Toronto, Ontario M4A 1B3</p>
			<div class="footer-logos">
				<div class="aw-logo">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/AW8-Logo-footer.svg" alt="">
				</div>
				<div class="movember-logo">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/mf-logo-footer.svg" alt="Movember Foundation">
				</div>
			</div>
			<p><a class="email white" href="mailto:info@agencywars.ca">info@agencywars.ca</a></p>
		</div>
	</div>

	<div class="row justify-content-center fsr-footer">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tagline-fsr.svg" alt="Digitally powered by Full Stack Resources">
	</div>
	<div class="row justify-content-center">
		<p>&copy;Copyright 2018 AgencyWars</p>
	</div>
</div> <!-- /Footer -->
<script   src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/lity.min.js"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/app.js"></script>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<script type="text/javascript">	//Photo Gallery
$(document).ready(function(){

    $(".filter-button").click(function(){
        var value = $(this).attr('data-filter');
        
        if(value == "all")
        {
            //$('.filter').removeClass('hidden');
            $('.filter').show('1000');
        }
        else
        {
//            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
//            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
            $(".filter").not('.'+value).hide('3000');
            $('.filter').filter('.'+value).show('3000');
            
        }
    });
    
    if ($(".filter-button").removeClass("active")) {
$(this).removeClass("active");
}
$(this).addClass("active");

});

</script>
</body>
</html>
