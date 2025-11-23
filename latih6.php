<!DOCTYPE HTML>
<html>
<head>
    <title>Belajar Struktur Keputusan IF ELSEIF ELSE</title>
</head>
<body>
    <?php
        $teman = "andi";
        if($teman == "Budi"){
            echo "Budi adalah teman saya";
        } elseif ($teman == "andi"){
            echo "Andi adalah teman saya";
        } elseif ($teman == "bejo"){
            // Perbaikan: Variabel harusnya $teman == "bejo" bukan $teman1. 
            echo "Saya tidak punya teman";
        } else {
            echo "Saya Juga";
        }
    ?>

    <p>NIM: A12.2024.07289 - Nama: Zyda Aka Hafiyan</p>
</body>
</html>