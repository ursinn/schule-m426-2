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
                        <td><p>Anrede</p></td>
                        <td><p><select name="anrede" required>
                            <option value="frau">Frau</option>
                            <option value="mann">Mann</option>
                        </select></p></td>
                    </tr>
                    <tr>
                        <td><p>Vorname</p></td>
                        <td><input type="text" required></td>
                    </tr>
                    <tr>
                        <td><p>Name</p></td>
                        <td><input type="text" required></td>
                    </tr>
                    <tr>
                        <td><p>Telefon</p></td>
                        <td><input type="text" required></td>
                    </tr>
                    <tr>
                        <td></td>
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
