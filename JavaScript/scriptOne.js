var $ = function(id) //shorthand function to get elementID
{
    return document.getElementById(id);
}

function CheckEmail()
{
    var EmailForm = /^[a-zA-Z0-9]{1,}[@]{1}([a-zA-Z0-9]{1,20}[.]{1}){1,4}[a-zA-Z]{3}$/;
    var Email = $("Email");

    if(Email.value.match(EmailForm))
    {
        return true;
    }
    var WarningArea = $("EmailError");
    Email.style.borderColor = "red";
    WarningArea.innerHTML += "Email is in incorrect form, must be in form name@domain.com/net/org... <br>";
    return false;
}

function CheckSno()
{
    var StudentNumForm = /^[0-9]{8}$/
    var StuNum = $("SNum");

    if (StuNum.value.match(StudentNumForm))
    {
        return true;
    }

    var WarningArea = $("StuNumError");
    StuNum.style.borderColor = "red";
    WarningArea.innerHTML += "Student Number must be 8-digits long <br>";
    return false;
}

function CheckName()
{
    var NameForm = /^([a-zA-Z]{1,})$/;
    var FirstName = $("FirstName");
    var LastName = $("LastName");

    if(FirstName.value.match(NameForm) && LastName.value.match(NameForm))
    {
        return true;
    }

    var WarningArea = $("FNameError");
    var WarningArea2 = $("LNameError");
    FirstName.style.borderColor = "red";
    LastName.style.borderColor = "red";
    WarningArea.innerHTML += "First Name is in incorrect form <br>";
    WarningArea2.innerHTML += "Last Name is in incorrect form <br>";
    return false;
}
function CheckPhone()
{
    var PhoneForm = /^([0-9]{3})[-]?[0-9]{3}[-]?([0-9]{4})$/;
    var Phone = $("PhoneNum");
    if(Phone.value.match(PhoneForm))
    {
        return true;
    }

    var WarningArea = $("PhoneError");
    Phone.style.borderColor = "red";
    WarningArea.innerHTML += "Phone Number is in incorrect form, must be in form ###-###-#### <br>";
    return false;
}

function DataChecking() //function to check if there is data within all boxes and that certain data (phone and email) are in a correct format
{
    var elements = document.getElementsByClassName("StudentInfo");
    var name = document.getElementsByTagName("label");
    var Empty = false;
    for(var i =0; i < elements.length; i++)
    {
        if(elements[i].value.length == 0) //check if any of the StudentInfo boxes in main.html are empty, if they are change the borderColor of the box to red to highlight
        {
            Empty = true;
            elements[i].style.borderColor = "red";
        }
        else
        {
            elements[i].style.borderColor = "green";
        }
    }

    var Sno = CheckSno(); //check Student number is 8 digits long
    var Phone = CheckPhone(); //check that phone number is in format ###-###-####
    var Email = CheckEmail(); //check that email is in forat x_x.@xxx.xxx
    var NameCheck = CheckName(); //check that name is
    if (Sno && Phone && !Empty && NameCheck && Email) //check all data fields are populated and in correct format
    {
        return true;
    }
    else
    {
        return false;
    }

}

