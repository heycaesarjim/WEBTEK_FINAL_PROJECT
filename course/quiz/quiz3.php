<?php
/**
* quiz1.php
*
* Webtech quiz number 1
* 
* @author Darren Sison
*/ 
require 'classes/UserAccount.php';
<form action="quiz_result3.php" method="post" id="quiz">
<li>
	<h3>HTML Stands for...</h3>
	<div>
		<input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />
		<label for="question-1-answers-A">A) Hypertext Markup Language </label>
	</div>
	<div>
		<input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
		<label for="question-1-answers-B">B) Hypertext Markup</label>
	</div>
	<div>
		<input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
		<label for="question-1-answers-C">C) Hypertext Programming</label>
	</div>
	<div>
		<input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
		<label for="question-1-answers-D">D) None of the above</label>
	</div>
</li>
</form>
<input type="submit" value="Submit Quiz" />
?>