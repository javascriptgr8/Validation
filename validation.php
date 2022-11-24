<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<form method="post" action="" onsubmit="return checkvalidate()">
	<table>
		<tr>
			<td>
				Name : <input type="text" name="name">
				<span id="err_name"></span>
			</td>
		</tr>
		<tr>
			<td>
				Email : <input type="text" name="email">
				<span id="err_email"></span>
			</td>
		</tr>
		<tr>
			<td>
				Password : <input type="text" name="password">
				<span id="err_password"></span>
			</td>
		</tr>
		<tr>
			<td>
				Mobile : <input type="text" name="mobile">
				<span id="err_mobile"></span>
			</td>
		</tr>
		<tr>
			<td>
				Qulification : <input type="checkbox" name="qualification[]" value="MCA">MCA
							   <input type="checkbox" name="qualification[]" value="BCA">BCA
				<span id="err_qualification"></span>
			</td>
		</tr>
	</table>
	<input type="submit" name="save">
</form>
<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script>
	function checkvalidate()
	{
		var name=$("input[name=name]").val();
		var email=$("input[name=email]").val();
		var password=$("input[name=password]").val();
		var mobile=$("input[name=mobile]").val();

		if(name.length=='0' && email.length=='0' && password.length=='0' && mobile.length=='0')
		{
			$("#err_name").html('Please Enter your name');
			$("#err_email").html('Please Enter your Email');
			$("#err_password").html('Please Enter your password');
			$("#err_mobile").html('Please Enter your mobile');
			$("#err_qualification").html('Please checked atlist one');
			return false;
		}


		if(name.length=='0')
		{
			$("#err_name").show();
			$("#err_name").html('Please Enter your name');
			return false;
		}
		else
		{
			$("#err_name").hide();
		}
		//email validation
		if(email.length=='0')
		{
			$("#err_email").show();
			$("#err_email").html('Please Enter your Email');
			return false;
		}
		else if((email.indexOf('@') <=0) || (email.charAt(email.length-4) !='.') )
		{
			$("#err_email").show();
			$("#err_email").html('Please Enter Valid Email');
			return false;
		}
		else
		{
			$("#err_email").hide();
		}
		//password validation start
		if(password.length=='0')
		{
			$("#err_password").show();
			$("#err_password").html('Please Enter your password');
			return false;
		}
		else if(password.length < 5)
		{
			$("#err_password").show();
			$("#err_password").html('Please Enter 5 character password');
			return false;
		}
		else
		{
			$("#err_password").hide();
		}
		//mobile validation start
		if(mobile.length=='0')
		{
			$("#err_mobile").show();
			$("#err_mobile").html('Please Enter your mobile');
			return false;
		}
		else if(isNaN(mobile))
		{
			$("#err_mobile").show();
			$("#err_mobile").html('Please Enter Only Number');
			return false;
		}
		else if(mobile.length!=10)
		{
			$("#err_mobile").show();
			$("#err_mobile").html('Please Enter 10 Digit Number');
			return false;
		}
		else
		{
			$("#err_mobile").hide();
		}

		//checkbox
		
		if($('input[type=checkbox]:checked').length == 0)
		{
			$("#err_qualification").show();
			$("#err_qualification").html('Please checked atlist one');
			return false;
		}
		else
		{	
			$("#err_qualification").hide();
		}		

	}
</script>
</body>
</html>