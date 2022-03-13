<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <?php
    // membuat fungsi php
    function pdkt($nama, $salam){
    echo $salam.", ";
    echo "Perkenalkan, nama saya ".$nama."<br/>";
    echo "Saya kuliah di Universitas Trunojoyo Madura<br/>";
    echo "Prodi teknik informatika<br/>";
    }

    pdkt("Nabila Regitasyari Irmawan", "Assalamualaikum Warahmatullahi Wabarakatuh");

    echo "<hr>";

    $kota = "Nganjuk";
    $kecamatan = "Tanjunganom";
    pdkt($kota, $kecamatan);

    echo "<hr>";
    $sister = "Cindy Ramadhani Irmawan";
    pdkt($sister);
    ?>

    
</body>
</html>
