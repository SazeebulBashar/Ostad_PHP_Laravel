
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Calculator</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <style>
  <?php include "style.css" ?>
</style>
</head>
<body>
    <div class="container">
        <h2>Grade Calculator</h2>
        <form method="post" action="">
            <input type="number" class="form-control" name="num1" placeholder="Enter a test Score:  " required><br>
            <input type="number" class="form-control" name="num2" placeholder="Enter a test Score:  " required><br>
            <input type="number" class="form-control" name="num3" placeholder="Enter a test Score:  " required><br>
            
            <button type="submit">Find Grade</button>
        </form>
        <div id="result">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $num1 = $_POST["num1"];
                $num2 = $_POST["num2"];
                $num3 = $_POST["num3"];
                $score = ($num1  + $num2 + $num3) / 3;

                if($score >= 90){
                    echo "Avg is : $score <br>";
                    echo "Grade : A";
                }
                else if($score >= 80){
                    echo "Avg is : $score <br>";
                    echo "Grade : B";
                }
                else if($score >= 70){
                    echo "Avg is : $score <br>";
                    echo "Grade : C";
                }
                else if($score >= 60){
                    echo "Avg is : $score <br>";
                    echo "Grade : D";
                }
                else{
                    echo "Grade : F";
                }

                
            }
            ?>
        </div>
    </div>
</body>
</html>