
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regist</title>
    <link rel="stylesheet" href="register.css">
</head>
<body>

    <section>

        <div class="container">
    
                <h1>DGH</h1>
                <h2>Register</h2>

                <form action="register.php" method="post">

                    <input type="text" name="name" required placeholder="enter your name">
                    <input type="email" name="email" required placeholder="enter your email">
                    <input type="password" name="password" required placeholder="enter your password">
                    <input type="text" name="address" required placeholder="enter your address">
                    <input type="text" name="number" required placeholder="enter your number">
                    <input type="submit" name="submit"  value="Register" class="form-btn">
                    <a href="login.php">Already have an account login now</a>
                </form>

    
        </div>

        <?php
        if (isset($_POST["submit"])) {
           $name = $_POST["name"];
           $email = $_POST["email"];
           $password = $_POST["password"];
           $address = $_POST["address"];
           $number = $_POST["number"];

           
           $passwordHash = password_hash($password, PASSWORD_DEFAULT);

           $errors = array();
           
           if (empty($name) OR empty($email) OR empty($password) OR empty($address) OR empty($number)) {
            array_push($errors,"All fields are required");
           }
           if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            array_push($errors, "Email is not valid");
           }
           if (strlen($password)<8) {
            array_push($errors,"Password must be at least 8 charactes long");
           }

           //verify email
           require_once "config.php";
           $sql = "SELECT * FROM user WHERE email = '$email'";
           $result = mysqli_query($conn, $sql);
           $rowCount = mysqli_num_rows($result);
           if ($rowCount>0) {
            array_push($errors,"Email already exists!");
           }
           if (count($errors)>0) {
            foreach ($errors as  $error) {
                echo '<div style="color: red; position: absolute; left:44%; bottom: 1%; border-style:solid; border-color:red; padding: 5px;">'. $error .'</div>';
            }
           }else{
            
            $sql = "INSERT INTO user (name, email, password, address, number) VALUES ( ?,?,?,?,? )";
            $stmt = mysqli_stmt_init($conn);
            $prepareStmt = mysqli_stmt_prepare($stmt,$sql);
            if ($prepareStmt) {
                mysqli_stmt_bind_param($stmt,"sssss",$name, $email, $passwordHash, $address, $number);
                mysqli_stmt_execute($stmt);
                echo '<div class="error" style="height:fit-content; width: fit-content; position: absolute; left: 42%; bottom: 14%; color: red; border-style: solid; border-color: lightgreen; padding: 5px;">
                    Login Successfully</div>';
                header('location:login.php');
            }else{
                die("Something went wrong");
            }
           }
          

        }
        ?>

    </section>

</body>
</html>