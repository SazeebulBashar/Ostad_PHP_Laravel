
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment 1</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <style>
  <?php include "style.css" ?>
</style>
</head>
<body>
    <div class="container">
        <h2>Weather Report</h2>
        <form method="post" action="">
            <input type="number" class="form-control" name="num" placeholder="Enter a tepm" required><br>
            <button type="submit">Check</button>
        </form>
        <div id="result">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $num = $_POST["num"];
                if($num <0){
                    $result = "Its Freezing cold.";
                }
                else if($num >=0 && $num <= 15){
                    $result = "Its cool";
                }
                else{
                    $result = "Its warm.";
                }
                echo $result;
            }
            ?>
        </div>
    </div>
</body>
</html>