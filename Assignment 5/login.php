<?php
session_start();
if(isset($_SESSION["email"])){
    header("Location: index.php");
}

$fp = fopen("./data.txt", "r");

$roles = [];
$emails = [];
$passwords = [];
while ($line = fgets($fp)) {
    // echo $line .  "</br>";

    $data = explode(",", $line);
    array_push($roles, trim($data[0]));
    array_push($emails, trim($data[2]));
    array_push($passwords, trim($data[3]));
}
fclose($fp);


//printing outpput ..................
// echo var_dump($roles) . "</br>";
// echo var_dump($emails) . "</br>";
// echo var_dump($passwords) . "</br>";

$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

if ($email != '') {


    for ($i = 0; $i < count($roles); $i++) {
        if ($email == $emails[$i] && $password == $passwords[$i]) {
            header("Location: index.php");
        } else {
            $errMsg = "Email or password is incorrect.";
        }
    }
}



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>login page</title>
</head>

<body>
    <div class="container w-50 p-5 mt-5">
        <div class="text-center">
            <h3>Login to Your Account</h3>
        </div>
        <div class="div mt-5">

            <div class="alert alert-danger alert-dismissible fade show" role="alert" <?php if(!isset($errMsg)) echo "hidden"; ?>>
                <strong>Warning!</strong> <?php echo $errMsg; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>

            <form method="POST" action="">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" name="email" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>




    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>