<?php

function setComments($conn) {
    if (isset($_POST['commentSubmit'])){
        $uid = $_POST['uid'];
        $date = $_POST['date'];
        $message = $_POST['message'];

        $sql = "INSERT INTO comments (uid, date, message) 
        VALUES ('$uid', '$date', '$message')";

        $result = $conn->query($sql);
    }
}



function getComments($conn){
    $sql = "SELECT * FROM comments";
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) {
        
        $id = $row['uid'];
        $sqlTwo = "SELECT * FROM user WHERE id='$id'";
        $resultTwo = $conn->query($sqlTwo);

        if ($rowTwo = $resultTwo->fetch_assoc()) {
            echo "<div class = 'feed-box'>";
            echo "<b>".$rowTwo['uid']."</b><br>";
            echo "<span style='font-size: 12px;'>".$row['date']."</span><br>";
            echo $row['message']."<br><br>";
            echo "</p>";

            if (isset($_SESSION['id'])){
                if ($_SESSION['id'] == $rowTwo['id']){
                    echo "
                    <form method='POST' action='editcomment.php'>
                        <input type='hidden' name='cid' value='".$row['cid']."'>
                        <input type='hidden' name='uid' value='".$row['uid']."'>
                        <input type='hidden' name='date' value='".$row['date']."'>
                        <input type='hidden' name='message' value='".$row['message']."'>
                        <button class='btn'>Edit Feedback</button>
                    </form>

                    <form method='POST' action='".deleteComments($conn)."'>
                        <input type='hidden' name='cid' value='".$row['cid']."'>
                        <button type='submit' name='commentDelete' class='btn'>Delete Feedback</button>
                    </form>";
                }
            }
            
            echo "</div>";
        }
    }
}


function editComments($conn) {
    if (isset($_POST['commentSubmit'])) {
        $cid = $_POST['cid'];
        $uid = $_POST['uid'];
        $date = $_POST['date'];
        $message = $_POST['message'];

        $sql = "UPDATE comments SET message='$message' WHERE cid='$cid'";
        $result = $conn->query($sql);
        header("Location: index.php");
    }
}   

function deleteComments($conn) {
    if (isset($_POST['commentDelete'])) {
        $cid = $_POST['cid'];

        $sql = "DELETE FROM comments WHERE cid='$cid'";
        $result = $conn->query($sql);
    }
}

function getLogin($conn){
    if (isset($_POST['loginSubmit'])) {
        $uid = $_POST['uid'];
        $pwd = $_POST['pwd'];

        $sql = "SELECT * FROM user WHERE uid='$uid' AND pwd='$pwd'";
        $result = $conn->query($sql);
        if (mysqli_num_rows($result) > 0) {
            if ($row = $result->fetch_assoc()) {
                $_SESSION['id'] = $row['id'];
                $_SESSION['uid'] = $row['uid']; // Set the uid in session
                header("Location: index.php?loginsuccess");
                exit();
            }
        } else {
            header("Location: index.php?loginfailed");
            exit();
        }
    }
}
function userLogout() {
    if (isset($_POST['logoutSubmit'])) {
        session_destroy();
        header("Location: index.php");
            exit();
    }
}

