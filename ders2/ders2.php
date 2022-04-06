<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ders-2</title>
</head>
<body>
    <?php

    echo "<h4>Tırnak İşareti Arasındaki Farklar</h4>";
    
    $uni= "Adnan Menderes Üniversitesi";   
    echo "Adnan Menderes Üniversitesi";   
    echo "<br>";
    echo "Kazandığınız Üniversite: ". '$uni';
    echo "<br>";
    echo "Kazandığınız Üniversite: ". $uni;
    echo "<br>";
    echo "Kazandığınız Üniversite: ".  "$uni";
    echo "<br>";  
    echo "Kazandığınız Üniversite: $uni";
    
    echo "<hr><h4>Temel Matematiksel İşlemler</h4>";
    
    $sayi1=10;
    $sayi2=20;

    echo "<h4>Toplama İşlemi</h4>";

    echo '$sayi1 + $sayi2 = ' . $sayi1 + $sayi2;
    echo "<br>";
    echo "$sayi1 + $sayi2 = " . $sayi1 + $sayi2;
    echo "<br>";
    $sonuc = $sayi1+$sayi2;
    echo "$sayi1 + $sayi2 = $sonuc";


    echo "<h4>Çıkarma İşlemi</h4>";

    echo '$sayi1 - $sayi2 = ' . ($sayi1 - $sayi2);
    echo "<br>";
    echo "$sayi1 - $sayi2 = " . ($sayi1 - $sayi2);
    echo "<br>";
    $sonuc = $sayi1-$sayi2;
    echo "$sayi1 - $sayi2 = $sonuc";


    echo "<h4>Çarpma İşlemi</h4>";

    echo '$sayi1 * $sayi2 = ' . ($sayi1 * $sayi2);
    echo "<br>";
    echo "$sayi1 * $sayi2 = " . ($sayi1 * $sayi2);
    echo "<br>";
    $sonuc = $sayi1*$sayi2;
    echo "$sayi1 * $sayi2 = $sonuc";


    echo "<h4>Bölme İşlemi</h4>";

    echo '$sayi1 / $sayi2 = ' . ($sayi1 / $sayi2);
    echo "<br>";
    echo "$sayi1 / $sayi2 = " . ($sayi1 / $sayi2);
    echo "<br>";
    $sonuc = $sayi1/$sayi2;
    echo "$sayi1 / $sayi2 = $sonuc";

    echo "<h4>Üst Alma İşlemi(pow)</h4>";
    $x=3;
    $y="2";
    echo "Değişken Tipi: $y>>>" . gettype($x). "<br>"; 
    echo "$x<sup>$y</sup> = " . pow($x,$y);

    echo "<h4>Karekök Alma İşlemi(sqrt)</h4>";

    $x=25;
    $karekok=sqrt($x);
    echo "$x'in karekökü: $karekok";


    echo "<h4>Mutlak Değer Alma İşlemi(abs)</h4>";

    $x=(-4);

    $mulak=abs($x);
    echo " |$x|'in mutlak değeri: $mulak";



    echo "<h4>Taban Değişim İşlemi(base_convert(x,taban1,taban2))</h4>";
    echo "27 sayısının 2'lik tabandaki karşılığı: " . base_convert(27,10,2);
    $sayi=30;
    $taban=10;
    $yenitaban=2;
    echo "<br>";
    $sonuc=base_convert($sayi,$taban,$yenitaban);
    echo "($sayi)<sub>$taban</sub> : ($sonuc)<sub>$yenitaban</sub>";


    echo "<h4>Mod İşlemi(fmod(x,y))</h4>";
    $x=15;
    $y=4;
    $mod=fmod($x,$y);
    echo "$x mod $y =  $mod";
    echo "<br>";
    echo "$x Sayısı: ". ((fmod($x,2)==0)?"Çifttir. " : "Tektir");


    echo "<h4>Yuvarlama İşlemi(round(x,y))</h4>";
    $x=15.515;
    echo "<br>$x Bir Ondalık Basamak Yuvarlanması: " . round($x,1);
    echo "<br>$x Bir Ondalık Basamak Yuvarlanması: " . round($x,2);




    echo "<h4>Yuvarlama İşlemi(floor(x,y))</h4>";
    /* Her zaman en yakın alt TAM SAYI değerine yuvarlama yapar*/

    $x=15.315;
    echo "$x : " . floor($x);


    echo "<h4>Yuvarlama İşlemi(ceil(x,y))</h4>";
    /* Her zaman en yakın üst TAM SAYI değerine yuvarlama yapar*/

    $x=15.315;
    echo "$x : " . ceil($x);


    echo "<h4>Rastgele Sayı Üretme İşlemi(rand())</h4>";
    
    echo "10 ile 100 arasında rastgele değer =" . rand(10,100);
    echo "<br>";

    for($i=0; $i<10; $i++)
    {
        echo $i . " - " . rand(10,100) ;
        echo "<br>";
    }


    echo phpinfo();

    ?>

</body>
</html>