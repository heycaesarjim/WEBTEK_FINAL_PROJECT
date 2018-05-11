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
	
	<title>PHP Quiz</title>
	
	<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

       <?php
        //Start your session
        session_start();
        if (isset($_SESSION['name']) && $_SESSION['name'] == true) {
            echo "Welcome to this course, " . $_SESSION['name'] . "!";
        } else {
            header("location: login.php");
        }

        function echoActiveClassIfRequestMatches($requestUri){
            $current_file_name = basename($_SERVER['REQUEST_URI'], ".php");

            if ($current_file_name == $requestUri)
                echo 'class="active-menu"';
        }

    ?>

    <div id="page-wrap">
<form name="quiz" onsubmit="return validateForm()" action="quiz_result1.php" method="post" id="quiz">
    <ol>
<!-- Question 1 -->
<li>
	<h3><?php echo $question1; ?></h3>
	<div>
		<input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />
		<label for="question-1-answers-A">A) Private Home Page </label>
	</div>
	<div>
		<input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
		<label for="question-1-answers-B">B) PHP: Hypertext Preprocessor </label>
	</div>
	<div>
		<input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
		<label for="question-1-answers-C">C) Personal Hypertext Processor </label>
	</div>
</li>
<!-- Question 2 -->
<li>
	<h3><?php echo $question2; ?></h3>
	<div>
		<input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" />
		<label for="question-2-answers-A">A) total() </label>
	</div>
	<div>
		<input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
		<label for="question-2-answers-B">B) size() </label>
	</div>
	<div>
		<input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
		<label for="question-2-answers-C">C) count() </label>
	</div>
</li>
<!-- Question 3 -->
<li>
	<h3><?php echo $question3; ?></h3>
	<div>
		<input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" />
		<label for="question-3-answers-A">A) echo "Hello World"; </label>
	</div>
	<div>
		<input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />
		<label for="question-3-answers-B">B) Document.Write("Hello World"); </label>
	</div>
	<div>
		<input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" />
		<label for="question-3-answers-C">C) "Hello World"; </label>
	</div>
</li>
<!-- Question 4 -->
<li>
	<h3><?php echo $question4; ?></h3>
	<div>
		<input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" />
		<label for="question-4-answers-A">A) & </label>
	</div>
	<div>
		<input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />
		<label for="question-4-answers-B">B) ! </label>
	</div>
	<div>
		<input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" />
		<label for="question-4-answers-C">C) $ </label>
	</div>
</li>
<!-- Question 5 -->
<li>
	<h3><?php echo $question5; ?></h3>
	<div>
		<input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" />
		<label for="question-5-answers-A">A) ; </label>
	</div>
	<div>
		<input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" />
		<label for="question-5-answers-B">B) </label>
	</div>
	<div>
		<input type="radio" name="question-5-answers" id="question-5-answers-C" value="C" />
		<label for="question-5-answers-C">C) . </label>
	</div>
	<div>
		<input type="radio" name="question-5-answers" id="question-5-answers-C" value="D" />
		<label for="question-5-answers-D">D) New line </label>
	</div>
</li>
<!-- Question 6 -->
<li>
	<h3><?php echo $question6; ?></h3>
	<div>
		<input type="radio" name="question-6-answers" id="question-6-answers-A" value="A" />
		<label for="question-6-answers-A">A) JavaScript </label>
	</div>
	<div>
		<input type="radio" name="question-6-answers" id="question-6-answers-B" value="B" />
		<label for="question-6-answers-B">B) Perl and C </label>
	</div>
	<div>
		<input type="radio" name="question-6-answers" id="question-6-answers-C" value="C" />
		<label for="question-6-answers-C">C) VBScript </label>
	</div>
</li>
<!-- Question 7 -->
<li>
	<h3><?php echo $question7; ?></h3>
	<div>
		<input type="radio" name="question-7-answers" id="question-7-answers-A" value="A" />
		<label for="question-7-answers-A">A) $_GET[]; </label>
	</div>
	<div>
		<input type="radio" name="question-7-answers" id="question-7-answers-B" value="B" />
		<label for="question-7-answers-B">B) Request.QueryString; </label>
	</div>
	<div>
		<input type="radio" name="question-7-answers" id="question-7-answers-C" value="C" />
		<label for="question-7-answers-C">C) Request.Form; </label>
	</div>
