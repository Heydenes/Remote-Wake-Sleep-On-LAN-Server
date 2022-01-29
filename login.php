<?php
// (A) LOGIN CHECKS
require "validate.php";

// (B) LOGIN PAGE HTML ?>
<!DOCTYPE html>
<html>
  <head>
    <title>WoL Login</title>
    <link href="login.css" rel="stylesheet">
  </head>
  <body>
<h1 style="text-align:center;color:blue;"> <b>Wake On Lan</b> </h1>
    <?php if (isset($failed)) { ?>
    <div id="bad-login">Invalid user id or password.</div>
    <?php } ?>

    <form id="login-form" method="post" target="_self">
      <h2>Login Here</h2>
      <label for="user">User ID</label>
      <input type="text" name="user" required/>
      <label for="password">Password</label>
      <input type="password" name="password" required/>
      <input type="submit" value="Sign In"/>
      <input type="reset" value="Reset">
    </form>
  </body>
</html>
