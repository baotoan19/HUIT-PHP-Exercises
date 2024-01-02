<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagination Example</title>
    <style>
     .pagePHP{
        text-align: center;
     }
     .page-link{
        padding: 6px 10px;
        margin: 0 4px;
        text-decoration: none;
        color: blue;
        background-color: #eee;
        border: 1px solid #ccc;
     }
     .page-link:hover{
        background-color: #ddd;
     }
     .active{
        color: red;
     }
     .output{
        margin-top: 20px;
        text-align: center;
        font-size: 20px;
     }

    </style>
</head>
<body>
    <div class="pagePHP">
        <?php
            $totalPages = 10;
            $currentPage = isset($_GET['page']) ? $_GET['page'] : 1;

            if ($currentPage > 1){
                echo '<a href="?page='.($currentPage-1).'" class="page-link">Perv</a>';
            }
            
            for($i=1; $i <= $totalPages; $i++){
                $activeClass = ($i == $currentPage) ? 'active' : '';
                echo '<a href="?page=' . $i . '" class="page-link ' . $activeClass . '">' . $i . '</a>';
            }
            if ($currentPage < $totalPages){
                echo '<a href="?page='.($currentPage+1).'" class="page-link">Next</a>';
            }
        ?>
    </div>
    <div class="output">
       <?php
            echo 'You are currently on page: '  .$currentPage;
       ?>
    </div>

</body>
</html>
