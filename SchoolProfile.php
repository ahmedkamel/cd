<?php
    require ("Controllers/SchoolController.php");
    
    
    if (!isset($_SESSION['user_id']))
       header("Location: SchoolRegistration.php"); 
    else
    {
	$header = "";
	$error_tip="";
	$res = "";
	$schoolController = new SchoolController();
	$schoolController->selectSchool($_SESSION['user_id']);
	$title = "School Profile";
	$content_title = "";
	$content = '<div id="content" class="clearfix">
	       <section id="left">
		       <div id="userStats" class="clearfix">
			       <div class="pic">
				       <a href="#"><img src="css/Profile/img/user_avatar.jpg" width="150" height="150" /></a>
			       </div>

			       <div class="data">
				       <h1>'.$_SESSION['school_name']. '</h1>
				       <h3>' .$_SESSION['school_address']. '</h3>

				       <div class="sep"></div>
				       <!--ul class="numbers clearfix">
					       <li>Reputation<strong>185</strong></li>
					       <li>Checkins<strong>344</strong></li>
					       <li class="nobrdr">Days Out<strong>127</strong></li>
				       </ul-->
			       </div>
		       </div>

		       <h1>About This School:</h1>
		       <p>Facebook Account : ' .$_SESSION['school_facebook']. '</p>
		       <p>Twitter Account : ' .$_SESSION['school_twitter']. '</p>
		       <p>Google Plus Account : ' .$_SESSION['school_google']. '</p>
		       <p>Phone Number : ' .$_SESSION['school_phone']. '</p>
		       <p>Fax : ' .$_SESSION['school_fax']. '</p>
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
			       <div class="head"><h1>People in this School</h1></div>
			       <div class="boxy">

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

       <link rel="stylesheet" href="css/Profile/style.css" type="text/css"/>

       <script>
	   var LINK = "proLI";
       </script>
    ';
		 
    include 'Template/MainTemplate.html';
?>