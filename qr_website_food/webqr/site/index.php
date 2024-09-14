<?php
    include("yonetim/baglan.php");
?>

<html>
    <head>
        <title>FoodWeb</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="images/food.png" type="image/x-icon" />
        <script src="https://kit.fontawesome.com/cdecab624a.js" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">     
    </head>

    <body>
        <header>
            <div id="div_logo">
                <a href="index.php"><img id="logo" src="images/food.png" alt="food"></a> 
            </div>

            <div id="text_link">
                <a href="#anayemek"> <?php $sorgu = $baglan->query("select * from baslik"); $satir = $sorgu->fetch_object(); echo $satir->baslik1;?></a>
                <a href="#arasicak"><?php $sorgu = $baglan->query("select * from baslik"); $satir = $sorgu->fetch_object(); echo $satir->baslik2;?></a>
                <a href="#tatli"><?php $sorgu = $baglan->query("select * from baslik"); $satir = $sorgu->fetch_object(); echo $satir->baslik3;?></a>
                <a href="#icecek"><?php $sorgu = $baglan->query("select * from baslik"); $satir = $sorgu->fetch_object(); echo $satir->baslik4;?></a>
            </div>    
        </header>

        <main>
            <h4 id="anayemek"> 
                <?php
                    $sorgu = $baglan->query("select * from baslik");
                    $satir = $sorgu->fetch_object();
                    echo $satir->baslik1;
                ?>
            </h4>
            <div id="card">
                <div id="maincard">
                    <div class="card" style="width: 10rem;">
                        <img src="images/iskender.jpeg" class="card-img-top" alt="iskender">
                        <div class="card-body">
                            <?php
                            $sorgu = $baglan->query("select * from yemek");
                            $satir = $sorgu->fetch_object();
                            echo $satir->yemek1;
                            ?>
                        </div>
                    </div>           
                </div>
                <div id="maincard2">
                    <div class="card" style="width: 10rem;">
                        <img src="images/kofte.jpeg" class="card-img-top" alt="kofte">
                        <div class="card-body">
                            <?php
                            $sorgu = $baglan->query("select * from yemek");
                            $satir = $sorgu->fetch_object();
                            echo $satir->yemek2;
                            ?>
                        </div>
                    </div>           
                </div>
            </div>
            <h4 id="arasicak">
                <?php
                    $sorgu = $baglan->query("select * from baslik");
                    $satir = $sorgu->fetch_object();
                    echo $satir->baslik2;
                ?>
            </h4>
            <div id="card">
                <div id="maincard">
                    <div class="card" style="width: 10rem;">
                        <img src="images/patates.jpeg" class="card-img-top" alt="patates">
                        <div class="card-body">
                            <?php
                            $sorgu = $baglan->query("select * from yemek");
                            $satir = $sorgu->fetch_object();
                            echo $satir->yemek3;
                            ?>
                        </div>
                    </div>           
                </div>
                <div id="maincard2">
                    <div class="card" style="width: 10rem;">
                        <img src="images/icli.jpeg" class="card-img-top" alt="icli">
                        <div class="card-body">
                            <?php
                            $sorgu = $baglan->query("select * from yemek");
                            $satir = $sorgu->fetch_object();
                            echo $satir->yemek4;
                            ?>
                        </div>
                    </div>           
                </div>
            </div>
            <h4 id="tatli">
                <?php
                    $sorgu = $baglan->query("select * from baslik");
                    $satir = $sorgu->fetch_object();
                    echo $satir->baslik3;
                ?>
            </h4>
            <div id="card">
                <div id="maincard">
                    <div class="card" style="width: 10rem;">
                        <img src="images/baklava.jpeg" class="card-img-top" alt="baklava">
                        <div class="card-body">
                            <?php
                            $sorgu = $baglan->query("select * from yemek");
                            $satir = $sorgu->fetch_object();
                            echo $satir->yemek5;
                            ?>
                        </div>
                    </div>           
                </div>
                <div id="maincard2">
                    <div class="card" style="width: 10rem;">
                        <img src="images/kunefe.jpeg" class="card-img-top" alt="kunefe">
                        <div class="card-body">
                            <?php
                            $sorgu = $baglan->query("select * from yemek");
                            $satir = $sorgu->fetch_object();
                            echo $satir->yemek6;
                            ?>
                        </div>
                    </div>           
                </div>
            </div>
            <h4 id="icecek">
                <?php
                    $sorgu = $baglan->query("select * from baslik");
                    $satir = $sorgu->fetch_object();
                    echo $satir->baslik4;
                ?>
            </h4>
            <div id="card">
                <div id="maincard">
                    <div class="card" style="width: 10rem;">
                        <img src="images/ayran.jpeg" class="card-img-top" alt="ayran">
                        <div class="card-body">
                            <?php
                            $sorgu = $baglan->query("select * from yemek");
                            $satir = $sorgu->fetch_object();
                            echo $satir->yemek7;
                            ?>
                        </div>
                    </div>           
                </div>
                <div id="maincard2">
                    <div class="card" style="width: 10rem;">
                        <img src="images/cay.jpeg" class="card-img-top" alt="cay">
                        <div class="card-body">
                            <?php
                            $sorgu = $baglan->query("select * from yemek");
                            $satir = $sorgu->fetch_object();
                            echo $satir->yemek8;
                            ?>
                        </div>
                    </div>           
                </div>
            </div>
        </main>

        <footer>
            <div id="sosyal">
                <a href="https://www.instagram.com/" target="_blank"><img id="i" src="images/i.png" alt="instagram"/></a>
                <a href="https://tr-tr.facebook.com/" target="_blank"><img id="f" src="images/f.png" alt="facebook"/></a>
                <a href="https://web.whatsapp.com" target="_blank"><img id="w" src="images/w.png" alt="whatsapp"/></a>
            </div>

            <div id="info_text">
            <?php
                $sorgu = $baglan->query("select * from baslik");
                $satir = $sorgu->fetch_object();
                echo $satir->tel;
            ?>
            </div>
        </footer>

        <script type="text/javascript" src="jquery-3.3.1.min.js"></script> 
        <script type="text/javascript" src="poper.min.js"></script> 
            <script type="text/javascript" src="bootstrap.min.js"></script>

    </body>
</html>