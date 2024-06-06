<?php
    session_start();
    date_default_timezone_set('Asia/Dubai');
    include 'dbh.inc.php'; // Include the database connection file
    include 'comments.inc.php';

    if($_SERVER['REQUEST_METHOD']=="POST")
    {
        $uid = $_POST['username'];
        $email = $_POST['email'];
        $pwd = $_POST['password'];

        if(!empty($email) && !empty($pwd) && !is_numeric($email)) // Changed $password to $pwd
        {
            $query ="INSERT INTO user (uid, pwd, email) VALUES ('$uid', '$pwd', '$email')"; // Changed $password to $pwd
            $result = mysqli_query($conn, $query);

            if($result) {
                echo "<script type='text/javascript'>alert('Successfully Registered')</script>";
                // Redirect to index.php after successful registration
                header("Location: index.php");
                exit();
            } else {
                echo "<script type='text/javascript'>alert('Registration Failed')</script>";
            }
        } else {
            echo "<script type='text/javascript'>alert('Please fill all fields')</script>";
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="StyleSheet.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
  href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <title>Register</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Changa:wght@200&display=swap" rel="stylesheet">
</head>
<body>
    <section class="contact" id="contact">
        <div class="contact-text">
            <h2><span>Register</span> an account.</h2>
        </div>

        <div class="contact-form">
        <h2><span>Enter your details:</span></h2>
            <form method="POST" action=""> 
                <label>Username</label>
                <input type="text" name="username" required> 
                <label>Email</label>
                <input type="email" name="email" required> 
                <label>Password</label>
                <input type="password" name="password" required> 
                <button type="submit" class="btn" value="Submit">SUBMIT</button>
            </form>
            <br>
            <h4>Already have an account? <span><a href="index.php#contact"> Click here to LOGIN</a></span></h4>
        </div>

    </section>
    <section class="end">
        <div class="last-text">
            <p>Copyright © 2024 Portfolio belongs to Isidal Kent Almoite Carino All Rights Reserved.</p>
        </div>
        <div class="gotop">
            <a href="index.php"><i class="fa-solid fa-house"></i></a>
        </div>
    </section>

<footer>

</footer>
</body>
</html>