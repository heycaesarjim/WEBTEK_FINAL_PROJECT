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
		<link rel="stylesheet" type="text/css" href="styles/courses_styles.css">
		<link rel="stylesheet" type="text/css" href="styles/courses_responsive.css">
		<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
		<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
		<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
		<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
		<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
		<link rel="stylesheet" type="text/css" href="styles/responsive.css">
		<link rel="stylesheet" type="text/css" href="styles/elements_styles.css">
		<link rel="stylesheet" type="text/css" href="styles/elements_responsive.css">
	</head>
	<body>
	
       <?php
        //Start your session
        session_start();
        if (isset($_SESSION['name']) && $_SESSION['name'] == true) {
            echo "You are logged in as, " . $_SESSION['name'] . "!";
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
								<li class="main_nav_item"><a href="index.html">Home</a></li>
								<li class="main_nav_item dropdown">
									<a href="course.html" class="dropbtn">Courses</a>
									<div class="dropdown-content">
										<a href="#serverSideScripting">Server Scripting</a>
										<a href="#webAppSecurity">Web App Security</a>
									</div>
								</li>
								<li class="main_nav_item"><a href="videos.html">Multimedia</a></li>
								<li class="main_nav_item"><a href="quiz.html">quiz</a></li>
								<li class="main_nav_item"><a href="index.html">About Us</a></li>
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
							<li class="menu_item menu_mm"><a href="index.html">HOME</a></li>
							<li class="menu_item menu_mm"><a href="course.html">COURSES</a></li>
							<li class="menu_item menu_mm"><a href="videos.html">MULTIMEDIA</a></li>
							<li class="menu_item menu_mm"><a href="quiz.html">QUIZ</a></li>
							<li class="menu_item menu_mm"><a href="index.html">ABOUT US</a></li>
						</ul>
					</div>

				</div>

			</div>

			<!-- Server Scripting -->

			<div class="home">
				<div class="home_background_container prlx_parent">
					<div class="home_background prlx" style="background-image:url(images/php.jpg)"></div>
				</div>
				<div class="home_content">
					<h1 id="serverSideScripting">Server Scripting</h1>
				</div>
			</div>

			<!-- PHP -->

			<div class="popular page_section">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="section_title text-center">
								<h1>PHP</h1>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-12">

					<!-- Syllabus PHP -->
					<div class="elements_accordions">

						<div class="accordion_container">
							<div class="accordion d-flex flex-row align-items-center footer_column_title" style="color:dimgray"> Introduction to PHP</div>
							<div class="accordion_panel">
								<div class="footer_column_title" style="color:dimgray; font-weight: 300">
									<dl>
										<dt class="lead">What is PHP?</dt>
										<dd>&nbsp; - PHP is an acronym for "PHP: Hypertext Preprocessor"</dd>
										<dd>&nbsp; - PHP is a widely-used, open source scripting language</dd>
										<dd>&nbsp; - PHP scripts are executed on the server</dd>
										<dd>&nbsp; - PHP is free to download and use</dd>
									</dl>

									<dl>
										<dt class="lead">What is a PHP File?</dt>
										<dd>&nbsp; - PHP files can contain text, HTML, CSS, JavaScript, and PHP code</dd>
										<dd>&nbsp; - PHP code are executed on the server, and the result is returned to the browser as plain HTML</dd>
										<dd>&nbsp; - PHP files have extension ".php"</dd>
									</dl>

									<dl>
										<dt class="lead">What Can PHP Do?</dt>
										<dd>&nbsp; - PHP can generate dynamic page content</dd>
										<dd>&nbsp; - PHP can create, open, read, write, delete, and close files on the server</dd>
										<dd>&nbsp; - PHP can collect form data</dd>
										<dd>&nbsp; - PHP can send and receive cookies</dd>
										<dd>&nbsp; - PHP can add, delete, modify data in your database</dd>
										<dd>&nbsp; - PHP can be used to control user-access</dd>
										<dd>&nbsp; - PHP can encrypt data</dd>
										<br>
										<dd>&nbsp;With PHP you are not limited to output HTML. You can output images, PDF files, and even Flash movies. You can also output any text, such as XHTML and XML.</dd>
									</dl>
								</div>
							</div>
						</div>

						<div class="accordion_container">
							<div class="accordion d-flex flex-row align-items-center footer_column_title" style="color:dimgray">PHP 5 Syntax</div>
							<div class="accordion_panel">
								<div class="footer_column_title" style="color:dimgray; font-weight: 300">
									<dl>
										<dd>&nbsp;A PHP script is executed on the server, and the plain HTML result is sent back to the browser.</dd>
									</dl>
									<dl>
										<dt class="lead">Basic PHP Syntax</dt>
										<dd>&nbsp;A PHP script can be placed anywhere in the document.</dd>
										<dd>&nbsp;A PHP script starts with <?php and ends with ?>:</dd>
										<dd>
											<span class="hiddentxt"><a href="images/php1.png">[Here is an example]</a></span><span class="hiddenimg"><img src="images/php1.png"  height="auto;" width="auto;" /></span>.
										</dd>
										<dd>&nbsp;The default file extension for PHP files is ".php".</dd>
										<dd>&nbsp;A PHP file normally contains HTML tags, and some PHP scripting code.</dd>
									</dl>

									<dl>
										<dt class="lead">Comments in PHP</dt>
										<dd>&nbsp;A comment in PHP code is a line that is not read/executed as part of the program. Its only purpose is to be read by someone who is looking at the code.</dd>
										<dd>&nbsp;Comments can be used to:</dd>
										<dd>&ensp;•	Let others understand what you are doing</dd>
										<dd>&ensp;•	Remind yourself of what you did - Most programmers have experienced coming back to their own work a year or two later and having to re-figure out what they did. Comments can remind you of what you were thinking when you wrote the code.</dd>
										<dd>&nbsp;PHP supports several ways of commenting:</dd>
										<dd>
											<span class="hiddentxt"><a href="images/php2.png">[Here is an example]</a></span><span class="hiddenimg"><img src="images/php2.png"  height="auto;" width="auto;" /></span>.
										</dd>
									</dl>

									<dl>
										<dt class="lead">PHP Case Sensitivity</dt>
										<dd>
											<span class="hiddentxt"><a href="images/php3.png">[Here is an example]</a></span><span class="hiddenimg"><img src="images/php3.png" height="auto;" width="auto;" /></span>.
										</dd>
										<dd>&nbsp;In PHP, all keywords (e.g. if, else, while, echo, etc.), classes, functions, and user-defined functions are NOT case-sensitive.</dd>
										<dd>&nbsp;In the example below, all three echo statements below are legal (and equal):</dd>

									</dl>
								</div>
							</div>
						</div>
						<div class="accordion_container">
							<div class="accordion d-flex flex-row align-items-center footer_column_title" style="color:dimgray">PHP 5 Variables</div>
							<div class="accordion_panel">
								<div class="footer_column_title" style="color:dimgray; font-weight: 300">
									<dl>
										<dt class="lead">PHP Variables</dt>
										<dd>&nbsp;A variable can have a short name (like x and y) or a more descriptive name (age, carname, total_volume).</dd>
										<dd>&nbsp;Rules for PHP variables:</dd>
										<dd>&ensp;•	A variable starts with the $ sign, followed by the name of the variable</dd>
										<dd>&ensp;•	A variable name must start with a letter or the underscore character</dd>
										<dd>&ensp;•	A variable name cannot start with a number</dd>
										<dd>&ensp;•	A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )</dd>
										<dd>&ensp;•	Variable names are case-sensitive ($age and $AGE are two different variables)</dd>
									</dl>

									<dl>
										<dt class="lead">Output Variables</dt>
										<dd>&nbsp;The PHP echo statement is often used to output data to the screen.</dd>
									</dl>

									<dl>
										<dt class="lead">PHP Variables Scope</dt>
										<dd>&nbsp;In PHP, variables can be declared anywhere in the script.</dd>
										<dd>&nbsp;The scope of a variable is the part of the script where the variable can be referenced/used.</dd>
										<dd>&nbsp;PHP has three different variable scopes:</dd>
										<dd>&ensp;•	local</dd>
										<dd>&ensp;•	global</dd>
										<dd>&ensp;•	static</dd>
									</dl>

									<dl>
										<dt class="lead">Global and Local Scope</dt>
										<dd>&nbsp;A variable declared outside a function has a GLOBAL SCOPE and can only be accessed outside a function:</dd>
										<dd>
											<span class="hiddentxt"><a href="images/php1.png">[Here is an example]</a></span><span class="hiddenimg"><img src="images/php4.png"  height="auto;" width="auto;" /></span>.
										</dd>
										<dd>&nbsp;A variable declared within a function has a LOCAL SCOPE and can only be accessed within that function:</dd>
										<dd>
											<span class="hiddentxt"><a href="images/php1.png">[Here is an example]</a></span><span class="hiddenimg"><img src="images/php5.png"  height="auto;" width="auto;" /></span>.
										</dd>
									</dl>

									<dl>
										<dt class="lead">PHP The global Keyword</dt>
										<dd>&nbsp;The global keyword is used to access a global variable from within a function.</dd>
										<dd>&nbsp;To do this, use the global keyword before the variables (inside the function):</dd>
										<dd>
											<span class="hiddentxt"><a href="images/php1.png">[Here is an example]</a></span><span class="hiddenimg"><img src="images/php6.png"  height="auto;" width="auto;" /></span>.
										</dd>
									</dl>

									<dl>
										<dt class="lead">PHP The static Keyword</dt>
										<dd>&nbsp;Normally, when a function is completed/executed, all of its variables are deleted. However, sometimes we want a local variable NOT to be deleted. We need it for a further job.</dd>
									</dl>
								</div>
							</div>
						</div>
						<div class="accordion_container">
							<div class="accordion d-flex flex-row align-items-center footer_column_title" style="color:dimgray">PHP 5 echo and print Statements</div>
							<div class="accordion_panel">
								<div class="footer_column_title" style="color:dimgray; font-weight: 300">
									<dl>
										<dt class="lead">PHP echo and print Statements</dt>
										<dd>&nbsp;Echo and print are more or less the same. They are both used to output data to the screen. </dd>
										<dd>&nbsp;The differences are small: echo has no return value while print has a return value of 1 so it can be used in expressions. echo can take multiple parameters (although such usage is rare) while print can take one argument. echo is marginally faster than print.</dd>
									</dl>

									<dl>
										<dt class="lead">The PHP echo Statement</dt>
										<dd>&nbsp;The echo statement can be used with or without parentheses: echo or echo().</dd>
										<br>
										<dd><b>Display Text</b></dd>
										<dd>&nbsp;The following example shows how to output text with the echo command (notice that the text can contain HTML markup):</dd>
										<dd>
											<span class="hiddentxt"><a href="images/php1.png">[Here is an example]</a></span><span class="hiddenimg"><img src="images/php7.png"  height="auto;" width="auto;" /></span>.
										</dd>
									</dl>

									<dl>
										<dt class="lead">The PHP print Statement</dt>
										<dd>&nbsp;The print statement can be used with or without parentheses: print or print().</dd>
										<dd><b>Display Text</b></dd>>
										<dd>&nbsp;The following example shows how to output text with the print command (notice that the text can contain HTML markup):</dd>
										<dd>
											<span class="hiddentxt"><a href="images/php1.png">[Here is an example]</a></span><span class="hiddenimg"><img src="images/php8.png"  height="auto;" width="auto;" /></span>.
										</dd>
									</dl>

									<dl>
										<dt class="lead">PHP Data Types</dt>
										<dd>&nbsp;Variables can store data of different types, and different data types can do different things.</dd>
										<dd>&nbsp;PHP supports the following data types:</dd>
										<dd>&ensp;•	String</dd>
										<dd>&ensp;•	Integer</dd>
										<dd>&ensp;•	Float (floating point numbers - also called double)</dd>
										<dd>&ensp;•	Boolean</dd>
										<dd>&ensp;•	Array</dd>
										<dd>&ensp;•	Object</dd>
										<dd>&ensp;•	NULL</dd>
										<dd>&ensp;•	Resource</dd>
									</dl>

									<dl>
										<dt class="lead">PHP String</dt>
										<dd>&nbsp;A string is a sequence of characters, like "Hello world!".</dd>
										<dd>
											<span class="hiddentxt"><a href="images/php1.png">[Here is an example]</a></span><span class="hiddenimg"><img src="images/php9.png"  height="auto;" width="auto;" /></span>.
										</dd>
									</dl>

									<dl>
										<dt class="lead">PHP Integer</dt>
										<dd>&nbsp;An integer data type is a non-decimal number between -2,147,483,648 and 2,147,483,647.</dd>
										<dd>&nbsp;Rules for integers:</dd>
										<dd>&ensp;•	An integer must have at least one digit</dd>
										<dd>&ensp;•	An integer must not have a decimal point</dd>
										<dd>&ensp;•	An integer can be either positive or negative</dd>
										<dd>&ensp;•	Integers can be specified in three formats: decimal (10-based), hexadecimal (16-based - prefixed with 0x) or octal (8-based - prefixed with 0)</dd>
										<dd>
											<span class="hiddentxt"><a href="images/php1.png">[Here is an example]</a></span><span class="hiddenimg"><img src="images/php10.png"  height="auto;" width="auto;" /></span>.
										</dd>
									</dl>

									<dl>
										<dt class="lead">PHP Float</dt>
										<dd>&nbsp;A float (floating point number) is a number with a decimal point or a number in exponential form.</dd>
										<dd>
											<span class="hiddentxt"><a href="images/php1.png">[Here is an example]</a></span><span class="hiddenimg"><img src="images/php11.png"  height="auto;" width="auto;" /></span>.
										</dd>
									</dl>

									<dl>
										<dt class="lead">PHP Boolean</dt>
										<dd>&nbsp;A Boolean represents two possible states: TRUE or FALSE.</dd>
										<dd>
											<span class="hiddentxt"><a href="images/php1.png">[Here is an example]</a></span><span class="hiddenimg"><img src="images/php12.png"  height="auto;" width="auto;" /></span>.
										</dd>
									</dl>

									<dl>
										<dt class="lead">PHP Array</dt>
										<dd>&nbsp;An array stores multiple values in one single variable.</dd>
										<dd>
											<span class="hiddentxt"><a href="images/php1.png">[Here is an example]</a></span><span class="hiddenimg"><img src="images/php13.png"  height="auto;" width="auto;" /></span>.
										</dd>
									</dl>

									<dl>
										<dt class="lead">PHP Object</dt>
										<dd>&nbsp;An object is a data type which stores data and information on how to process that data.</dd>
										<dd>&nbsp;In PHP, an object must be explicitly declared.</dd>
										<dd>
											<span class="hiddentxt"><a href="images/php1.png">[Here is an example]</a></span><span class="hiddenimg"><img src="images/php14.png"  height="auto;" width="auto;" /></span>.
										</dd>
									</dl>
								</div>
							</div>
						</div>
						<div class="accordion_container">
							<div class="accordion d-flex flex-row align-items-center footer_column_title" style="color:dimgray"> PHP 5 Operators</div>
							<div class="accordion_panel">
								<div class="footer_column_title" style="color:dimgray; font-weight: 300">
									<dl>
										<dt class="lead">PHP Operators</dt>
										<dd>&nbsp;Operators are used to perform operations on variables and values.</dd>
										<dd>&nbsp;PHP divides the operators in the following groups:</dd>
										<dd>&ensp;•	Arithmetic operators</dd>
										<dd>&ensp;•	Assignment operators</dd>
										<dd>&ensp;•	Comparison operators</dd>
										<dd>&ensp;•	Increment/Decrement operators</dd>
										<dd>&ensp;•	Logical operators</dd>
										<dd>&ensp;•	String operators</dd>
										<dd>&ensp;•	Array operators</dd>
									</dl>

									<dl>
										<dt class="lead">PHP Arithmetic Operators</dt>
										<dd>&nbsp;The PHP arithmetic operators are used with numeric values to perform common arithmetical operations, such as addition, subtraction, multiplication etc.</dd>
										<dd>
											<span class="hiddentxt"><a href="images/php1.png">[Here is an example]</a></span><span class="hiddenimg"><img src="images/php15.png"  height="auto;" width="auto;" /></span>.
										</dd>
									</dl>

									<dl>
										<dt class="lead">PHP Assignment Operators</dt>
										<dd>&nbsp;The PHP assignment operators are used with numeric values to write a value to a variable.</dd>
										<dd>&nbsp;The basic assignment operator in PHP is "=". It means that the left operand gets set to the value of the assignment expression on the right.</dd>
										<dd>
											<span class="hiddentxt"><a href="images/php1.png">[Here is an example]</a></span><span class="hiddenimg"><img src="images/php16.png"  height="auto;" width="auto;" /></span>.
										</dd>
									</dl>

									<dl>
										<dt class="lead">PHP Comparison Operators</dt>
										<dd>&nbsp;The PHP comparison operators are used to compare two values (number or string):</dd>
										<dd>
											<span class="hiddentxt"><a href="images/php1.png">[Here is an example]</a></span><span class="hiddenimg"><img src="images/php17.png"  height="auto;" width="auto;" /></span>.
										</dd>
									</dl>

									<dl>
										<dt class="lead">PHP Increment / Decrement Operators</dt>
										<dd>&nbsp;The PHP increment operators are used to increment a variable's value.</dd>
										<dd>&nbsp;The PHP decrement operators are used to decrement a variable's value.</dd>
										<dd>
											<span class="hiddentxt"><a href="images/php1.png">[Here is an example]</a></span><span class="hiddenimg"><img src="images/php18.png"  height="auto;" width="auto;" /></span>.
										</dd>
									</dl>

									<dl>
										<dt class="lead">PHP Logical Operators</dt>
										<dd>&nbsp;The PHP logical operators are used to combine conditional statements.</dd>
										<dd>
											<span class="hiddentxt"><a href="images/php1.png">[Here is an example]</a></span><span class="hiddenimg"><img src="images/php19.png"  height="auto;" width="auto;" /></span>.
										</dd>
									</dl>

									<dl>
										<dt class="lead">PHP Conditional Statements</dt>
										<dd>&nbsp;Very often when you write code, you want to perform different actions for different conditions. You can use conditional statements in your code to do this.</dd>
										<dd>&nbsp;In PHP we have the following conditional statements:</dd>
										<dd>&ensp;•	if statement - executes some code if one condition is true</dd>
										<dd>&ensp;•	if...else statement - executes some code if a condition is true and another code if that condition is false</dd>
										<dd>&ensp;•	if...elseif....else statement - executes different codes for more than two conditions</dd>
										<dd>&ensp;•	switch statement - selects one of many blocks of code to be executed</dd>
									</dl>

									<dl>
										<dt class="lead">PHP Loops</dt>
										<dd>&nbsp;Often when you write code, you want the same block of code to run over and over again in a row. Instead of adding several almost equal code-lines in a script, we can use loops to perform a task like this.</dd>
										<dd>&nbsp;In PHP, we have the following looping statements:</dd>
										<dd>&ensp;•	while - loops through a block of code as long as the specified condition is true</dd>
										<dd>&ensp;•	do...while - loops through a block of code once, and then repeats the loop as long as the specified condition is true</dd>
										<dd>&ensp;•	for - loops through a block of code a specified number of times</dd>
										<dd>&ensp;•	foreach - loops through a block of code for each element in an array</dd>
									</dl>
								</div>
							</div>
						</div>
						<div class="accordion_container">
							<div class="accordion d-flex flex-row align-items-center footer_column_title" style="color:dimgray">PHP 5 Arrays</div>
							<div class="accordion_panel">
								<dl>
									<dt class="lead">What is an Array?</dt>
									<dd>&nbsp;An array is a special variable, which can hold more than one value at a time.</dd>
								</dl>

								<dl>
									<dt class="lead">Create an Array in PHP</dt>
									<dd>&nbsp;In PHP, the array() function is used to create an array.</dd>
									<dd>&nbsp;In PHP, there are three types of arrays:</dd>
									<dd>&ensp;•	Indexed arrays - Arrays with a numeric index</dd>
									<dd>&ensp;•	Associative arrays - Arrays with named keys</dd>
									<dd>&ensp;•	Multidimensional arrays - Arrays containing one or more arrays</dd>
									<dd>
										<span class="hiddentxt"><a href="images/php1.png">[Here is an example]</a></span><span class="hiddenimg"><img src="images/php20.png"  height="auto;" width="auto;" /></span>.
									</dd>
								</dl>
							</div>
						</div>
					</div>

					<div class="accordion_container">
						<div class="accordion d-flex flex-row align-items-center footer_column_title" style="color:dimgray"> Multimedia</div>
						<div class="accordion_panel">
							<div class="footer_column_title" style="color:dimgray; font-weight: 300">
								<div class="text-center">
									<dt class="lead">PHP</dt>
									<video width="600" height="600" controls>
										<source src="videos/Tutorial%201%20-%20Introduction%20to%20PHP.mp4" type="video/mp4">
										Your browser does not support HTML5 video.
									</video>

									<dd>
										Video courtesy of 
										<a href="https://www.youtube.com/channel/UCzvs-_Nbw7YFC4fYWiSfhTw" target="_blank">Robert Smith</a>.
									</dd>
								</div>
							</div>
						</div>
					</div>
					<div class="accordion_container">
						<div class="accordion d-flex flex-row align-items-center footer_column_title" style="color:dimgray"> Quiz</div>
						<div class="accordion_panel">
							<div class="text-center">
								<dt class="lead">Click the button below to take the quiz</dt>
								<div class="container">
									<div class="button button_line_2 text-center trans_200"><a href="#">Start Quiz</a></div>
								</div>
							</div>
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
							</div>
						</div>

					</div>

					<div class="col-lg-6 nopadding">

						<!-- Search -->

						<div class="search_section d-flex flex-column align-items-center justify-content-center">
							<div class="search_background" style="background-image:url(images/search_background.jpg);"></div>
							<div class="search_content text-center">
							</div> 
						</div>

					</div>
				</div>
			</div>
		</div>

		<!-- Node JS -->

		<div class="popular page_section">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="section_title text-center">
							<h1>Node JS</h1>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-12">

				<!-- Syllabus Node JS -->
				<div class="elements_accordions">

					<div class="accordion_container">
						<div class="accordion d-flex flex-row align-items-center footer_column_title" style="color:dimgray"> Introduction to Node JS</div>
						<div class="accordion_panel">
							<div class="footer_column_title" style="color:dimgray; font-weight: 300">
								<dl>
									<dt class="lead">What is Node JS?</dt>
									<dd>&nbsp; - Node.js is an open source server environment</dd>
									<dd>&nbsp; - Node.js is free</dd>
									<dd>&nbsp; - Node.js runs on various platforms (Windows, Linux, Unix, Mac OS X, etc.)</dd>
									<dd>&nbsp; - Node.js uses JavaScript on the server</dd>
								</dl>

								<dl>
									<dt class="lead">Why Node JS?</dt>
									<dd><b>&nbsp;Node.js uses asynchronous programming!</b></dd>
									<br>
									<dd>&nbsp;A common task for a web server can be to open a file on the server and return the content to the client.</dd>
									<br>
									<dd>&nbsp;Here is how PHP or ASP handles a file request: </dd>
									<dd>&ensp;1.	Sends the task to the computer's file system.</dd>
									<dd>&ensp;2.	Waits while the file system opens and reads the file.</dd>
									<dd>&ensp;3.	Returns the content to the client.</dd>
									<dd>&ensp;4.	Ready to handle the next request.</dd>
									<br>
									<dd>&nbsp;Here is how Node.js handles a file request: </dd>
									<dd>&ensp;1.	Sends the task to the computer's file system.</dd>
									<dd>&ensp;2.	Ready to handle the next request.</dd>
									<dd>&ensp;3.	When the file system has opened and read the file, the server returns the content to the client.</dd>
									<br>
									<dd>&nbsp;Node.js eliminates the waiting, and simply continues with the next request.</dd>
									<br>
									<dd>&nbsp;Node.js runs single-threaded, non-blocking, asynchronously programming, which is very memory efficient.</dd>
								</dl>

								<dl>
									<dt class="lead">What can Node JS do?</dt>
									<dd>&nbsp; - Node.js can generate dynamic page content</dd>
									<dd>&nbsp; - Node.js can create, open, read, write, delete, and close files on the server</dd>
									<dd>&nbsp; - Node.js can collect form data</dd>
									<dd>&nbsp; - Node.js can add, delete, modify data in your database</dd>
								</dl>
							</div>
						</div>
					</div>

					<div class="accordion_container">
						<div class="accordion d-flex flex-row align-items-center footer_column_title" style="color:dimgray"> Node.js Module</div>
						<div class="accordion_panel">
							<div class="footer_column_title" style="color:dimgray; font-weight: 300">
								<dl>
									<dt class="lead">What is a Node JS file?</dt>
									<dd>&nbsp; - Node.js files contain tasks that will be executed on certain events</dd>
									<dd>&nbsp; - A typical event is someone trying to access a port on the server</dd>
									<dd>&nbsp; - Node.js files must be initiated on the server before having any effect</dd>
									<dd>&nbsp; - Node.js files have extension ".js"</dd>
								</dl>

								<dl>
									<dt class="lead">What is a Module in Node.js?</dt>
									<dd>&nbsp; - Consider modules to be the same as JavaScript libraries.</dd>
									<dd>&nbsp; - A set of functions you want to include in your application.</dd>
								</dl>

								<dl>
									<dt class="lead">Built-in Modules</dt>
									<dd>&nbsp; - Node.js has a set of built-in modules which you can use without any further installation.</dd>
									<dd>&nbsp;  Look at our <a href="https://www.w3schools.com/nodejs/ref_modules.asp">Built-in Modules</a> Reference for a complete list of modules.</dd>
								</dl>

								<dl>
									<dt class="lead">Include Modules</dt>
									<dd>&nbsp;To include a module, use the require() function with the name of the module:</dd>
									<dd>
										<span class="hiddentxt"><a href="images/php1.png">[Here is an example]</a></span><span class="hiddenimg"><img src="images/nodejs1.png"  height="auto;" width="auto;" /></span>.
									</dd>
									<dd>
										<span class="hiddentxt"><a href="images/php1.png">[Here is an example]</a></span><span class="hiddenimg"><img src="images/nodejs2.png"  height="auto;" width="auto;" /></span>.
									</dd>

								</dl>

								<dl>
									<dt class="lead">Create your own module</dt>
									<dd>&nbsp;You can create your own modules, and easily include them in your applications.</dd>
									<br>
									<dd>&nbsp;The following example creates a module that returns a date and time object:</dd>
									<dd>
										<span class="hiddentxt"><a href="images/php1.png">[Here is an example]</a></span><span class="hiddenimg"><img src="images/nodejs3.png"  height="auto;" width="auto;" /></span>.
									</dd>
									<dd>&nbsp;Use the exports keyword to make properties and methods available outside the module file.</dd>
									<dd>&nbsp;Save the code above in a file called "myfirstmodule.js"</dd>
								</dl>

								<dl>
									<dt class="lead">Include Your Own Module</dt>
									<dd>&nbsp;Now you can include and use the module in any of your Node.js files.</dd>
									<br>
									<dd>
										<span class="hiddentxt"><a href="images/php1.png">[Here is an example]</a></span><span class="hiddenimg"><img src="images/nodejs4.png"  height="auto;" width="auto;" /></span>.
									</dd>
								</dl>
							</div>
						</div>
					</div>

					<div class="accordion_container">
						<div class="accordion d-flex flex-row align-items-center footer_column_title" style="color:dimgray"> Node.js HTTP Module</div>
						<div class="accordion_panel">
							<div class="footer_column_title" style="color:dimgray; font-weight: 300">
								<dl>
									<dt class="lead">The Built-in HTTP Module</dt>
									<dd>&nbsp; Node.js has a built-in module called HTTP, which allows Node.js to transfer data over the Hyper Text Transfer Protocol (HTTP).</dd>
									<dd>&nbsp; To include the HTTP module, use the require() method:</dd>
									<dd>
										<span class="hiddentxt"><a href="images/php1.png">[Here is an example]</a></span><span class="hiddenimg"><img src="images/nodejs5.png" height="auto;" width="auto;" /></span>.
									</dd>
								</dl>

								<dl>
									<dt class="lead">Node.js as a Web Server</dt>
									<dd>&nbsp;The HTTP module can create an HTTP server that listens to server ports and gives a response back to the client.</dd>
									<dd>&nbsp;Use the createServer() method to create an HTTP server:</dd>
									<dd>
										<span class="hiddentxt"><a href="images/php1.png">[Here is an example]</a></span><span class="hiddenimg"><img src="images/nodejs6.png"  height="auto;" width="auto;" /></span>.
									</dd>
									<dd>&nbsp;The function passed into the http.createServer() method, will be executed when someone tries to access the computer on port 8080.</dd>
									<dd>&nbsp;Save the code above in a file called "demo_http.js", and initiate the file:</dd>
									<dd>
										<span class="hiddentxt"><a href="images/php1.png">[Here is an example]</a></span><span class="hiddenimg"><img src="images/nodejs7.png"  height="auto;" width="auto;" /></span>.
									</dd>
									<dd>&nbsp;If you have followed the same steps on your computer, you will see the same result as the example: http://localhost:8080</dd>
								</dl>

								<dl>
									<dt class="lead">Add an HTTP Header</dt>
									<dd>&nbsp;If the response from the HTTP server is supposed to be displayed as HTML, you should include an HTTP header with the correct content type:</dd>
									<dd>
										<span class="hiddentxt"><a href="images/php1.png">[Here is an example]</a></span><span class="hiddenimg"><img src="images/nodejs8.png"  height="auto;" width="auto;" /></span>.
									</dd>
									<dd>&nbsp;The first argument of the res.writeHead() method is the status code, 200 means that all is OK, the second argument is an object containing the response headers.</dd>
								</dl>
							</div>
						</div>
					</div>
					<div class="accordion_container">
						<div class="accordion d-flex flex-row align-items-center footer_column_title" style="color:dimgray"> Node.js File System Module</div>
						<div class="accordion_panel">
							<div class="footer_column_title" style="color:dimgray; font-weight: 300">
								<dl>
									<dt class="lead">Node.js as a File Server</dt>
									<dd>&nbsp; The Node.js file system module allow you to work with the file system on your computer.</dd>
									<dd>&nbsp; To include the File System module, use the require() method:</dd>
									<dd>
										<span class="hiddentxt"><a href="images/php1.png">[Here is an example]</a></span><span class="hiddenimg"><img src="images/nodejs9.png"  height="auto;" width="auto;" /></span>.
									</dd>
									<br>
									<dd>&nbsp;Common use for the File System module:</dd>
									<dd>&ensp;•	Read files</dd>
									<dd>&ensp;•	Create files</dd>
									<dd>&ensp;•	Update files</dd>
									<dd>&ensp;•	Delete files</dd>
									<dd>&ensp;•	Rename files</dd>
								</dl>

								<dl>
									<dt class="lead">Read Files</dt>
									<dd>&nbsp;The fs.readFile() method is used to read files on your computer.</dd>
									<dd>&nbsp;Assume we have the following HTML file (located in the same folder as Node.js):</dd>
									<dd>
										<span class="hiddentxt"><a href="images/php1.png">[Here is an example]</a></span><span class="hiddenimg"><img src="images/nodejs10.png"  height="auto;" width="auto;" /></span>.
									</dd>
								</dl>

								<dl>
									<dt class="lead">Create Files</dt>
									<dd>&nbsp;The File System module has methods for creating new files:</dd>
									<dd>&ensp;•	fs.appendFile()</dd>
									<dd>&ensp;•	fs.open()</dd>
									<dd>&ensp;•	fs.writeFile()</dd>
									<dd>&nbsp;The fs.appendFile() method appends specified content to a file. If the file does not exist, the file will be created:</dd>
									<dd>
										<span class="hiddentxt"><a href="images/php1.png">[Here is an example]</a></span><span class="hiddenimg"><img src="images/nodejs11.png"  height="auto;" width="auto;" /></span>.
									</dd>
									<dd>&nbsp;The fs.open() method takes a "flag" as the second argument, if the flag is "w" for "writing", the specified file is opened for writing. If the file does not exist, an empty file is created.</dd>
									<dd>The fs.writeFile() method replaces the specified file and content if it exists. If the file does not exist, a new file, containing the specified content, will be created.</dd>
								</dl>

								<dl>
									<dt class="lead">Update Files</dt>
									<dd>&nbsp;The File System module has methods for updating files:</dd>
									<dd>&ensp;•	fs.appendFile()</dd>
									<dd>&ensp;•	fs.writeFile()</dd>
									<dd>&nbsp;The fs.appendFile() method appends the specified content at the end of the specified file.</dd>
								</dl>

								<dl>
									<dt class="lead">Delete Files</dt>
									<dd>&nbsp;To delete a file with the File System module,  use the fs.unlink() method.</dd>
									<dd>&nbsp;The fs.unlink() method deletes the specified file.</dd>
								</dl>

								<dl>
									<dt class="lead">Rename Files</dt>
									<dd>&nbsp;To rename a file with the File System module,  use the fs.rename() method.</dd>
									<dd>&nbsp;The fs.rename() method renames the specified file.</dd>
								</dl>
							</div>
						</div>
					</div>

					<div class="accordion_container">
						<div class="accordion d-flex flex-row align-items-center footer_column_title" style="color:dimgray"> Node.js Events</div>
						<div class="accordion_panel">
							<div class="footer_column_title" style="color:dimgray; font-weight: 300">
								<dl>
									<dt class="lead">Events in Node.js</dt>
									<dd>&nbsp; Every action on a computer is an event. Like when a connection is made or a file is opened.</dd>
									<dd>&nbsp; Objects in Node.js can fire events, like the readStream object fires events when opening and closing a file.</dd>
								</dl>

								<dl>
									<dt class="lead">Events Module</dt>
									<dd>&nbsp;Node.js has a built-in module, called "Events", where you can create-, fire-, and listen for- your own events.</dd>
									<dd>&nbsp;To include the built-in Events module use the require() method. In addition, all event properties and methods are an instance of an EventEmitter object. To be able to access these properties and methods, create an EventEmitter object:</dd>
									<dd>
										<span class="hiddentxt"><a href="images/php1.png">[Here is an example]</a></span><span class="hiddenimg"><img src="images/nodejs12.png"  height="auto;" width="auto;" /></span>.
									</dd>
								</dl>
							</div>
						</div>
					</div>

					<div class="accordion_container">
						<div class="accordion d-flex flex-row align-items-center footer_column_title" style="color:dimgray"> Multimedia</div>
						<div class="accordion_panel">
							<div class="footer_column_title" style="color:dimgray; font-weight: 300">
								<div class="text-center">
									<dt class="lead">Node JS</dt>
									<video width="600" height="600" controls>
										<source src="videos/Node.js%20-%20Tutorial%20-%20First%20Application.mp4" type="video/mp4">
										Your browser does not support HTML5 video.
									</video>

									<dd>
										Video courtesy of 
										<a href="https://www.youtube.com/channel/UCSJbGtTlrDami-tDGPUV9-w" target="_blank">Academind</a>.
									</dd>
								</div>
							</div>
						</div>
					</div>

					<div class="accordion_container">
						<div class="accordion d-flex flex-row align-items-center footer_column_title" style="color:dimgray"> Quiz</div>
						<div class="accordion_panel">
							<div class="text-center">
								<dt class="lead">Click the button below to take the quiz</dt>
								<div class="container">
									<div class="button button_line_2 text-center trans_200"><a href="#">Start Quiz</a></div>
								</div>
							</div>
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
							</div>
						</div>

					</div>

					<div class="col-lg-6 nopadding">

						<!-- Search -->

						<div class="search_section d-flex flex-column align-items-center justify-content-center">
							<div class="search_background" style="background-image:url(images/search_background.jpg);"></div>
							<div class="search_content text-center">
							</div> 
						</div>

					</div>
				</div>
			</div>
		</div>

		<!-- JSP -->

		<div class="popular page_section">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="section_title text-center">
							<h1>JSP</h1>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-12">

				<!-- Syllabus PHP -->
				<div class="elements_accordions">

					<div class="accordion_container">
						<div class="accordion d-flex flex-row align-items-center footer_column_title" style="color:dimgray"> Introduction to JSP</div>
						<div class="accordion_panel">
							<div class="footer_column_title" style="color:dimgray; font-weight: 300">
								<dl>
									<dt class="lead">What is JSP Servlets?</dt>
									<dd>&nbsp; - Java Server Pages (JSP) is a server-side programming technology that enables the creation of dynamic, platform-independent method for building Web-based applications. JSP have access to the entire family of Java APIs, including the JDBC API to access enterprise databases. This tutorial will teach you how to use Java Server Pages to develop your web applications in simple and easy steps.</dd>
								</dl>

								<dl>
									<dt class="lead">What is JavaServer Pages?</dt>
									<dd>&nbsp; - JavaServer Pages (JSP) is a technology for developing Webpages that supports dynamic content. This helps developers insert java code in HTML pages by making use of special JSP tags, most of which start with <% and end with %>.</dd>
									<dd>&nbsp; - A JavaServer Pages component is a type of Java servlet that is designed to fulfill the role of a user interface for a Java web application. Web developers write JSPs as text files that combine HTML or XHTML code, XML elements, and embedded JSP actions and commands.</dd>
									<dd>&nbsp; - Using JSP, you can collect input from users through Webpage forms, present records from a database or another source, and create Webpages dynamically.</dd>
									<dd>&nbsp; - JSP tags can be used for a variety of purposes, such as retrieving information from a database or registering user preferences, accessing JavaBeans components, passing control between pages, and sharing information between requests, pages etc.</dd>
								</dl>

								<dl>
									<dt class="lead">Why Use JSP?</dt>
									<dd>&nbsp; - JavaServer Pages often serve the same purpose as programs implemented using the Common Gateway Interface (CGI). But JSP offers several advantages in comparison with the CGI.</dd>
								</dl>
							</div>
						</div>
					</div>

					<div class="accordion_container">
						<div class="accordion d-flex flex-row align-items-center footer_column_title" style="color:dimgray"> Elements of JSP</div>
						<div class="accordion_panel">
							<div class="footer_column_title" style="color:dimgray; font-weight: 300">
								<dl>
									<dt class="lead">The Scriptlet</dt>
									<dd>&nbsp; - A scriptlet can contain any number of JAVA language statements, variable or method declarations, or expressions that are valid in the page scripting language.</dd>
									<dd>
										<span class="hiddentxt"><a href="images/php1.png">[Here is an example]</a></span><span class="hiddenimg"><img src="images/jsp1.png"  height="auto;" width="auto;" /></span>.
									</dd>
								</dl>

								<dl>
									<dt class="lead">JSP Declarations</dt>
									<dd>&nbsp; - A declaration declares one or more variables or methods that you can use in Java code later in the JSP file. You must declare the variable or method before you use it in the JSP file.</dd>
									<dd>
										<span class="hiddentxt"><a href="images/php1.png">[Here is an example]</a></span><span class="hiddenimg"><img src="images/jsp2.png"  height="auto;" width="auto;" /></span>.
									</dd>
								</dl>

								<dl>
									<dt class="lead">JSP Expression</dt>
									<dd>&nbsp;A JSP expression element contains a scripting language expression that is evaluated, converted to a String, and inserted where the expression appears in the JSP file.</dd>
									<dd>&nbsp;Because the value of an expression is converted to a String, you can use an expression within a line of text, whether or not it is tagged with HTML, in a JSP file.</dd>
									<dd>&nbsp;The expression element can contain any expression that is valid according to the Java Language Specification but you cannot use a semicolon to end an expression.</dd>
									<dd>
										<span class="hiddentxt"><a href="images/php1.png">[Here is an example]</a></span><span class="hiddenimg"><img src="images/jsp3.png"  height="auto;" width="auto;" /></span>.
									</dd>
								</dl>

								<dl>
									<dt class="lead">JSP Comments</dt>
									<dd>&nbsp; - JSP comment marks text or statements that the JSP container should ignore. A JSP comment is useful when you want to hide or "comment out", a part of your JSP page.</dd>
									<dd>
										<span class="hiddentxt"><a href="images/php1.png">[Here is an example]</a></span><span class="hiddenimg"><img src="images/jsp4.png" height="auto;" width="auto;" /></span>.
									</dd>
									<dd>
										<span class="hiddentxt"><a href="images/php1.png">[Here is an example]</a></span><span class="hiddenimg"><img src="images/jsp5.png"  height="auto;" width="auto;" /></span>.
									</dd>
								</dl>

								<dl>
									<dt class="lead">JSP Directives</dt>
									<dd>&nbsp; - A JSP directive affects the overall structure of the servlet class. It usually has the following form</dd>
									<dd>
										<span class="hiddentxt"><a href="images/php1.png">[Here is an example]</a></span><span class="hiddenimg"><img src="images/jsp6.png"  height="auto;" width="auto;" /></span>.
									</dd>
								</dl>

								<dl>
									<dt class="lead">JSP Actions</dt>
									<dd>&nbsp;JSP actions use constructs in XML syntax to control the behavior of the servlet engine. You can dynamically insert a file, reuse JavaBeans components, forward the user to another page, or generate HTML for the Java plugin.</dd>
									<dd>&nbsp;There is only one syntax for the Action element, as it conforms to the XML standard</dd>
									<dd>&nbsp;The expression element can contain any expression that is valid according to the Java Language Specification but you cannot use a semicolon to end an expression.</dd>
								</dl>

								<dl>
									<dt class="lead">Control-Flow Statements</dt>
									<dd>&nbsp; - You can use all the APIs and building blocks of Java in your JSP programming including decision-making statements, loops, etc.</dd>
								</dl>

								<dl>
									<dt class="lead">Decision-Making Statements</dt>
									<dd>&nbsp; - The if...else block starts out like an ordinary Scriptlet, but the Scriptlet is closed at each line with HTML text included between the Scriptlet tags.</dd>
									<dd>
										<span class="hiddentxt"><a href="images/php1.png">[Here is an example]</a></span><span class="hiddenimg"><img src="images/jsp7.png"  height="auto;" width="auto;" /></span>.
									</dd>
								</dl>

								<dl>
									<dt class="lead">JSP Operators</dt>
									<dd>&nbsp; JSP supports all the logical and arithmetic operators supported by Java. Following table lists out all the operators with the highest precedence appear at the top of the table, those with the lowest appear at the bottom.</dd>
									<dd>&nbsp; Within an expression, higher precedence operators will be evaluated first.</dd>
									<dd>
										<span class="hiddentxt"><a href="images/php1.png">[Here is an example]</a></span><span class="hiddenimg"><img src="images/jsp8.png"  height="auto;" width="auto;" /></span>.
									</dd>
								</dl>

								<dl>
									<dt class="lead">JSP - Client Request</dt>
									<dd class="lead">Header & Description</dd>
									<dd class="lead">&nbsp; Accept</dd> 
									<dd>&ensp; - This header specifies the MIME types that the browser or other clients can handle. Values of image/png or image/jpeg are the two most common possibilities.</dd>
								</dl>

								<dl>
									<dd class="lead">&nbsp; Accept-Charset</dd>
									<dd>&ensp; - This header specifies the character sets that the browser can use to display the information. For example, ISO-8859-1.</dd>
								</dl>

								<dl>
									<dd class="lead">&nbsp; Accept-Encoding</dd>
									<dd>&ensp; - This header specifies the types of encodings that the browser knows how to handle. Values of gzip or compress are the two most common possibilities.</dd>
								</dl>

								<dl>
									<dd class="lead">&nbsp; Accept-Language</dd> 
									<dd>&ensp; - This header specifies the MIME types that the browser or other clients can handle. Values of image/png or image/jpeg are the two most common possibilities.</dd>
								</dl>

								<dl>
									<dd class="lead">&nbsp; Authorization</dd>
									<dd>&ensp; - This header is used by clients to identify themselves when accessing password-protected webpages.</dd>
								</dl>

								<dl>
									<dd class="lead">&nbsp; Connection</dd>
									<dd>&ensp; - This header indicates whether the client can handle persistent HTTP connections. Persistent connections permit the client or other browser to retrieve multiple files with a single request. A value of Keep-Alive means that persistent connections should be used.</dd>
								</dl>

								<dl>
									<dd class="lead">&nbsp; Content-Length</dd> 
									<dd>&ensp; - This header is applicable only to POST requests and gives the size of the POST data in bytes.</dd>
								</dl>

								<dl>
									<dd class="lead">&nbsp; Cookie</dd>
									<dd>&ensp; - This header returns cookies to servers that previously sent them to the browser.</dd>
								</dl>

								<dl>
									<dd class="lead">&nbsp; Host</dd>
									<dd>&ensp; - This header specifies the host and port as given in the original URL.</dd>
								</dl>

								<dl>
									<dd class="lead">&nbsp; If-Modified-Since</dd> 
									<dd>&ensp; - This header indicates that the client wants the page only if it has been changed after the specified date. The server sends a code, 304 which means Not Modified header if no newer result is available.</dd>
								</dl>

								<dl>
									<dd class="lead">&nbsp; If-Unmodified-Since</dd>
									<dd>&ensp; - This header is the reverse of If-Modified-Since; it specifies that the operation should succeed only if the document is older than the specified date.</dd>
								</dl>

								<dl>
									<dd class="lead">&nbsp; Referer</dd>
									<dd>&ensp; - This header indicates the URL of the referring webpages. For example, if you are at Webpage 1 and click on a link to Webpage 2, the URL of Webpage 1 is included in the Referer header when the browser requests Webpage 2.</dd>
								</dl>

								<dl>
									<dd class="lead">&nbsp; User-Agent</dd> 
									<dd>&ensp; - This header identifies the browser or other client making the request and can be used to return different content to different types of browsers.</dd>
								</dl>
							</div>
						</div>
					</div>

					<div class="accordion_container">
						<div class="accordion d-lex flex-row align-items-center footer_column_title" style="color:dimgray"> The HttpServletRequest Object</div>
						<div class="accordion_panel">
							<div class="footer_column_title" style="color:dimgray; font-weight: 300">
								<dl>
									<dd>The request object is an instance of a javax.servlet.http.HttpServletRequest object. Each time a client requests a page, the JSP engine creates a new object to represent that request.</dd>
									<dd>The request object provides methods to get HTTP header information including form data, cookies, HTTP methods, etc.</dd>
									<dd>Following table lists out the important methods that can be used to read HTTP header in your JSP program. These methods are available with HttpServletRequest object which represents client request to webserver.</dd>
								</dl>

								<dl>
									<dt class="lead">Method & Description</dt>
									<dd class="lead">&nbsp;Cookie[] getCookies()</dd>
									<dd>&ensp; Returns an array containing all of the Cookie objects the client sent with this request.</dd>
								</dl>

								<dl>
									<dd class="lead">&nbsp;Enumeration getAttributeNames()</dd>
									<dd>&ensp; Returns an Enumeration containing the names of the attributes available to this request.</dd>
								</dl>

								<dl>
									<dd class="lead">&nbsp;Enumeration getHeaderNames()</dd>
									<dd>&ensp; Returns an enumeration of all the header names this request contains.</dd>
								</dl>

								<dl>
									<dd class="lead">&nbsp;HttpSession getSession()</dd>
									<dd>&ensp; Returns the current session associated with the this request, or if the request does not have a session, creates one.</dd>
								</dl>

								<dl>
									<dd class="lead">&nbsp;HttpSession getSession(boolean create)</dd>
									<dd>&ensp; Returns the current HttpSession associated with the this request or, if if there is no current session and create is true, returns a new session.</dd>
								</dl>

								<dl>
									<dd class="lead">&nbsp;String getAuthType()</dd>
									<dd>&ensp; Returns the name of the authentication scheme used to protect the servlet, for example, "BASIC" or "SSL," or null if the JSP was not protected.</dd>
								</dl>

								<dl>
									<dd class="lead">&nbsp;String getMethod()</dd>
									<dd>&ensp; Returns the name of the HTTP method with which this request was made, for example, GET, POST, or PUT.</dd>
								</dl>

								<dl>
									<dd class="lead">&nbsp;String getHeader(String name)</dd>
									<dd>&ensp; Returns the value of the specified request header as a String.</dd>
								</dl>
							</div>
						</div>
					</div>

					<div class="accordion_container">
						<div class="accordion d-flex flex-row align-items-center footer_column_title" style="color:dimgray"> HTTP Header Request Example</div>
						<div class="accordion_panel">
							<div class="footer_column_title" style="color:dimgray; font-weight: 300">
								<dl>
									<dd>&nbsp;Following is the example which uses getHeaderNames() method of HttpServletRequest to read the HTTP header information. This method returns an Enumeration that contains the header information associated with the current HTTP request.</dd>
									<dd>&nbsp;Once we have an Enumeration, we can loop down the Enumeration in the standard manner. We will use the hasMoreElements() method to determine when to stop and the nextElement() method to get the name of each parameter name.</dd>
									<dd>
										<span class="hiddentxt"><a href="images/php1.png">[Here is an example]</a></span><span class="hiddenimg"><img src="images/jsp9.png"  height="auto;" width="auto;" /></span>.
									</dd>
								</dl>

								<dl>
									<dt class="lead">JSP - Server Response</dt>
									<dd>&nbsp; The status line consists of the HTTP version (HTTP/1.1 in the example), a status code (200 in the example), and a very short message corresponding to the status code (OK in the example).</dd>
									<dd>&nbsp; Following is a summary of the most useful HTTP 1.1 response headers which go back to the browser from the web server. These headers are frequently used in web programming</dd>
								</dl>

								<dl>
									<dt class="lead">Header & Description</dt>
									<dd class="lead">&nbsp; Allow</dd>
									<dd>&ensp;This header specifies the request methods (GET, POST, etc.) that the server supports.</dd>
								</dl>

								<dl>
									<dd class="lead">&nbsp; Cache-Control</dd>
									<dd>&ensp;This header specifies the circumstances in which the response document can safely be cached. It can have values public, privateor no-cache etc. Public means document is cacheable, Private means document is for a single user and can only be stored in private (nonshared) caches and no-cache means document should never be cached.</dd>
								</dl>

								<dl>
									<dd class="lead">&nbsp; Connection</dd>
									<dd>&ensp;This header instructs the browser whether to use persistent HTTP connections or not. A value of close instructs the browser not to use persistent HTTP connections and keep-alive means using persistent connections.</dd>
								</dl>

								<dl>
									<dd class="lead">&nbsp; Refresh</dd>
									<dd>&ensp;This header specifies how soon the browser should ask for an updated page. You can specify time in number of seconds after which a page would be refreshed.</dd>
								</dl>

								<dl>
									<dd class="lead">&nbsp; Retry-After</dd>
									<dd>&ensp;This header can be used in conjunction with a 503 (Service Unavailable) response to tell the client how soon it can repeat its request.</dd>
								</dl>
							</div>
						</div>
					</div>

					<div class="accordion_container">
						<div class="accordion d-flex flex-row align-items-center footer_column_title" style="color:dimgray"> The HttpServletResponse Object</div>
						<div class="accordion_panel">
							<div class="footer_column_title" style="color:dimgray; font-weight: 300">
								<dl>
									<dd>&nbsp;The response object is an instance of a javax.servlet.http.HttpServletResponse object. Just as the server creates the request object, it also creates an object to represent the response to the client.</dd>
									<dd>&nbsp;The response object also defines the interfaces that deal with creating new HTTP headers. Through this object, the JSP programmer can add new cookies or date stamps, HTTP status codes etc.</dd>
								</dl>
							</div>
						</div>
					</div>

					<div class="accordion_container">
						<div class="accordion d-flex flex-row align-items-center footer_column_title" style="color:dimgray"> HTTP Header Response Example</div>
						<div class="accordion_panel">
							<div class="footer_column_title" style="color:dimgray; font-weight: 300">
								<dl>
									<dd>&nbsp;Following example would use setIntHeader() method to set Refresh header to simulate a digital clock</dd>
									<dd>
										<span class="hiddentxt"><a href="images/php1.png">[Here is an example]</a></span><span class="hiddenimg"><img src="images/jsp10.png"  height="auto;" width="auto;" /></span>.
									</dd>
								</dl>

								<dl>
									<dt class="lead">JSP - Http Status Codes</dt>
									<dd>&nbsp; In this chapter, we will discuss the Http Status Codes in JSP. The format of the HTTP request and the HTTP response messages are similar and will have the following structure:</dd>
									<dd>&ensp; •	An initial status line + CRLF (Carriage Return + Line Feed ie. New Line)</dd>
									<dd>&ensp; •	Zero or more header lines + CRLF</dd>
									<dd>&ensp; •	A blank line ie. a CRLF</dd>
									<dd>&ensp; •	An optional message body like file, query data or query output.</dd>
									<dd>&nbsp; The status line consists of the HTTP version (HTTP/1.1 in the example), a status code (200 in the example), and a very short message corresponding to the status code (OK in the example).</dd>
								</dl>
							</div>
						</div>
					</div>

					<div class="accordion_container">
						<div class="accordion d-flex flex-row align-items-center footer_column_title" style="color:dimgray"> Methods to Set HTTP Status Code</div>
						<div class="accordion_panel">
							<div class="footer_column_title" style="color:dimgray; font-weight: 300">
								<dl>
									<dt class="lead">Following methods can be used to set the HTTP Status Code in your servlet program. These methods are available with the HttpServletResponse object.</dt>
									<dd>
										<span class="hiddentxt"><a href="images/php1.png">[Here is an example]</a></span><span class="hiddenimg"><img src="images/jsp11.png"  height="auto;" width="auto;" /></span>.
									</dd>
								</dl>
							</div>
						</div>
					</div>

					<div class="accordion_container">
						<div class="accordion d-flex flex-row align-items-center footer_column_title" style="color:dimgray"> Multimedia</div>
						<div class="accordion_panel">
							<div class="footer_column_title" style="color:dimgray; font-weight: 300">
								<div class="text-center">
									<dt class="lead">Java Servlet Pages</dt>
									<video width="600" height="600" controls>
										<source src="videos/Introduction%20to%20Java%20Servlets.mp4" type="video/mp4">
										Your browser does not support HTML5 video.
									</video>

									<dd>
										Video courtesy of 
										<a href="https://www.youtube.com/channel/UC5HozNtwmUuEDkLw4xQCQYw" target="_blank">Craig Piercy</a>.
									</dd>
								</div>
							</div>
						</div>
					</div>
					<div class="accordion_container">
						<div class="accordion d-flex flex-row align-items-center footer_column_title" style="color:dimgray"> Quiz</div>
						<div class="accordion_panel">
							<div class="text-center">
								<dt class="lead">Click the button below to take the quiz</dt>
								<div class="container">
									<div class="button button_line_2 text-center trans_200"><a href="#">Start Quiz</a></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Home -->

			<div class="home">
				<div class="home_background_container prlx_parent">
					<div class="home_background prlx" style="background-image:url(images/php.jpg)"></div>
				</div>
				<div class="home_content">
					<h1 id="webAppSecurity">Web App Security</h1>
				</div>
			</div>
		</div>
		<!-- OWASP -->

		<div class="popular page_section">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="section_title text-center">
							<h1>OWASP</h1>
						</div>
					</div>
				</div>
			</div>		

			<div class="col-lg-12">

				<!-- Syllabus OWASP -->
				<div class="elements_accordions">

					<div class="accordion_container">
						<div class="accordion d-flex flex-row align-items-center footer_column_title" style="color:dimgray"> Top 10 Web Application Security Risks</div>
						<div class="accordion_panel">
							<div class="footer_column_title" style="color:dimgray; font-weight: 300">
								<dl>
									<dt class="lead">1: Injection</dt>
									<dd>&nbsp; - Injection flaws, such as SQL injection LDAP injection, and CRLF injection, occur when an attacker sends untrusted data to an interpreter that is executed as a command without proper authorization</dd>
									<dd class="lead">SECURITY TIP</dd>
									<dd>&nbsp; - <b>Application security testing</b> can easily detect injection flaws. Developers should use parameterized queries when coding to prevent injection flaws.</dd>
									<br>
								</dl>

								<dl>
									<dt class="lead">2: Broken Authentication</dt>
									<dd>&nbsp; - Incorrectly configured user and session authentication could allow attackers to compromise passwords, keys, or session tokens, or take control of users' accounts to assume their identities.</dd>
									<dd class="lead">SECURITY TIP</dd>
									<dd>&nbsp; - <b>Multi-factor authentication</b>, such as FIDO or dedicated apps, reduces the risk of compromised accounts.</dd>
									<br>
								</dl>

								<dl>
									<dt class="lead">3: Sensitive Data Exposure</dt>
									<dd>&nbsp; - Applications and APIs that don't properly protect sensitive data such as financial data, usernames and passwords, or health information, could enable attackers to access such information to commit fraud or steal identities.</dd>
									<dd class="lead">SECURITY TIP</dd>
									<dd>&nbsp; - <b>Encryption of data at rest and in transit</b></dd>
									<br>
								</dl>

								<dl>
									<dt class="lead">4: XML External Entities</dt>
									<dd>&nbsp; - Poorly configured XML processors evaluate external entity references within XML documents. Attackers can use external entities for attacks including remote code execution, and to disclose internal files and SMB file shares.</dd>
									<dd class="lead">SECURITY TIP</dd>
									<dd>&nbsp; - <b>Static application security testing (SAST)</b> can discover this issue by inspecting dependencies and configuration</dd>
								</dl>

								<dl>
									<dt class="lead">5: Broken Access Control</dt>
									<dd>&nbsp; - Improperly configured or missing restrictions on authenticated users allow them to access unauthorized functionality or data, such as accessing other users' accounts, viewing sensitive documents, and modifying data and access rights.</dd>
									<dd class="lead">SECURITY TIP</dd>
									<dd>&nbsp; - <b>Penetration testing</b>, is essential for detecting non-functional access controls; other testing methods only detect where access are missing</dd>
									<br>
								</dl>

								<dl>
									<dt class="lead">6: Security Misconfiguration</dt>
									<dd>&nbsp; - This risk refers to improper implementation of controls intented to keep application data safe, such as misconfiguration of security headers. error messages containing sensitive information (information leakage), and not patching or upgrading systems, frameworks, and components</dd>
									<dd class="lead">SECURITY TIP</dd>
									<dd>&nbsp; - <b>Dynamic application security testing (DAST)</b> can detect misconfigurations, such as leaky APIs</dd>
									<br>
								</dl>

								<dl>
									<dt class="lead">7: Cross-Site Scripting</dt>
									<dd>&nbsp; - Cross-site scripting(XSS) flaws give attackers the capability to injecct client-side scripts into the application, for example, to redirect users to malicious websites.</dd>
									<dd class="lead">SECURITY TIP</dd>
									<dd>&nbsp; - <b>Developer training complements security testing</b> to help programmers prevent cross-site scripting with coding best practices, such as encoding data and input validation.</dd>
									<br>
								</dl>

								<dl>
									<dt class="lead">8: Insecure Deserialization</dt>
									<dd>&nbsp; - Insecure deserialization flaws can enable an attacker to execute code in the application remotely, tamper or delete serialized (written to disk) objects, conduct injection attacks, and elevate privileges.</dd>
									<dd class="lead">SECURITY TIP</dd>
									<dd>&nbsp; - <b>Application security tools can detect deserialization flaws</b> but penetration testing is frequently needed to validate the problem</dd>
									<br>
								</dl>

								<dl>
									<dt class="lead">9: Using Components with Known Vulnerabilities</dt>
									<dd>&nbsp; - Developers frequently don't know which open source and third-party components are in their applications, making it difficult to update components when new vulnerabilities are discovered. Attackers can exploit an insecure component to take over the server or steal sensitive data.</dd>
									<dd class="lead">SECURITY TIP</dd>
									<dd>&nbsp; - <b>Software composition analysis</b> conducted at the same time as static analysis can identify insecure versions of components.</dd>
									<br>
								</dl>

								<dl>
									<dt class="lead">10: Insufficient Logging and Monitoring</dt>
									<dd>&nbsp; - The time to detect a breach is frequently measured in weeks or months, insufficient logging and ineffective intergration with security incident response systems allow attackers to pivot to other systems and maintain persistent treats</dd>
									<dd class="lead">SECURITY TIP</dd>
									<dd>&nbsp; - <b>Think like an attacker</b> and use pen testing to find out if you have sufficient monitoring,; examine your logs after pen testing.</dd>
									<br>
								</dl>
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
		<script src="plugins/scrollTo/jquery.scrollTo.min.js"></script>
		<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
		<script src="plugins/greensock/animation.gsap.min.js"></script>
		<script src="plugins/progressbar/progressbar.min.js"></script>
		<script src="plugins/scrollTo/jquery.scrollTo.min.js"></script>
		<script src="plugins/easing/easing.js"></script>
		<script src="js/elements_custom.js"></script>

	</body>
</html>