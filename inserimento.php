<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="stile.css">
</head>
<body>
<center><table><tr><td><center>
<h2>Effettua il Login</h2>
    <script>
        function login (a) {
            var $nome = document.getElementById("name");
            var $username = document.getElementById("username");
            var $password =document.getElementById("password");
            document.getElementById("met").value=a;
            var $password2=document.getElementById("password2");
            if(a==1 && $password.value!=$password2.value)
            {
                alert("Password diverse");
                document.getElementById("password").value="";
                document.getElementById("password2").value="";
                document.getElementById("password").focus();
            }
            else if ($nome.value != "" && $username.value != "" && $password.value !="") 
                    {
                        document.getElementById("login1").submit();
                    }else
                    {
                        alert("Rimepire tutti i campi");
                    }
        }
    </script>
    <form action="controllodb.php" method="post" id=login1>
       <b> Nome: <input type="text" class='testo' id="name" name="name" placeholder="Nome"><br>
        Username: <input type="text" class='testo' id="username" name="username" placeholder="Username"><br>
        Password: <input type="password" class='testo' id="password" name="password" placeholder="Password"><br>
        <input type='hidden' id="met" name="met" value="0">
    </form>
    <?php
        if (isset($_POST['passing'])) 
        {
            $msg = $_POST['passing'];
            if($msg==2)
            {
                echo("Conferma password: <input type='password' class='testo' id='password2' name='password' placeholder='Password'><br>");
                echo( "<button id='log_button' type='button' class='button' onclick='login(1)'><b>Registrati</b></button>");    
            }
            else 
            echo( "<button type='button' id='log_button' class='button'  onclick='login(2)'><b>Login</b></button>");
        }else 
        echo( "<button id='log_button' type='button' class='button' onclick='login(2)'><b>Login</b></button>");
    ?>
    </center></td></tr></table></center>
</body>
</html>