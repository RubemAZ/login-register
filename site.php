<?php

    session_start();
    require_once "config.php";

    function logout()
    {
        session_unset();
        session_destroy();
        header("Location: index.php");
        exit;
    }

    if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
        header("Location: index.php");
        exit;
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Site</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1 class = "text-center m-3 pb-3">Home Page</h1>

        <div class="container-flex">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vehicula nibh a mi lobortis feugiat. Aenean diam mi, tristique at semper in, egestas ac felis. Duis pharetra ante venenatis odio volutpat, in vulputate mi posuere. Suspendisse ornare, lorem vel consequat varius, erat tortor tincidunt dolor, eget commodo leo nulla quis nisl. Etiam rutrum suscipit tellus vitae semper. Sed accumsan ultricies ultrices. Nunc dapibus lacus in bibendum vehicula. Sed vestibulum velit ac mi aliquet egestas.Duis et urna at est rhoncus cursus. Etiam nec quam iaculis, iaculis lectus id, venenatis est. Donec felis tortor, venenatis nec sem ut, semper vulputate orci. Proin vitae fringilla libero. Nam gravida sollicitudin accumsan. Nam in purus eget elit hendrerit ultricies.</p>
        </div>

        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <input class="btn btn-primary" type="submit" name="logout" value="logout">

        <?php 
        if (isset($_POST["logout"])) {
            logout();
        }
        ?>
    </div>

</body>
</html>
