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