<?php
    session_start();
    include("baglan.php");
    include("menu.php");

    if ($_SESSION["giris"] != sha1(md5("var")) || $_COOKIE["kullanici"] != "msb") {
        header("Location: cikis.php");
        exit; // Eğer giriş doğrulaması yapılmazsa, kodun devam etmesini önlemek için exit kullanın.
    }

    // İçerikleri güncelleme işlemi
    if ($_POST) {
        if (isset($_POST["baslik1"])) {
            $aciklama  = $_POST["baslik1"];
            $sorgu = $baglan->query("UPDATE baslik SET baslik1 = '$aciklama '");
        }

        if (isset($_POST["baslik2"])) {
            $aciklama  = $_POST["baslik2"];
            $sorgu = $baglan->query("UPDATE baslik SET baslik2 = '$aciklama '");
        }

        if (isset($_POST["baslik3"])) {
            $aciklama  = $_POST["baslik3"];
            $sorgu = $baglan->query("UPDATE baslik SET baslik3 = '$aciklama '");
        }

        if (isset($_POST["baslik4"])) {
            $aciklama  = $_POST["baslik4"];
            $sorgu = $baglan->query("UPDATE baslik SET baslik4 = '$aciklama '");
        }
        
        if (isset($_POST["tel"])) {
            $aciklama  = $_POST["tel"];
            $sorgu = $baglan->query("UPDATE baslik SET tel = '$aciklama '");
        }
        
    }
    

    // Mevcut içerikleri getirme işlemi
    $sorgu = $baglan->query("SELECT * FROM baslik");
    $satir = $sorgu->fetch_object();
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Yönetim Paneli Hakkımızda</title>
    <style>
        form{
            margin-bottom:65px;
        }
    </style>
</head>
<body style="text-align:center;">

    <h3>Kategori Değiştirme</h3>
    
    <form action="" method="post">
        <b>Kategori 1:</b><br><br>
        <textarea style="width:20%;height:60px;" name="baslik1"><?php echo $satir->baslik1; ?></textarea><br><br>
        <input type="submit" value="Kaydet">
    </form>

    <form action="" method="post">
        <b>Kategori 2:</b><br><br>
        <textarea style="width:20%;height:60px;" name="baslik2"><?php echo $satir->baslik2; ?></textarea><br><br>
        <input type="submit" value="Kaydet">
    </form>

    <form action="" method="post">
        <b>Kategori 3:</b><br><br>
        <textarea style="width:20%;height:60px;" name="baslik3"><?php echo $satir->baslik3; ?></textarea><br><br>
        <input type="submit" value="Kaydet">
    </form>

    <form action="" method="post">
        <b>Kategori 4:</b><br><br>
        <textarea style="width:20%;height:60px;" name="baslik4"><?php echo $satir->baslik4; ?></textarea><br><br>
        <input type="submit" value="Kaydet">
    </form>

    <form action="" method="post">
        <b>Telefon Numarası:</b><br><br>
        <textarea style="width:20%;height:60px;" name="tel"><?php echo $satir->tel; ?></textarea><br><br>
        <input type="submit" value="Kaydet">
    </form>
   
</body>
</html>