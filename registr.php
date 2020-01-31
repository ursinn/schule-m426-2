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
                        <td><input name="vorname" type="text" required></td>
                    </tr>
                    <tr>
                        <!-- Eingabe des Namens -->
                        <td><p>Name</p></td>
                        <td><input name="name" type="text" required></td>
                    </tr>
                    <tr>
                        <!-- Eingabe der Telefon nummer -->
                        <td><p>Telefon</p></td>
                        <td><input name="telefon" type="text" required></td>
                    </tr>
                    <tr>
                        <td></td>
                        <!-- Absenden der Daten -->
                        <td><input type="submit" value="Eintragen">  <input type="reset" value="Löschen"></td>
                    </tr>
                </table>
            </form>
        </main>
        <footer>
            <img src="img/jakarta-banner.gif">
        </footer>
    </body>
</html>
<?php
if(isset($_POST['submit'])) {
    $error = false;

    if((!empty($_POST['name'])) && (!empty($_POST['vorname'])) && (!empty($_POST['telefon'])) && ($error=flase)))) {
		$verbindung = fopen('user.txt', 'a');
        if ($verbindung == TRUE) {
			$content = "Name: " .$_POST['name']. "<br>Vorname: " .$_POST['vorname']. "<br>Telefon: " .$_POST['telefon']. "<br><br>";

			fputs ($verbindung, utf8_decode("$content"));
		}
		fclose($verbindung);
  } else {
    echo "Daten wurden Nicht Richtig Ausgefühlt";
  }
}
 ?>
