<html>
<head>
    <title> login user </title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<script language="javascript">
function check_input()
{
	if(document.login.username.value == "")
	{
		alert('Please input username');
		document.login.username.focus();
		return false;
	}
    if(document.login.password.value == "")
	{
		alert('Please input password');
		document.login.password.focus();
		return false;
	}
	document.login.submit();
}
</script>
</head>
<body>
<form method="POST" name="login" action="check.php" onsubmit="return check_input();">
<div class="container my-2">
    <div align="center" class="form-group">
        <center><h1 class="text-center">LOGIN FORM</h1></center>
</br>
<p>
    <label>username :</label>
    <input type="text" name="username" id="username" class="form-control">
</p>
<p>
    <label>password :</label>
    <input type="password" name="password" id="password" maxlength="20" class="form-control">
</p>
    <input type="submit" value="LOGIN" id="login_user" class="btn btn-success"></input>
    </div>
</div>
</form>
</body>

</html>
