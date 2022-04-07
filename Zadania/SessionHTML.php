<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
</head>

<body>

<h1> SING IN </h1>

<form action="SessionPHP.php" method="post">

      <table>

          <TR>
              <TD>Login:</TD>
              <TD><INPUT type='text' name='Login' value=""> </TD>
          </TR>

          <TR>
              <TD>Password:</TD>
              <TD><INPUT type='text' name='Password' value=""></TD>
          </TR>

          <TR>
              <TD><INPUT type="submit" value="Send"></TD>
          </TR>

      </table>
</form>

<?php
echo $_GET['output'];
?>


