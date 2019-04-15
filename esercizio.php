<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="stile.css">
</head>
<body>
<center><table><tr><td><center>
<h3>Visualizza database</h3>
<?php
include 'database.php';
    include 'login.php';
    $utente=new User ($conn);
    $uret=$utente->showall();
 ?>
    <form action="inserimento.php" method="post" id=login1>
       <input type="submit" class="button" value="Torna al Login">
    </form>

</center></td></tr></table></center>
</body>
</html>