</li>
<!-- Question 8 -->
<li>
	<h3><?php echo $question8; ?></h3>
	<div>
		<input type="radio" name="question-8-answers" id="question-8-answers-A" value="A" />
		<label for="question-8-answers-A">A) False </label>
	</div>
	<div>
		<input type="radio" name="question-8-answers" id="question-8-answers-B" value="B" />
		<label for="question-8-answers-B">B) True </label>
	</div>
</li>
<!-- Question 9 -->
<li>
	<h3><?php echo $question9; ?></h3>
	<div>
		<input type="radio" name="question-9-answers" id="question-9-answers-A" value="A" />
		<label for="question-9-answers-A">A) True </label>
	</div>
	<div>
		<input type="radio" name="question-9-answers" id="question-9-answers-B" value="B" />
		<label for="question-9-answers-B">B) False </label>
	</div>
</li>
<!-- Question 10 -->
<li>
	<h3><?php echo $question10; ?></h3>
	<div>
		<input type="radio" name="question-10-answers" id="question-10-answers-A" value="A" />
		<label for="question-10-answers-A">A) True </label>
	</div>
	<div>
		<input type="radio" name="question-10-answers" id="question-10-answers-B" value="B" />
		<label for="question-10-answers-B">B) False </label>
	</div>
</li>
<!-- Question 11 -->
<li>
	<h3><?php echo $question11; ?></h3>
	<div>
		<input type="radio" name="question-11-answers" id="question-11-answers-A" value="A" />
		<label for="question-11-answers-A">A) include "time.inc"; </label>
	</div>
	<div>
		<input type="radio" name="question-11-answers" id="question-11-answers-B" value="B" />
		<label for="question-11-answers-B">B) include:"time.inc; </label>
	</div>
	<div>
		<input type="radio" name="question-11-answers" id="question-11-answers-C" value="C" />
		<label for="question-11-answers-C">C) include file="time.inc"; </label>
	</div>
</li>
<!-- Question 12 -->
<li>
	<h3><?php echo $question12; ?></h3>
	<div>
		<input type="radio" name="question-12-answers" id="question-12-answers-A" value="A" />
		<label for="question-12-answers-A">A) function myFunction() </label>
	</div>
	<div>
		<input type="radio" name="question-12-answers" id="question-12-answers-B" value="B" />
		<label for="question-12-answers-B">B) create myFunction() </label>
	</div>
	<div>
		<input type="radio" name="question-12-answers" id="question-12-answers-C" value="C" />
		<label for="question-12-answers-C">C) new_function myFunction() </label>
	</div>
</li>
<!-- Question 13 -->
<li>
	<h3><?php echo $question13; ?></h3>
	<div>
		<input type="radio" name="question-13-answers" id="question-13-answers-A" value="A" />
		<label for="question-13-answers-A">A) fopen("time.txt","r+"); </label>
	</div>
	<div>
		<input type="radio" name="question-13-answers" id="question-13-answers-B" value="B" />
		<label for="question-13-answers-B">B) fopen("time.txt","r"); </label>
	</div>
	<div>
		<input type="radio" name="question-13-answers" id="question-13-answers-C" value="C" />
		<label for="question-13-answers-C">C) open("time.txt"); </label>
	</div>
	<div>
		<input type="radio" name="question-13-answers" id="question-13-answers-C" value="D" />
		<label for="question-13-answers-D">D) open("time.txt","read"); </label>
	</div>
</li>
<!-- Question 14 -->
<li>
	<h3><?php echo $question14; ?></h3>
	<div>
		<input type="radio" name="question-14-answers" id="question-14-answers-A" value="A" />
		<label for="question-14-answers-A">A) False </label>
	</div>
	<div>
		<input type="radio" name="question-14-answers" id="question-14-answers-B" value="B" />
		<label for="question-14-answers-B">B) True </label>
	</div>
</li>
<!-- Question 15 -->
<li>
	<h3><?php echo $question15; ?></h3>
	<div>
		<input type="radio" name="question-15-answers" id="question-15-answers-A" value="A" />
		<label for="question-15-answers-A">A) $_GLOBALS </label>
	</div>
	<div>
		<input type="radio" name="question-15-answers" id="question-15-answers-B" value="B" />
		<label for="question-15-answers-B">B) $_SESSION </label>
	</div>
	<div>
		<input type="radio" name="question-15-answers" id="question-15-answers-C" value="C" />
		<label for="question-15-answers-C">C) $_GET </label>
	</div>
	<div>
		<input type="radio" name="question-15-answers" id="question-15-answers-C" value="D" />
		<label for="question-15-answers-D">D) $_SERVER </label>
	</div>
