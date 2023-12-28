<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1 class = "text-center m-3 pb-3">Register</h1>

        <form action="registerdb.php" method="post">
            <div class="form-group">
                <input type="text" class="form-control" name="name" placeholder="Full Name:" required>
            </div>

            <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="Email:" required>
            </div>

            <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Password:" required>
            </div>

            <div class="form-group">
                <input type="password" class="form-control" name="repeat_password" placeholder="Repeat Password:" required>
            </div>

            <div class="row form-group">
                <div class="col-md-6">
                    <input type="submit" class="btn btn-primary" value="Register" name="submit">
                </div>

                <div class="col-md-6">
                    <p>Already registered?<a href="index.php"> Sign in here!</a></p>
                </div>
            </div> 
        </form>

    </div>
</body>
</html>