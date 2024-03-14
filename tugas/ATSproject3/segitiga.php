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
<h1>Form Hitung Luas Segitiga Dengan PHP</h1>
<h3>Isi Data :</h3>
<form action="" method="POST" enctype="multipart/form-data">
    <table>
        <tr>
            <td>Alas Segitiga</td>
            <td>:</td>
            <td><input type="text" name="alas" required></td>
        </tr>
        <tr>
            <td>Tinggi Segitiga</td>
            <td>:</td>
            <td><input type="text" name="tinggi" required ></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><input type="submit" name="submit" value="Hitung"></td>
        </tr>
    </table>
</form>
    <?php
        if(isset($_POST['submit'])){
            $alas=$_POST['alas'];
            $tinggi=$_POST['tinggi'];
            
            // menghitung luas segitiga
            $luas_segitiga = 1/2 * $alas * $tinggi;
            
            echo "Hasil hitung luas segitiga adalah sebagai berikut:<br />";
            echo "Diketahui;<br />";
            echo "Alas Segitiga = $alas<br />";
            echo "Tinggi Segitiga = $tinggi<br />";
            echo "Maka luas segitiga sama dengan 1/2 ($alas x $tinggi) = $luas_segitiga";
        }
    ?>
</body>
</html>