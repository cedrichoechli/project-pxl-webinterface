<!DOCTYPE html>
<html lang="de">

    <script>

        function doupload() {
            let data = document.getElementById("file").files[0];
            let entry = document.getElementById("file").files[0];
            console.log('doupload',entry,data)
            fetch('uploads/pictures/' + encodeURIComponent(entry.name), {method:'PUT',body:data});
            alert('your file has been uploaded');
            location.reload();
        };

    </script>

    <head>
        <meta charset="utf-8">
        <title>project-pxl Webinterface </title>
        <meta name=”robots” content=”noindex,nofollow”>
    </head>

    <body>
        <header>
            <hgroup>
                <h1> project-pxl</h1>
            </hgroup>
            <nav>
                <ul>
                    <a href="../index.html">Home</a>
                    &nbsp;
                    <a href="scrolling-text.html">Scrolling Text</a>
                    &nbsp;
                    <a href="">Pictures</a>
                    &nbsp;
                    <a href="animations.php">Animations</a>
                </ul>
            </nav>
        </header>
        
        <section>
            <h2>Pictures</h2>
            <h3>Hier kannst du Bilder auf dem Display anzeigen lassen.</h3>
            <form action="displayPicture.php" method="post">
                <label for="pictureFile">Datei:</label>
                <br>
                <select name="pictureFile">
                    <option value="">- Wähle Bild -
                    <?php 
                        $dirPath = dir('uploads/pictures');
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
                <input type="text" id="duration" name="duration" value="10"><br><br>
                <input type="submit" value="Senden">
            </form>
        </section>
        <br>
        <br>
        <section>
            <label for="pictureFile">Lade dein eigenes Bild hoch:</label>
            <br>
            <form action="uploadPicture.php" method="post" enctype="multipart/form-data">
                <input type="file" name="fileToUpload" id="fileToUpload">
                <input type="submit" value="Upload" name="submit">
            </form>
            <br>
        </section>
        <br>
        <footer>
            <p>
                All Rights Reserved. Copyright 2021 by Cedric Hoechli.
            </p>
        </footer
    </body>
</html>  