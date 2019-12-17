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
            <a href="#">
                <img src="img/guestbook.gif">
            </a>
            <a href="registr.html">
                <img src="img/witze.gif">
            </a>
        </nav>
        <main>
            <h1>Gästebuch</h1>
            <form method="POST">
                <table>
                    <tr>
                        <td><p>Name / Vorname: </p></td>
                        <td><input type="text" name="name"></td>
                    </tr>
                    <tr>
                        <td><p>E-Mail: </p></td>
                        <td><input type="text" name="mail"></td>
                    </tr>
                    <tr>
                        <td><p>Message: </p></td>
                        <td><textarea name="message" id="" cols="30" rows="10"></textarea></td>
                    </tr>
                    <tr>
                        <td></td>
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

?>