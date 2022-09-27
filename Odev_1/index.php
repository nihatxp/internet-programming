<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Web Programcılığı Ödev 1</title>
    <style>
        *{
            padding: 0;
            overflow: hidden;
        }
        html, body {
            height: 100%;
        }
        header{
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            padding: 0 100px;
            background-color: #70899f;
            margin: auto;
            width: max-content;
            max-width: 100%;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }
        .container{
            padding: 0 15px 0 15px;
            background-color: #70899f;
            margin: auto;
            width: max-content;
            max-width: 100%;
            border-radius: 5px;
        }
        input{
            font-size: 10pt;
            padding: 12px 20px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-family: monospace;
        }
        label{
            margin: 5px;
            font-family: monospace;
            font-size: large;
        }
        #topla{
            background-color: #282a57;
            color: white;
            padding: 2px 4px;
            font-size: 16px;
            border-radius: 5px;
            height: 50px;
            border: 2px solid black;
        }
        #topla:active{
            background-color: #10123d;
        }
        .sonuc{
            font-family: monospace;
            font-size: 12pt;
            color: black;
            background-color: #70899f;
            width: max-content;
            padding: 10px 150px;
            margin: 20px auto;
            border-radius: 10px;
        }
        @media only screen and (max-width: 650px) {
            label{
                display: none;
            }
        }
    </style>
</head>
<body>
    <header>Sayı Topla</header>
    <div class="container">
        <form method="post" action="">
            <label for="">Değer 1</label>
                <input type="number" name="deger1" placeholder="Değer 1" required>
            <label for="">Değer 2</label>
                <input type="number" name="deger2" placeholder="Değer 2" required>
            <input type="submit" value="Topla" id="topla"/>
        </form>
    </div>
<?php
if(isset($_POST['deger1'])){
    $deger1 = $_POST['deger1'];
if(isset($_POST['deger2']))
    $deger2 = $_POST['deger2'];
    echo '<div class="sonuc">'.'Toplam: '.($deger1+$deger2).'</div>';  
}    
?>
</body>
</html>