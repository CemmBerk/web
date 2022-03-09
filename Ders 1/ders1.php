<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Ders-1</title>
</head>
<body>

<!-- Html Yorum Satırı -->  

<?php
/* Açıklama Satırı Bloğu 
(Çoklu satır kullanılabilir) Kısayol: Shift + Alt + a
 */

 // Tek satır açıklama için kullanılır.

/* Kullanılan Komut:  
    echo: Ekrana yazdırma işlemi yapar.
            Komut içerisinde html etiketleri kullanılabilir.
            Çift veya tek tırnak kullanılabilir.
            Çift tırnak ile kullanıldığında içerisindeki değişkenlerin içeriğini ekrana yazar.
            Nokta operatörü ile birleştirme işlemi yapılabilir.
            Ters Slash (\) kaçış karakteridir. Özel ifadelerden önce kullanılır.
*/
echo"<h3>Adnan Menderes Üniversitesi</h3>";
echo "<h4>Aydın Meslek Yüksekokulu</h4>";
echo "Bilgisayar Mühendisliği " . "Aymes";
echo "<br>Bilgisayar Mühendisliği " ."<br>" . "<br>Aymes";

echo"<hr> <h4> Değişken Tanımlama </h4>";

echo"<ol>
        <li>Değişken isimleri $ ile başlar. </li>
        <li>Değişken isimleri sayısal ifadelerle başlayamaz.</li>
        <li>Değişken isimlerinde boşluk kullanılmaz. İki kelime birinci_sinif  BirinciSinif birinci-sinif örnekleri kullanılabilir.</li>
        <li>Değişken isimleri küçük-büyük harfe duyarlıdır. \$sayi != \$Sayi </li>
        <li>Değişken ismi, değişkenin taşıdığı içeriği ifade etmeli. </li>
        <li>Değişken içeriğinde metinsel ifade varsa çift tırnak (\") veya tek tırnak (') kullanılabilir.</li>
        <li>Değişken içeriğinde sayısal bir ifade varsa tırnak kullanmak gerekli değildir.</li>
        <li>Değişken içerikleri ekrana echo komutu ile yazdırılabilir.</li>

</ol>";
echo"<hr> <h4> Değişken Tanımlama Örenkleri </h4>";
$isim = "Ahmet";
$soyisim = "Erimez";
$gsm = "1234567890";

echo $isim."<br>";
echo "$isim $soyisim $gsm";

/* Uygulama:
Üniversite-myo-ad-soyad-numara değişkenlerini tanımlayınız.
Bu değişkenlerin içerikleri tablo veya form içeriğinde ekrana yazdırınız. */

echo"<hr> <h4> Uygulama </h4>";
$universite = "Adü";
$myo = "Aymes";
$ad = "Nazlı";
$soyad = "Gül";
$numara = "123";
















?>

<form action="">
    <label for="universite">Üni: <label>
    <input type="text" name="" value="<?php echo $uni; ?>" id="universite" disabled><br>

    <label for="myo">Myo: <label>
    <input type="text" name="" value="<?php echo $myo; ?>" id="myo" disabled><br>

    <label for="ad">Öğrenci Adı: <label>
    <input type="text" name="" value="<?php echo $ad; ?>" id="ad" disabled><br>

    <label for="soyad">Öğrenci Soyadı: <label>
    <input type="text" name="" value="<?php echo $soyad; ?>" id="numara" disabled><br>

    <label for="numara">Öğrenci No: <label>
    <input type="text" name="" value="<?php echo $numara; ?>" id="numara" disabled><br>
</form>































 </body>
</html>