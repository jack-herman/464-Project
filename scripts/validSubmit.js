function validSubmit(submitFormObj)
{
	alert('text');
	var address = submitFormObj.email.value;
	var rating = submitFormObj.rating.value;
	if (rating != null)
		return emailValid(address);
	else
	{
		alert("No rating given");
		return false;
	}

}

function emailValid(address)
{
	let regex = new RegExp('[a-z0-9]+@[a-z]+\.[a-z]{2,3}');
	if (regex.test(address))
		return true;
	else
	{
		alert("Error: Invalid e-mail address."
		return false;
	}
}


