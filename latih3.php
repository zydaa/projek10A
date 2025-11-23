<!DOCTYPE HTML>
<html>
<head>
    <title>Test Penyisipan PHP Pada HTML</title>
</head>
<body>
    Kapal Asing, Silakan identifikasikan diri Anda! <br>
    <?php
        // Berikut ini adalah inisiasi beberapa variabel
        $namad = "Bejo";
        $namat = "Noto";
        $namab = "Negoro";
    ?>
    <br>
    <b>Ini adalah kapal Federasi Planet USS Enterprise.</b><br>
    <?php
        // Perbaikan: Menggunakan operator titik (.) untuk menggabungkan string dan variabel.
        // print hanya menerima 1 argumen, sehingga harus digabungkan dulu.
        print("Saya ".$namad.", ".$namat.", ".$namab.", kapten kapal.</b><br>");

        // Baris ini tidak ada di soal asli tapi ditambahkan agar output lebih jelas
        print("Nama lengkap: ".$namad.$namat.$namab."<br>"); 
        
        echo "<br>";
        
        // Perbaikan: Menggunakan koma (,) di echo. Echo bisa menerima multiple argument dipisahkan koma, 
        // tapi string literal dan variabel harus dipisahkan dengan benar.
        echo "Saya ", $namad, " ", $namat, " ", $namab;
    ?>

    <p>NIM: A12.2024.07289 - Nama: Zyda Azka Hafiyan</p>
</body>
</html>