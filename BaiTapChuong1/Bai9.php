<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date Selection Form</title>
</head>
<body>

    <?php
        $day = 1;
        $month = 1;
    ?>

    <form action="" method="post">
        <label for="day">Ngày sinh:</label>
        <select name="day">
            <?php
                while ($day <= 31) {
                    echo "<option value=\"$day\">$day</option>";
                    $day++;
                }
            ?>
        </select>
        <label for="month">Tháng sinh:</label>
        <select name="month">
            <?php
                while ($month <= 12) {
                    echo "<option value=\"$month\">$month</option>";
                    $month++;
                }
            ?>
        </select>
    </form>

</body>
</html>
