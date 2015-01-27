<?php
    session_start();
    if(isset($_SESSION['user_id']) == false)
	header("Location: FrontPage.php");
    else
    {
	if(isset($_SESSION['error_tip']) == 1)$error_tip = $_SESSION['error_tip'];
	if(isset($_SESSION['error_message']) == 1)$error_message = $_SESSION['error_message'];

	$title = $_SESSION['user_firstname'].' '.$_SESSION['user_lastname'];
	$content_title = $_SESSION['user_firstname'].' '.$_SESSION['user_lastname'];
	$content = '
	 <script>var LINK = "profileLINK";</script>
	';

	$_SESSION['error_tip'] = "";
	$_SESSION['error_message'] = "";
    }
    include 'Template/MainTemplate.php';
?>


<!--div id="content" class="clearfix">
	   <section id="left">
		   <div id="userStats" class="clearfix">
			   <div class="pic">
				   <a href="#"><img src="css/Profile/img/user_avatar.jpg" width="150" height="150" /></a>
			   </div>

			   <div class="data">
				   <h1>Johnny Appleseed</h1>
				   <h3>San Francisco, CA</h3>
				   <h4><a href="http://spyrestudios.com/">http://spyrestudios.com/</a></h4>
				   <div class="socialMediaLinks">
					   <a href="http://twitter.com/jakerocheleau" rel="me" target="_blank"><img src="css/Profile/img/twitter.png" alt="@jakerocheleau" /></a>
					   <a href="http://gowalla.com/users/JakeRocheleau" rel="me" target="_blank"><img src="css/Profile/img/gowalla.png" /></a>
				   </div>
				   <div class="sep"></div>
				   <ul class="numbers clearfix">
					   <li>Reputation<strong>185</strong></li>
					   <li>Checkins<strong>344</strong></li>
					   <li class="nobrdr">Days Out<strong>127</strong></li>
				   </ul>
			   </div>
		   </div>

		   <h1>About Me:</h1>
		   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	   </section>

	   <section id="right">
		   <div class="gcontent">
			   <div class="head"><h1>Badges(3)</h1></div>
			   <div class="boxy">
				   <p>Keep working to unlock badges!</p>

				   <div class="badgeCount">
					   <a href="#"><img src="css/Profile/img/foursquare-badge.png" /></a>
					   <a href="#"><img src="css/Profile/img/foursquare-badge.png" /></a>
					   <a href="#"><img src="css/Profile/img/foursquare-badge.png" /></a>
				   </div>

				   <span><a href="#">See all…</a></span>
			   </div>
		   </div>

		   <div class="gcontent">
			   <div class="head"><h1>Friends List</h1></div>
			   <div class="boxy">
				   <p>Your friends - 106 total</p>

				   <div class="friendslist clearfix">
					   <div class="friend">
						   <a href="#"><img src="css/Profile/img/friend_avatar_default.jpg" width="30" height="30" alt="Jerry K." /></a><span class="friendly"><a href="#">Jerry K.</a></span>
					   </div>

					   <div class="friend">
						   <a href="#"><img src="css/Profile/img/friend_avatar_default.jpg" width="30" height="30" alt="Katie F." /></a><span class="friendly"><a href="#">Katie F.</a></span>
					   </div>

					   <div class="friend">
						   <a href="#"><img src="css/Profile/img/friend_avatar_default.jpg" width="30" height="30" alt="Ash K." /></a><span class="friendly"><a href="#">Ash K.</a></span>
					   </div>

					   <div class="friend">
						   <a href="#"><img src="css/Profile/img/friend_avatar_default.jpg" width="30" height="30" alt="Sponge B." /></a><span class="friendly"><a href="#">Sponge B.</a></span>
					   </div>

					   <div class="friend">
						   <a href="#"><img src="css/Profile/img/friend_avatar_default.jpg" width="30" height="30" alt="Frank" /></a><span class="friendly"><a href="#">Frank</a></span>
					   </div>

					   <div class="friend">
						   <a href="#"><img src="css/Profile/img/friend_avatar_default.jpg" width="30" height="30" alt="Alexa S." /></a><span class="friendly"><a href="#">Alexa S.</a></span>
					   </div>
				   </div>

				   <span><a href="#">See all...</a></span>
			    </div>
		    </div>
	    </section>
	</div>

     <link rel="stylesheet" href="css/Profile/style.css" type="text/css"/-->