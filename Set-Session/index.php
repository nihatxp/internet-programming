<?php
    session_start();
    $message = "";
    if(isset($_SESSION["GirisDurumu"])){
        if( $_SESSION["GirisDurumu"] == 1){
            $message=basariliGiris();
        } else{
            $message = "";
        }
    }

    function basariliGiris(){
        ob_start();
        include_once('ozelmesaj.php'); 

        $message = "<div class='giris'> Giris Basarili </div>";
        return $message;
    }

    function hataliGiris(){
        $message = "<div class='hata'> Hatali Giris </div>";
        return $message;
    }

    if(isset($_POST['kullanici_adi']) && ($_POST['sifre'])){
        $kullaniciAdi = "nihatxp";
        $sifre = "admin";

        if ($_POST['kullanici_adi'] == $kullaniciAdi && $_POST['sifre'] == $sifre){
            $message = basariliGiris();
            $_SESSION["GirisDurumu"] = 1;
        }else{
            $message = hataliGiris();
            $_SESSION["GirisDurumu"] = 0;
            ob_end_clean();
        }
    }
?>

<html lang="tr">
<head>
    <meta charset="UTF-8">
    <style>
        *{
            padding: 0;
            overflow: hidden;
        }
        html, body {
            height: 100%;
        }
        form{
            width: max-content;
            margin: auto;
        }
        input{
            display: block;
            font-size: 10pt;
            width: 600px;
            padding: 12px 20px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-family: monospace;
        }
        .hata , .ozelmesaj , .giris{
            font-family: monospace;
            font-size: 12pt;
            color: black;
            width: max-content;
            padding: 10px 150px;
            margin: 20px auto;
            border-radius: 10px;
        }
        .giris{
            background-color: green;
        }
        .hata{
            background-color: red;
        }
        .ozelmesaj{
            background-color: orange;
            padding: 10px 250px;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="kullanici_adi" placeholder="Kullanıcı Adı -- nihatxp" />
        <input type="password" name="sifre" placeholder="Şifre -- admin" />
        <input type="submit" value="Giris">
    </form>
    <?php
        echo $message;
    ?>
</body>
</html>






