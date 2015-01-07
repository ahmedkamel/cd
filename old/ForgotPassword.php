<?php

$header = "";
$title = "Forgot Password";
$content_title = "Forgot Password";
$content = "
<form action='' method='post' class='registrationForm'>
    
<pre></pre>
	<fieldset class='registrationTable'>
	    Enter your email address and we will send you an automatic email with instructions to restore your password.<br/><br/>
	    <label style='width:100px' for='email'>Email: </label>
	    <input type='text' class='inputField' name='emailTXT'/><br/>
	</fieldset>
	<fieldset class='registrationTable'>
	    Enter your username and we will ask you the three security questions you provided in the registration process.<br/><br/>
	    <label style='width:100px' for='username'>Username: </label>
	    <input type='text' class='inputField' name='usernameTXT'/><br/>
	</fieldset>
	<fieldset class='registrationTable'>
	    If none of the above didn't work with you, please contact us at (+905)141340931.
	</fieldset>
</form>
	    ";
include 'Template/MainTemplate.html';
?>