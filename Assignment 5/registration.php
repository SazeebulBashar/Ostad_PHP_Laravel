<?php
session_start();
if (isset($_SESSION["email"])){
    header("location: index.php");
}

$username = $_POST['username'] ?? '';
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

if ($email != '' || $password != '' || $password != '') {
    $fp  = fopen("./data.txt", 'a');
    $data = "user" . "," . $username . "," . $email . "," . $password . "\n";
    fwrite($fp,$data);
    fclose($fp);

    $errMsg = "You are Successfully Registered.";

    $_SESSION['email'] = $email;
    $_SESSION['password'] = $password;
    
    header("Location: index.php");

}




?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Register Account</title>
</head>

<body>
    <div class="container w-50 p-5 mt-5">
        <div class="text-center">
            <h3>Register an Account</h3>
        </div>
        <div class="div mt-5">
        <div class="alert alert-success alert-dismissible fade show" role="alert" <?php if(!isset($errMsg)) echo "hidden"; ?>>
                <strong>Congratulations!</strong> <?php echo $errMsg; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <form method="POST" action="">
            <div class="mb-3">
                    <label for="Username" class="form-label">User Name</label>
                    <input type="text" class="form-control" name="username" id="username" aria-describedby="username">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="exampleInputPassword1">
                </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>




    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>