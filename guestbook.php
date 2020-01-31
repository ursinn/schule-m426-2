<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="stylesheet.css">
        <title>PHP-GmbH Home</title>
    </head>
    <body>
        <!-- Firmen Bild -->
        <header>
            <img src="img/banner.gif">
        </header>
        <!-- Navigation -->
        <nav>
            <img src="img/tomcat.gif">
            <a href="index.html">
                <img src="img/home.gif">
            </a>
            <a href="#">
                <img src="img/guestbook.gif">
            </a>
            <a href="registr.php">
                <img src="img/witze.gif">
            </a>
        </nav>
        <!-- Main der Seite -->
        <main>
            <h1>Gästebuch</h1>
            <form method="POST">
                <table>
                    <tr>
                        <!-- Eingabe von vor und Nachname-->
                        <td><p>Name / Vorname: </p></td>
                        <td><input type="text" name="name" value="<?php $name ?>" required></td>
                    </tr>
                    <tr>
                        <!-- Eingabe der E-Mail Adresse -->
                        <td><p>E-Mail: </p></td>
                        <td><input type="email" name="mail" value="<?php $mail ?>" required></td>
                    </tr>
                    <tr>
                        <!-- Eingabe der Nachricht -->
                        <td><p>Message: </p></td>
                        <td><textarea name="message" value="<?php $message ?>" cols="30" rows="10" required></textarea></td>
                    </tr>
                    <tr>
                        <td></td>
                        <!-- Absenden der Daten -->
                        <td><input type="submit" name="submit" value="Eintragen">  <input type="reset" value="Löschen"></td>
                    </tr>
                </table>
            </form>
            <p>[<a href="guestbook_read.php">Gästebuch lesen</a>]</p>
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
    $mail = trim($_POST['mail']);
    $message = trim($_POST['message']);
    $error = false;

    if((!empty($_POST['name'])) && (!empty($_POST['mail'])) && (!empty($_POST['message'])) && ($error==flase)) {
    #Verbinndung wird aufgebaut
    $verbindung = fopen('guestbook.txt', 'a');
        #Wenn die Verbinndung besteht dann werden die Daten Gespeichert
        if ($verbindung == TRUE) {
			$content = "Name: " .$_POST['name']. "<br>Mail: " .$_POST['mail']. "<br>Message: " .$_POST['message']. "<br><br>";
      #Daten werden als UTF-8 in die Datei Gespeichert
			fputs ($verbindung, utf8_decode("$content"));
		}
    #Die Verbinndung zur TXT Datei wird Getrennt
		fclose($verbindung);
  } else if($error==true) {
    #Error Falls die Daten Nicht Richtig Ausgefühlt wurden
    echo "Daten wurden Nicht Richtig Ausgefühlt";
  }
}

?>
