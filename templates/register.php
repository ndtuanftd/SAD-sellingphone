<?php
    function clean_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    function check_password($str){
        $error = "";
        $num_check = false;
        $uppercase_check = false;

        if (strlen($str) < 8){
            $error = "Min length is 8 chars";
        }

        $length = strlen($str);
        for ($i=0; $i<$length; $i++) {
            if (is_numeric($str[$i]) == true){
                $num_check = true;
            }
            if (ctype_upper($str[$i]) == true){
                $uppercase_check = true;
            }
        }

        if ($num_check == false){
            if (strlen($error) == 0){
                $error = "At lease one number";
            }
            else{
                $error = $error . ", at least one number";
            }
        }
        if ($uppercase_check == false){
            if (strlen($error) == 0){
                $error = "At least one uppercase letter";
            }
            else{
                $error = $error . ", at least one uppercase letter";
            }
        }

        if (strlen($error) > 0){
            echo "<script type='text/javascript'>alert('$error');</script>";
            return false;
        }
        else{
            return true;
        }
    }

    if (isset($_POST['register'])){
        if(isset($_POST['username'])){
            $username_user = clean_input($_POST["username"]);
        }
        if(isset($_POST['password'])){
            $password_user = clean_input($_POST["password"]);
        }

        $servername = "localhost";
        $username_server = "root";
        $password_server = "";
        $dbname = "mysad";
        $conn = new mysqli($servername, $username_server, $password_server, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $result = $conn->query("SHOW TABLES LIKE 'users'");
        if($result->num_rows == 0){
            $sql = "CREATE TABLE users (
                id int(100) NOT NULL AUTO_INCREMENT,
                username VARCHAR(30) UNIQUE NOT NULL,
                password VARCHAR(30) NOT NULL,
                reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
                PRIMARY KEY (id)
            )";

            if ($conn->query($sql) == false) {
                die("Connection failed: " . $conn->connect_error);
            }
        }

        $sql = "SELECT username, password FROM users";
        $result = $conn->query($sql);
        $duplicate = false;

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                if ($row["username"] == $username_user){
                    $duplicate = true;
                }
            }
        }
        
        if ($duplicate == true){
            $message = "Your username has been used";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }
        elseif (check_password($password_user) == true){
            $values = "(\"" . $username_user . "\", \"" . $password_user . "\")";

            $sql = "INSERT INTO users (username, password) VALUES " . $values;
            
            if ($conn->query($sql)){
                $message = "Your account is created successfully!";
                echo "<script type='text/javascript'>alert('$message');window.location.href='login.php';</script>";
            }
            else {
                $message = "Error creating user's account: " . $conn->error;
                echo "<script type='text/javascript'>alert('$message');</script>";
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="../static/register.css">
</head>

<body>
    <div class="background"></div>
    <div class="container">
        <p class="header">
            Sign up
        </p>
        <form method="POST" action="" class="textbox">
            <label for="name" class="label">Username</label>
            <input type="text" id="name" placeholder="Enter your username" name="username" class="form-input" required>

            <label for="password" class="label">Password</label>
            <input type="password" id="password" placeholder="Enter your password" name="password" class="form-input" onkeyup="validPassword()">
            <p id="txtError" style="color: red;"></p>

            <input type="submit" name="register" class="button" value="Sign up">

        </form>
        <script>
            function validPassword() {
                var str = document.getElementById("password").value;
                var list = [];
                const letters = (() => {
                    const caps = [...Array(26)].map((val, i) => String.fromCharCode(i + 65));
                    return caps;
                })();

                for (var i = 0; i <= 9; i++) {
                    list.push(i.toString());
                }
                
                error = "";
                num_check = false;
                uppercase_check = false;
                if (str.length < 8){
                    error += "Min length is 8 chars";
                }
                for (let i = 0; i < str.length; i++){
                    if (list.includes(str[i])){
                        num_check = true;
                    }
                    if (letters.includes(str[i])){
                        uppercase_check = true;
                    }
                }
                if (num_check == false){
                    if (error.length == 0){
                        error = "At lease one number";
                    }
                    else{
                        error += ", at least one number";
                    }
                }
                if (uppercase_check == false)
                    {if (error.length == 0){
                        error = "At least one uppercase letter";
                    }
                    else{
                        error += ", at least one uppercase letter"
                    }
                    
                }
                if (error.length > 0) {
                    document.getElementById("txtError").innerHTML = "Error: " + error;
                    // return false;
                }
                else{
                    document.getElementById("txtError").innerHTML = "";
                    // return true;
                }
            }
        </script>
        <p class="text">Already have an account? <a href="login.php">Log in</a></p>
    </div>


</body>

</html>