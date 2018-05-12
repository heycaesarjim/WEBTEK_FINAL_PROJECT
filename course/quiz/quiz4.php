<?php
/**
* quiz1.php
*
* Webtech quiz number 1
* 
* @author Darren Sison
*/ 
//require 'classes/UserAccount.php';
include 'quiz_questions1.php';
?>
<html>
    <head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
	<title>OWASP Quiz</title>
	
	<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

       <?php
        //Start your session
        session_start();
        if (isset($_SESSION['name']) && $_SESSION['name'] == true) {
            echo "Welcome to this course, " . $_SESSION['name'] . "!";
        } else {
            header("location: ../login.php");
        }

        function echoActiveClassIfRequestMatches($requestUri){
            $current_file_name = basename($_SERVER['REQUEST_URI'], ".php");

            if ($current_file_name == $requestUri)
                echo 'class="active-menu"';
        }

    ?>

    <div id="page-wrap">
<form name="quiz" onsubmit="return validateForm()" action="quiz_result4.php" method="post" id="quiz">
    <ol>
<!-- Question 1 -->
<li>
	<h3><?php echo $question1; ?></h3>
	<div>
		<input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />
		<label for="question-1-answers-A">A) Injection </label>
	</div>
	<div>
		<input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
		<label for="question-1-answers-B">B) Broken Access Control </label>
	</div>
	<div>
		<input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
		<label for="question-1-answers-C">C) Using Components with Known Vulnerabilities </label>
	</div>
</li>
<!-- Question 2 -->
<li>
	<h3><?php echo $question2; ?></h3>
	<div>
		<input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" />
		<label for="question-2-answers-A">A) Broken Access Control </label>
	</div>
	<div>
		<input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
		<label for="question-2-answers-B">B) Broken Authentication </label>
	</div>
	<div>
		<input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
		<label for="question-2-answers-C">C) Sensitive Data Exposure </label>
	</div>
</li>
<!-- Question 3 -->
<li>
	<h3><?php echo $question3; ?></h3>
	<div>
		<input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" />
		<label for="question-3-answers-A">A) Insecure Deserialization </label>
	</div>
	<div>
		<input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />
		<label for="question-3-answers-B">B) XML External Entities </label>
	</div>
	<div>
		<input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" />
		<label for="question-3-answers-C">C) Sensitive Data Exposure </label>
	</div>
</li>
<!-- Question 4 -->
<li>
	<h3><?php echo $question4; ?></h3>
	<div>
		<input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" />
		<label for="question-4-answers-A">A) Insufficient Logging and Monitoring </label>
	</div>
	<div>
		<input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />
		<label for="question-4-answers-B">B) XML External Entities </label>
	</div>
	<div>
		<input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" />
		<label for="question-4-answers-C">C) Cross-Site Scripting </label>
	</div>
</li>
<!-- Question 5 -->
<li>
	<h3><?php echo $question5; ?></h3>
	<div>
		<input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" />
		<label for="question-5-answers-A">A) XML External Entities </label>
	</div>
	<div>
		<input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" />
		<label for="question-5-answers-B">B) Broken Access Control </label>
	</div>
	<div>
		<input type="radio" name="question-5-answers" id="question-5-answers-C" value="C" />
		<label for="question-5-answers-C">C) Security Misconfiguration </label>
	</div>
</li>
<!-- Question 6 -->
<li>
	<h3><?php echo $question6; ?></h3>
	<div>
		<input type="radio" name="question-6-answers" id="question-6-answers-A" value="A" />
		<label for="question-6-answers-A">A) Insecure Deserialization </label>
	</div>
	<div>
		<input type="radio" name="question-6-answers" id="question-6-answers-B" value="B" />
		<label for="question-6-answers-B">B) Cross-Site Scripting </label>
	</div>
	<div>
		<input type="radio" name="question-6-answers" id="question-6-answers-C" value="C" />
		<label for="question-6-answers-C">C) Insufficient Logging and Monitoring </label>
	</div>
