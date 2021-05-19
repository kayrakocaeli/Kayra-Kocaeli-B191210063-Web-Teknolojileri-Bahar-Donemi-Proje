<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale,maximum-scale=1">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <title>Kayra Kocaeli</title>
    <link rel="stylesheet" type="text/css" href="stil.css">


</head>

<body>
    <div class="container-fluid sayfam">

        <div class="nav_bar">
            <div class="logo"><a href="index.html"><img src="logo.svg"></a></div>
            <div class="menu">
                <ul>
                    <li><a href="index.html" class="btn btn-primary">Anasayfa</a></li>
                    <li><a href="ozgecmis.html" class="btn btn-primary">Özgeçmiş</a></li>
                    <li><a href="sehrim.html" class="btn btn-primary">Şehrim</a></li>
                    <li><a href="mirasimiz.html" class="btn btn-primary">Mirasımız</a></li>
                    <li><a href="ilgialanlari.html" class="btn btn-primary">İlgi Alanları</a></li>
                    <li><a href="iletisim.html" class="btn btn-primary">İletişim</a></li>
                    <li><a href="giris.php" class="btn btn-primary">Giriş Yap</a></li>
                </ul>
            </div>
            <div class="dropdown">
                <input type="image" src="dropdown.png" value="submit" width="50px">
                <div class="dropdown-child">
                    <a href="index.html" class="btn btn-primary">Anasayfa</a>
                    <a href="ozgecmis.html" class="btn btn-primary">Özgeçmiş</a>
                    <a href="sehrim.html" class="btn btn-primary">Şehrim</a>
                    <a href="mirasimiz.html" class="btn btn-primary">Mirasımız</a>
                    <a href="ilgialanlari.html" class="btn btn-primary">İlgi Alanları</a>
                    <a href="iletisim.html" class="btn btn-primary">İletişim</a>
                    <a href="giris.php" class="btn btn-primary">Giriş Yap</a>
                </div>
            </div>
        </div>


        <div class="giris_ekrani">


            <h1 class="font-italic">
                Giriş Ekranı
            </h1>
        </div>






        <main>

            <div class="login">

                <?php
                ob_start();
                include("kullanicilar.php");


                if (($_POST["email"] == $user) and ($_POST["password"] == $pass)) {
                    $_SESSION["giris"] = "true";
                    $_SESSION["user"] = $user;
                    $_SESSION["pass"] = $pass;

                    echo ("SİTEYE GİRİŞ YAPTINIZ HOŞGELDİNİZ !!");
                } else {
                    echo "Kullancı Adı veya Şifre Yanlış.<br>";
                    echo "!!!TEKRAR DENEYİN!!!<br>";        
                }
                ?>
                <div><a href="giris.php">Giriş sayfasına tekrar dönmek için tıklayınız.</a></div>
                <div><a href="index.html">Anamenüye dönmek için tıklayınız.</a></div>
                
            </div>

        </main>














    </div>
</body>

</html>