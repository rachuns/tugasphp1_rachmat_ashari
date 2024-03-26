<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>
    <style>
        .hover-effect {
            transition: transform 0.3s ease;
        }

        .hover-effect:hover {
            transform: scale(1.1);
        }
    </style>
</head>
<body bgcolor="#B7D3F2">
    <center>
        <h1>
            <font size="8" color="black" face="arial">
                PROFIL SAYA
            </font>
        </h1>
    </center>
    <img src="img/fotoku/rch.jpg" align="left" width="200" style="border-radius: 200px; margin-left: 40px; margin-right: 30px; margin-top: 150px;" class="hover-effect">
    <br>
    <fieldset>
        <legend>
            <font size="6" color="black" face="calibri">
                Tentang Saya
            </font>
        </legend>
        <p align="justify">
            Nama Saya Rachmat Ashari, Saya berasal dari Kota Cirebon. Pada saat ini saya berkuliah di kampus Universitas Catur Insan Cendekia pada fakultas Teknologi Informasi dan Jurusan Teknik Informatika yang sudah akan menginjak semester 6. Saya senang sekali bergabung pada kegiatan Studi Independent Bersertifikat karena ini dapat membuka jalan saya dan juga saya bisa mendapatkan teman baru.
        </p>
    </fieldset>
    <br><br>
    <?php
    $nama = "Rachmat Ashari";
    $ttl = "Cirebon, 19 Maret 2003";
    $tlp = "089657130464";
    $unv = "Universitas Catur Insan Cendekia";
    $fk = "Teknologi Informasi";
    $jrsn = "Teknik Informatika";
    $nim = "20210120030";
    $pendidikan =  array("SDN Kramat 3","SMPN 15 Cirebon","SMK Informatika Al - Irsyad Al - Islamiyyah Kota Cirebon","Universitas Catur Insan Cendekia Kota Cirebon");
    ?>
    <fieldset>
        <legend>
            <font size="6" color="black">
                <b>Data Diri</b>
            </font>
        </legend>
        <table>
            <tr>
                <td>Nama Lengkap</td>
                <td>: </td>
                <td><?= $nama ?></td>
            </tr>
            <tr>
                <td>Tempat,Tanggal Lahir</td>
                <td>: </td>
                <td><?= $ttl ?></td>
            </tr>
            <tr>
                <td>Telepon / Whatsapp </td>
                <td>:</td>
                <td><a href="https://api.whatsapp.com/send/?phone=%2B6289657130464&text&type=phone_number&app_absent=0" target="_blank"><?= $tlp ?></a></td>
            </tr>
            <tr>
                <td>Kampus </td>
                <td>:</td>
                <td><?= $unv ?></td>
            </tr>
            <tr>
                <td>Fakultas</td>
                <td>: </td>
                <td><?= $fk ?></td>
            </tr>
            <tr>
                <td>Jurusan </td>
                <td>:</td>
                <td><?= $jrsn ?></td>
            </tr>
            <tr>
                <td>NIM</td>
                <td>: </td>
                <td><?= $nim ?></td>
            </tr>
            <tr>
                <td>Pendidikan </td>
                <td>:</td>
                <td>
                    <?php foreach($pendidikan as $sekolah): ?>
                    <ul>
                        <li><?= $sekolah ?></li>
                    </ul>
                    <?php  endforeach;?>
            </td>
            </tr>
        </table>
    </fieldset>
</body>
</html>