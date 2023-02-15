function rset()
{
	let email = document.getElementById("uname").value;
	let pass = document.getElementById("pswd").value;
	let passCon = document.getElementById("pscon").value;

	if(email.length == 0 | pass.length < 8 | passCon.length < 0 | pass != passCon)
	{
		document.getElementById("error").innerHTML = "all the fields are required*";
		document.getElementById("uname").style.borderColor = "red";
		document.getElementById("pswd").style.borderColor = "red";
		document.getElementById("pscon").style.borderColor = "red";

		if(email.length == 0)
		{
			document.getElementById("error").innerHTML = "Enter your e-mail!";
			document.getElementById("email").style.borderColor = "red";

		}

		if(pass.length < 8)
		{
			document.getElementById("error").innerHTML = "password should has at least 8 characters!";
			document.getElementById("pass").style.borderColor = "red";

		}
		
		if(pass != passCon)
		{
			document.getElementById("error").innerHTML = "password is not matching!";
			document.getElementById("pscon").style.borderColor = "red";

		}
		else
		{
			document.getElementById("pscon").style.borderColor = "rgba(0,0,0,.3)";
		}

		




	}
	else
	{
		document.getElementById("error").innerHTML = "";
		document.getElementById("uname").style.borderColor = "rgba(0,0,0,.3)";
		document.getElementById("pswd").style.borderColor = "rgba(0,0,0,.3)";
		document.getElementById("pscon").style.borderColor = "rgba(0,0,0,.3)";
	}
}