<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
<link rel="stylesheet" href="style/style.css">
<link rel="stylesheet" href="font.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body>
<h1>Form Hitung Luas Persegi Panjang Dengan PHP</h1>
<h3>Isi Data :</h3>
<form action="" method="POST" enctype="multipart/form-data">
    <table>
        <tr>
            <td>Panjang Persegipanjang</td>
            <td>:</td>
            <td><input type="number" name="panjang" required ></td>
        </tr>
        <tr>
            <td>Lebar Persegipanjang</td>
            <td>:</td>
            <td><input type="number" name="lebar" required ></td>
        </tr>
        <tr>
            
            <td><input type="submit" name="submit" value="Hitung"></td>
        </tr>
    </table>
</form>

<?php
    if(isset($_POST['submit'])) {
        $panjang=$_POST["panjang"];
        $lebar=$_POST["lebar"];
        // menghitung luas persegi panjang
        $luas_persegi_panjang = $panjang*$lebar;
        // menghitung keliling persegi panjang
        $keliling_persegi_panjang = 2*($panjang+$lebar);
    
        echo "Hasil hitung luas persegi panjang adalah sebagai berikut:<br />";
        echo "Diketahui;<br />";
        echo "Panjang = $panjang<br />";
        echo "Lebar = $lebar<br />";
        echo "Maka luas persegi panjang sama dengan [ $panjang x $lebar ] = $luas_persegi_panjang<br />";
        echo "Maka keliling persegi panjang sama dengan [ 2 x ($panjang + $lebar) ] = $keliling_persegi_panjang";
    }
?>
</body>
</html>