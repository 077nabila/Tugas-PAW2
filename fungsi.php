<!DOCTYPE html>
<html lang="en">
<head>
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
