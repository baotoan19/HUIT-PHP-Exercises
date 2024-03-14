<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Mã NV</th>
                <th scope="col">Tên NV</th>
                <th scope="col">Email</th>
                <th scope="col">Khoa</th>
                <th scope="col">Hình</th>
            </tr>
        </thead>
        <?php
    // Đọc nội dung từ tệp JSON
    $jsonString = file_get_contents('NV.json');

    // Chuyển đổi chuỗi JSON thành mảng PHP
    $data = json_decode($jsonString, true);

    // Kiểm tra nếu dữ liệu không null và có ít nhất một phần tử
    if ($data !== null && is_array($data) && count($data) > 0) {
        // Khai báo biến count để đếm số thứ tự của nhân viên
        foreach ($data as $item): ?>
        <tr>
            <td><?php echo $item['MaNS']; ?></td>
            <td><?php echo $item['TenNV']; ?></td>
            <td><?php echo $item['Email']; ?></td>
            <td><?php echo $item['Khoa']; ?></td>
            <td><img src="ImagesC1/<?php echo $item['Hinh']; ?>" width="50px"> </td>
        </tr>
        <?php endforeach;
    } else {
        // Hiển thị thông báo nếu không có dữ liệu
        echo '<tr><td colspan="4">Không có dữ liệu để hiển thị.</td></tr>';
    }
    ?>
    </table>
</body>

</html>