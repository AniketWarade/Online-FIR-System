function phonenocheck()
{
	var x=document.getElementById("phone").value;
	var len=x.length;
	if(x=="")
	{
		alert("Please Enter Your Phone Number");
	}
	else
	{
		if(len==10)
		{
			alert("Phone Number is Valid");
		}
		else
		{
			alert("Phone Number is Invalid");
		}
	}
}