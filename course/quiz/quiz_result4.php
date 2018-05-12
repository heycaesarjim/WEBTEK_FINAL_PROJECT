<?php
/**
* quiz4.php
*
* Result checker for quiz number 4
* 
* @author Darren Sison
*/ 

        //Start your session
        session_start();
        if (isset($_SESSION['name']) && $_SESSION['name'] == true) {
//            echo "Welcome to this course, " . $_SESSION['name'] . "!";
        } else {
            header("location: ../login.php");
        }

        function echoActiveClassIfRequestMatches($requestUri){
            $current_file_name = basename($_SERVER['REQUEST_URI'], ".php");

            if ($current_file_name == $requestUri)
                echo 'class="active-menu"';
        }


include 'quiz_questions4.php';

$answer1 = $_POST['question-1-answers'];
$answer2 = $_POST['question-2-answers'];
$answer3 = $_POST['question-3-answers'];
$answer4 = $_POST['question-4-answers'];
$answer5 = $_POST['question-5-answers'];
$answer6 = $_POST['question-6-answers'];
$answer7 = $_POST['question-7-answers'];
$answer8 = $_POST['question-8-answers'];
$answer9 = $_POST['question-9-answers'];
$answer10 = $_POST['question-10-answers'];

$totalCorrect = 0;

if ($answer1 == $ans1) { $totalCorrect++; }
if ($answer2 == $ans2) { $totalCorrect++; }
if ($answer3 == $ans3) { $totalCorrect++; }
if ($answer4 == $ans4) { $totalCorrect++; }
if ($answer5 == $ans5) { $totalCorrect++; }
if ($answer6 == $ans6) { $totalCorrect++; }
if ($answer7 == $ans7) { $totalCorrect++; }
if ($answer8 == $ans8) { $totalCorrect++; }
if ($answer9 == $ans9) { $totalCorrect++; }
if ($answer10 == $ans10) { $totalCorrect++; }

echo "<div id='results'>$totalCorrect / 10 correct</div>";
?>