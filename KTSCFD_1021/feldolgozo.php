<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>feldolgozo</title>
</head>
<body>
    <?php

    if (isset($_POST))
        {

        echo "<h2>HTML urlap</h2>";

        $nev = $_POST["nev"];
        $pin = $_POST["pin"];
        $fav_fruit = $_POST["fav_fruit"];
        $age = $_POST["age"];
        $feet_size = $_POST["feet_size"];
        $confidence = $_POST["confidence"];

        echo "<p><strong>Nev:</strong> " . $nev . "</p>";
        echo "<p><strong>PIN kod:</strong> " . $pin . "</p>";
        echo "<p><strong>Kedvenc gyumolcs:</strong> " . $fav_fruit . "</p>";
        echo "<p><strong>Kor:</strong> " . $age . "</p>";
        echo "<p><strong>Labletméret:</strong> " . $feet_size . "</p>";
        echo "<p><strong>Magabiztossag:</strong> " . $confidence . "</p>";

        } else {
            echo "<h2><strong>Urlap nem lett bekuldve!</strong></h2>";
        
        }
     

    ?>



    <a href="ktscfd_urlap.html"><strong>Vissza az urlaphoz</strong></a>
</body>
</html>