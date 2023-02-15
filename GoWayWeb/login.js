

function login()
{
	let uname = document.getElementById("uname").value;
	let pass = document.getElementById("pswd").value;

	if(uname.length == 0 | pass.length == 0)
	{

		document.getElementById("error").innerHTML = "Enter user name and password!";

		if(uname.length == 0 && pass.length > 0)
		{
			document.getElementById("error").innerHTML = "Please enter your user name!";
			document.getElementById("uname").style.borderColor = "red";

		}

		if(pass.length == 0 && uname.length > 0)
		{

			document.getElementById("error").innerHTML = "Please enter your password!";
			document.getElementById("pswd").style.borderColor = "red";
		}
	}

	else
	{
		document.getElementById("error").innerHTML = ""
		document.getElementById("pswd").style.borderColor = "gray";
		document.getElementById("uname").style.borderColor = "gray";
	}
}