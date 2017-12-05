var $ = function(id) //shorthand function to get elementID
{
    return document.getElementById(id);
}

function HighlightLowCount()
{
    var List = document.getElementsByTagName("label");

    for(var i = 0; i < List.length; i++)
    {
        if(List[i].innerHTML.match(" 1 ")) //bold slots with only 1 slot left
        {
            List[i].innerHTML = "<strong>" + List[i].innerHTML + "</strong>";
            
        }
        else if(List[i].innerHTML.match(" 0 ")) //a slot with 0 spots left should not be allowed to be selected
        {
            var radio = document.getElementById(List[i].htmlFor);
            radio.disabled = true;
        }
    }

}

function PreselectDay() //function called when a user is already registered for a day, this function will select the correct radio button according to the registration date.
{
    var Date = $("PresentDate");
    var List = document.getElementsByName("Selector");

    if(Date.value != "")
    {
        for(var i = 0; i < List.length; i++)
        {
            if(List[i].value == Date.value)
            {
                List[i].checked = true;
            }
        }
    }
}

function setWindow()
{
    HighlightLowCount();
    PreselectDay();
}

window.addEventListener("load", setWindow, false);