</li>
<!-- Question 7 -->
<li>
	<h3><?php echo $question7; ?></h3>
	<div>
		<input type="radio" name="question-7-answers" id="question-7-answers-A" value="A" />
		<label for="question-7-answers-A">A) Using Components with Known Vulnerabilities </label>
	</div>
	<div>
		<input type="radio" name="question-7-answers" id="question-7-answers-B" value="B" />
		<label for="question-7-answers-B">B) Broken Authentication </label>
	</div>
	<div>
		<input type="radio" name="question-7-answers" id="question-7-answers-C" value="C" />
		<label for="question-7-answers-C">C) Insufficient Logging and Monitoring </label>
	</div>
</li>
<!-- Question 8 -->
<li>
	<h3><?php echo $question8; ?></h3>
	<div>
		<input type="radio" name="question-8-answers" id="question-8-answers-A" value="A" />
		<label for="question-8-answers-A">A) Sensitive Data Exposure </label>
	</div>
	<div>
		<input type="radio" name="question-8-answers" id="question-8-answers-B" value="B" />
		<label for="question-8-answers-B">B) Insecure Deserialization </label>
	</div>
</li>
<!-- Question 9 -->
<li>
	<h3><?php echo $question9; ?></h3>
	<div>
		<input type="radio" name="question-9-answers" id="question-9-answers-A" value="A" />
		<label for="question-9-answers-A">A) Cross-Site Scripting </label>
	</div>
	<div>
		<input type="radio" name="question-9-answers" id="question-9-answers-B" value="B" />
		<label for="question-9-answers-B">B) XML External Entities </label>
	</div>
</li>
<!-- Question 10 -->
<li>
	<h3><?php echo $question10; ?></h3>
	<div>
		<input type="radio" name="question-10-answers" id="question-10-answers-A" value="A" />
		<label for="question-10-answers-A">A) Broken Authentication </label>
	</div>
	<div>
		<input type="radio" name="question-10-answers" id="question-10-answers-B" value="B" />
		<label for="question-10-answers-B">B) Security Misconfiguration </label>
	</div>
</li>
        </ol>
<input type="submit" value="Submit Quiz" />
</form>
    </div>
</html>

<script type="text/javascript">
function validateForm()
{
var a=document.forms["quiz"]["question-1-answers"].value;
var b=document.forms["quiz"]["question-2-answers"].value;
var c=document.forms["quiz"]["question-3-answers"].value;
var d=document.forms["quiz"]["question-4-answers"].value;
var e=document.forms["quiz"]["question-5-answers"].value;
var f=document.forms["quiz"]["question-6-answers"].value;
var g=document.forms["quiz"]["question-7-answers"].value;
var h=document.forms["quiz"]["question-8-answers"].value;
var i=document.forms["quiz"]["question-9-answers"].value;
var j=document.forms["quiz"]["question-10-answers"].value;

if (a==null || a=="")
  {
  alert("All items must be filled out.");
  return false;
  }
if (b==null || b=="")
  {
  alert("All items must be filled out.");
  return false;
  }
if (c==null || c=="")
  {
  alert("All items must be filled out.");
  return false;
  }
if (d==null || d=="")
  {
  alert("All items must be filled out.");
  return false;
  }
if (e==null || e=="")
  {
  alert("All items must be filled out.");
  return false;
  }
if (f==null || f=="")
  {
  alert("All items must be filled out.");
  return false;
  }
if (g==null || g=="")
  {
  alert("All items must be filled out.");
  return false;
  }
if (h==null || h=="")
  {
  alert("All items must be filled out.");
  return false;
  }
if (i==null || i=="")
  {
  alert("All items must be filled out.");
  return false;
  }
if (j==null || j=="")
  {
  alert("All items must be filled out.");
  return false;
  }
 
}
</script>