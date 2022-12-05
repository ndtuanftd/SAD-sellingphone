<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in</title>
    <link rel="stylesheet" href="../static/login.css">
</head>

<body>
    <div class="background"></div>
    <div class="container">
        <p class="header">
            Sign in
        </p>
        <form method="POST" action="login_processing.php" class="textbox">
            <label for="name" class="label">Username</label>
            <input type="text" id="name" placeholder="Enter your username" name="username" class="form-input" required>

            <label for="password" class="label">Password</label>
            <input type="password" id="password" placeholder="Enter your password" name="password" class="form-input"
                required>

            <input type="submit" name="login" class="button" value="Sign in">

        </form>

        <p class="text">No account? <a href="register.php">Sign up now</a></p>
    </div>


</body>

</html>