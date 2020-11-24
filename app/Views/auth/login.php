    <div class="formulir">
	    <form action="<?= current_url() ?>" method="POST">
	        <div class="fill"><h2 align="center">Login Form</h2></div>
	        <table width="0%" align="center" border="0">
		        <tr>
			        <td>Username</td>
                    <td><input type="text" id="uname" name="username"></td>
		        </tr>
		        <tr>
			        <td>Password</td>
                    <td><input type="Password" id="pw" name="password"></td>
		        </tr>
		        <tr>
			        <td></td>
			        <td><input class="btn_green_white_innerfade" type="submit" name="login" value="Login" width="104" height="25" border="0" tabindex="5"></td>
                </tr>
            </table>
            <a href="<?= site_url('auth/register') ?>">Belum punya akun? daftar sekarang</a><br /><br />
        </form>
    </div>