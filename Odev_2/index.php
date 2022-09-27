<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Web Programcılığı Ödev 2</title>
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
        .container select{
            color: #131843;
            font-size: 12pt;
            font-weight: bold;
            padding: 8px 24px 8px 10px;
            border-color: black;
            background-color: #13184365;
        }
        input, select{
            width: 100%;
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
        .container select:active{
            color: black;
        }
        #hesapla{
            background-color: #282a57;
            color: white;
            padding: 2px 4px;
            font-size: 16px;
            border-radius: 5px;
            height: 50px;
            border: 2px solid black;
        }
        #hesapla:active{
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
        .hata{
            font-family: monospace;
            font-size: 12pt;
            color: white;
            background-color: red;
            width: max-content;
            padding: 10px 150px;
            margin: 20px auto;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <header>Hesap Makinesi</header>
    <div class="container">
    <form method="post" action="index.php">
    <label for="">Değer 1</label>
    <input type="number" name="deger1" placeholder="Değer 1" required>
        <select name="islem">
        <option value="topla">Topla</option>
        <option value="cik">Çıkar</option>
        <option value="carp">Çarp</option>
        <option value="bol">Böl</option>
        </select>
        <label for="">Değer 2</label>
        <input type="number" name="deger2" placeholder="Değer 2" required>
        <input type="submit" value="Hesapla" id="hesapla"/>
        </form>
    </div>
<?php
if(isset($_POST['islem'])){
    $islem = $_POST['islem'];
if(isset($_POST['deger1']))
    $deger1 = $_POST['deger1'];
if(isset($_POST['deger2']))
    $deger2 = $_POST['deger2'];
        switch ($islem) {
            case 'topla':
                echo '<div class="sonuc">'.'Sonuç: '.($deger1+$deger2).'</div>';
                break;
            case 'cik':
                echo '<div class="sonuc">'.'Sonuç: '.($deger1-$deger2).'</div>';
                break;
    
            case 'carp':
                echo '<div class="sonuc">'.'Sonuç: '.($deger1*$deger2).'</div>';
                break;
    
            case 'bol':
                if($deger2==0){
                    echo '<div class="hata">'.'Sıfıra Bölemezsiniz'.'</div>';
                }
                else{
                    echo '<div class="sonuc">'.'Sonuç: '.($deger1/$deger2).'</div>';
                }
                break;
            default:
                echo '<div class="hata">'.'Sonuç: '.($deger1/$deger2).'</div>';
                break;
        }
    }
?>
</body>
</html>