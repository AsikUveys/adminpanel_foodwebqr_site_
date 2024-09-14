<?php
    session_start();
    include("baglan.php");
    include("menu.php");

    if ($_SESSION["giris"] != sha1(md5("var")) || $_COOKIE["kullanici"] != "msb") {
        header("Location: cikis.php");
    }

    
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Yönetim Paneli Ana Sayfa</title>
</head>
<body>

    <h2 style="text-align:center;"> Menüden Seçim Yapınız </h2>

</body>
</html>