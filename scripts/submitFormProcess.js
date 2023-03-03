function submitFormProcess()
{
	var submitFormObj = document.getElementById("submitForm");
	var email = submitFormObj.email.value;
	var rating = submitFormObj.rating.value;
	if (emailValid(email))
	{
		alert("Form Submitted Successfully. Your Rating Was: " + rating);
	}
}

function emailValid(address)
{
    var p = address.search(/.+@.+/);
    if (p == 0)
        return true;
    else
    {
        alert("Error: Invalid e-mail address.");
        return false;
    }
}
