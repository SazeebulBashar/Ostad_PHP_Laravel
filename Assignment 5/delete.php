<?php
session_start();
if(!isset($_SESSION['$email'])){
    header("Location: login.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    session_start();
   
    $email = $_SESSION['email'];
    $password = $_SESSION['password'];
    echo $email;


    $fp = fopen("./data.txt", "r");

    $roles = [];
    $users = [];
    $emails = [];
    $passwords = [];
    while ($line = fgets($fp)) {
        // echo $line .  "</br>";

        $data = explode(",", $line);
        array_push($roles, trim($data[0]));
        array_push($users, trim($data[1]));
        array_push($emails, trim($data[2]));
        array_push($passwords, trim($data[3]));
    }
    fclose($fp);


    for ($i = 0; $i < count($roles); $i++) {
        if ($email == $emails[$i] && $password == $passwords[$i]) {
            $line = $roles[$i] . "," . $users[$i] . "," . $emails[$i] . "," . $passwords[$i]; 

            echo $line .  "<br />";

            $contents = file_get_contents("./data.txt");
            $contents = str_replace($line, '', $contents);
            file_put_contents("./data.txt", $contents);

        } 
    }



?>
</body>
</html>