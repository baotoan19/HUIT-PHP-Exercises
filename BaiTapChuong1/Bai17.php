<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    $path = "ListHoa.xml";
    $tai_lieu = new DOMDocument();
    $tai_lieu->load($path);
    $root = $tai_lieu->documentElement;
    $arr = $root->childNodes;
?>

<h2 style="color: red;">HOA THEO CHỦ ĐỀ</h2>
<ul style="list-style: none;">
    <?php
        foreach ($arr as $node) {
            if ($node->nodeType == 1) {
                $id = $node->getAttribute("ID");
                $tenCD = $node->getAttribute("TenCD");
    ?>
    <li class="dingdang">
        <a style="text-decoration:none;" href="detail.php?id=<?php echo $id ?>">
            <?php echo $tenCD ?>
        </a>
    </li>
    ----------------------------------------------------
    <?php
            }
        }
    ?>    
</ul>

</body>
</html>
