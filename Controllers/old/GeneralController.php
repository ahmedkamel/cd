<?php

require ('Models/UserModel.php');

class GeneralController {
    
    /*function AddDayValues()
    {
	$result = "";
	for($i=1;$i<=31;$i ++)
	{
	    $result = $result . "<option value='$i'>$i</option>";
	}
	return $result;
    }
    function AddMonthValues()
    {
	$result = "";
	$result = $result . "<option value='1'>Jan</option>";
	$result = $result . "<option value='2'>Feb</option>";
	$result = $result . "<option value='3'>Mar</option>";
	$result = $result . "<option value='4'>Apr</option>";
	$result = $result . "<option value='5'>May</option>";
	$result = $result . "<option value='6'>Jun</option>";
	$result = $result . "<option value='7'>Jul</option>";
	$result = $result . "<option value='8'>Aug</option>";
	$result = $result . "<option value='9'>Sep</option>";
	$result = $result . "<option value='10'>Oct</option>";
	$result = $result . "<option value='11'>Nov</option>";
	$result = $result . "<option value='12'>Dec</option>";
	
	return $result;
    }
    */
    function AddYearValues()
    {
	$result = "";
	for($i =  date('Y')-5;$i>=1900;$i--)
	{
	    $result = $result."<option value='$i'>$i</option>";
	}
	return $result;
    }
    /*
    function AddRoleValues()
    {
	$rolesList = array("Student", "Teacher", "Father", "Mother", "Principal");
	
	$result = "";
	foreach ($rolesList as $value)
	{
	    $result = $result."<option value='$value'>$value</option>";
	}
	return $result;
    }
    
    function AddSecurityQuestionValues()
    {
	$securityQuestionList = array(
	    "What was your childhood nickname?", 
	    "What is the name of your favorite childhood friend?",
	    "What street did you live on in third grade?",
	    "What is your oldest sibling’s birthday month and year? (e.g., January 1900)",
	    "What is your oldest cousin's first and last name?",
	    "What was the name of your first pet?",
	    "In what city or town did your mother and father meet?",
	    "What was the last name of your third grade teacher?",
	    "In what city or town was your first job?",
	    "What was the name of your elementary / primary school?",
	    "What is the name of the company of your first job?",
	    "What was your favorite place to visit as a child?",
	    "What is the country of your ultimate dream vacation?",
	    "What is the name of your favorite childhood teacher?",
	    "What time of the day were you born?",
	    "What was your dream job as a child?",
	    "What is the street number of the house you grew up in?",
	    "Who was your childhood hero?",
	    "What was the first concert you attended?",
	    "What are the last 5 digits of your credit card?",
	    "What are the last 5 of your Social Security number?",
	    "What is your current car plate number?",
	    "What month and day is your anniversary? (e.g., January 2)",
	    "What is your grandmother's first name?",
	    "What is your mother's middle name?",
	    "What is the last name of your favorite high school teacher?",
	    "What is your preferred musical genre?",
	    "What is the name of the first school you attended?",
	    "In what year was your father born?",
	    "In what year was your mother born?",
	    "What is your mother’s first name?",
	    "What is the title of your favorite song?",
	    "What is the title of your favorite book?",
	    "What is your favorite animal?",
	    "What is your favorite football team?",
	    "What is your favorite movie?",
	    "What is your favorite TV program?",
	    "What is your least favorite nickname?",
	    "What is your favorite sport?",
	    "What sports team do you love to see lose?",
	    "In what city were you born?",
	    "What is your favorite color?");
	
	$result = "";
	
	foreach ($securityQuestionList as $value)
	{
	    $result = $result."<option value='$value'>$value</option>";
	}
	
	return $result;
    }
    
    function AddCountryValues()
    {
	$countryList = array(
	"AF" => "Afghanistan",
	"AL" => "Albania",
	"DZ" => "Algeria",
	"AS" => "American Samoa",
	"AD" => "Andorra",
	"AO" => "Angola",
	"AI" => "Anguilla",
	"AQ" => "Antarctica",
	"AG" => "Antigua and Barbuda",
	"AR" => "Argentina",
	"AM" => "Armenia",
	"AW" => "Aruba",
	"AU" => "Australia",
	"AT" => "Austria",
	"AZ" => "Azerbaijan",
	"BS" => "Bahamas",
	"BH" => "Bahrain",
	"BD" => "Bangladesh",
	"BB" => "Barbados",
	"BY" => "Belarus",
	"BE" => "Belgium",
	"BZ" => "Belize",
	"BJ" => "Benin",
	"BM" => "Bermuda",
	"BT" => "Bhutan",
	"BO" => "Bolivia",
	"BA" => "Bosnia and Herzegovina",
	"BW" => "Botswana",
	"BV" => "Bouvet Island",
	"BR" => "Brazil",
	"BQ" => "British Antarctic Territory",
	"IO" => "British Indian Ocean Territory",
	"VG" => "British Virgin Islands",
	"BN" => "Brunei",
	"BG" => "Bulgaria",
	"BF" => "Burkina Faso",
	"BI" => "Burundi",
	"KH" => "Cambodia",
	"CM" => "Cameroon",
	"CA" => "Canada",
	"CT" => "Canton and Enderbury Islands",
	"CV" => "Cape Verde",
	"KY" => "Cayman Islands",
	"CF" => "Central African Republic",
	"TD" => "Chad",
	"CL" => "Chile",
	"CN" => "China",
	"CX" => "Christmas Island",
	"CC" => "Cocos [Keeling] Islands",
	"CO" => "Colombia",
	"KM" => "Comoros",
	"CG" => "Congo - Brazzaville",
	"CD" => "Congo - Kinshasa",
	"CK" => "Cook Islands",
	"CR" => "Costa Rica",
	"HR" => "Croatia",
	"CU" => "Cuba",
	"CY" => "Cyprus",
	"CZ" => "Czech Republic",
	"CI" => "Côte d’Ivoire",
	"DK" => "Denmark",
	"DJ" => "Djibouti",
	"DM" => "Dominica",
	"DO" => "Dominican Republic",
	"NQ" => "Dronning Maud Land",
	"DD" => "East Germany",
	"EC" => "Ecuador",
	"EG" => "Egypt",
	"SV" => "El Salvador",
	"GQ" => "Equatorial Guinea",
	"ER" => "Eritrea",
	"EE" => "Estonia",
	"ET" => "Ethiopia",
	"FK" => "Falkland Islands",
	"FO" => "Faroe Islands",
	"FJ" => "Fiji",
	"FI" => "Finland",
	"FR" => "France",
	"GF" => "French Guiana",
	"PF" => "French Polynesia",
	"TF" => "French Southern Territories",
	"FQ" => "French Southern and Antarctic Territories",
	"GA" => "Gabon",
	"GM" => "Gambia",
	"GE" => "Georgia",
	"DE" => "Germany",
	"GH" => "Ghana",
	"GI" => "Gibraltar",
	"GR" => "Greece",
	"GL" => "Greenland",
	"GD" => "Grenada",
	"GP" => "Guadeloupe",
	"GU" => "Guam",
	"GT" => "Guatemala",
	"GG" => "Guernsey",
	"GN" => "Guinea",
	"GW" => "Guinea-Bissau",
	"GY" => "Guyana",
	"HT" => "Haiti",
	"HM" => "Heard Island and McDonald Islands",
	"HN" => "Honduras",
	"HK" => "Hong Kong SAR China",
	"HU" => "Hungary",
	"IS" => "Iceland",
	"IN" => "India",
	"ID" => "Indonesia",
	"IR" => "Iran",
	"IQ" => "Iraq",
	"IE" => "Ireland",
	"IM" => "Isle of Man",
	"IL" => "Israel",
	"IT" => "Italy",
	"JM" => "Jamaica",
	"JP" => "Japan",
	"JE" => "Jersey",
	"JT" => "Johnston Island",
	"JO" => "Jordan",
	"KZ" => "Kazakhstan",
	"KE" => "Kenya",
	"KI" => "Kiribati",
	"KW" => "Kuwait",
	"KG" => "Kyrgyzstan",
	"LA" => "Laos",
	"LV" => "Latvia",
	"LB" => "Lebanon",
	"LS" => "Lesotho",
	"LR" => "Liberia",
	"LY" => "Libya",
	"LI" => "Liechtenstein",
	"LT" => "Lithuania",
	"LU" => "Luxembourg",
	"MO" => "Macau SAR China",
	"MK" => "Macedonia",
	"MG" => "Madagascar",
	"MW" => "Malawi",
	"MY" => "Malaysia",
	"MV" => "Maldives",
	"ML" => "Mali",
	"MT" => "Malta",
	"MH" => "Marshall Islands",
	"MQ" => "Martinique",
	"MR" => "Mauritania",
	"MU" => "Mauritius",
	"YT" => "Mayotte",
	"FX" => "Metropolitan France",
	"MX" => "Mexico",
	"FM" => "Micronesia",
	"MI" => "Midway Islands",
	"MD" => "Moldova",
	"MC" => "Monaco",
	"MN" => "Mongolia",
	"ME" => "Montenegro",
	"MS" => "Montserrat",
	"MA" => "Morocco",
	"MZ" => "Mozambique",
	"MM" => "Myanmar [Burma]",
	"NA" => "Namibia",
	"NR" => "Nauru",
	"NP" => "Nepal",
	"NL" => "Netherlands",
	"AN" => "Netherlands Antilles",
	"NT" => "Neutral Zone",
	"NC" => "New Caledonia",
	"NZ" => "New Zealand",
	"NI" => "Nicaragua",
	"NE" => "Niger",
	"NG" => "Nigeria",
	"NU" => "Niue",
	"NF" => "Norfolk Island",
	"KP" => "North Korea",
	"VD" => "North Vietnam",
	"MP" => "Northern Mariana Islands",
	"NO" => "Norway",
	"OM" => "Oman",
	"PC" => "Pacific Islands Trust Territory",
	"PK" => "Pakistan",
	"PW" => "Palau",
	"PS" => "Palestinian Territories",
	"PA" => "Panama",
	"PZ" => "Panama Canal Zone",
	"PG" => "Papua New Guinea",
	"PY" => "Paraguay",
	"YD" => "People's Democratic Republic of Yemen",
	"PE" => "Peru",
	"PH" => "Philippines",
	"PN" => "Pitcairn Islands",
	"PL" => "Poland",
	"PT" => "Portugal",
	"PR" => "Puerto Rico",
	"QA" => "Qatar",
	"RO" => "Romania",
	"RU" => "Russia",
	"RW" => "Rwanda",
	"RE" => "Réunion",
	"BL" => "Saint Barthélemy",
	"SH" => "Saint Helena",
	"KN" => "Saint Kitts and Nevis",
	"LC" => "Saint Lucia",
	"MF" => "Saint Martin",
	"PM" => "Saint Pierre and Miquelon",
	"VC" => "Saint Vincent and the Grenadines",
	"WS" => "Samoa",
	"SM" => "San Marino",
	"SA" => "Saudi Arabia",
	"SN" => "Senegal",
	"RS" => "Serbia",
	"CS" => "Serbia and Montenegro",
	"SC" => "Seychelles",
	"SL" => "Sierra Leone",
	"SG" => "Singapore",
	"SK" => "Slovakia",
	"SI" => "Slovenia",
	"SB" => "Solomon Islands",
	"SO" => "Somalia",
	"ZA" => "South Africa",
	"GS" => "South Georgia and the South Sandwich Islands",
	"KR" => "South Korea",
	"ES" => "Spain",
	"LK" => "Sri Lanka",
	"SD" => "Sudan",
	"SR" => "Suriname",
	"SJ" => "Svalbard and Jan Mayen",
	"SZ" => "Swaziland",
	"SE" => "Sweden",
	"CH" => "Switzerland",
	"SY" => "Syria",
	"ST" => "São Tomé and Príncipe",
	"TW" => "Taiwan",
	"TJ" => "Tajikistan",
	"TZ" => "Tanzania",
	"TH" => "Thailand",
	"TL" => "Timor-Leste",
	"TG" => "Togo",
	"TK" => "Tokelau",
	"TO" => "Tonga",
	"TT" => "Trinidad and Tobago",
	"TN" => "Tunisia",
	"TR" => "Turkey",
	"TM" => "Turkmenistan",
	"TC" => "Turks and Caicos Islands",
	"TV" => "Tuvalu",
	"UM" => "U.S. Minor Outlying Islands",
	"PU" => "U.S. Miscellaneous Pacific Islands",
	"VI" => "U.S. Virgin Islands",
	"UG" => "Uganda",
	"UA" => "Ukraine",
	"SU" => "Union of Soviet Socialist Republics",
	"AE" => "United Arab Emirates",
	"GB" => "United Kingdom",
	"US" => "United States",
	"ZZ" => "Unknown or Invalid Region",
	"UY" => "Uruguay",
	"UZ" => "Uzbekistan",
	"VU" => "Vanuatu",
	"VA" => "Vatican City",
	"VE" => "Venezuela",
	"VN" => "Vietnam",
	"WK" => "Wake Island",
	"WF" => "Wallis and Futuna",
	"EH" => "Western Sahara",
	"YE" => "Yemen",
	"ZM" => "Zambia",
	"ZW" => "Zimbabwe",
	"AX" => "Åland Islands");
	
	$result = "";
	
	foreach ($countryList as $value)
	{
	    $result = $result . "<option value='$value'>$value</option>";
	}
	return $result;
    }
    */
    
