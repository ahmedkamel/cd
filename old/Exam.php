<?php
    
    session_start();
    $error_tip = "";
    $error_message = "";
    $header = "";
    if(isset($_SESSION['error_tip']) == 1)$error_tip = $_SESSION['error_tip'];
    if(isset($_SESSION['error_message']) == 1)$error_message = $_SESSION['error_message'];
    
    $title = "Exam";
    $content_title = "";
    $content = '
	<form action="ExamController.php" method="post">
	    <div class="ExamPaper" >'
		.$examController ->GetExamProblems().
	    '
		<div>
		    <input value="Submit Answers" type="submit" class="button"/>
		</div>
	    </div>

	</form>
	<link rel="stylesheet" href="css/exam.css" type="text/css"/>


	<script>
	    var LINK = "homeLI";
	</script>
    ';

    $_SESSION['error_tip'] = "";
    $_SESSION['error_message'] = "";

    include 'Template/MainTemplate.html';

?>