var $ = function(id) //shorthand function to get elementID
{
    return document.getElementById(id);
}

function CheckEmail()
{
    var EmailForm = / $/;
}

function CheckPhone()
{
    var PhoneForm = /^\(?([0-9]{3})\)?[-. ]?[0-9]{3}[-. ]?([0-9]{4})$/;
    var Phone = $("PhoneNum");
    if(Phone.value.match(PhoneForm))
    {
        return true;
    }

    return false;
}

function DataChecking() //function to check if there is data within all boxes and that certain data (phone and email) are in a correct format
{
    var elements = document.getElementsByClassName("StudentInfo");

    for(var i =0; i < elements.length; i++)
    {
        var WarningArea  = $("warnings");
        if(elements[i].value.length == 0) //check if any of the StudentInfo boxes in main.html are empty, if they are change the borderColor of the box to red to highlight
        {
            var name = document.getElementsByTagName("label");
            elements[i].style.borderColor = "red";
            WarningArea.innerHTML += name[i].innerHTML + " is blank! <br>"; 
        }
        else
        {
            elements[i].style.borderColor = "green";
        }
    }
    if (CheckPhone() && CheckEmail()) //check both email and phone for correct format, if either is in correct then don't allow php to run by returning false
    {
        return true;
    }
    else
    {
        return false;
    }

}