</li>
<!-- Question 16 -->
<li>
	<h3><?php echo $question16; ?></h3>
	<div>
		<input type="radio" name="question-16-answers" id="question-16-answers-A" value="A" />
		<label for="question-16-answers-A">A) ++count </label>
	</div>
	<div>
		<input type="radio" name="question-16-answers" id="question-16-answers-B" value="B" />
		<label for="question-16-answers-B">B) $count =+1 </label>
	</div>
	<div>
		<input type="radio" name="question-16-answers" id="question-16-answers-C" value="C" />
		<label for="question-16-answers-C">C) $count++; </label>
	</div>
	<div>
		<input type="radio" name="question-16-answers" id="question-16-answers-C" value="D" />
		<label for="question-16-answers-D">D) count++; </label>
	</div>
</li>
<!-- Question 17 -->
<li>
	<h3><?php echo $question17; ?></h3>
	<div>
		<input type="radio" name="question-17-answers" id="question-17-answers-A" value="A" />
		<label for="question-17-answers-A">A) *\...\* </label>
	</div>
	<div>
		<input type="radio" name="question-17-answers" id="question-17-answers-B" value="B" />
		<label for="question-17-answers-B">B) /*...*/ </label>
	</div>
	<div>
		<input type="radio" name="question-17-answers" id="question-17-answers-C" value="C" />
		<label for="question-17-answers-C">C) <comment>...</comment> </label>
	</div>
</li>
<!-- Question 18 -->
<li>
	<h3><?php echo $question18; ?></h3>
	<div>
		<input type="radio" name="question-18-answers" id="question-18-answers-A" value="A" />
		<label for="question-18-answers-A">A) False </label>
	</div>
	<div>
		<input type="radio" name="question-18-answers" id="question-18-answers-B" value="B" />
		<label for="question-18-answers-B">B) True </label>
	</div>
</li>
<!-- Question 19 -->
<li>
	<h3><?php echo $question19; ?></h3>
	<div>
		<input type="radio" name="question-19-answers" id="question-19-answers-A" value="A" />
		<label for="question-19-answers-A">A) False </label>
	</div>
	<div>
		<input type="radio" name="question-19-answers" id="question-19-answers-B" value="B" />
		<label for="question-19-answers-B">B) True </label>
	</div>
</li>
<!-- Question 20 -->
<li>
	<h3><?php echo $question20; ?></h3>
	<div>
		<input type="radio" name="question-20-answers" id="question-20-answers-A" value="A" />
		<label for="question-20-answers-A">A) $my_Var </label>
	</div>
	<div>
		<input type="radio" name="question-20-answers" id="question-20-answers-B" value="B" />
		<label for="question-20-answers-B">B) $myVar </label>
	</div>
	<div>
		<input type="radio" name="question-20-answers" id="question-20-answers-C" value="C" />
		<label for="question-20-answers-C">C) $my-Var </label>
	</div>
</li>
<!-- Question 21 -->
<li>
	<h3><?php echo $question21; ?></h3>
	<div>
		<input type="radio" name="question-21-answers" id="question-21-answers-A" value="A" />
		<label for="question-21-answers-A">A) makecookie() </label>
	</div>
	<div>
		<input type="radio" name="question-21-answers" id="question-21-answers-B" value="B" />
		<label for="question-21-answers-B">B) setcookie() </label>
	</div>
	<div>
		<input type="radio" name="question-21-answers" id="question-21-answers-C" value="C" />
		<label for="question-21-answers-C">C) createcookie </label>
	</div>
</li>
<!-- Question 22 -->
<li>
	<h3><?php echo $question22; ?></h3>
	<div>
		<input type="radio" name="question-22-answers" id="question-22-answers-A" value="A" />
		<label for="question-22-answers-A">A) False </label>
	</div>
	<div>
		<input type="radio" name="question-22-answers" id="question-22-answers-B" value="B" />
		<label for="question-22-answers-B">B) True </label>
	</div>
