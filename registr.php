<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="stylesheet.css">
        <title>PHP-GmbH Home</title>
    </head>
    <body>
        <header>
            <img src="img/banner.gif">
        </header>
        <nav>
            <img src="img/tomcat.gif">
            <a href="index.html">
                <img src="img/home.gif">
            </a>
            <a href="guestbook.php">
                <img src="img/guestbook.gif">
            </a>
            <a href="#">
                <img src="img/witze.gif">
            </a>
        </nav>
        <main>
            <h1>Registrieren</h1>
            <form method="post" action="registr.php">
                <table>
                    <tr>
                        <!-- Eingabe der Anrede -->
                        <td><p>Anrede</p></td>
                        <td><p><select name="anrede" required>
                            <option value="frau">Frau</option>
                            <option value="mann">Mann</option>
                        </select></p></td>
                    </tr>
                    <tr>
                        <!-- Eingabe des Vornamens -->
                        <td><p>Vorname</p></td>
                        <td><input name="vorname" type="text" value="<?php $vorname ?>" required></td>
                    </tr>
                    <tr>
                        <!-- Eingabe des Namens -->
                        <td><p>Name</p></td>
                        <td><input name="name" type="text" value="<?php $name ?>" required></td>
                    </tr>
                    <tr>
                        <!-- Eingabe der Telefon nummer -->
                        <td><p>Telefon</p></td>
                        <td><input name="telefon" type="text" value="<?php $telefon ?>" required></td>
                    </tr>
                    <tr>
                        <td></td>
                        <!-- Absenden der Daten -->
                        <td><input type="submit" value="Eintragen">  <input type="reset" value="Löschen"></td>
                    </tr>
                </table>
            </form>
            <p>[<a href="adduser.php">Users lesen</a>]</p>
        </main>
        <footer>
            <img src="img/jakarta-banner.gif">
        </footer>
    </body>
</html>
<?php
#Wenn Daten Gesendet Werden dann werden sie überprüft
if(isset($_POST['submit'])) {
  #Daten werden vorübergehend gespeichert
  $name = trim($_POST['name']);
  $anrede = trim($_POST['anrede']);
  $vorname = trim($_POST['vorname']);
  $telefon = trim($_POST['telefon']);
  $error = false;

    if((!empty($_POST['name'])) && (!empty($_POST['anrede'])) && (!empty($_POST['vorname'])) && (!empty($_POST['telefon'])) && ($error==false)) {

    #Verbindung wird aufgebaut
    $verbindung = fopen('user.txt', 'a');
        #Wenn die Verbinndung besteht dann werden die Daten Gespeichert

        if ($verbindung == TRUE) {
			$content ="<br>Anrede: " .$_POST['anrede']. "Name: " .$_POST['name']. "<br>Vorname: " .$_POST['vorname']. "<br>Telefon: " .$_POST['telefon']. "<br><br>";
      #Daten werden als UTF-8 in die Datei Gespeichert
			fputs ($verbindung, utf8_decode("$content"));
		}
    #Die Verbinndung zur TXT Datei wird Getrennt
		fclose($verbindung);
  } else if($error==true) {
    #Error Falls die Daten Nicht Richtig Ausgefüllt wurden
    echo "Daten wurden Nicht Richtig Ausgefühlt";
  }
}
 ?>
