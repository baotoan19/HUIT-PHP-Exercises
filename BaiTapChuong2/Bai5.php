<?php
include "HinhHoc.php";

$hinhChuNhat = new HinhChuNhat(6, 8);
$hinhVuong = new HinhVuong(5);
$hinhTron = new HinhTron(7);
$hinhThang = new HinhThang(12, 8, 6);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container {
            display: flex;
            flex-wrap: wrap;
        }

        .shape {
            flex: 0 0 50%;
            /* Chia mỗi hình thành 50% chiều rộng */
            box-sizing: border-box;
            padding: 10px;
        }
    </style>
</head>

<body>

    <div class="container">

        <div class="shape">
            <h1>HÌNH CHỮ NHẬT</h1>
            <svg width="120" height="80">
                <rect width="100" height="60" x="10" y="10" stroke="black" stroke-width="3" fill="green" />
            </svg>
            <p>Chiều dài: <?php echo $hinhChuNhat->getChieuDai() ?></p>
            <p>Chiều rộng: <?php echo $hinhChuNhat->getChieuRong() ?></p>
            <p>Diện tích: <?php echo $hinhChuNhat->tinhDienTich() ?> </p>
            <p>Tính chu vi: <?php echo $hinhChuNhat->tinhChuVi() ?> </p>
        </div>

        <div class="shape">
            <h1>HÌNH TRÒN</h1>
            <svg width="100" height="100">
                <circle cx="50" cy="50" r="40" stroke="black" stroke-width="3" fill="red" />
            </svg>
            <p>Bán kính: <?php echo $hinhTron->getBanKinh() ?></p>
            <p>Diện tích: <?php echo $hinhTron->tinhDienTich() ?> </p>
            <p>Tính chu vi: <?php echo $hinhTron->tinhChuVi() ?> </p>
        </div>

        <div class="shape">
            <h1>HÌNH VUÔNG</h1>
            <svg width="100" height="100">
                <rect width="80" height="80" x="10" y="10" stroke="black" stroke-width="3" fill="blue" />
            </svg>
            <p>Cạnh: <?php echo $hinhVuong->getCanh() ?></p>
            <p>Diện tích: <?php echo $hinhVuong->tinhDienTich() ?> </p>
            <p>Tính chu vi: <?php echo $hinhVuong->tinhChuVi() ?> </p>

        </div>

        <div class="shape">
            <h1>HÌNH THANG</h1>
            <svg width="150" height="100">
                <polygon points="10,10 40,10 30,50 20,50" stroke="black" stroke-width="3" fill="orange" />
                <polygon points="40,10 70,10 60,50 30,50" stroke="black" stroke-width="3" fill="orange" />
            </svg>
            <p>Đáy lớn: <?php echo $hinhThang->getDayLon() ?></p>
            <p>Đáy nhỏ: <?php echo $hinhThang->getDayNho() ?></p>
            <p>Chiều cao: <?php echo $hinhThang->getChieuCao() ?></p>
            <p>Diện tích: <?php echo $hinhThang->tinhDienTich() ?> </p>
            <p>Tính chu vi: <?php echo $hinhThang->tinhChuVi() ?> </p>
        </div>
    </div>

</body>

</html>