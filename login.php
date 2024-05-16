<?php

session_start();
unset($_SESSION['user']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">

</head>
<body>

    <section>
        <div class="container">

            <h1>DGH</h1>
            <h2>Login</h2>

            <form action="login.php" method="post">

                <input type="email" name="email" required placeholder="enter your email">
                <input type="password" name="password" required placeholder="enter your password">
                <input type="submit" name="submit"  value="Login" class="form-btn">
                <a href="register.php">Not have an account register now</a>

            </form>

        </div>

    </section>
    <?php

        if (isset($_POST["submit"])) {
           $email = $_POST["email"];
           $password = $_POST["password"];
            require_once "config.php";
            $sql = "SELECT * FROM user WHERE email = '$email'";
            $result = mysqli_query($conn, $sql);
            $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
            if ($user) {
                if (password_verify($password, $user["password"])) {
                    $id_user = $user["id_user"];
                    session_start();
                    $_SESSION['user'] = $id_user;
                    header("Location: index.php");
                    die();  
                }else{
                    echo '<div class="error" style="height:fit-content; width: fit-content; position: absolute; left: 42%; bottom: 14%; color: red; border-style: solid; border-color: red; padding: 5px;">
                    Password does not match</div>';
                }
            }else{
                echo '<div class="error" style="height:fit-content; width: fit-content; position: absolute; left: 43%; bottom: 14%; color: red; border-style: solid; border-color: red; padding: 5px;">
                    Email does not match</div>';
            }
        }
        ?>
    
</body>
</html>