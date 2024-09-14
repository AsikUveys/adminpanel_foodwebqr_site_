<?php
    session_start();
    include("baglan.php");
    include("menu.php");

    if ($_SESSION["giris"] != sha1(md5("var")) || $_COOKIE["kullanici"] != "msb") {
        header("Location: cikis.php");
    }

    if ($_POST) {
        if (isset($_POST["yemek1"])) {
            $aciklama = $_POST["yemek1"];
            $sorgu = $baglan->query("UPDATE yemek SET yemek1 = '$aciklama'");
        }

        if (isset($_POST["yemek2"])) {
            $aciklama = $_POST["yemek2"];
            $sorgu = $baglan->query("UPDATE yemek SET yemek2 = '$aciklama'");
        }

        if (isset($_POST["yemek3"])) {
            $aciklama = $_POST["yemek3"];
            $sorgu = $baglan->query("UPDATE yemek SET yemek3 = '$aciklama'");
        }

        if (isset($_POST["yemek4"])) {
            $aciklama = $_POST["yemek4"];
            $sorgu = $baglan->query("UPDATE yemek SET yemek4 = '$aciklama'");
        }

        if (isset($_POST["yemek5"])) {
            $aciklama = $_POST["yemek5"];
            $sorgu = $baglan->query("UPDATE yemek SET yemek5 = '$aciklama'");
        }
        
        if (isset($_POST["yemek6"])) {
            $aciklama = $_POST["yemek6"];
            $sorgu = $baglan->query("UPDATE yemek SET yemek6 = '$aciklama'");
        }
        
        if (isset($_POST["yemek7"])) {
            $aciklama = $_POST["yemek7"];
            $sorgu = $baglan->query("UPDATE yemek SET yemek7 = '$aciklama'");
        }
        
        if (isset($_POST["yemek8"])) {
            $aciklama = $_POST["yemek8"];
            $sorgu = $baglan->query("UPDATE yemek SET yemek8 = '$aciklama'");
        }
        
    }

    $sorgu = $baglan->query("select * from yemek");
    $satir = $sorgu->fetch_object();

?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Yönetim Paneli Hakkımızda</title>
</head>
<br><br><br>
<body style="text-align:center;">

    <form action="" method="post">
        <b>Yemek 1:</b><br><br>
        <textarea style="width:30%;height:100px;" name="yemek1"><?php echo $satir->yemek1; ?></textarea><br><br>
        <input type="submit" value="Kaydet">
    </form>
    <br><br>
    <form action="" method="post">
        <b>Yemek 2:</b><br><br>
        <textarea style="width:30%;height:100px;" name="yemek2"><?php echo $satir->yemek2; ?></textarea><br><br>
        <input type="submit" value="Kaydet">
    </form>
    <br><br>
    <form action="" method="post">
        <b>Yemek 3:</b><br><br>
        <textarea style="width:30%;height:100px;" name="yemek3"><?php echo $satir->yemek3; ?></textarea><br><br>
        <input type="submit" value="Kaydet">
    </form>
    <br><br>
    <form action="" method="post">
        <b>Yemek 4:</b><br><br>
        <textarea style="width:30%;height:100px;" name="yemek4"><?php echo $satir->yemek4; ?></textarea><br><br>
        <input type="submit" value="Kaydet">
    </form>
    <br><br>
    <form action="" method="post">
        <b>Yemek 5:</b><br><br>
        <textarea style="width:30%;height:100px;" name="yemek5"><?php echo $satir->yemek5; ?></textarea><br><br>
        <input type="submit" value="Kaydet">
    </form>
    <br><br>
    <form action="" method="post">
        <b>Yemek 6:</b><br><br>
        <textarea style="width:30%;height:100px;" name="yemek6"><?php echo $satir->yemek6; ?></textarea><br><br>
        <input type="submit" value="Kaydet">
    </form>
    <br><br>
    <form action="" method="post">
        <b>Yemek 7:</b><br><br>
        <textarea style="width:30%;height:100px;" name="yemek7"><?php echo $satir->yemek7; ?></textarea><br><br>
        <input type="submit" value="Kaydet">
    </form>
    <br><br>
    <form action="" method="post">
        <b>Yemek 8:</b><br><br>
        <textarea style="width:30%;height:100px;" name="yemek8"><?php echo $satir->yemek8; ?></textarea><br><br>
        <input type="submit" value="Kaydet">
    </form>

</body>
</html>