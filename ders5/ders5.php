<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h3> Php diziler devamı</h3>    

<?php



$isimler = array();

$isimler[]="Ahmet";
$isimler[]="Mehmet";
$isimler[]="Ayşe";
$isimler[]="Nur";



echo "<pre>";
print_r($isimler);
echo "</pre>";



$isimler2 = array();

$isimler2["isim1"]="Kerim";
$isimler2["isim2"]="Hatice";
$isimler2["isim3"]="Burcu";
$isimler2[]="Hüseyin";
$isimler2[]="Gülcan";


echo "<pre>";
print_r($isimler2);
echo "</pre>";



$ogrencidetay=array(
    "id"        =>  1,
    "adi"       => "Nurullah",
    "soyadi"    => "Yıldız",
    "bolum"     => "Bilgisayar",
    "yas"       => "25",

    "dersler" => array(
        "ders1" => "Veri Tabanı",
        "ders2" => "Web Programlama",
        "ders3" => "Mobil Programlama"
    ),

    "sinif"     => "2"


);

echo "<pre>";
print_r($ogrencidetay);
echo "</pre>";


echo "Öğrencinin Dersleri : <br>";
echo $ogrencidetay["dersler"]["ders2"];


echo "<h3> Diziyi Foreach ile yazdırma</h3>";

foreach($ogrencidetay as $key => $value){
    echo "$key - $value . <br>";
}



?>

<h3> Koşul İfadeleri</h3>





<?php


/*
if(condition){
   #code
}else if(condition){
   #code 
}else if(condition){
   #code 
}else if(condition){
   #code 
}else{
   #code 
}
*/



$sayi1 = 123;
$sayi2 = 345;
$metin = "adü";

if ($sayi1) {
    echo "<br>if bloğu çalıştı : $sayi1";
}else {
    echo "<br>else bloğu çalıştı : $sayi1";
}

if (!$sayi1) {
    echo "<br>if bloğu çalıştı : $sayi1";
}else {
    echo "<br>else bloğu çalıştı : $sayi1";
}





?>



</body>
</html>