<?php
    date_default_timezone_set('Asia/Dubai');
    include 'dbh.inc.php';
    include 'comments.inc.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['commentSubmit'])) {
        editComments($conn);
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
    <title>Edit Comment</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Changa:wght@200&display=swap" rel="stylesheet">
</head>
<body>
    <section class="contact" id="contact">
        <div class="contact-text">
            <h2><span>Edit</span> your feedback.</h2>
        </div>

        <div class="contact-form">
        <h2><span>I'm happy to hear from you!</span></h2>
        <?php 
            $cid = $_POST['cid'];
            $uid = $_POST['uid'];
            $date = $_POST['date'];
            $message = $_POST['message'];


            echo "<form method='POST' action='".editComments($conn)."'>
                    <input type='hidden' name='cid' value='".$cid."'>
                    <input type='hidden' name='uid' value='".$uid."'>
                    <input type='hidden' name='date' value='".$date."'>
                    <textarea name='message'>".$message."</textarea>
                    <button type='submit' name='commentSubmit' class='btn'>Edit Feedback</button>
                </form>";
            ?>

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
