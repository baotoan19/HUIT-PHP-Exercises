<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <?php 
        if(isset($_GET["idd"]))
        {
            $idd = $_GET["idd"];
        }
        else
        {
            $idd = 1;
        }
        $path = 'HoaTheoChuDe2.xml';
        $data = new DOMDocument();
        $data->load($path);
        $root = $data->documentElement;
        $arr = $root->getElementsByTagName("Chu_de");
        ?>
        <style>
            .cardTest
            {
                width: 100%;
                display: flex;
                flex-wrap: wrap;
            }
        </style>
        <div class ="cardTest">
        <?php
        foreach($arr as $node)
        {
            $checkIDCD = $node->getAttribute("ID");
            if($checkIDCD == $idd)
            {
                $listSP = $node->getElementsByTagName("Hoa");
                foreach($listSP as $SP)
                {
                $takeID = $SP->getAttribute("ID");    
                $takeName = $node->getAttribute("TenCD");
                $takeHinh = $SP->getAttribute("Hinh");
                $takeGia = $SP->getAttribute("Gia");
                ?>
                <div class="card" style="width:18rem;margin-left:20px;margin-bottom:20px">
                    <img src=<?php echo "Files/".$takeHinh?> class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title"><?php echo $takeName?></h5>
                         <p class="card-text"><?php echo $takeID?></p>
                         <p class="card-text"><?php echo $takeName?></p>
                         <a href="Bai18_part2_next.php?idd=<?php echo urlencode($takeID)?>" class="btn btn-primary"><?php echo $takeGia?></a>
                        </div>
                </div>
                <?php
                }
                break;
            }
        }
        ?>
        </div>
</body>
</html>