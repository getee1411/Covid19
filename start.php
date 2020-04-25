<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CHECK UP</title>

    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
</head>
<body>
    <nav class="navbar">
        <a href="#" class="logo">SELF CHECK UP</a>
        <ul class="nav">
            <li><a href="kembali.php" class="btn">KEMBALI</a></li>
        </ul>
    </nav>
    <form action="" method="post">
        <div class="container">
            <div class="data">
                <h2>DATA DIRI</h2>
                <div class="input-div">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div>
                        <h5>Nama</h5>
                        <input name="nama" type="text" class="input">
                    </div>
                </div>
                <div class="input-div">
                    <div class="i">
                        <i class="fas fa-calendar-day"></i>
                    </div>
                    <div>
                        <h5>Umur</h5>
                        <input name="umur" type="text" class="input">
                    </div>
                </div>
                <div class="input-div">
                    <div class="i">
                        <i class="fas fa-home"></i>
                    </div>
                    <div>
                        <h5>Alamat</h5>
                        <input name="alamat" type="text" class="input">
                    </div>
                </div>
                <div class="input-div">
                    <div class="i">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <div>
                        <h5>Pekerjaan</h5>
                        <input name="pekerjaan" type="text" class="input">
                    </div>
                </div>
                <div class="input-div">
                    <div class="i">
                        <i class="fas fa-phone"></i>
                    </div>
                    <div>
                        <h5>Nomor Telepon</h5>
                        <input name="telp" type="text" class="input">
                    </div>
                </div>
            </div>
            <div class="report">
                <h3>SUHU TUBUH</h3>
                <div class="input-divv">
                    <p>Suhu tubuh saat ini &ensp; :</p>
                    <input name="suhu" class="input" type="number">
                </div>
            </div>
            <div class="report">
            <h5>Apakah Anda mengalami salah satu dari berikut &ensp; :</h5>
                <p>
                •	Kesulitan bernafas yang parah (Bernafas dengan sangat cepat atau berbicara dalam satu kata) <br>
                •	Nyeri dada yang parah <br>
                •	Sulit untuk bangun <br>
                •	Merasa kebingungan <br>
                •	Penurunan kesadaran <br>
                </p>
                <div class="input-divvv">
                    <div class="radio">
                    <input type="radio" name="per_1" value="1">
                    <Label>YA</Label>
                    </div>
                    <div class="radio">
                    <input type="radio" name="per_1" value="0">
                    <Label>TIDAK</Label>
                    </div>
                </div>
            </div>
            <div class="report">
            <h5>Apakah Anda mengalami salah satu dari berikut &ensp; :</h5>
                <p>
                •	Nafas yang pendek saat istirahat <br>
                •	Ketidakmampuan untuk berbaring karena kesulitan bernafas <br>
                •	Kondisi kesehatan kronis yang anda alami dirasakan lebih berat karena kesulitan bernapas <br>
                </p>
                <div class="input-divvv">
                    <div class="radio">
                    <input type="radio" name="per_2" value="1">
                    <Label>YA</Label>
                    </div>
                    <div class="radio">
                    <input type="radio" name="per_2" value="0">
                    <Label>TIDAK</Label>
                    </div>
                </div>
            </div>
            <div class="report">
            <h5>Apakah Anda mengalami salah satu dari berikut &ensp; :</h5>
                <p>
                •	Demam <br>
                •	Batuk <br>
                •	Bersin <br>
                •	Sakit Tenggorokan <br>
                •	Sulit Bernafas <br>
                </p>
                <div class="input-divvv">
                    <div class="radio">
                    <input type="radio" name="per_3" value="1">
                    <Label>YA</Label>
                    </div>
                    <div class="radio">
                    <input type="radio" name="per_3" value="0">
                    <Label>TIDAK</Label>
                    </div>
                </div>
            </div>
            <div class="report">
            <h5>Apakah anda pernah muncul gejala sekitar 14 hari setelah travelling ke luar negeri (China, Italy, Iran, Korea Selatan, Prancis, Spanyol, Jerman, USA)
            atau ke kota terjangkit (Jakarta, Bali, Solo, Yogyakarta, Pontianak, Manado, Bandung, dll)?
            </h5>
                <div class="input-divvv">
                    <div class="radio">
                    <input type="radio" name="per_4" value="1">
                    <Label>YA</Label>
                    </div>
                    <div class="radio">
                    <input type="radio" name="per_4" value="0">
                    <Label>TIDAK</Label>
                    </div>
                </div>
            </div>
            <div class="report">
            <h5>Apakah Anda memberikan perawatan atau melakukan kontak dekat dengan seseorang 
            dengan COVID-19 (kemungkinan atau dikonfirmasi) saat mereka sakit (batuk, demam, bersin, atau sakit tenggorokan)?
            </h5>
                <div class="input-divvv">
                    <div class="radio">
                    <input type="radio" name="per_5" value="1">
                    <Label>YA</Label>
                    </div>
                    <div class="radio">
                    <input type="radio" name="per_5" value="0">
                    <Label>TIDAK</Label>
                    </div>
                </div>
            </div>
            <div class="report">
            <h5>Apakah Anda memiliki kontak dekat dengan seseorang yang bepergian 
            ke luar Negeri dalam 14 hari terakhir yang menjadi sakit (batuk, demam, bersin, atau sakit tenggorokan)?
            </h5>
                <div class="input-divvv">
                    <div class="radio">
                    <input type="radio" name="per_6" value="1">
                    <Label>YA</Label>
                    </div>
                    <div class="radio">
                    <input type="radio" name="per_6" value="0">
                    <Label>TIDAK</Label>
                    </div>
                </div>
            </div>
            <button type="submit" class="btnn" name="simpan" value="simpan">SIMPAN</button>
        </div>
    </form>
</body>
</html>

<?php
    include 'koneksi/config.php';
    if(@$_POST['simpan']){
        $nama = @$_POST['nama'];
        $umur = @$_POST['umur'];
        $alamat = @$_POST['alamat'];
        $pekerjaan = @$_POST['pekerjaan'];
        $telp = @$_POST['telp'];
        $suhu = @$_POST['suhu'];
        $per_1 = @$_POST['per_1'];
        $per_2 = @$_POST['per_2'];
        $per_3 = @$_POST['per_3'];
        $per_4 = @$_POST['per_4'];
        $per_5 = @$_POST['per_5'];
        $per_6 = @$_POST['per_6'];
        $jumlah = $per_1 + $per_2 + $per_3 + $per_4 + $per_5 + $per_6;
        $x = $koneksi;
        
        if($x){
            if($jumlah >= "3"){
                mysqli_query($koneksi, "INSERT INTO user(nama, umur, alamat, pekerjaan, telp, suhu, status) VALUES
                            ('$nama', '$umur', '$alamat', '$pekerjaan', '$telp', '$suhu', 'positif')");
            }else{
                mysqli_query($koneksi, "INSERT INTO user(nama, umur, alamat, pekerjaan, telp, suhu, status) VALUES
                ('$nama', '$umur', '$alamat', '$pekerjaan', '$telp', '$suhu', 'negatif')");
            }
            echo "<script> document.location.href='koneksi/end.php'; </script>";
        }
    }
?>
