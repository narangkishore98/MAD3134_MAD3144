function validate()
{
   

    var firstName = document.getElementById("firstName");
    var lastName = document.getElementById("lastName");
    var email = document.getElementById("email");
    var password = document.getElementById("password");
    var plRadio = document.getElementsByName("pl");
    var otherText = document.getElementById("other_text");
    var string=""
    password.type = "password"
    if(firstName.value == "" || lastName.value=="" || email.value=="" || password.value=="" || plRadio.value=="")
    {
        string +="Please Enter All The Fields "
        document.getElementById("danger").innerHTML = string
    }
    else
    {
        window.location.href = "test.html?fullName="+firstName.value+" "+lastName.value
    }
   
}