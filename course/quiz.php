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
        <link rel="stylesheet" type="text/css" href="styles/contact_styles.css">
        <link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
        <link rel="stylesheet" type="text/css" href="styles/main_styles.css">
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
                                        <a href="#serverSideScripting">Server Scripting</a>
                                        <a href="#webAppSecurity">Web App Security</a>
                                    </div>
                                </li>
                                <li class="main_nav_item"><a href="videos.php">Multimedia</a></li>
                                <li class="main_nav_item"><a href="quiz.php">quiz</a></li>
                                <li class="main_nav_item"><a href="index.php">About Us</a></li>
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
                            <li class="menu_item menu_mm"><a href="index.php">ABOUT US</a></li>
                        </ul>
                    </div>

                </div>

            </div>

            <!-- Home -->

            <div class="home">
                <div class="home_background_container prlx_parent">
                    <div class="home_background prlx" style="background-image:url(images/quiz.jpg)"></div>
                </div>
                <div class="home_content">
                    <h1>Quiz</h1>
                </div>
            </div>

            <!-- Contact -->

            <div class="contact">
                <div class="container">

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
        <script src="plugins/scrollTo/jquery.scrollTo.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
        <script src="plugins/easing/easing.js"></script>
        <script src="js/contact_custom.js"></script>

    </body>
</html>