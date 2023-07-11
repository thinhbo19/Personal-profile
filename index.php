<?php 
$connect = mysqli_connect('localhost','root','','contact_db') or die('connection failed');

if(isset($_POST['send'])){
    $name = mysqli_real_escape_string($connect, $_POST['name']);
    $email = mysqli_real_escape_string($connect, $_POST['email']);
    $number = mysqli_real_escape_string($connect, $_POST['number']);
    $msg = mysqli_real_escape_string($connect, $_POST['message']);


    $select_message = mysqli_query($connect, "SELECT * FROM `contact_form` WHERE name = '$name' AND email = '$email' AND number = '$number' AND message ='$msg'") or die('query failed');


    if(mysqli_num_rows($select_message) > 0){
        
    } else{
        mysqli_query($connect, "INSERT INTO `contact_form` (name,email,number,message) VALUES ('$name','$email','$number','$msg')") or die('query failed');
        $message[] = 'message sent successfully!';
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
</head>

<body>



    <?php
    if (isset($message) && !empty($message)) {
        $lastMessage = end($message);
        echo '
            <div class="message">
                <span>'.$lastMessage.'</span>
                <i class="fa-solid fa-xmark" onclick="this.parentElement.remove();"></i>
            </div>      
        ';
    }
?>


    <header class="header">
        <div id="menu-btn" class="fas fa-bars"></div>

        <a href="#home" class="logo">THINH.</a>

        <nav class="navbar">
            <ul>
                <li class="list active">
                    <a href="#home" class="active">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">home</span>
                    </a>
                </li>

                <li class="list">
                    <a href="#about">
                        <span class="icon">
                            <ion-icon name="information-circle-outline"></ion-icon>
                        </span>
                        <span class="title">about</span>
                    </a>
                </li>

                <li class="list">
                    <a href="#interest">
                        <span class="icon">
                            <ion-icon name="settings-outline"></ion-icon>
                        </span>
                        <span class="title">interest</span>
                    </a>
                </li>

                <li class="list">
                    <a href="#portfolio">
                        <span class="icon">
                            <ion-icon name="person-outline"></ion-icon>
                        </span>
                        <span class="title">portfolio</span>
                    </a>
                </li>

                <li class="list">
                    <a href="#contact">
                        <span class="icon">
                            <ion-icon name="call-outline"></ion-icon>
                        </span>
                        <span class="title">contact</span>
                    </a>
                </li>
            </ul>
        </nav>


        <div class="follow">
            <a href="https://www.facebook.com/profile.php?id=100054424039953" class="fab fa-facebook-f"></a>
            <a href="https://www.instagram.com/_umbooo_/" class="fab fa-instagram"></a>
            <a href="https://github.com/thinhbo19" class="fab fa-github"></a>
            <a href="https://www.linkedin.com/in/th%E1%BB%8Bnh-h%E1%BB%93-013185237/" class="fab fa-linkedin"></a>
        </div>

    </header>


    <section class="home" id="home">
        <div class="image">
            <img data-aos="fade-right" src="./image/imgMain.jpg" alt="">
        </div>

        <div class="content" data-aos="fade-up">
            <h3>Ho Ngoc Hung Thinh</h3>
            <span>HCMUE - 47.01.104.200</span>
            <p>I am a third year information technology student of Ho Chi Minh City University of Education.</p>
            <a href="#about" class="btn">about</a>
        </div>
    </section>

    <section class="about" id="about">
        <h1 class="heading" data-aos="zoom-in-up"><span>biography</span></h1>

        <div class="biography">
            <div class="bio">
                <h3 data-aos="fade-right"><span>name: </span>Ho Ngoc Hung Thinh</h3>
                <h3 data-aos="fade-left"><span>email: </span>thinhbo0319@gmail.com</h3>
                <h3 data-aos="fade-right"><span>address: </span>Can Gio, Ho Chi Minh city</h3>
                <h3 data-aos="fade-left"><span>phone: </span>0931205778</h3>
                <h3 data-aos="fade-left"><span>age: </span> 20 year </h3>
                <h3 data-aos="fade-up"><span>experience: </span>Fresher</h3>
            </div>
            <a href="#" class="btn">dowload CV</a>
        </div>

        <div class="skills">
            <h1 data-aos="zoom-in-up" class="heading"><span>skills</span></h1>

            <div class="progress">
                <div data-aos="fade-right" class="bar">
                    <h3><span>HLML</span> <span>90%</span></h3>
                </div>
                <div data-aos="fade-left" class="bar">
                    <h3><span>CSS</span> <span>80%</span></h3>
                </div>
                <div data-aos="fade-right" class="bar">
                    <h3><span>JAVA SCRIPT</span> <span>50%</span></h3>
                </div>
                <div data-aos="fade-left" class="bar">
                    <h3><span>PHP</span> <span>60%</span></h3>
                </div>
            </div>
        </div>

        <div class="edu-exp">
            <h1 data-aos="zoom-in-up" class="heading"><span>education & experience</span></h1>

            <div class="row">

                <div class="box-container">

                    <h3 data-aos="fade-up-right" class="title">Education</h3>

                    <div class="box" data-aos="fade-up-right">
                        <span>( 2019 - 2020 )</span>
                        <h3>Web Dev</h3>
                        <p>saddddddddddddddddddddddddddddddddddddddddsdasdsadasdsadasdasdasdasdsadsd</p>
                    </div>

                    <div class="box" data-aos="fade-up-right">
                        <span>( 2019 - 2020 )</span>
                        <h3>Web Dev</h3>
                        <p>saddddddddddddddddddddddddddddddddddddddddsdasdsadasdsadasdasdasdasdsadsd</p>
                    </div>

                    <div class="box" data-aos="fade-up-right" data-aos="fade-up-right">
                        <span>( 2019 - 2020 )</span>
                        <h3>Web Dev</h3>
                        <p>saddddddddddddddddddddddddddddddddddddddddsdasdsadasdsadasdasdasdasdsadsd</p>
                    </div>

                    <div class="box" data-aos="fade-up-right" data-aos="fade-up-right">
                        <span>( 2019 - 2020 )</span>
                        <h3>Web Dev</h3>
                        <p>saddddddddddddddddddddddddddddddddddddddddsdasdsadasdsadasdasdasdasdsadsd</p>
                    </div>

                </div>

                <div class="box-container" data-aos="fade-up-left">

                    <h3 class="title">Education</h3>

                    <div class="box" data-aos="fade-up-left">
                        <span>( 2019 - 2020 )</span>
                        <h3>Web Dev</h3>
                        <p>saddddddddddddddddddddddddddddddddddddddddsdasdsadasdsadasdasdasdasdsadsd</p>
                    </div>

                    <div class="box" data-aos="fade-up-left">
                        <span>( 2019 - 2020 )</span>
                        <h3>Web Dev</h3>
                        <p>saddddddddddddddddddddddddddddddddddddddddsdasdsadasdsadasdasdasdasdsadsd</p>
                    </div>

                    <div class="box" data-aos="fade-up-left">
                        <span>( 2019 - 2020 )</span>
                        <h3>Web Dev</h3>
                        <p>saddddddddddddddddddddddddddddddddddddddddsdasdsadasdsadasdasdasdasdsadsd</p>
                    </div>

                    <div class="box" data-aos="fade-up-left">
                        <span>( 2019 - 2020 )</span>
                        <h3>Web Dev</h3>
                        <p>saddddddddddddddddddddddddddddddddddddddddsdasdsadasdsadasdasdasdasdsadsd</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="interest" id="interest">

        <h1 class="heading" data-aos="zoom-in-down"><span>interest</span></h1>

        <div class="box-container">

            <div class="box" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                <i class="fas fa-code"></i>
                <h3 style="background-color: red;">Web development</h3>
            </div>

            <div class="box" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                <i class="fas fa-code"></i>
                <h3 style="background-color: red;">Web development</h3>
            </div>

            <div class="box" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                <i class="fas fa-code"></i>
                <h3 style="background-color: yellow;">Web development</h3>
            </div>

            <div class="box" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                <i class="fas fa-code"></i>
                <h3 style="background-color: green;">Web development</h3>
            </div>

            <div class="box" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                <i class="fas fa-code"></i>
                <h3 style="background-color: blue;">Web development</h3>
            </div>


            <div class="box" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                <i class="fas fa-code"></i>
                <h3 style="background-color: orange;">Web development</h3>
            </div>


        </div>

    </section>



    <section class="portfolio" id="portfolio" data-aos="zoom-in-down">

        <h1 class="heading"><span>portfolio</span></h1>


        <div class="box-container">

            <div class="box">
                <img src="./image/imgMain.jpg" alt="">
                <h3>Web Dev</h3>
                <span>2020-2023</span>
            </div>

            <div class="box">
                <img src="./image/imgMain.jpg" alt="">
                <h3>Web Dev</h3>
                <span>2020-2023</span>
            </div>

            <div class="box">
                <img src="./image/imgMain.jpg" alt="">
                <h3>Web Dev</h3>
                <span>2020-2023</span>
            </div>

            <div class="box">
                <img src="./image/imgMain.jpg" alt="">
                <h3>Web Dev</h3>
                <span>2020-2023</span>
            </div>

            <div class="box">
                <img src="./image/imgMain.jpg" alt="">
                <h3>Web Dev</h3>
                <span>2020-2023</span>
            </div>

            <div class="box">
                <img src="./image/imgMain.jpg" alt="">
                <h3>Web Dev</h3>
                <span>2020-2023</span>
            </div>


        </div>

    </section>



    <section class="contact" id="contact">

        <h1 class="heading"><span>contact me</span></h1>

        <form action="#" method="post">
            <div class="flex">
                <input type="text" name="name" placeholder="enter your name" class="box" required>
                <input type="email" name="email" placeholder="enter your email" class="box" required>
            </div>

            <input type="number" min="0" name="number" placeholder="enter your number" class="box" required>
            <textarea name="message" class="box" required placeholder="enter your mess" cols="30" rows="10"></textarea>
            <input type="submit" value="send me message" name="send" class="btn">
        </form>

        <div class="box-container">

            <div class="box">
                <i class="fas fa-phone"></i>
                <h3>Phone</h3>
                <p>0931205778</p>
            </div>
            <div class="box">
                <i class="fas fa-envelope"></i>
                <h3>Email</h3>
                <p>thinhbo0319@gmail.com</p>
            </div>
            <div class="box">
                <i class="fas fa-map-marker-alt"></i>
                <h3>Address</h3>
                <p>Can Gio, Ho Chi Minh city</p>
            </div>

        </div>

    </section>

    <div class="credit"> <?php echo date('Y');?> </div>

    <script src="script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
    AOS.init({
        duration: 800,
        delay: 300
    })
    </script>
</body>

</html>