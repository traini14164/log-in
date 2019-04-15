<!DOCTYPE html>
<html>
<head>
    <title>Risposta</title>
    <link rel="stylesheet" type="text/css" href="stile.css">
    <script>
    function test (a)
        {
            document.getElementById("passing").value=a;
            document.getElementById("form").submit();
        }
    </script>
</head>
<body>
<center><table><tr><td><center>
    <?php
    include 'database.php';
    include 'login.php';
    $utente=new User ($conn);
    $utente->nome = $_POST['name'];
    $utente->username = $_POST['username'];
    $utente->password = $_POST['password'];
    $metodo=$_POST['met'];
    
          $uret=$utente->login();
          $data=$uret->fetch(PDO::FETCH_ASSOC);
        if ($data!="") 
        {
          echo ("<h3>Utente esistente <br>Puoi entrare</h3>");
          echo ("<form action='esercizio.php' method='post'>
          <input type='hidden' value='".$username."' name='nick'>
          <input type='submit' class='button' value='Entra' />
           </form>");
        } else if($metodo==2)
                    {
                        echo ("<h3>Uno dei campi non e' stato correttamente inserito o l'utente non e' presente</h3>");
                        echo ("<form action='inserimento.php' id='form' method='post'>
                                <button id='button' class='button' onclick='test(2)'><b>Registrare</button>
                                <button id='button' class='button' onclick='test(3)'>Riprovare</b></button>
                                <input type='hidden' value='1' name='passing' id='passing'/>
                            </form>");
                    }else if($utente->signup())
                            {
                            echo("<h3>Utente correttamente registato</h3>");
                            echo ("<form action='esercizio.php' method='post'>
                            <input type='hidden' value='".$utente->nome."  ".$utente->username."' name='nick'>
                            <input type='submit'class='button'  value='entra' />
                             </form>");
                            }        

        function c_credenziali ($nome, $username,$password){
            $nFile = "iscritti.csv";

            if (file_exists($nFile)) {
                $file = fopen($nFile, "r");

                while ($riga = fgetcsv($file, 0, ",")) {
                    if ($riga[0] == $nome && $riga[1] == $username && $riga[2]==$password) {
                        return true;
                    }
                }
            }
            return false;
        }
        function writeUser ($dati) {
            $nFile = "iscritti.csv";
    
            if (file_exists($nFile)) {
                $file = fopen($nFile, "a");
    
                fputcsv($file, $dati);
    
                fclose($file);
                return true;
            }
            return false;
        }
    ?>
</center></td></tr></table></center>
</body>
</html>