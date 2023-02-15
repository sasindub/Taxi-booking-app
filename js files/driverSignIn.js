function signin()
{
	let mail = document.getElementById("mail").value;
	let name = document.getElementById("name").value;
	let mob = document.getElementById("mob").value;
	let vehi = document.getElementById("veh").value;
	let vmodel = document.getElementById("vmodel").value;
	let fop = document.getElementById("fop").value;
	let dis = document.getElementById("dis").value;



	if(mail.length == 0)
	{
		document.getElementById("mail").style.borderColor = "red";
		document.getElementById("error").innerHTML = "all the details are required!";
	}
	else
	{
		document.getElementById("mail").style.borderColor = "rgba(0,0,0,.3)";
		
	}

	if(name.length == 0)
	{
		document.getElementById("name").style.borderColor = "red";
		document.getElementById("error").innerHTML = "all the details are required!";
	}
	else
	{
		document.getElementById("name").style.borderColor = "rgba(0,0,0,.3)";
	}

	if(mob.length == 0)
	{
		document.getElementById("mob").style.borderColor = "red";
		document.getElementById("error").innerHTML = "all the details are required!";
	}
	else
	{
		document.getElementById("mob").style.borderColor = "rgba(0,0,0,.3)";
		
	}

		if(vehi.length == 0)
	{
		document.getElementById("veh").style.borderColor = "red";
		document.getElementById("error").innerHTML = "all the details are required!";
	}
	else
	{
		document.getElementById("veh").style.borderColor = "rgba(0,0,0,.3)";
		
	}

		if(vmodel == "1")
	{
		document.getElementById("vmodel").style.borderColor = "red";
		document.getElementById("error").innerHTML = "all the details are required!";
	}
	else
	{
		document.getElementById("vmodel").style.borderColor = "rgba(0,0,0,.3)";
	}

		if(fop == "1")
	{
		document.getElementById("fop").style.borderColor = "red";
		document.getElementById("error").innerHTML = "all the details are required!";
	}
	else
	{
		document.getElementById("fop").style.borderColor = "rgba(0,0,0,.3)";
	}

		if(dis.length == 0)
	{
		document.getElementById("dis").style.borderColor = "red";
		document.getElementById("error").innerHTML = "all the details are required!";
	}
	else
	{
		document.getElementById("dis").style.borderColor = "rgba(0,0,0,.3)";
	}




}




