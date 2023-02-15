function addtour()
{
	let loc = document.getElementById("pick_loc").value;
	let drop = document.getElementById("drop-loc").value;
	let email = document.getElementById("email").value;
	let tele = parseInt(document.getElementById("tele_num").value);
	let tel = document.getElementById("tele_num").value;
	let bgchk = document.getElementById("bgchk").checked;
	let qubag = document.getElementById("bgqu").value;
	let wbag = document.getElementById("wbags").value;
	let vtype = document.getElementById("vehi_type").value;
	let date = document.getElementById("date_of").value;
	let kmdis = document.getElementById("kilom").value;
	let bg;
	let tot;
	// let regx = /^([a-zA-z0-9\._]+)@([a-zA-Z0-9])+.([a-z]+)(.[a-z]+)?$/
	var pattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
	document.getElementById("invalid").innerHTML = " ";

	// calculation

	let km = parseInt(document.getElementById("kilom").value);
	let kg = parseInt(document.getElementById("wbags").value);
	let kmrs = 0;
	let kgrs = 0;

	if(email.match(pattern))
	{
		document.getElementById("email").style.borderColor = "rgba(0,0,0,.3)";
		document.getElementById("email1").style.color = "white";
	}
	else
	{
		document.getElementById("email").style.borderColor = "red";
		document.getElementById("invalid").innerHTML = "invalid email!";
		document.getElementById("email1").style.color = "red";
		document.getElementById("email1").innerHTML = "invalid email!";
	}

	// km calculation


	
	

	if(bgchk == true)
	{
		bg = "Yes";
	}
	else
	{
		bg = "No";
	}


	if(bgchk == true)
	{

			if(loc.length == 0 | drop.length == 0 | email.length == 0 | tel.length < 10 | tel.length > 10 | Number.isInteger(tele)  == false | vtype.length == 0 | date.length == 0 | kmdis.length == 0 | wbag == "0" | qubag == "0" )
			{
				document.getElementById("invalid").innerHTML = "Invalid details!";
					if(loc.length == 0 )
					{
						document.getElementById("pick_loc").style.borderColor = "red";
					}
					else{
							document.getElementById("pick_loc").style.borderColor = "rgba(0,0,0,.3)";
					}

					if(drop.length == 0 )
					{
						document.getElementById("drop-loc").style.borderColor = "red";
					}
					else{
						document.getElementById("drop-loc").style.borderColor = "rgba(0,0,0,.3)";
					}

					if(email.length == 0)
					{
						document.getElementById("email").style.borderColor = "red";
					}
					else{
						document.getElementById("email").style.borderColor = "rgba(0,0,0,.3)";
					}

					if(tel.length < 10 | tel.length > 10 | Number.isInteger(tele)  == false )
					{
						document.getElementById("tele_num").style.borderColor = "red";
					
					}
					else{
						document.getElementById("tele_num").style.borderColor = "rgba(0,0,0,.3)";
						
					}

					if(vtype.length == 0 )
					{
						document.getElementById("vehi_type").style.borderColor = "red";
					}
					else{
						document.getElementById("vehi_type").style.borderColor = "rgba(0,0,0,.3)";
					}

					if(date.length == 0 )
					{
						document.getElementById("date_of").style.borderColor = "red";
					}
					else{
						document.getElementById("date_of").style.borderColor = "rgba(0,0,0,.3)";
					}

					if(kmdis.length == 0 )
					{
						document.getElementById("kilom").style.borderColor = "red";
					}
					else{
						document.getElementById("kilom").style.borderColor = "rgba(0,0,0,.3)";
					}

					if(wbag == "0")
					{
						document.getElementById("wdrop").style.borderColor= "red";

					}
					else{
						document.getElementById("wdrop").style.borderColor = "rgba(0,0,0,.3)";
					}

					if(qubag == "0")
					{
						document.getElementById("qudrop").style.borderColor = "red";
					}
					else{
						document.getElementById("qudrop").style.borderColor = "rgba(0,0,0,.3)";
					}
				
			}
			else
			{



					// border color change

					document.getElementById("pick_loc").style.borderColor = "rgba(0,0,0,.3)";
					document.getElementById("drop-loc").style.borderColor = "rgba(0,0,0,.3)";
					document.getElementById("email").style.borderColor = "rgba(0,0,0,.3)";
					document.getElementById("tele_num").style.borderColor = "rgba(0,0,0,.3)";
					document.getElementById("vehi_type").style.borderColor = "rgba(0,0,0,.3)";
					document.getElementById("date_of").style.borderColor = "rgba(0,0,0,.3)";
					document.getElementById("kilom").style.borderColor = "rgba(0,0,0,.3)";
					document.getElementById("wdrop").style.borderColor = "rgba(0,0,0,.3)";
					document.getElementById("qudrop").style.borderColor = "rgba(0,0,0,.3)";
					


			document.getElementById("comdiv").style.opacity = "1";

			document.getElementById("from").innerHTML = loc;
			document.getElementById("to").innerHTML = drop;
			document.getElementById("email1").innerHTML = email;
			document.getElementById("mob").innerHTML = tele;
			document.getElementById("bagyes").innerHTML = bg;
			document.getElementById("bagqu").innerHTML = qubag;
			document.getElementById("bagwei").innerHTML = wbag;
			document.getElementById("vehicle").innerHTML = vtype;
			document.getElementById("day").innerHTML = date;
			document.getElementById("kilm").innerHTML = kmdis;
			document.getElementById("total").innerHTML = "Rs." + tot;
			document.getElementById("dprice").innerHTML = "Rs." + kmrs;
			document.getElementById("bprice").innerHTML = "Rs." + kgrs; 

					if(email.match(pattern))
	{
		document.getElementById("email").style.borderColor = "rgba(0,0,0,.3)";
		document.getElementById("email1").style.color = "white";
	}
	else
	{
		document.getElementById("email").style.borderColor = "red";
		document.getElementById("invalid").innerHTML = "invalid email!";
		document.getElementById("email1").style.color = "red";
		document.getElementById("email1").innerHTML = "invalid email!";
	}

			}

	}
	else
	{
		if(loc.length == 0 | drop.length == 0 | email.length == 0 | tel.length < 10 | tel.length > 10 |  Number.isInteger(tele) == false | vtype.length == 0 | date.length == 0 | kmdis.length == 0)
			{
				document.getElementById("invalid").innerHTML = "Invalid details!";

				if(loc.length == 0 )
					{
						document.getElementById("pick_loc").style.borderColor = "red";
					}
					else{
							document.getElementById("pick_loc").style.borderColor = "rgba(0,0,0,.3)";
					}

					if(drop.length == 0 )
					{
						document.getElementById("drop-loc").style.borderColor = "red";
					}
					else{
						document.getElementById("drop-loc").style.borderColor = "rgba(0,0,0,.3)";
					}

					if(email.length == 0)
					{
						document.getElementById("email").style.borderColor = "red";
					}
					else{
						document.getElementById("email").style.borderColor = "rgba(0,0,0,.3)";
					}

					if( Number.isInteger(tele)  == false | tel.length < 10 | tel.length > 10 )
					{
						
						document.getElementById("tele_num").style.borderColor = "red";
						
					}
					else{
						
						document.getElementById("tele_num").style.borderColor = "rgba(0,0,0,.3)";
						document.getElementById("invalid").innerHTML = " ";
					}

					if(vtype.length == 0 )
					{
						document.getElementById("vehi_type").style.borderColor = "red";
					}
					else{
						document.getElementById("vehi_type").style.borderColor = "rgba(0,0,0,.3)";
					}

					if(date.length == 0 )
					{
						document.getElementById("date_of").style.borderColor = "red";
					}
					else{
						document.getElementById("date_of").style.borderColor = "rgba(0,0,0,.3)";
					}

					if(kmdis.length == 0 )
					{
						document.getElementById("kilom").style.borderColor = "red";
					}
					else{
						document.getElementById("kilom").style.borderColor = "rgba(0,0,0,.3)";
					}
			}
			else
			{



				// border color change

					document.getElementById("pick_loc").style.borderColor = "rgba(0,0,0,.3)";
					document.getElementById("drop-loc").style.borderColor = "rgba(0,0,0,.3)";
					document.getElementById("email").style.borderColor = "rgba(0,0,0,.3)";
					document.getElementById("tele_num").style.borderColor = "rgba(0,0,0,.3)";
					document.getElementById("vehi_type").style.borderColor = "rgba(0,0,0,.3)";
					document.getElementById("date_of").style.borderColor = "rgba(0,0,0,.3)";
					document.getElementById("kilom").style.borderColor = "rgba(0,0,0,.3)";
			


			document.getElementById("comdiv").style.opacity = "1";

			document.getElementById("from").innerHTML = loc;
			document.getElementById("to").innerHTML = drop;
			document.getElementById("email1").innerHTML = email;
			document.getElementById("mob").innerHTML = tele;
			document.getElementById("bagyes").innerHTML = bg;
			document.getElementById("bagqu").innerHTML = qubag;
			document.getElementById("bagwei").innerHTML = wbag;
			document.getElementById("vehicle").innerHTML = vtype;
			document.getElementById("day").innerHTML = date;
			document.getElementById("kilm").innerHTML = kmdis;
			document.getElementById("total").innerHTML = "Rs." + tot;
			document.getElementById("dprice").innerHTML = "Rs." + kmrs;
			document.getElementById("bprice").innerHTML = "Rs." + kgrs;


				if(email.match(pattern))
	{
		document.getElementById("email").style.borderColor = "rgba(0,0,0,.3)";
		document.getElementById("email1").style.color = "white";
	}
	else
	{
		document.getElementById("email").style.borderColor = "red";
		document.getElementById("invalid").innerHTML = "invalid email!";
		document.getElementById("email1").style.color = "red";
		document.getElementById("email1").innerHTML = "invalid email!";
	}
			}

	}



}

function bags()
{
	let bgchk = document.getElementById("bgchk").checked;

		if(bgchk == true)
	{
		
		 document.getElementById("wbags").style.opacity = "1";
		document.getElementById("bgqu").style.opacity = "1";
	}
	else
	{
		document.getElementById("wbags").style.opacity = "0";
		document.getElementById("bgqu").style.opacity = "0";
		document.getElementById("wdrop").style.borderColor = "rgba(0,0,0,.3)";
		document.getElementById("qudrop").style.borderColor = "rgba(0,0,0,.3)";
	}	
}