<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch Case</title>
    <style>
        .menu{
            text-align: center;
            background-color:darkturquoise;
            width: 400px;
            height: 150px;
            margin: 0 auto;
        }
        .listdrink{
            background-color:white;
            width: 300px;
            margin: 0 auto;
        }
        .listdrink ul {
            list-style: none;
        }
    </style>
</head>
<body>
    <div class="menu">
        <h1>MENU</h1>
        <div class="listdrink">
            <ul>
                <li>Cà phê sữa  ...............   12.000đ</li>
                <li>Cà phê đá  ...............   10.000đ</li>
                <li>Sting dâu   ...............    8.000đ</li>
                <li>Trà đá      ...............    2.000đ</li>
            </ul>
        </div>
    </div>
</body>

<?php
    $money= 12000;
    switch($money){
        case 12000:
            echo " ==> Cà phê sữa";
            break;
        case 10000:
            echo "==> Cà phê đá";
            break;
        case 8000:
            echo "==> Sting dâu";
            break;
        case 2000:
            echo "==> Trà đá";
            break;
    }
?>
</html>