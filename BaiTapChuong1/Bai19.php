<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Document</title>
</head>
<body>
    <?php
        $arr = array("#1"=>"Trang chủ","#2"=>"Giới thiệu","#3"=>"Sản phẩm tiêu biểu","#4"=>"Tin tức","#5"=>"Liên hệ","#6"=>"Album");
        $tailieu= new DOMDocument("1.0","utf-8");
        $tailieu->preserveWhiteSpace = false;
        $tailieu->formatOutput = true;

        $root=$tailieu->createElement("Menus");
        $tailieu->appendChild($root);

        foreach($arr as $key=>$value){
            $node=$tailieu->createElement("Menu");
            $node->nodeValue=$value;
            $node->setAttribute("link",$key);
            $root->appendChild($node);
        }

        $path = "Page.xml";
        $tailieu->save($path);

        echo"<p style='color: red;'>Lưu file thành công !</p> "
    ?>
</body>
</html>
