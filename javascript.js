function validateForm()
{
    var x=document.forms["myForm"]["type"].value;  
    if(x==null || x=="" )
    {
        alert("value can't be left blank");
        return false;
    }

    var y=document.forms["myform"]["lname"].value;
    if(y==null || y=="")
    {
        alert("last name is mandatory");
        return false;
    }
    else
    {
        return true;
    }

}