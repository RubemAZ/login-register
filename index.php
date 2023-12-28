<?php
    session_start();

    require_once "config.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST['email'];
        $password = $_POST['password'];
    }

    $sql = "SELECT * FROM users WHERE email = ?";

    $stmt = $conn->prepare($sql);
    $stmt ->bind_param("s", $email);
    $stmt->execute();

    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc(); 

        if (password_verify($password, $row['password'])) {

            $_SESSION["loggedin"] = true; 

            header("Location: site.php"); 
            exit; 

        }
    }

    else {
        $error = "Usuário ou senha incorretos";
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <div class="container">
        <h1 class = "text-center m-3 pb-3">Login</h1>

        <form action="index.php" method="post">

            <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="Email:" required >
            </div>

            <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Password:" required >
            </div>

            <div class="row form-group">
                <div class="col-md-6">
                    <input type="submit" class="btn btn-primary" value="Login" name="submit">
                </div>

                <div class="col-md-6">
                    <p> not have account? <a href="register.php"> register here.</a> </p>
                </div>

            </div>
        </form>
    </div>
    
</body>
</html>