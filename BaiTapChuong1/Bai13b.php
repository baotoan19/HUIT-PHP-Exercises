<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read Employee File</title>
    <style>
        .employee-container {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .employee-info {
            display: flex;
            width: 300px;
            overflow: hidden;
        }

        .employee-info img {
            max-width: 100%;
            height: auto;
        }

        .employee-details {
            flex: 1;
            padding: 10px;
        }
        
    </style>
</head>
<body>
    <div class="employee-container">
        <?php
        $filename = fopen("NhanVien.txt", "r");
        $fileImages = "ImagesC1/";

        while (!feof($filename)) {
            $imageName = trim(fgets($filename));
            
            if (empty($imageName)) {
                continue;
            }

            $imagePath = $fileImages . $imageName;

            $name = trim(fgets($filename));
            $email = trim(fgets($filename));
            $phone = trim(fgets($filename));

            echo '<div class="employee-info">';
            echo '<div>';
            echo '<img src="' . $imagePath . '">';
            echo '</div>';
            echo '<div class="employee-details">';
            echo '<p>'. $name . '</p>';
            echo '<p>' . $email . '</p>';
            echo '<p>' . $phone . '</p>';
            echo '</div>';
            echo '</div>';
        }

        fclose($filename);
        ?>
    </div>
</body>
</html>
