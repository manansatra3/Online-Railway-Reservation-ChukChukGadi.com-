<html>

<head>
  <title>Railway reservation system</title>

  <link rel="stylesheet" type="text/css" href="style/style.css" />
  <script type="text/javascript">
function formvalidation()
{
	var uid=document.f1.name;
	var pwd=document.f1.password;
	var pc=document.f1.tel;
	var eid=document.f1.email;


if(userid_validation(uid,5,12))
{
	if(pwd_validation(pwd,7,12))
	{	
			if(number_validation(pc))
			{
				if(email_validation(eid))
				{
				
				}
			}

	}
	
}	

return false;
}

function userid_validation(uid,mx,my)
{
	var uid_len=uid.value.length;
	if(uid_len==0||uid_len>my||uid_len<mx)
	{
		alert("user id should not be empty/length between "+mx+" to "+my);
		uid.focus();
		
		return false;
	}
	return true;
}

function pwd_validation(pwd,mx,my)
{
	var pwd_len=pwd.value.length;
	if(pwd_len==0||pwd_len>my||pwd_len<mx)
	{
		alert("password should not be empty/length between "+mx+" to "+my);
		pwd.focus();
		
		return false;
	}
	return true;
}


function number_validation(pc)
{
	var letters1 = /^[0-9]+$/;
	if(pc.value.match(letters1))
	{
		return true;
	}
	else
	{
		alert("user number must have numeric characters only");
		pc.focus();
	}
}

function email_validation(eid)
{
var letters2 =/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;

	if(eid.value.match(letters2))
	{
		return true;
	}
	else
	{
		alert("user Email-Id is not valid");
		eid.focus();
	}
}
</script>
</head>

<body onload="return formvalidation();" style="background-size: 100% 95% ">

      <div id="logo">
        <div id="logo_text">

          <h1><a href="welcome.php"><span class="logo_colour">ChukChukGadi</span></a></h1>
          <h2>Your <b>Comfort</b> Our <b>Care</b></h2>
		 </div>
		</div>
    
		<?php

			$name=$_POST["nm"];
			$phone_no=$_POST["tel"];
			$email_id=$_POST["eid"];
			$password=$_POST["pwd"];

			mysql_connect("localhost", "root") or die(mysql_error()); 

		
			$dbase_name="user";

			mysql_select_db($dbase_name) or die(mysql_error()); 
			
			$query="insert into logup values('$name',$phone_no,'$email_id','$password')";
			mysql_query($query) or die (mysql_error());  
			echo <h1><strong>Welcome $name </strong></h1>;
			echo <h1><strong>You are now Registered</strong></h1>;
			mysql_close();

		?>
	
	<h1 style="padding-top:100px"><center><a href="welcome.html">Book Tickets now</a></center></h1>
<div id="content_footer" style="padding-top:160px"></div>
    <div id="footer">
      <p><a href="index.html">Home</a> | <a href="examples.html">Our Cities</a> | <a href="safety.html">Safety</a> | <a href="help.html">Help Center</a> | <a href="about_us.html">About Us</a> | <a href="legal.html">Legal</a> | <a href="faq.html">FAQ's</a> | <a href="blog.html">Blog</a></p>
      <center><p>Copyright &copy; ChukChukGadi.com </p></center>
    </div>
  </div>
	  </body></html>