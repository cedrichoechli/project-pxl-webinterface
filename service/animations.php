<!DOCTYPE html>
<html lang="de">

    <head>
        <meta charset="utf-8">
        <title>project-pxl Webinterface </title>
        <meta name=”robots” content=”noindex,nofollow”>
    </head>

    <body>
        <header>
            <hgroup>
                <h1> Project pxl</h1>
            </hgroup>
            <nav>
                <ul>
                    <a href="../index.html">Home</a>
                    &nbsp;
                    <a href="scrolling-text.html">Scrolling Text</a>
                    &nbsp;
                    <a href="pictures.php">Pictures</a>
                    &nbsp;
                    <a href="">Animations</a>
                </ul>
            </nav>
        </header>
        
        <section>
            <h2>Animations</h2>
            <h3>Hier kannst du Animationen auf dem Display anzeigen lassen.</h3>
            <form action="displayAnimation.php" method="post">
                <label for="pictureFile">Datei:</label>
                <br>
                <select name="pictureFile">
                    <option value="">- Wähle Animation -
                    <?php 
                        $dirPath = dir('uploads/animations');
                        $imgArray = array();
                        while (($file = $dirPath->read()) !== false)
                        {
                            if ((substr($file, -3)=="gif") || (substr($file, -3)=="jpg") || (substr($file, -3)=="jpeg") || (substr($file, -3)=="png"))
                            {
                                $imgArray[ ] = trim($file);
                            }
                        }
                        $dirPath->close();
                        sort($imgArray);
                        $c = count($imgArray);
                        for($i=0; $i<$c; $i++)
                        {
                            echo "<option value=\"" . $imgArray[$i] . "\">" . $imgArray[$i] . "\n";
                        }
                    ?>
                </select>
                <br>
                <br>
                <label for="duration">Dauer in Sekunden:</label>
                <br>
                <input type="text" id="duration" name="duration" value="10">
                <br>
                <br>
                <input type="submit" value="Senden">
            </form>
        </section>
        <br>
        <br>
        <section>
            <label for="pictureFile">Lade deine eigene Animation hoch:</label>
            <br>
            <form action="uploadAnimation.php" method="post" enctype="multipart/form-data">
                <input type="file" name="fileToUpload" id="fileToUpload">
                <input type="submit" value="Upload" name="submit">
            </form>
        </section>
        <br>
        <footer>
            <p>
                All Rights Reserved. Copyright 2021 by Cedric Hoechli.
            </p>
        </footer
    </body>
</html>
      
      