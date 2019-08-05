 function passwordcheck()
{
	var x=document.getElementById("password").value;
	var y=document.getElementById("confirmpassword").value;
	if(x=="" || y=="")
	{
		alert("Password is Invalid");
	}
	else
	{
		if(x==y)
		{
			alert("Password is Valid");
		}
		else
		{
			alert("Password is Invalid");
		}
	}
}