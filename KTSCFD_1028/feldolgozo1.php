<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title> feldolgozo1</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {   
            echo "<h2>HTML urlap</h2>";

    // Urlapadatok beolvasasa
    $nev = htmlspecialchard(trim($_POST["nev"] ?? ""));
    $pin = htmlspecialchard(trim($_POST["pin"] ?? ""));
    $fav_fruit =  htmlspecialchard(trim($_POST["fav_fruit"] ?? "nincs megadva"));
    $age =  htmlspecialchard(trim($_POST["age"] ??  "nincs megadva"));
    $feet_size =  htmlspecialchard(trim($_POST["feet-size"] ?? "nincs megadva"));
    $confidence =  htmlspecialchard(trim($_POST["confidence"] ?? "nincs megadva"));

    //Egyszeru validacio szerveroldalon
    $hibak= [];
    if (!preg_match("/^[A-ZAEIOOOUUUa-zaeioouuu ]{4,]$/u", $nev)) {
        $hibak[] = "A nev formatuma hibas.";
    }

    if (!preg_match("/^[0-9]{4}$/", $pin)) {
        $hibak[] = "A PIN kod 4 szamjegyubol kell alljon.";
    }

    //Hibak megjelenitese vagy adatok kiirasa
    if (count($hibak) > 0) {
        echo "<div class='error'><p><strong>Hiba tortent:</strong></p><ul>";
        foreach ($hibak as $hiba) {
            echo "<li>$hiba</li>";
        }
        echo "</ul></div>";
    } else {

    //Adatok tablazatos megjelenitese
        echo "<table>";
            echo "<tr><td>Nev:</td><td>$nev</td></tr>";
            echo "<tr><td>PIN Kod:</td><td>$pin</td></tr>";
            echo "<tr><td>Kedvenc gyumolcs:</td><td>$fav_fruit</td></tr>";
            echo "<tr><td>eletkor:</td><td>$age</td></tr>";
            echo "<tr><td>Labmeret:</td><td>$feet_size</td></tr>";
            echo "<tr><td>Onbizalom:</td><td>$confidence / 100</td></tr>";
        echo "</table>";

    // ---Fajbla mentes---
        $sor = date("Y-m-d H:i:s") . " | " . 
                "Nev: $nev | " . 
                "PIN: $pin | " . 
                "Kedvenc gyumolcs: $fav_fruit | " . 
                "Eletkor: $age | " . 
                "Labmeret: $feet_size | " . 
                "Onbizalom: $confidence " . PHP_EOL;

        $fajl = "_adatok.txt";

        if (file_put_contents($fajl, $sor, FILE_APPEND | LOCK_EX)) {
            echo "<p class='succes'> Az adatok sikeresen elmentve a 
            <strong>$fajl</strong> fajlba.</p>";
            } else {
            echo "<p class='error'> Hiba tortent az adatok mentesekor!</p>";
            }

        }

    } else {
        echo ""
    }


    
</body>
</html>