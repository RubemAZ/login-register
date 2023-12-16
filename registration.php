<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <form action="registration.php" method="post">
            <div class="form-group">
                <input type="text" name="fullname" placeholder="Full Name:">
            </div>

            <div class="form-group">
                <input type="email" name="email" placeholder="Email:">
            </div>

            <div class="form-group">
                <input type="password" name="password" placeholder="Password:">
            </div>

            <div class="form-group">
                <input type="text" name="repeat_password" placeholder="Repeat Password:">
            </div>

            <div class="form-group">
                <input type="submit" value="Register" name="submit">
            </div>
        </form>
    </div>
    
</body>
</html>