var $ = function(id) //shorthand function to get elementID
{
    return document.getElementById(id);
}

function HighlightLowCount()
{
    var List = document.getElementsByTagName("label");

    for(var i = 0; i < List.length; i++)
    {
        if(List[i].innerHTML.match(" 1 "))
        {
            List[i].innerHTML = "<strong>" + List[i].innerHTML + "</strong>";
            
        }
        else if(List[i].innerHTML.match(" 0 "))
        {
            var radio = document.getElementById(List[i].htmlFor);
            radio.disabled = true;
        }
    }

}

window.addEventListener("load", HighlightLowCount, false);

