<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    include "Xe.php";
    $xd = new XeDap("Đen");
    $xm = new XeMay("Vàng");
    $xh = new XeHoi("Đỏ");
    $xl = new XeXichLo("Tím");

    echo "Xe Đạp ==> Số bánh: " . $xd->soBanh() . " ==> Màu: " . $xd->getMau() . " ==> Vận tốc: " . $xd->vanToc() . "<br>";
    echo "Xe Máy ==> Số bánh: " . $xm->SoBanh() . " ==> Màu: " .$xm->getMau() . " ==> Vận tốc: " . $xm->VanToc() . "<br>";
    echo "Xe Hơi ==> Số bánh: " . $xh->SoBanh() . " ==> Màu: " . $xh->getMau() . " ==> Vận tốc: " . $xh->VanToc() . "<br>";
    echo "Xe Xích Lô ==> Số bánh: " . $xl->SoBanh() . " ==> Màu: " . $xl->getMau() . " ==> Vận tốc: " . $xl->VanToc() . "<br>";
    
?>

</body>
</html>