</li>
<!-- Question 23 -->
<li>
	<h3><?php echo $question23; ?></h3>
	<div>
		<input type="radio" name="question-23-answers" id="question-23-answers-A" value="A" />
		<label for="question-23-answers-A">A) $cars = "Volvo", "BMW", "Toyota"; </label>
	</div>
	<div>
		<input type="radio" name="question-23-answers" id="question-23-answers-B" value="B" />
		<label for="question-23-answers-B">B) $cars = array["Volvo", "BMW", "Toyota"]; </label>
	</div>
	<div>
		<input type="radio" name="question-23-answers" id="question-23-answers-C" value="C" />
		<label for="question-23-answers-C">C) $cars = array("Volvo", "BMW", "Toyota"); </label>
	</div>
</li>
<!-- Question 24 -->
<li>
	<h3><?php echo $question24; ?></h3>
	<div>
		<input type="radio" name="question-24-answers" id="question-24-answers-A" value="A" />
		<label for="question-24-answers-A">A) False </label>
	</div>
	<div>
		<input type="radio" name="question-24-answers" id="question-24-answers-B" value="B" />
		<label for="question-24-answers-B">B) True </label>
	</div>
</li>
<!-- Question 25 -->
<li>
	<h3><?php echo $question25; ?></h3>
	<div>
		<input type="radio" name="question-25-answers" id="question-25-answers-A" value="A" />
		<label for="question-25-answers-A">A) = </label>
	</div>
	<div>
		<input type="radio" name="question-25-answers" id="question-25-answers-B" value="B" />
		<label for="question-25-answers-B">B) != </label>
	</div>
	<div>
		<input type="radio" name="question-25-answers" id="question-25-answers-C" value="C" />
		<label for="question-25-answers-C">C) === </label>
	</div>
	<div>
		<input type="radio" name="question-25-answers" id="question-25-answers-C" value="D" />
		<label for="question-25-answers-D">D) == </label>
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
var k=document.forms["quiz"]["question-11-answers"].value;
var l=document.forms["quiz"]["question-12-answers"].value;
var m=document.forms["quiz"]["question-13-answers"].value;
var n=document.forms["quiz"]["question-14-answers"].value;
var o=document.forms["quiz"]["question-15-answers"].value;
var p=document.forms["quiz"]["question-16-answers"].value;
var q=document.forms["quiz"]["question-17-answers"].value;
var r=document.forms["quiz"]["question-18-answers"].value;
var s=document.forms["quiz"]["question-19-answers"].value;
var t=document.forms["quiz"]["question-20-answers"].value;
var u=document.forms["quiz"]["question-21-answers"].value;
var v=document.forms["quiz"]["question-22-answers"].value;
var w=document.forms["quiz"]["question-23-answers"].value;
var x=document.forms["quiz"]["question-24-answers"].value;
var y=document.forms["quiz"]["question-25-answers"].value;

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
if (k==null || k=="")
  {
  alert("All items must be filled out.");
  return false;
  }
if (l==null || l=="")
  {
  alert("All items must be filled out.");
  return false;
  }
if (m==null || m=="")
  {
  alert("All items must be filled out.");
  return false;
  }
if (n==null || n=="")
  {
  alert("All items must be filled out.");
  return false;
  }
if (o==null || o=="")
  {
  alert("All items must be filled out.");
  return false;
  }
if (p==null || p=="")
  {
  alert("All items must be filled out.");
  return false;
  }
if (q==null || q=="")
  {
  alert("All items must be filled out.");
  return false;
  }
if (r==null || r=="")
  {
  alert("All items must be filled out.");
  return false;
  }
if (s==null || s=="")
  {
  alert("All items must be filled out.");
  return false;
  }
if (t==null || t=="")
  {
  alert("All items must be filled out.");
  return false;
  }
if (u==null || u=="")
  {
  alert("All items must be filled out.");
  return false;
  }
if (v==null || v=="")
  {
  alert("All items must be filled out.");
  return false;
  }
if (w==null || w=="")
  {
  alert("All items must be filled out.");
  return false;
  }
if (x==null || x=="")
  {
  alert("All items must be filled out.");
  return false;
  }
if (y==null || y=="")
  {
  alert("All items must be filled out.");
  return false;
  }
 
}
</script>