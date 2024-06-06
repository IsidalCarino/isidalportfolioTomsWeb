<?php

    ob_start();

    date_default_timezone_set('Asia/Dubai');
    include 'dbh.inc.php';
    include 'comments.inc.php';
    session_start();
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
    <title>Main Page</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Changa:wght@200&display=swap" rel="stylesheet">
</head>
<body>
    <!--NAVIGATION-->
    <header>
        <a href="#" class="logo"><Span>Isidal</Span>'s Art Gallery</a>
        <ul class="navlist">
            <li><a href="#home" class="active">Home</a></li>
            <li><a href="#about">The Artist</a></li>
            <li><a href="#artgallery">Art Gallery</a></li>
            <li><a href="#contact">Feedbacks</a></li>
        </ul>
        <div class="bx bx-menu" id="menu-icon"></div>
    </header>
    <!--HOME-->
    <section class="home" id="home">
        <div class="home-text">
            <div class="slide">
                <span class="one">Hello</span>
                <span class="two">I am</span>
            </div>
            <h1>Isidal <span>"@easy_daru"</span></h1>
            <h3><span>Digital</span> Artist</h3>
            <p>"My best artworks are posted in this <span>PORTFOLIO</span>"</p>
                <div class="button">
                    <a href="https://www.instagram.com/easy_daru/" class="btn">Instagram</a>
                    <a href="#" class="btn2">← Visit My IG</a>
                </div>
        </div>
    </section>
    <!--ABOUT ME-->
    <section class="about" id="about">
        <div class="about-img">
            <img src="Medias/JackOLantern.jpg">
        </div>
        <div class="about-text">
            <h2>About <span>Me</span></h2>
            <h4>A Digital Artist</h4>
            <p>Hi my real name is Isidal Kent Almoite Carino. I am a Digital Artist who embarked on this creative journey in December 2021.
                Ever since then, I have been honing my skills and exploring various techniques.
                
                If you are interested in commissioning a piece or simply want to connect with me to discuss
                arts, ideas, or collaborations; feel free to reach out.</p>
            <a href="https://www.linkedin.com/in/isidal-kent-carino-059b77202/" class="btn">Visit my LinkedIn</a>
        </div>
    </section>

    <!--ART GALLERY-->
    <section class="artgallery" id="artgallery">
        <div class="main-text">
            <p>My arts using the graphing tablet.</p>
            <h2><span>Art</span> Gallery</h2>
        </div>
        <div class="artgallery-content">
            <div class="row">
                <img src="ArtGallery/1.png">
                <div class="layer">
                    <h5>Shoompy</h5>
                </div>
            </div>
            <div class="row">
                <img src="ArtGallery/11.png">
                <div class="layer">
                    <h5>Amane Kanata</h5>
                </div>
            </div>
            <div class="row">
                <img src="ArtGallery/2.png">
                <div class="layer">
                    <h5>Captain Murasa</h5>
                </div>
            </div>
            <div class="row">
                <img src="ArtGallery/3.png">
                <div class="layer">
                    <h5>Wooshidaru</h5>
                </div>
            </div>
            <div class="row">
                <img src="ArtGallery/4.png">
                <div class="layer">
                    <h5>Guindelvere</h5>
                </div>
            </div>
            <div class="row">
                <img src="ArtGallery/5.png">
                <div class="layer">
                    <h5>Hiwazomi</h5>
                </div>
            </div>
            <div class="row">
                <img src="ArtGallery/6.png">
                <div class="layer">
                    <h5>Judcylla</h5>
                </div>
            </div>
            <div class="row">
                <img src="ArtGallery/7.png">
                <div class="layer">
                    <h5>Smile</h5>
                </div>
            </div>
            <div class="row">
                <img src="ArtGallery/8.png">
                <div class="layer">
                    <h5>Millie Parfait</h5>
                </div>
            </div>
            <div class="row">
                <img src="ArtGallery/9.png">
                <div class="layer">
                    <h5>Hiwata</h5>
                </div>
            </div>
        </div>
    </section>


    <!--FEEDBACK-->
    <style>
    </style>
    <section class="contact" id="contact">
        <div class="contact-text">
            <h2><span>Contact Info</span></h2>
            <h4>If you want to hire or include me in your project.</h4>
            <p>I am a Digital Artist and a Graphic Designer; creating arts and designs.</p>
                <div class="list">
                    <li><a href="#">+971 55 970 6759</a></li>
                    <li><a href="mailto:isidalcarino@yahoo.com">isidalcarino@yahoo.com</a></li>
                </div>

                <div class="contact-icons">
                    <a href="https://www.instagram.com/easy_daru/"><i class="fa-brands fa-instagram"></i></a>
                    <a href="https://twitter.com/Ishidaru"><i class="fa-brands fa-twitter"></i></a>
                    <a href="https://www.linkedin.com/in/isidal-kent-carino-059b77202/"><i class="fa-brands fa-linkedin"></i></a>
                </div>
        </div>

        <div class="contact-form">
        <h2><span>Feedbacks</span></h2>
        <h4>If you don't see your posted feedback, edited feedback, or if you still see your deleted feedback, please <span>REFRESH</span> the page. Thank you!</h4><br>
        <?php 
        getComments($conn);

            ?>
        <?php
            if (isset($_SESSION['id'])) {
                echo "
                <form class='feed-box' method='POST' action='".setComments($conn)."'>
                    <input type='hidden' name='uid' value='".$_SESSION['id']."'>
                    <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
                    <textarea name='message'></textarea>
                    <button type='submit' name='commentSubmit' class='btn'>Comment</button>
                </form><br>";

                echo "
                    <h4>You are <span>LOGGED IN</span> as <span>'".$_SESSION['uid']."'</span> You can enter a feedback.</h4>
                    <form method='POST' action='".userLogout()."'>
                    <button type='submit' name='logoutSubmit' class='btn'>Logout</button>
                </form>";
        } else {
            echo "
            <h4>Please <span>LOGIN</span> to write feedback.</h4>
            <form method='POST' action='".getLogin($conn)."'>
                    <input type='text' name='uid'>
                    <input type='password' name='pwd'>
                    <button type='submit' name='loginSubmit' class='btn'>Login</button>
                </form><br>
                <h4>Don't have an account? please <span>REGISTER</span></h4>
                <a href='register.php'><button class='btn'>Register</button></a>";
        }
        ?>
        </div>

    </section>

    <!--ENDING-->
    <section class="end">
        <div class="last-text">
            <p>Copyright © 2024 Portfolio belongs to Isidal Kent Almoite Carino All Rights Reserved.</p>
        </div>
        <div class="gotop">
            <a href="#home"><i class="fa-solid fa-house"></i></a>
        </div>
    </section>
    <!--JAVASCRIPT-->
    <script type="text/javascript" src="script.js"></script>

<footer>

</footer>
</body>
</html>
