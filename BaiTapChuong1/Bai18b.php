<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
    $path = 'HoaTheoChuDe2.xml';
    $tailieu = new DOMDocument();
    $tailieu->load($path);

    $root = $tailieu->documentElement;
    $arr = $root->childNodes;
?>

<h2 style="color: red;">HOA THEO CHỦ ĐỀ</h2>
<ul>
    <?php
        foreach ($arr as $node){
            if ($node->nodeType == 1){
                $id = $node->getAttribute("ID");
                $tencd =$node->getAttribute("TenCD");
    ?>            
     <li class="dinhdang"> <a href="bai18c.php?idd =<?php echo $id?>" style="text-decoration: none;"> <?php echo $tencd ?> </a>  </li>
     ----------------------------------

     <?php
            }
        }
    ?>
    <br>
    <li> <a href="">Show all</a></li>
</ul>

</body>
</html>