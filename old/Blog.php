
<?php
    require './Controllers/UserController.php';
    $userController = new UserController();
    
    $title = "User Settings";
    $content_title = "Settings";
    $content = 
'
<form  id="form1" name="form_name" action="" method="post">
<textare></textarea>
<div align="Center">


</div>
</form>';

include 'Template/MainTemplate.html';
?>