    /*function CreateCoffeeDropdownList()
    {
        $coffeeModel = new CoffeeModel();
        $result = "<form action = '' method = 'post' width = '300px'>
                   Please select a type:
                   <select name = 'types'>
                    <option value = '%'>All</option>
                    ".$this->CreateOptionValues($coffeeModel->GetCoffeeTypes()).
                  "</select>
                   <input type = 'submit' value = 'Search'/>
                   </form>";
        return $result;
    }
    
    function CreateOptionValues(array $valueArray)
    {
        $result = "";
        
        foreach($valueArray as $value)
        {
            $result = $result . "<option value = '$value'>$value</option>";
        }
        
        return $result;
    }*/
    
    /*function CreateRegistrationForm()
    {
        $registrationModel = new RegistrationModel();
        //$coffeeArray = $coffeeModel->GetCoffeeByType($types);
        $result = "";
        
        //foreach($coffeeArray as $key => $coffee)
        
            $result = $result . 
                    "<table class = 'registrationFormTBL'>
                        <!--
			<tr>
                            <th rowspan='6' width = '150px'><img runat = 'server' src = '$coffee->image'/></th>
                            <th width = '75px'>Name: </th>
                            <td>$coffee->name</td>
                        </tr>
			-->
                        <tr>
                            <th>First Name: </th>
                            <td>$coffee->type</td>
                        </tr>
                        <tr>
                            <th>Last Name: </th>
                            <td>$coffee->price</td>
                        </tr>
                        <tr>
                            <th>Roast: </th>
                            <td>$coffee->roast</td>
                        </tr>
                        <tr>
                            <th>Origin: </th>
                            <td>$coffee->country</td>
                        </tr>
                        <tr>
                            <td colspan='2'>$coffee->review</td>
                        </tr>
		    </table>";
        
	return $result;
    }*/
}


?>
