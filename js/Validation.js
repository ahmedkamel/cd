
function setInitialRequiredCustomValidity()
{
    /*var inputs = document.getElementsByTagName("input");

    for (var i=0; i<inputs.length; i++)
    {
        if (inputs[i].required == true)
        {
            if(input[i].type == 'radio')
            {
                if(input[i].checked == false)
            }
        }
    }*/
}

function clearTextboxClasses(x)
{
    x.className = x.className.replace( /(?:^|\s)tooWeakPassword(?!\S)/g , '' );
    x.className = x.className.replace( /(?:^|\s)weakPassword(?!\S)/g , '' );
    x.className = x.className.replace( /(?:^|\s)moderatePassword(?!\S)/g , '' );
    x.className = x.className.replace( /(?:^|\s)strongPassword(?!\S)/g , '' );
    x.className = x.className.replace( /(?:^|\s)empty(?!\S)/g , '' );
    x.className = x.className.replace( /(?:^|\s)xinvalid(?!\S)/g , '' );
    x.className = x.className.replace( /(?:^|\s)xvalid(?!\S)/g , '' );
}

function checkPasswordStrength(txt)
{
    var x = document.getElementById(txt);
    var charStrength = 0, lengthStrength = 0, strength;
    
    if(/[A-Z]/.test(x.value))charStrength++;
    if(/[a-z]/.test(x.value))charStrength++;
    if(/[0-9]/.test(x.value))charStrength++;
    if(/[+_)(*&^%$#@!~}{'";:?><.,]/.test(x.value))charStrength++;
    
    lengthStrength = Math.ceil(x.value.length/4);
    
    if(x.value == "")
    {
        clearTextboxClasses(x);
        x.className = "textbox empty";
        
        x.setCustomValidity('You must enter a password.');
    }
    else if(lengthStrength <= 2)
    {
        strength = Math.min(lengthStrength, charStrength);
        if(strength == 1)
        {
            clearTextboxClasses(x);
            x.className = x.className + " invalid";
            x.className += " tooWeakPassword";
        }
        if(strength == 2)
        {
            clearTextboxClasses(x);
            x.className += " weakPassword";
        }
        
        x.setCustomValidity('Weak password. Password has to be at least 8 characters. Make it stronger by adding capital letters, digits and special characters.');
    }
    else
    {
        strength = Math.max(lengthStrength, charStrength);
        if(strength == 3)
        {
            clearTextboxClasses(x);
            x.className += " moderatePassword";
        }
        if(strength == 4)
        {
            clearTextboxClasses(x);
            x.className += " strongPassword";
        }
        x.setCustomValidity('');
    }
}
function checkNameValidity(txt, label)
{
    var x = document.getElementById(txt);
    if(x.value === "")
    {
        clearTextboxClasses(x);
        x.className = "textbox empty";
        x.setCustomValidity('What\'s your ' + label + '?');
    }
    else if(/^[A-Z][a-z]+$/.test(x.value))
    {
        clearTextboxClasses(x);
        x.className += " xvalid";
        x.setCustomValidity('');
    }
    else
    {
        clearTextboxClasses(x);
        x.className += " xinvalid";
        x.setCustomValidity(label + ' has to start with a capital letter, followed by small letters and contain alphabet only.');
    }
}
function checkEmailValidity(txt)
{
    var x = document.getElementById(txt);
    if(x.value == "")
    {
        clearTextboxClasses(x);
        x.className += " empty";
        
        x.setCustomValidity('You must fill this field.');
    }
    else if(/[A-Z0-9a-z]+@[A-Z0-9a-z]+\.[A-Z0-9a-z]+/.test(x.value))
    {
        clearTextboxClasses(x);
        x.className += " xvalid";
        x.setCustomValidity('');
    }
    else
    {
        clearTextboxClasses(x);
        x.className += " xinvalid";
        x.setCustomValidity('Email format is incorrect.');
    }
}
function checkMatch(txt, txt2)
{
    var x = document.getElementById(txt);
    var y = document.getElementById(txt2);
    if(x.value == "")
    {
        clearTextboxClasses(x);
        x.className += " empty";
        
        x.setCustomValidity('You must fill this field.');
    }
    else if(x.value == y.value)
    {
        clearTextboxClasses(x);
        x.className += " xvalid";
        x.setCustomValidity('');
    }
    else
    {
        clearTextboxClasses(x);
        x.className += " xinvalid";
        x.setCustomValidity('Email is not matching the one above.');
    }
    return False(4);
}
function checkPhoneValidity(txt)
{
    var x = document.getElementById(txt);
    if(x.value === "")
    {
        clearTextboxClasses(x);
        x.className += " empty";
        
        x.setCustomValidity('You must fill this field.');
    }
    else if(/^\+(?:[0-9]●?){6,14}[0-9]$/.test(x.value))
    {
        clearTextboxClasses(x);
        x.className += " xvalid";
        
        x.setCustomValidity('');
    }
    else
    {
        clearTextboxClasses(x);
        x.className += " xinvalid";
        x.setCustomValidity(label + ' Invalid Number!');
    }
}
/*
function init()
{
    for(i=0; i<8; i++)flag[i] = false;
    fillbirthyearSLCT();
    document.getElementById('submitBTN').disabled = true;
    resetAllERRLabels();
}
function checkNameValidity(txt, labelTXT)
{
    var x = document.getElementById(txt);
    if(/^[A-Z][a-z]+$/.test(x.value))
    {
        //document.getElementById(err).innerHTML = 'Valid';
        //document.getElementById(err).style.color = 'green';
        x.setCustomValidity('');
        return True(txt=='firstnameTXT'?0:1);
    }
    x.setCustomValidity(labelTXT + ' has to start with a capital letter and contain alphabet only.');
    //document.getElementById(err).innerHTML = labelTXT + ' should start with a capital letter, and followed by one or more small letters.';
    //document.getElementById(err).style.color = 'red';
    return False(txt=='firstnameTXT'?0:1);
}
function checkEmailValidity(txt)
{
    var x = document.getElementById(txt);
    if(/[A-Z0-9a-z]+@[A-Z0-9a-z]+\.[A-Z0-9a-z]+/.test(x.value))
    {
        //document.getElementById(err).innerHTML = 'Valid';
        //document.getElementById(err).style.color = 'green';
        x.setCustomValidity('');
        return True(2);
    }
    x.setCustomValidity('Email format is incorrect.');
    //document.getElementById(err).innerHTML = 'Email should be like example@example.example'
    //document.getElementById(err).style.color = 'red';
    return False(2);
}

function checkMatch(txt, txt2)
{
    var x = document.getElementById(txt);
    var y = document.getElementById(txt2);
    //if(x.value == "")
    {
      //  document.getElementById("matchLBL").innerHTML = "Please re-enter the password.";
      //  return False(4);
    }
    if(x.value == y.value)
    {
        y.setCustomValidity('');
        //document.getElementById("matchLBL").innerHTML = "Match";
        //document.getElementById("matchLBL").style.color = 'green';
        return True(4);
    }
    y.setCustomValidity('Email is not matching the one above.');
    //document.getElementById("matchLBL").innerHTML = "Doesn't match!";
    //document.getElementById("matchLBL").style.color = 'red';
    return False(4);
}
function fillbirthdaySLCT()
{
    document.getElementById("birthdaySLCT").innerHTML = "";

    var el = document.createElement("option");
    el.textContent = "Day";
    el.value = "Day";
    document.getElementById("birthdaySLCT").appendChild(el);

    if(document.getElementById("birthmonthSLCT").value == "Month") return False(5);
    var select = document.getElementById("birthdaySLCT"); 
    var monthLength = 31;
    var month = document.getElementById("birthmonthSLCT").value;
    if(month == 'Apr' || month == 'Jun' || month == 'Sep' || month == 'Nov')monthLength = 30;
    else if(month == 'Feb')
    {
        var year = document.getElementById("birthyearSLCT").value;
        if((year%4==0 && year%100) || year%400==0)monthLength = 29;
        else monthLength = 28;
    }
    for(var i = 1; i <= monthLength; i++) {
        var opt = '' + i;
        var el = document.createElement("option");
        el.textContent = opt;
        el.value = opt;
        select.appendChild(el);
    }
    return False(5);
}
function fillbirthmonthSLCT()
{
    document.getElementById("birthmonthSLCT").innerHTML = "";

    var el = document.createElement("option");
    el.textContent = "Month";
    el.value = "Month";
    document.getElementById("birthmonthSLCT").appendChild(el);

    if(document.getElementById("birthmonthSLCT").value == "Year") return False(5);
    var select = document.getElementById("birthmonthSLCT"); 
    var options = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"]; 

    for(var i = 0; i < 12; i++) {
        var el = document.createElement("option");
        el.textContent = options[i];
        el.value = options[i];
        select.appendChild(el);
    }
    return False(5);
}
function fillbirthyearSLCT()
{
    var select = document.getElementById("birthyearSLCT");

    for(var i=2014; i>=1900; i--)
    {
        var opt = '' + i;
        var el = document.createElement("option");
        el.textContent = opt;
        el.value = opt;
        select.appendChild(el);
    }
    return False(5);
}
function resetAllERRLabels()
{
    document.getElementById("firstnameERR").innerHTML = "";
    document.getElementById("lastnameERR").innerHTML = "";
    document.getElementById("emailERR").innerHTML = "";
    document.getElementById("strengthLBL").innerHTML = "";
    document.getElementById("matchLBL").innerHTML = "";
}
function checkGender()
{
    var inputs = document.getElementsByTagName("input");

    for (var i=0; i<inputs.length; i++)
    {
        if (inputs[i].type == 'radio' && inputs[i].checked) 
            return True(6)
    }
    return False(6);
}
function countChecked()
{
    var inputs = document.getElementsByTagName("input");
    //alert('yalahwy: ' + cb.length);
    var count = 0;
    for (var i=0; i<inputs.length; i++)
    {
        if (inputs[i].type == 'checkbox' && inputs[i].checked) 
            count++;
    }

    if(count >= 3) return True(7);
    return False(7);
}
function checkAll()
{
    for(i=0; i<8; i++)
        if(!flag[i])
        {
            //alert('omg: ' + i);
            document.getElementById('submitBTN').disabled = true;
            return false;
        }
    document.getElementById('submitBTN').disabled = false;
    return true;
}
*/    