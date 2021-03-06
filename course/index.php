<!DOCTYPE html>
<html lang="en">
	<head>
		<title>WEBTEK NOTES 2018!</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description" content="Course Project">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
		<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
		<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
		<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
		<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
		<link rel="stylesheet" type="text/css" href="styles/responsive.css">
	</head>
	<body>
	
       <?php
        //Start your session
        session_start();
        if (isset($_SESSION['name']) && $_SESSION['name'] == true) {
            echo "<div style='float: left; font-size: 20px; '>Welcome to this course, " . $_SESSION['name'] . "!</div>";
			echo "<div style='float: right;'> <a href='logout.php' class='btn btn-danger square-btn-adjust btn-sm '>End Session</a></div>";
        } else {
            header("location: login.php");
        }

        function echoActiveClassIfRequestMatches($requestUri){
            $current_file_name = basename($_SERVER['REQUEST_URI'], ".php");

            if ($current_file_name == $requestUri)
                echo 'class="active-menu"';
        }

    ?>

		<div class="super_container">

			<!-- Header -->

			<header class="header d-flex flex-row">
				<div class="header_content d-flex flex-row align-items-center">
					<!-- Logo -->
					<div class="logo_container">
						<div class="logo">
							<img src="images/logo.png" alt="">
							<span>WEBTEK!</span>
						</div>
					</div>

					<!-- Main Navigation -->
					<nav class="main_nav_container">
						<div class="main_nav">
							<ul class="main_nav_list">
								<li class="main_nav_item"><a href="index.php">Home</a></li>
								<li class="main_nav_item dropdown">
									<a href="course.php" class="dropbtn">Courses</a>
									<div class="dropdown-content">
										<a href="course.php">Server Scripting</a>
										<a href="course.php">Web App Security</a>
									</div>
								</li>
								<li class="main_nav_item"><a href="videos.php">Multimedia</a></li>
								<li class="main_nav_item"><a href="quiz.php">quiz</a></li>
								<li class="main_nav_item"><a href="#AboutUs">About Us</a></li>
							</ul>
						</div>
					</nav>
				</div>

				<div class="header_side d-flex flex-row justify-content-center align-items-center">
		</div>


				<!-- Hamburger -->
				<div class="hamburger_container">
					<i class="fas fa-bars trans_200"></i>
				</div>

			</header>

			<!-- Menu -->
			<div class="menu_container menu_mm">

				<!-- Menu Close Button -->
				<div class="menu_close_container">
					<div class="menu_close"></div>
				</div>

				<!-- Menu Items -->
				<div class="menu_inner menu_mm">
					<div class="menu menu_mm">
						<ul class="menu_list menu_mm">
							<li class="menu_item menu_mm"><a href="index.php">HOME</a></li>
                            <li class="menu_item menu_mm"><a href="course.php">COURSES</a></li>
							<li class="menu_item menu_mm"><a href="videos.php">MULTIMEDIA</a></li>
							<li class="menu_item menu_mm"><a href="quiz.php">QUIZ</a></li>
							<li class="menu_item menu_mm"><a href="#AboutUs">ABOUT US</a></li>
						</ul>
					</div>

				</div>

			</div>

			<!-- Home -->

			<div class="home">

				<!-- Hero Slider -->
				<div class="hero_slider_container">
					<div class="hero_slider owl-carousel">

						<!-- Hero Slide -->
						<div class="hero_slide">
							<div class="hero_slide_background" style="background-image:url(images/slider_background.jpg)"></div>
							<div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
								<div class="hero_slide_content text-center">
									<h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut">Learn <span>PHP</span> today!</h1>
								</div>
							</div>
						</div>

						<!-- Hero Slide -->
						<div class="hero_slide">
							<div class="hero_slide_background" style="background-image:url(images/slider_background.jpg)"></div>
							<div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
								<div class="hero_slide_content text-center">
									<h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut">Learn <span>Node JS</span> today!</h1>
								</div>
							</div>
						</div>

						<!-- Hero Slide -->
						<div class="hero_slide">
							<div class="hero_slide_background" style="background-image:url(images/slider_background.jpg)"></div>
							<div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
								<div class="hero_slide_content text-center">
									<h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut">Learn <span>JSP</span> today!</h1>
								</div>
							</div>
						</div>

					</div>

					<div class="hero_slider_left hero_slider_nav trans_200"><span class="trans_200">prev</span></div>
					<div class="hero_slider_right hero_slider_nav trans_200"><span class="trans_200">next</span></div>
				</div>

			</div>

			<div class="hero_boxes">
				<div class="hero_boxes_inner">
					<div class="container">
						<div class="row">
							<div class="col-lg-4 hero_box_col">
								<div class="hero_box d-flex flex-row align-items-center justify-content-start">
									<img src="images/earth-globe.svg" class="svg" alt="">
									<div class="hero_box_content">
										<h2 class="hero_box_title">Server-Side Scripting</h2>
										<a href="course.php" class="hero_box_link">view more</a>
									</div>
								</div>
							</div>

							<div class="col-lg-4 hero_box_col">
								<div class="hero_box d-flex flex-row align-items-center justify-content-start">
									<img src="images/books.svg" class="svg" alt="">
									<div class="hero_box_content">
										<h2 class="hero_box_title">Web Application Security</h2>
										<a href="course.php" class="hero_box_link">view more</a>
									</div>
								</div>
							</div>

							<div class="col-lg-4 hero_box_col">
								<div class="hero_box d-flex flex-row align-items-center justify-content-start">
									<img src="images/professor.svg" class="svg" alt="">
									<div class="hero_box_content">
										<h2 class="hero_box_title">Activities</h2>
										<a href="quiz.php" class="hero_box_link">view more</a>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>

			<!-- Popular -->

			<div class="popular page_section">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="section_title text-center">
								<h1>Introduction</h1>
							</div>
						</div>
					</div>
				</div>		
			</div>

			<!-- Register -->

			<div class="register">

				<div class="container-fluid">

					<div class="row row-eq-height">
						<div class="col-lg-6 nopadding">

							<!-- Register -->

							<div class="register_section d-flex flex-column align-items-center justify-content-center">
								<div class="register_content text-center">
									<h1 class="register_title">What is this  <span>website</span> all about?</h1>
								</div>
							</div>

						</div>

						<div class="col-lg-6 nopadding">

							<!-- Search -->

							<div class="search_section d-flex flex-column align-items-center justify-content-center">
								<div class="search_background" style="background-image:url(images/search_background.jpg);"></div>
								<div class="search_content text-center">
									<p class="footer_column_title" style="color:dimgray">This website is a project of the Course Web Systems and Technologies of the Saint Louis University - Baguio City. The purpose of this site is to share the ideas and knowledge about the web. This includes the topics in the Server Side Scripting - PHP, Node JS and JSP.</p>
								</div> 
							</div>

						</div>
					</div>
				</div>
			</div>

			<!-- Services -->

			<div class="services page_section">

				<div class="container">
					<div class="row">
						<div class="col">
							<div class="section_title text-center">
								<h1>Our Services</h1>
							</div>
						</div>
					</div>

					<div class="row services_row">

						<div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
							<div class="icon_container d-flex flex-column justify-content-end">
								<img src="images/earth-globe.svg" alt="">
							</div>
							<h3>Online Courses</h3>
							<p>In this course website, we offer you to lessons about the following topics: PHP, Node JS & JSP.</p>
						</div>

						<div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
							<div class="icon_container d-flex flex-column justify-content-end">
								<img src="images/exam.svg" alt="">
							</div>
							<h3>Online Quizzes</h3>
							<p>In this course website, we offer you online quizzes about the following topics: PHP, Node JS & JSP.</p>
						</div>

						<div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
							<div class="icon_container d-flex flex-column justify-content-end">
								<img src="images/blackboard.svg" alt="">
							</div>
							<h3>Educational Videos</h3>
							<p>In this course website, we offer you some educational videos about the following topics: PHP, Node JS & JSP.</p>
						</div>

					</div>
				</div>
			</div>

			<!-- Testimonials -->

			<div class="testimonials page_section">
				<!-- <div class="testimonials_background" style="background-image:url(images/testimonials_background.jpg)"></div> -->
				<div class="testimonials_background_container prlx_parent">
					<div class="testimonials_background prlx" style="background-image:url(images/aboutus.jpg)"></div>
				</div>
				<div class="container">

					<div class="row">
						<div class="col">
							<div class="section_title text-center">
								<h1 id="AboutUs">About Us</h1>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-10 offset-lg-1">

							<div class="testimonials_slider_container">

								<!-- Testimonials Slider -->
								<div class="owl-carousel owl-theme testimonials_slider">

									<!-- Testimonials Item -->
									<div class="owl-item">
										<div class="testimonials_item text-center">
											<div class="quote">“</div>
											<p class="testimonials_text">Straightforward, Brilliant, and has prowess. Caesar is good in analyzing tasks at hand and works hard under pressure. He plans to obtain a respectable position in the I.T. department.</p>
											<div class="testimonial_user">
												<div class="testimonial_image mx-auto">
													<img src="images/RomeroCaesar.jpg" alt="">
												</div>
												<div class="testimonial_name">Caesar Romero</div>
												<div class="testimonial_title">College Student</div>
											</div>
										</div>
									</div>

									<!-- Testimonials Item -->
									<div class="owl-item">
										<div class="testimonials_item text-center">
											<div class="quote">“</div>
											<p class="testimonials_text">Kind, Understanding, and Hardworking. Ryan has talents with Web Developing and has specializes with HTML.</p>
											<div class="testimonial_user">
												<div class="testimonial_image mx-auto">
													<img src="images/DeGuzmanRyan.jpg" alt="">
												</div>
												<div class="testimonial_name">Ryan De Guzman</div>
												<div class="testimonial_title">College Student</div>
											</div>
										</div>
									</div>

									<!-- Testimonials Item -->
									<div class="owl-item">
										<div class="testimonials_item text-center">
											<div class="quote">“</div>
											<p class="testimonials_text">Analytic, Technical, and having Initiative. Darren has pride in his skills in coding and Java programming. He is still developing his skills but one day plans to achieve a proper job.</p>
											<div class="testimonial_user">
												<div class="testimonial_image mx-auto">
													<img src="images/SisonDarren.jpg" alt="">
												</div>
												<div class="testimonial_name">Darren Sison</div>
												<div class="testimonial_title">College Student</div>
											</div>
										</div>
									</div>

									<!-- Testimonials Item -->
									<div class="owl-item">
										<div class="testimonials_item text-center">
											<div class="quote">“</div>
											<p class="testimonials_text">Initiative, communication skills, and teamwork oriented. Ivy resides in Baguio and plans to develop a good network. She plans to work hard and get a good job.</p>
											<div class="testimonial_user">
												<div class="testimonial_image mx-auto">
													<img src="images/PalmaIvy.jpg" alt="">
												</div>
												<div class="testimonial_name">Ivy Palma</div>
												<div class="testimonial_title">College Student</div>
											</div>
										</div>
									</div>

									<!-- Testimonials Item -->
									<div class="owl-item">
										<div class="testimonials_item text-center">
											<div class="quote">“</div>
											<p class="testimonials_text">Dependable, Caring, and Trustworthy.  She is intuitive with her tasks. She has attention to detail and plans to design applications.</p>
											<div class="testimonial_user">
												<div class="testimonial_image mx-auto">
													<img src="images/DerijeFranchesca.jpg" alt="">
												</div>
												<div class="testimonial_name">Franchesca Derije</div>
												<div class="testimonial_title">College Student</div>
											</div>
										</div>
									</div>

								</div>

							</div>
						</div>
					</div>

				</div>
			</div>

			<!-- Footer -->

			<footer class="footer">
				<div class="container">

					<!-- Newsletter -->

					<div class="newsletter">
						<div class="row">
							<div class="col">
								<div class="section_title text-center">
									<h1><i class="fas fa-globe"></i> WEBTEK NOTES 2018! </h1>
								</div>
							</div>
						</div>
					</div>
				</div>
			</footer>

		</div>

		<script src="js/jquery-3.2.1.min.js"></script>
		<script src="styles/bootstrap4/popper.js"></script>
		<script src="styles/bootstrap4/bootstrap.min.js"></script>
		<script src="plugins/greensock/TweenMax.min.js"></script>
		<script src="plugins/greensock/TimelineMax.min.js"></script>
		<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
		<script src="plugins/greensock/animation.gsap.min.js"></script>
		<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
		<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
		<script src="plugins/scrollTo/jquery.scrollTo.min.js"></script>
		<script src="plugins/easing/easing.js"></script>
		<script src="js/custom.js"></script>

	</body>
</html>