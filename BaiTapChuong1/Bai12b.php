<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Box</title>
    <style>
        .box {
            width: 200px;
            height: 100px;
            border: 2px solid <?php echo isset($_GET['bc']) ? $_GET['bc'] : 'black'; ?>;
            margin-bottom: 20px;
            position: relative;
        }

        .box-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
        }
    </style>
</head>
<body>
    <?php
        function VeBox($content) {
            echo '<div class="box">';
            echo '<div class="box-content">';
            echo $content;
            echo '</div>';
            echo '</div>';
        }

        function VeBox1($w, $h, $bc, $content) {
            echo '<div class="box" style="width: ' . $w . 'px; height: ' . $h . 'px; border-color: ' . $bc . ';">';
            echo '<div class="box-content">';
            echo $content;
            echo '</div>';
            echo '</div>';
        }

        VeBox("200 x 100");
        VeBox1(300, 150, 'red', "300 x 150");
    ?>
</body>
</html>
