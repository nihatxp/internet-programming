<?php

/* echo rand(1,2); //1 ve 2 dahil */

//print_r(); //Diziyi Ekrana Yazar 

//var_dump(); //Diziyi Ekrana Ayrintili Yazar

//count(); //icindeki verinin uzunlugunu yazdirir

$sehirler = ["Izmir", "Bursa", "Kutahya", "Antalya","Kocaeli","Manisa","Trabzon"];

for($i=0; $i<count($sehirler); $i++){
    echo $sehirler[$i];
    echo "<br />";
}

echo "<hr />";
$i=0;
while($i<count($sehirler)){
    echo $sehirler[$i];
    echo "<br />";
    $i++;
}

echo "<hr />";
echo $sehirler[count($sehirler)-3];


?>