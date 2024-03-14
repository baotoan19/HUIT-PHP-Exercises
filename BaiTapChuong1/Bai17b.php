<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    /* Base styles */
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 20px;
    }

    .container {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      grid-gap: 10px;
    }

    .product {
      background-color: #f5f5f5;
      padding: 10px;
      border-radius: 5px;
      box-shadow: 0 0 3px rgba(0, 0, 0, 0.1);
      transition: all 0.2s ease-in-out;
    }

    .product:hover {
      box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
    }

    /* Image style */
    .hinh {
      width: 100px; /* Ensure uniform width */
      height: 100px; /* Add height for consistency */
      object-fit: cover; /* Maintain aspect ratio and fill container */
      border: 1px solid #ddd;
      border-radius: 5px;
      margin-bottom: 5px;
    }

    /* Individual element styles */
    .tencd {
      font-size: 18px;
      color: #333;
      margin-bottom: 5px;
    }

    .id {
      font-weight: bold;
      color: blue;
      margin-bottom: 5px;
    }

    .gia {
      font-weight: bold;
      color: red;
      margin-bottom: 5px;
    }

    /* Media query for smaller screens */
    @media (max-width: 500px) {
      .container {
        grid-template-columns: repeat(1, 1fr);
      }
    }
  </style>
</head>
<body>
<?php
   
    $id=$_GET["id"];
    $xml = new DOMDocument();
    $xml->load('HoaTheoChuDe.xml');

    $ChuDes = $xml->getElementsByTagName('Chu_de');
    $SanPham = array();

        foreach ($ChuDes as $ChuDe) {
                $SanPham[] = $ChuDe;
        }

    if (count($SanPham) > 0) {
      echo "<div class='container'>";
      foreach ($SanPham as $ChuDe) {
      
        $TenSP = $ChuDe->getAttribute('TenCD');
        $Hinh = $ChuDe->getAttribute('Hinh');
        $Id = $ChuDe->getAttribute('Id');
        $Gia = $ChuDe->getAttribute('Gia');

       
        echo "<div class='product'>";
        echo "<div class='tensp'>$TenSP</div>";
        echo "<img src='$Hinh' class='hinh' />";
        echo "<div class='mota'>Mã SP: $Id</div>";
        echo "<div class='gia'>Giá: $Gia</div>";
      
        echo "</div>";
      }
    } else {
      echo "Không tìm thấy sản phẩm ";
    }
    ?>
</body>
</html>
