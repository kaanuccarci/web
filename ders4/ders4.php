<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ders-4</title>
</head>

<body>

    <h3>Php'de Diziler</h3>
    <ol>
        <li>Dizi oluşturmak için array() fonksiyonu veya [] kullanılabilir.</li>
        <li>Dizi içerisinde farklı türden birçok değer bulunabilir.(int, string, double, obje) (1,2,3,"Ali","Ahmet","125,20") </li>
        <li>"echo $diziAdi" ile dizi içeriği ekrana yazdırılamaz. Array to String Conversion hatası verir. Fakat dizinin örneğin 3 indisine sahip elemanı elemanı "echo $diziAdi[3]" şeklinde yazdırılabilir.</li>
        <li>Dizinin içerisindeki string ifadeler çift tırnak("") içerisine yazılır.</li>
        <li>Dizinin içerisindeki int ifadeler direk yazılabilir.</li>
        <li>Dizinin elemanları birbirinden virgül(,) ile ayrılır.</li>
        <li>Dizi içerisinde indisler varsayılan olarak 0'dan başlar.</li>
        <li>Diziler içerisinde diziler tanımlanabilir.</li>
    </ol>

    

    <?php



    $tel="+90-534-202-6807";
    $yenitel= str_split($tel,3);

    foreach($yenitel as $parca){
        echo $parca;
    }
  



echo "</br></br></br></br></br>";


        
        $dizi1=array(1,2,3,4,"kemal","aarıca",130.5);
        $dizi2=[1,"kaan","mine",227.5];

        echo "<pre>";
        print_r($dizi1);
        echo "</pre>";

        echo "<pre>";
        print_r($dizi2);
        echo "</pre>";

        echo "Dizinin 5. elemanı: ". $dizi1[5];
        echo "<br>Dizinin 5. elemanı: ". gettype($dizi1[5]);
        
        echo "</br></br>";

        echo "<br>Dizinin 5. elemanı: ". $dizi1[0];
        echo "<br>Dizinin 5. elemanı: ". $dizi1[1];
        echo "<br>Dizinin 5. elemanı: ". $dizi1[2];
        echo "<br>Dizinin 5. elemanı: ". $dizi1[3];
        echo "<br>Dizinin 5. elemanı: ". $dizi1[4];
        echo "<br>Dizinin 5. elemanı: ". $dizi1[5];
        echo "<br>Dizinin 5. elemanı: ". $dizi1[6];
        



        echo "<h3> Diziyi Foreach ile yazdırma</h3>";

        foreach($dizi1 as $value){
            echo $value . "<br>";
        }

        echo "<h3> Diziyi Foreach ile yazdırma</h3>";

        foreach($dizi1 as $key => $value){
            echo "$key - $value . <br>";
        }



        echo "<h3> Diziyi For ile yazdırma</h3>";

        for ($i=0; $i < count($dizi1) ; $i++) { 
            
            echo $dizi1[$i] . "<br>";
        }


        echo "</br></br>";

        $sayilar= array(1,2,3,4,5,6);

        $sayilar= array(
            array(1,3,5,7),
            array(2,4,6,8,10)
        );


            echo "<pre>";
            print_r($sayilar);
            echo "</pre>";




            echo "Sayılar dizisinin içindeki 2. dizinin 3. elemanı :" . $sayilar[0][3];


            echo "<br>-------------";

            $sayilar = array(
                "integer" => array(55,23,14,24),
                "double" => array(12.5,14.3,18.6,24.2)
            );




        echo "<br>Sayılar dizisinin içindeki 2. dizinin 3. elemanı :" . $sayilar["double"][3];
        echo "<br>Sayılar dizisinin içindeki 1. dizinin 3. elemanı :" . $sayilar["integer"][3];





            $bilgiler= array(
                "id" => "0",
                "adi" => "Kaan",
                "soyadi" => "Uçarcı",
                "gsm" => "553 652 15 31",
                "yas" => "19",

            );


            echo "<pre>";
            print_r($bilgiler);
            echo "</pre>";


            echo "$bilgiler[adi] $bilgiler[soyadi]  Hoşgeldiniz";


            $kullanıcılar=array(
                "kullanıcı1"  => array(
                "id" => "0",
                "adi" => "Kaan",
                "soyadi" => "Uçarcı",
                "gsm" => "553 652 15 31",
                "yas" => "19",
                ),
                "kullanıcı2"  => array(
                    "id" => "1",
                    "adi" => "Mine",
                    "soyadi" => "Adıgüzel",
                    "gsm" => "553 652 15 31",
                    "yas" => "19",
                    )
            )


    ?>









</body>

</html>