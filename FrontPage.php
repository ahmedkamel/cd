
<?php
    
    session_start();
    $error_tip = "";
    $error_message = "";
    $header = "";
    if(isset($_SESSION['error_tip']) == 1)$error_tip = $_SESSION['error_tip'];
    if(isset($_SESSION['error_message']) == 1)$error_message = $_SESSION['error_message'];
    
    $title = "Welcome";
    $content_title = "";
    $content = 
'
	  <div style="float:left;">
	
	<div align="left" style="float:left; width:49%;">
	    <h2 align="center" style="font-size: 36px; font-weight: bold;">School Registration</h2>
	    <h3 align="center" style="color:#636363; font-size:20px;">Order your school premium accounts now!</h3>
	    
	    
	    <br/>
	    <div align="center"><img width="120" height="120" src="css/images/premium.png" alt=""></div>
	    <br/>
	    
	    <div style="padding-left: 10px; font-size:11px; align:left;">
	    
		<div style="padding-right:10px; "><h3 style=" color:#636363; font-size:20px;">Go premium with all your school accounts having all premium features!</h3></div>
		<br/>
		<h3 style="color:#636363; font-size:20px; ">[1] Apply for your school.</h3>
		<h3 style="color:#636363; font-size:20px; ">[2] Get verified.</h3>
		<h3 style="color:#636363; font-size:20px; ">[3] Pay for your order.</h3>
		<h3 style="color:#636363; font-size:20px; ">[4] Enjoy our premium features!</h3>
		
		<div style="padding-top:13px;"><p>Notice that this process must be done by school owner or director as it will need school verification and payements for premium accounts.</p></div>
		
		<div align="center"><button class="button" onclick="location.href=\'SchoolRegistration.php\';">Register School</button></div>
	    </div>

	</div>

	<div style="float:left; border-left:1px solid #e3e3e3; height:500px; width:1%;"></div>

	<div align="left" style="float:left; width:49%; margin-left: 0px;">
	    <form class="contact_form" action="Controllers/UserController.php?functionName=SignUp" name="signUpForm" method="POST">
	    
		<h2 align="center" style="font-size: 36px; font-weight: bold;">Sign Up</h2>
		<h3 align="center" style="color:#636363; font-size:20px;">It\'s for free!</h3>

		<br/>

		<input value="" placeholder="First Name" class="textbox empty" type="text" name="firstname" id="firstname" oninput="checkNameValidity(\'firstname\', \'First Name\')" style="width:41.3%;" required />

		<input value="" placeholder="Last Name" class="textbox empty" type="text" name="lastname" id="lastname" oninput="checkNameValidity(\'lastname\', \'Last Name\')" style="width:41.3%;"  required />

		<input value="" placeholder="Email" class="textbox empty" type="text" name="email" id="email" oninput="checkEmailValidity(\'email\')"  required />
		<input value="" placeholder="Re-enter Email" class="textbox empty" type="text" name="emailagain" id="emailagain" oninput="checkMatch(\'emailagain\', \'email\')" required />
		<input value="" type="password" placeholder="New Password" class="textbox empty" type="text" name="password" id="password" oninput="checkPasswordStrength(\'password\')" required />

		<h3 align="left" style="margin-left: 5px; margin-top: 10px;color:#636363; font-size:20px;">Birthday</h3>
		<select name="birthday" id="day" class="dropdown" required><option selected="1">Day</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option></select>
		<select name="birthmonth" id="month" class="dropdown" required><option selected="1">Month</option><option value="1">Jan</option><option value="2">Feb</option><option value="3">Mar</option><option value="4">Apr</option><option value="5">May</option><option value="6">Jun</option><option value="7">Jul</option><option value="8">Aug</option><option value="9">Sep</option><option value="10">Oct</option><option value="11">Nov</option><option value="12">Dec</option></select>
		<select name="birthyear" id="year" class="dropdown" required><option selected="1">Year</option><option value="2014">2014</option><option value="2013">2013</option><option value="2012">2012</option><option value="2011">2011</option><option value="2010">2010</option><option value="2009">2009</option><option value="2008">2008</option><option value="2007">2007</option><option value="2006">2006</option><option value="2005">2005</option><option value="2004">2004</option><option value="2003">2003</option><option value="2002">2002</option><option value="2001">2001</option><option value="2000">2000</option><option value="1999">1999</option><option value="1998">1998</option><option value="1997">1997</option><option value="1996">1996</option><option value="1995">1995</option><option value="1994">1994</option><option value="1993">1993</option><option value="1992">1992</option><option value="1991">1991</option><option value="1990">1990</option><option value="1989">1989</option><option value="1988">1988</option><option value="1987">1987</option><option value="1986">1986</option><option value="1985">1985</option><option value="1984">1984</option><option value="1983">1983</option><option value="1982">1982</option><option value="1981">1981</option><option value="1980">1980</option><option value="1979">1979</option><option value="1978">1978</option><option value="1977">1977</option><option value="1976">1976</option><option value="1975">1975</option><option value="1974">1974</option><option value="1973">1973</option><option value="1972">1972</option><option value="1971">1971</option><option value="1970">1970</option><option value="1969">1969</option><option value="1968">1968</option><option value="1967">1967</option><option value="1966">1966</option><option value="1965">1965</option><option value="1964">1964</option><option value="1963">1963</option><option value="1962">1962</option><option value="1961">1961</option><option value="1960">1960</option><option value="1959">1959</option><option value="1958">1958</option><option value="1957">1957</option><option value="1956">1956</option><option value="1955">1955</option><option value="1954">1954</option><option value="1953">1953</option><option value="1952">1952</option><option value="1951">1951</option><option value="1950">1950</option><option value="1949">1949</option><option value="1948">1948</option><option value="1947">1947</option><option value="1946">1946</option><option value="1945">1945</option><option value="1944">1944</option><option value="1943">1943</option><option value="1942">1942</option><option value="1941">1941</option><option value="1940">1940</option><option value="1939">1939</option><option value="1938">1938</option><option value="1937">1937</option><option value="1936">1936</option><option value="1935">1935</option><option value="1934">1934</option><option value="1933">1933</option><option value="1932">1932</option><option value="1931">1931</option><option value="1930">1930</option><option value="1929">1929</option><option value="1928">1928</option><option value="1927">1927</option><option value="1926">1926</option><option value="1925">1925</option><option value="1924">1924</option><option value="1923">1923</option><option value="1922">1922</option><option value="1921">1921</option><option value="1920">1920</option><option value="1919">1919</option><option value="1918">1918</option><option value="1917">1917</option><option value="1916">1916</option><option value="1915">1915</option><option value="1914">1914</option><option value="1913">1913</option><option value="1912">1912</option><option value="1911">1911</option><option value="1910">1910</option><option value="1909">1909</option><option value="1908">1908</option><option value="1907">1907</option><option value="1906">1906</option><option value="1905">1905</option></select>

		<br/>
		<div style="margin-left:6px;">
		    <div style="margin-top: 10px; margin-right:14px;"  class="radioGroup">
			<input type="radio" name="gender" value="2" id="female" required/>
			<label for="female" style="padding-left:5px;" class="radio">Female</label>
		    </div>
		    <div style="margin-top: 10px;" class="radioGroup">
			<input type="radio" name="gender" value="2" id="male" required />
			<label for="male" style="padding-left:5px;" class="radio">Male</label>
		    </div>
		</div>
		<br/>
		
		<div style="padding-top: 10px; padding-left: 10px; font-size:11px; clear: both; align:left; width:100%"><p>By clicking Sign Up, you agree to our Terms and that you have read our Data Use Policy, including our Cookie Use.</p></div>
		
		<div align="center"><input value="Sign Up" type="submit" name="signupBTN" class="button" id="submitBTN"/></div>
	    </form>
	</div>
    <br style="clear: left;" />
    </div><br style="clear: left;" />
    
    <script src="js/Validation.js" type="text/javascript"></script>
    <script> var LINK = "homeLINK"; </script>
    <script>
	setInitialRequiredCustomValidity();
    </script>
    ';
    
    $_SESSION['error_tip'] = "";
    $_SESSION['error_message'] = "";
    
    include 'Template/FrontPageTemplate.php';
?>


	