<?php

if (!isset($_SESSION['ran_once'])) {
    session_start();
    if(isset($_SESSION['user'])) {
    $received_variable = $_SESSION['user'];}}

    $_SESSION['ran_once'] = true;
    ?>  


<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="index.css">
    <script src="index.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" 
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preload" href="index.css" as="style">
    <link rel="preload" href="index.js" as="script">
    <link rel="preload" href="index.php" as="script">
    <link rel="preload" href="index.php" as="image">
    <script src="index.js"></script>
    
    
</head>
<body>

    
    <div id="home" style="position: absolute; top: 0;"></div>
    <header>

        <a class="logo" href="#home">DGH</a>

        <nav>

                <a href="#home">Home</a>
                <a href="#facility">Facility</a>
                <a href="#galery">Galery</a>
                <a href="#checkin">Checkin</a>
                <a href="#about">About Us</a>
                
                <a id="login" href="login.php">Log in</a>
                <a id="lgo" href="login.php"><i class="fa-solid fa-user"></i></a>

        </nav>

    </header>
        
            <section class="home">

                <div class="container">

                        <div class="container-slider">
                            <div class="wrapper">
                                <img src="aset/slide1.JPEG">
                                <img src="aset/slide2.jpeg">
                                <img src="aset/slide3.jpg">
                                <img src="aset/slide4.jpg">
                            </div>
                        </div>
        
                        <div class="img-container">
        
                            <img class="img1" src="aset/image 5.jpeg" alt="">
                            <img class="img2" src="aset/image 2.jpg" alt="">
                            <img class="img3" src="aset/img3.jpg" alt="">
                            <img class="img4" src="aset/img8.jpg" alt="">
        
                        </div> 

                        <div class="container-maps">

                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3945.673180341791!2d115.26265815439189!3d-8.531075193997848!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd23d994683cc45%3A0x7e27a019dead445!2sDanu%20Guest%20House!5e0!3m2!1sid!2sid!4v1714698274176!5m2!1sid!2sid" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        
                        </div>

                </div>

                <div class="text">

                    <p class="judul">Danu Guest House <img src="https://tse1.mm.bing.net/th?id=OIP.v9MbEZAwsiAIGCf8HJQJLQHaHb&pid=Api&P=0&h=220" alt="" srcset=""><h3>4.7<a href="#checkin">16 Ulasan</a></h3></p>
                    <hr>
                    <p class="fas">3 visitors / 1 Bedroom / 2 Bed / 1 Bathroom</p>

                </div>

                <div class="diskon">
                    
                    <a href="#checkin"><img src="aset/diskon.png"></a>
                
                </div>
                
            </section>

            <section id="facility">

                <container class="container-facility">

                       <h1>Facility</h1> 
                       <h2>Our Guest House</h2>

                       <div class="text-info">

                        <p>  Stay in the secluded terraced gardens of one of Bali's most respected art, music and dance 
                             centers. Minutes from shops and restaurants in Ubud. Warm and welcoming hosts, with creative space available for musicians and painters.
                             <br>
                             Our Guest house was built as a home for traveling musicians, dancers and artists.
                             <br><br>Breakfast is included every morning, including coffee, and fresh fruit sometimes grown in the garden itself. It is our intention to create a home away from home for you here - the perfect place to explore all that this beautiful island has to offer.

                        </p>

                    </div>
                       <div class="facility-item">

                        <ul class="ul1">

                            
                            <li>Balcony <i class="fa-solid fa-house"></i></li>
                            <li>Backyard <i class="fa-solid fa-house"></i></li>
                            <li>Free Parking<i class="fa-solid fa-car"></i></li>
                            <li>Air Conditioner <i><img src="aset/icon/ac.png" style="margin-bottom: -8px;"></i></li>
                            <li>Wifi <i class="fa-solid fa-wifi"></i></li>
                            <li>Workbench <i><img src="aset/icon/desk.png" alt=""></i></li>
                            <li>Deposit Counter <i><img src="aset/icon/suitcase.png"></i></li>
                            <li>Alowed to Smoke <i><img src="aset/icon/smoke.png" alt=""></i></li>
                            

                        </ul>
                        <ul class="ul2">
                            <li>Cleaning Service <i><img src="aset/icon/cleaningservice.png" alt=""></i></li>
                            <li>Basic Needs <i><img src="aset/icon/towel.png" alt=""></i><br><p>Towel, bed sheets, toilet paper, hangers</p></li>
                            <li>Kitchen <i><img src="aset/icon/kitchen.png" alt=""></i></li>
                            <li>Fridge <i><img src="aset/icon/fridge.png" alt=""></i></li>
                            <li>Basic cooking equipment <i><img src="aset/icon/spatula.png" alt=""></i><br><p>Wok and pan, stove, salt, sugar</p></li>
                            <li>Tableware <i class="fa-solid fa-utensils"></i><br><p>Plate, bowl, spoon, fork, chopstick</p></li>

                        </ul>

                       </div>

                </container>

            </section>

            <section id="galery">
                
                <h1>Galery</h1>
                <div class="slider">
                    <div class="slides">

                        <div class="slide"><img src="aset/galery/g1.webp" alt="Image 1"></div>
                        <div class="slide"><img src="aset/galery/g2.webp" alt="Image 2"></div>
                        <div class="slide"><img src="aset/galery/g3.webp" alt="Image 3"></div>
                        <div class="slide"><img src="aset/galery/g4.webp" alt="Image 3"></div>
            
                    </div>
                </div>
                    <button class="prev" onclick="changeSlide(-1)">&#10094;</button>
                    <button class="next" onclick="changeSlide(1)">&#10095;</button>

            </section>

            <section id="checkin">

                <div class="book">

                        <h1>Checkin</h1>
                        <p class="ckin">Checkin</p><p class="ckout">Checkout</p>
                        <div class="form">

                        
                            <form action="" method="post">

                                
                                <input type="date" name="ckin" id="ckin">
                                <input type="date" name="ckout" id="ckout">
                            </form>
                                

                        </div>

                            <p id="total">TOTAL</p>
                        
                        <button type="submit" id="btnc" onclick="checkDate();">Checkin</button>
                        <p id="error"></p>

                </div>   

                <div class="container-sld">
                            <div class="wrp">
                                <img src="aset/rating/r1.png">
                                <img src="aset/rating/r2.png">
                                <img src="aset/rating/r3.png">
                                <img src="aset/rating/r4.png">
                            </div>
                        </div>

                        <div class="footer" id="about">
                            <div class="left">
                                <img src="aset/rating/Screenshot 2024-05-17 062512.png" alt="" srcset="">
                                <p class="nama">Nyoman Danu</p>
                                <hr>
                                <p class="pp">Owner | Humble and Friendly</p>
                            </div>
                            <div class="right">
                                <a href="https://wa.me/6285739611658" target="_blank"><img src="aset/icon/whatsapp.png" alt=""><p>085739778</p></a>
                                <img src="aset/icon/mail.png" alt="" srcset=""><p class="oo">abcde@gmail.com </p>
                            </div>
                                
                        </div>
            </section>
    
    <script> 

    document.addEventListener('DOMContentLoaded', function logout() {
        
        var log = <?php echo $received_variable; ?>;
        var login = document.getElementById('login');
        var lgo =document.getElementById('lgo');

        if(log == null){

        login.textContent = 'Login';
        login.href = 'login.php';
        login.style.color = 'white';
        lgo.style.color = 'white';

        }
        else{

        login.textContent = 'Logout';
        login.href = 'login.php';
        login.style.color = 'yellow';
        lgo.style.color = 'yellow';
        }
    
    });

    </script>

</body>
</html>