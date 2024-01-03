<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    $path = "ListQua.xml";
    $tai_lieu = new DOMDocument();
    $tai_lieu->load($path);
    $root = $tai_lieu->documentElement;
    $dich_vus=$root->getElementsByTagName("Dich_vu");
?>

<h2 style="color: red;">DANH SÁCH DỊCH VỤ</h2>
<ul style="list-style: none;">
    <?php
        foreach ($dich_vus as $dich_vu) {
           $id = $dich_vu->getAttribute("ID");
           $content= $dich_vu->nodeValue;
    ?>
    <li class="dingdang">
        <a style="text-decoration:none;" href="detail.php?id=<?php echo $id ?>">
            <?php echo $content ?>
        </a>
    </li>
    ----------------------------------------------------
    <?php
        }
    ?>    
</ul>

</body>
</html>
