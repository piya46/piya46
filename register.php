<html>
    <head>
        <title>
            Register
        </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <script language="javascript">
function check_input()
{
	if(document.register.name_txt.value == "")
	{
		alert('Please input name');
		document.register.name_txt.focus();
		return false;
	}
    if(document.register.surename_text.value == "")
	{
		alert('Please input surename');
		document.register.surename_text.focus();
		return false;
	}
    if(document.register.Adress_text.value == "")
	{
		alert('Please input Adress');
		document.register.Adress_text.focus();
		return false;
	}
    if(document.register.Zipcoad_text.value == "")
	{
		alert('Please input zipcoad');
		document.register.Zipcoad_text.focus();
		return false;
	}
    if(document.register.Username_text.value == "")
	{
		alert('Please input username');
		document.register.Username_text.focus();
		return false;
	}
    if(document.register.Password_text.value == "")
	{
		alert('Please input password');
		document.register.Password_text.focus();
		return false;
	}
    if(document.register.Email_text.value == "")
	{
		alert('Please input email');
		document.register.Email_text.focus();
		return false;
	}
	document.register.submit();
}
</script>
    </head>
    <body align = "center" >
        <form method="POST" name="register" action="registerinsert.php" onSubmit="return check_input();">
            <div class="container my-3">
                <h1 class="text-center">REGISTER FORM</h1>
                <div class="form-group" align = "center">
                    <p>
                        <label>Name :</label>
                        <input type="text" name="Name" id="name_txt" >
                    </p>
                    <p>
                        <label>Surename :</label>
                        <input type="text" name="Surename" id="surename_text">
                    </p>
                    <p>
                        <label>Adress :</label>
                        <input type="text" name="Adress" id="Adress_text" class="form-control">
                    </p>
                    <p>
                        <label for=""> zipcoad </label>
                        <input type="text" name="Zipcoad" id="Zipcoad_text" maxlength="5" >
                    </p>
                    <p>
                        <label for="">username :</label>
                        <input type="text" name="Username" id="Username_text">
                    </p>
                    <p>
                        <label for=""> password :</label>
                        <input type="password" name="Password" id="Password_text" maxlength="20" title="ใส่ได้ไม่เกิน 20 ตัวอักษร">
                    </p>
                    <p>
                        <label for=""> Email :</label>
                        <input type="email" name="Email" id="Email_text" title="โปรดใส่อีเมล โดยให้มี @">
                    </p>
                    <input type="submit" value="Register" class="btn btn-success">
                    <input type="reset" value="reset" class="btn btn-danger">
                    <a href="homeuser.html" class="btn btn-primary">Back To Homepage</a>
                    <a  href="loginuser.php" class="btn btn-secondary" title="กลับไปหน้าล็อคอิน">Go To Login</a>
                </div>
            </div>
        </form>
        </br>
    </body>
</html>
