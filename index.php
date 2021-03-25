<?php 
    require_once "user/checking/connection.php";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $name=$con->real_escape_string(strip_tags($_REQUEST['name']));
        $email=$con->real_escape_string(strip_tags($_REQUEST['email']));
        $message=$con->real_escape_string(strip_tags($_REQUEST['message']));
        $id=rand(0,10000);

        $sql="insert into faq (id,name,email,message) values ('$id','$name','$email','$message')";
        $con->query($sql);
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <title>BesideU</title>
</head>
<body>

    <section id="font-page">
    <header>
        <div class="logo">
            <img src="img/logo.png" alt="Logo">
        </div>
        <div class="menu">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#service">Service</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="user/view/signup.php">Signup</a></li>
                <li><a href="user/view/login.html">Login</a></li>
            </ul>
        </div>
    </header>
        <div>
            <h1>BESIDE<span class="logo_u">U</span> For Make Friends</h1>
            <p>Find a group of people who challenge and inspire you, spend a lot of time with them, and it will change your life.</p>
            <a href="user/view/signup.php" class="btn">Join Now &rarr;</a>
        </div>
    </section>

    <section id="about">
        <h1>About Us</h1>
        <div class="about_wrapper">
            <div class="about_content">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut nam eaque reiciendis laboriosam corrupti eveniet iste repudiandae eius, nulla nemo. Quisquam possimus eos modi provident eum fugit, nobis ducimus esse.Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut nam eaque reiciendis laboriosam corrupti eveniet iste repudiandae eius, nulla nemo. Quisquam possimus eos modi provident eum fugit, nobis ducimus esse.</p>
            </div>
            <div class="about_picture">
                <img src="img/side_image.jpg" alt="farmer">
            </div>
        </div>
    </section>

    <section id="service">
            <h1 class="header_service">Services</h1>
        <div class="service_wrapper">
            <div>
                <i class="fas fa-air-freshener"></i>
                <h1>Friends</h1>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsam quam facilis illo officia! Fuga totam eveniet ex iste provident! Laborum vitae rem inventore ipsa placeat cumque tempore quos sed ipsum.</p>
                <a href="user/view/signup.php">Buy Now &rarr;</a>
            </div>
            <div>
                <i class="fab fa-accusoft"></i>
                <h1>Friends</h1>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsam quam facilis illo officia! Fuga totam eveniet ex iste provident! Laborum vitae rem inventore ipsa placeat cumque tempore quos sed ipsum.</p>
                <a href="user/view/signup.php">Buy Now &rarr;</a>
            </div>
            <div>
                <i class="fab fa-phoenix-framework"></i>
                <h1>Friends</h1>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsam quam facilis illo officia! Fuga totam eveniet ex iste provident! Laborum vitae rem inventore ipsa placeat cumque tempore quos sed ipsum.</p>
                <a href="user/view/signup.php">Buy Now &rarr;</a>
            </div>
    </section>

    <section id="want_help">
        <h1>Want our help?</h1>
        <div>
        <a href="user/view/login.html">Login &rarr;</a>
        <a href="user/view/signup.php">Signup &rarr;</a>
        </div>
    </section>

    <section id="contact">
        <div>
            <img src="img/black_image.png" alt="black_image">
        </div>
        <div class="form">
            <form method="POST">            
                    <h1>Ask Your Queries</h1>
                    <div>
                        <input type="text" name="name" id="" placeholder="Name*" autocomplete="off" required>                
                    </div>
                    <div>
                        <input type="email" name="email" id="" placeholder="Email*" autocomplete="off" required>     
                    </div>
                    <div>
                        <textarea name="message" placeholder="Message" autocomplete="off"></textarea>                      
                    </div>
                    <div>
                        <input type="submit" value="Send">
                    </div>
            </form>
        </div>
    </section>

    <footer>
        <div class="footer-1"><div class="contact_info">
            <h2>Contact Info</h2>
            <div>
                <i class="fas fa-map-marker-alt"></i>
                <span>Dhaka, Bangladesh</span>
            </div>
            <div>
                <i class="fas fa-phone"></i>
                <span>+8801736928117</span>
            </div>
            <div>
                <i class="fas fa-envelope"></i>
                <span>khan.shakil.1414@gmail.com</span>
            </div>
        </div>
        <div class="get_in_touch">
            <h2>Get In Touch</h2>
            <div>
                <i class="fab fa-facebook-f"></i>
                <a href="">Facebook</a>
            </div>
            <div>
                <i class="fab fa-linkedin-in"></i>
                <a href="">Linkedin</a>
            </div>
            <div>
                <i class="fab fa-github"></i>
                <a href="">Github</a>
            </div>
        </div>
        <div class="our_company">
            <h2>Our Company</h2>
            <a href="#font-page">Home</a>
            <a href="#about">About Us</a>
            <a href="#service">Services</a>
        </div>
    </div>
    <div class="footer-2">
        <hr>
        <p>&copy; All rights reserved by <span>Shakil Khan </span> | 2020</p>
    </div>
    </footer>
</body>
</html>