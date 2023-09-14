
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <style>
  <?php include "style.css" ?>
</style>
</head>
<body>
    <div class="container">
        <h2>Simple Calculator</h2>
        <form method="post" action="">
            <input type="number" name="num1" class="form-control" placeholder="Enter first number" required><br>
            <input type="number" name="num2" class="form-control" placeholder="Enter second number" required><br>
            <select name="operation">
                <option value="add">Addition</option>
                <option value="subtract">Subtraction</option>
                <option value="multiply">Multiplication</option>
                <option value="divide">Division</option>
                
            </select><br>
            <button type="submit">Calculate</button>
        </form>
        <div id="result">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $num1 = $_POST["num1"];
                $num2 = $_POST["num2"];
                $op = $_POST["operation"];

                switch ($op) {
                    case "add":
                        $result = $num1 + $num2;
                        echo "Result: $result";
                        break;
                    case "subtract":
                        $result = $num1 - $num2;
                        echo "Result: $result";
                        break;
                    case "multiply":
                        $result = $num1 * $num2;
                        echo "Result: $result";
                        break;
                    case "divide":
                        if ($num2 != 0) {
                            $result = $num1 / $num2;
                            echo "Result: $result";
                        } else {
                            echo "Cannot divide by zero.";
                        }
                        break;
                    
                }
            }
            ?>
        </div>
    </div>
</body>
</html>