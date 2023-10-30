<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>login page</title>
    
</head>

<body>
    <div class="container w-50 p-5 text-center">
        <?php
        $fp = fopen("./data.txt", "r");

        echo "<table class='table table-striped '>
        <thead class='thead-dark'>
          <tr>
            <th scope='col'>Role</th>
            <th scope='col'>Username</th>
            <th scope='col'>Email</th>
            <th scope='col'>Password</th>
          </tr>
        </thead>
        <tbody>";

        while ($line = fgets($fp)) {
            // echo $line .  "</br>";
            $row = explode(",", $line);
            echo "<tr>";
            echo "<td>".$row[0]."</td>";
            echo "<td>".$row[1]."</td>";
            echo "<td>".$row[2]."</td>";
            echo "<td>".$row[3]."</td>";
            echo "<td>". "<a href='delete.php'>Delete</a>'" ."</td>";
            echo "</tr>";
        }
        echo "</tbody>
                </table>";


        ?>
    </div>

    <div class="container text-center">
        <h5><a href="logout.php">Log Out</a></h5>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>