<?php
/**
* quiz1.php
*
* Result checker for quiz number 1
* 
* @author Darren Sison
*/ 
//require 'classes/UserAccount.php';
include 'quiz_questions1.php';

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
$answer11 = $_POST['question-11-answers'];
$answer12 = $_POST['question-12-answers'];
$answer13 = $_POST['question-13-answers'];
$answer14 = $_POST['question-14-answers'];
$answer15 = $_POST['question-15-answers'];
$answer16 = $_POST['question-16-answers'];
$answer17 = $_POST['question-17-answers'];
$answer18 = $_POST['question-18-answers'];
$answer19 = $_POST['question-19-answers'];
$answer20 = $_POST['question-20-answers'];
$answer21 = $_POST['question-21-answers'];
$answer22 = $_POST['question-22-answers'];
$answer23 = $_POST['question-23-answers'];
$answer24 = $_POST['question-24-answers'];
$answer25 = $_POST['question-25-answers'];

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
if ($answer11 == $ans11) { $totalCorrect++; }
if ($answer12 == $ans12) { $totalCorrect++; }
if ($answer13 == $ans13) { $totalCorrect++; }
if ($answer14 == $ans14) { $totalCorrect++; }
if ($answer15 == $ans15) { $totalCorrect++; }
if ($answer16 == $ans16) { $totalCorrect++; }
if ($answer17 == $ans17) { $totalCorrect++; }
if ($answer18 == $ans18) { $totalCorrect++; }
if ($answer19 == $ans19) { $totalCorrect++; }
if ($answer20 == $ans20) { $totalCorrect++; }
if ($answer21 == $ans21) { $totalCorrect++; }
if ($answer22 == $ans22) { $totalCorrect++; }
if ($answer23 == $ans23) { $totalCorrect++; }
if ($answer24 == $ans24) { $totalCorrect++; }
if ($answer25 == $ans25) { $totalCorrect++; }

echo "<div id='results'>$totalCorrect / 25 correct</div>";
?>