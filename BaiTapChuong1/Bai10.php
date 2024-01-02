<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $meal = array('breakfast'=>'Bread and milk','lunch' => 'Rice','dinner'=> 'Instance Noodle');
    ?>
    <table border="1" align="center">
        <tr>
            <th>Meal</th>
            <th>Food</th>
        </tr>
        <?php
            foreach ($meal as $meal => $food){
                echo "<tr>";
                echo "<td style=\"background-color: yellow;\">$meal</td>";
                echo "<td>$food</td>";
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>