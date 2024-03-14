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
  <?php
    echo '<p><b>PROJECT 3 ATS</b></p>';
    echo '
          <div class="button">
          <button><a href="?page=persegipanjang">Rumus Persegi panjang</a></button>
          <button><a href="?page=segitiga">Rumus Segitiga</a></button>
          </div>';
    echo "<br><br>";

    if((isset($_GET['page']))){
      $page = $_GET['page'];
    }
    if((isset($_GET['page']))){
      switch($page){
        case "persegipanjang":
          include 'persegipanjang.php';
            break;
        case "segitiga":
          include 'segitiga.php';
            break;
        }
    }
  ?>
</body>
</html>