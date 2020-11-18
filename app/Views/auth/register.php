<!doctype html>
<html lang="en">
  <head>
    <title>Register</title>
    <style>
    html, body {
        min-height: 100%;
        height: auto;
        position: relative;
    }

    body, textarea {
        font-family: Arial, Helvetica, Verdana, sans-serif;
    }

    input[type=text], select {
        margin: 2px;
    }

    input[type=email], select {
        margin: 3px;
    }

    input[type=password], select {
        margin: 2px;
    }

    .formulir {
        padding-left: 5%;
        padding-right: 5%;
        margin-left: 36%;
        margin-right: 36%;
        background: rgba(33,101,138,1);
        background: -webkit-linear-gradient( top, rgba(33,101,138,1) 5%, rgba(23,67,92,1) 95%);
        background: linear-gradient( to bottom, rgba(33,101,138,1) 5%, rgba(23,67,92,1) 95%);
    }

    body {
        background: #1b2838;
        text-align: left;
        color: #8F98A0;
        font-size: 14px;
        margin: 0;
        margin-top: 120;
        padding: 0;
    }

    .btn_green_white_innerfade {
        border-radius: 2px;
        border: none;
        padding: 5px;
        display: inline-block;
        cursor: pointer;
        margin: 5px 0;
        text-decoration: none !important;
        color: #D2E885 !important;
        background: #a4d007;
        background: -webkit-linear-gradient( top, #a4d007 5%, #536904 95%);
        background: linear-gradient( to bottom, #a4d007 5%, #536904 95%);
    }

    .fill {
        color: #ffffff;
        font-size: 14px;
        font-family: "Motiva Sans", Sans-serif;
        font-weight: normal;
    }

    .btn_green_white_innerfade:hover {
        background: #a4d007;
    }
  </style>
  </head>
<body>
    <div class="formulir">
	    <form action="<?= current_url() ?>" method="POST">
	        <div class="fill"><h2 align="center">Register Now</h2></div>
	        <table width="0%" align="center" border="0">
                <tr>
			        <td>First Name</td>
                    <td><input type="text" id="fname" name="firstname"></td>
		        </tr>
		        <tr>
			        <td>Last Name</td>
                    <td><input type="text" id="lname" name="lastname"></td>
                </tr>
                <tr>
			        <td>Email</td>
                    <td><input type="text" id="email" name="email"></td>
		        </tr>
                <tr>
			        <td>Username</td>
                    <td><input type="text" id="uname" name="username"></td>
		        </tr>
		        <tr>
			        <td>Password</td>
                    <td><input type="Password" id="pw" name="password"></td>
                </tr>
                <tr>
			        <td>Confirm Password</td>
                    <td><input type="Password" id="cpw" name="cpassword"></td>
		        </tr>
		        <tr>
			        <td></td>
			        <td><a href="<?= site_url('auth/login') ?>" class="btn_green_white_innerfade" type="submit" name="reg" value="Register" width="104" height="25" border="0" tabindex="5">Register</a></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>