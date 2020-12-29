  <?php
session_start();
session_unset();
?>
<form name="form1" method="post" action="prclogin.php">
<table width="248" height="133" border="0" align="center">
<tr>
                <td width="219"><div align="center" class="style6">
                  <p>Login Member / CO </p>
                  <table width="200" border="0" align="center" cellspacing="5">
                    <tr>
                      <td>Username</td>
                      <td>:</td>
                      <td><label for="textfield2"></label>
                        <input type="text" name="username" id="textfield2" /></td>
                    </tr>
                    <tr>
                      <td>Password</td>
                      <td>:</td>
                      <td><label for="textfield3"></label>
                        <input type="password" name="password" id="textfield3" /></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td><input type="submit" name="button" value="Login" /></td>
                    </tr>
                  </table>
                  <p>&nbsp;</p>
                </div>
<p>&nbsp;</p></td>
              </tr>
            </table>

</form>
