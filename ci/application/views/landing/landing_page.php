<!DOCTYPE HTML>
<html lang="zxx">

<head>
    <title>My School Education Category Bootstrap Responsive website Template | Home :: w3layouts</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords" content="My School Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        * {
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
            list-style: none;

        }
        .wrapper {

            position: relative;
            width: 350px;
            height: 500px;
            background: transparent;
            /* background: #dadae4; */
            border-radius: 20px;
            border: 4px solid rgba(255, 255, 255, .5);
            /* border-radius: 8px; */
            backdrop-filter: blur(20px);
            box-shadow: 0 0 30px rgba(0, 0, 0, .5);
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
            transform: scale(0);
            transition: transform .5s ease, height .2s ease;
            /* margin-top:-200px; */
            margin-top: -40%;
            margin-left: 25%;

        }
       


        .wrapper.active-popup {
            transform: scale(1);
        }

        .wrapper.active {
            height: 520px;
        }


        .wrapper .form-box {
            width: 100%;
            padding: 40px;
        }

        .wrapper .form-box.login {
            transition: transform .18s ease;
            transform: translateX(0);
        }

        .wrapper.active .form-box.login {
            transition: none;
            transform: translateX(-400px);
        }

        .wrapper .form-box.register {
            position: absolute;
            transition: none;
            transform: translateX(400px);
        }

        .wrapper.active .form-box.register {
            transition: transform .18s ease;
            transform: translateX(0);
        }


        .wrapper .icon-close {
            position: absolute;
            top: 0;
            right: 0;
            width: 45px;
            height: 45px;
            background: #162938;
            font-size: 2em;
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            border-bottom-left-radius: 20px;
            cursor: pointer;
            z-index: 1;
        }

        .form-box h2 {
            font-size: 2em;
            color: grey;
            text-align: center;
        }

        .input-box {
            position: relative;
            width: 100%;
            height: 50px;
            border-bottom: 2px solid #162938;
            margin: 30px 0;
        }

        .input-box label {
            position: absolute;
            top: 50%;
            left: 5px;
            transform: translateY(-50%);
            font-size: 1em;
            color: #fff;
            font-weight: 500;
            pointer-events: none;
            transition: .5s;
        }

        .input-box input:focus~label,
        .input-box input:valid~label {
            top: -5px;
        }

        .input-box input {
            width: 100%;
            height: 100%;
            background: transparent;
            border: none;
            outline: none;
            font-size: 1em;
            color: #fff;
            font-weight: 600;
            padding: 0 35px 0 5px;
        }

        .input-box .icon {
            position: absolute;
            right: 8px;
            font-size: 1.2em;
            color: #fff;
            line-height: 57px;

        }

        .remember-forgot {
            font-size: .9em;
            color: #162938;
            font-weight: 500;
            margin: -15px 0 15px;
            display: flex;
            justify-content: space-between;

        }

        .remember-forgot label input {
            accent-color: #162938;
            margin-right: 3px;

        }

        .remember-forgot a {
            color: #162938;
            text-decoration: none;

        }

        .remember-forgot a:hover {
            text-decoration: underline;
        }

        .btn {
            width: 100%;
            height: 45px;
            background: #162938;
            border-radius: 6px;
            border: none;
            outline: none;
            cursor: pointer;
            font-size: 1em;
            color: #fff;
            font-weight: 500;
        }

        .login-register {
            font-size: .9em;
            color: #162938;
            text-align: center;
            font-weight: 500;
            margin: 25px 0 10px;

        }

        .login-register p a {
            color: #9593df;
            text-decoration: none;
            font-weight: 600;

        }

        .login-register p {
            color: #7c7c8b;
            text-decoration: none;
            font-weight: 600;
            
        }

        .login-register p a:hover {
            text-decoration: underline;
            
        }
      

       
    </style>
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta tag Keywords -->

    <!-- Custom-Files -->
    <link href="css3/bootstrap.css" rel='stylesheet' type='text/css' />
    <!-- Bootstrap-CSS -->
    <link href="css3/style.css" rel='stylesheet' type='text/css' />
    <!-- Style-CSS -->
    <link href="css3/font-awesome.min.css" rel="stylesheet">
    <!-- Font-Awesome-Icons-CSS -->
    <!-- //Custom-Files -->

    <!-- Web-Fonts -->
    <link
        href="//fonts.googleapis.com/css?family=Lora:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext,vietnamese"
        rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800&amp;subset=latin-ext"
        rel="stylesheet">
    <!-- //Web-Fonts -->
</head>

<body>
    <!-- header -->
    <header>
        <div class="container">
            <div class="header d-lg-flex justify-content-between align-items-center py-2 px-sm-2 px-1">
                <!-- logo -->
                <div id="logo">
                    <h1><a href="index.html">My School</a></h1>
                </div>
                <!-- //logo -->
                <!-- nav -->
                <div class="nav_w3ls ml-lg-5">
                    <nav>
                        <label for="drop" class="toggle">Menu</label>
                        <input type="checkbox" id="drop" />
                        <ul class="menu">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="#about">About</a></li>
                            <li><a href="#join">Join Now</a></li>
                            <!-- <li>
                            
                                <label for="drop-2" class="toggle toogle-2">Pages <span class="fa fa-angle-down"
                                        aria-hidden="true"></span>
                                </label>
                                <a href="#">Pages <span class="fa fa-angle-down" aria-hidden="true"></span></a>
                                <input type="checkbox" id="drop-2" />
                                <ul>
                                    <li><a href="#events" class="drop-text">Events</a></li>
                                    <li><a href="#what" class="drop-text">What We Do?</a></li>
                                    <li><a href="#courses" class="drop-text">Popular Courses</a></li>
                                    <li><a href="#stats" class="drop-text">Statistics</a></li>
                                    <li><a href="#gallery" class="drop-text">Gallery</a></li>
                                </ul>
                            </li> -->
                            <li><a href="#contact">Contact</a></li>
                            <li> <a class="btnLogin-popup" onclick="topFunction()" id="myBtn" title="Go to top" style="cursor: pointer;">Login/Signup</a></li>
                            <!-- <button class="btnLogin-popup">Login</button> -->
                            <!-- <li><a href="#login">Register</a></li> -->
                        </ul>
                    </nav>
                </div>
                <!-- //nav -->
            </div>
        </div>
    </header>
    <!-- //header -->

    <!-- banner -->
    <div class="main-w3pvt mian-content-wthree text-center" id="home">
        
        <div class="container">
            
            <div class="style-banner mx-auto">
            <?php if ($this->session->flashdata('username')) { ?>
        <div class="alert alert-success"> <?= $this->session->flashdata('username') ?> </div>
    <?php } ?>
    <?php if ($this->session->flashdata('success')) { ?>
        <div class="alert alert-success"> <?= $this->session->flashdata('') ?> </div>
    <?php } ?>
    <?php if ($this->session->flashdata('pass')) { ?>
        <div class="alert alert-danger" > <?= $this->session->flashdata('pass') ?> </div>
    <?php } ?>
                <h3 class="text-wh font-weight-bold">Welcome to <span>My School</span> <br>Best for Education</h3>
                <p class="mt-3 text-li" id="join">Join the My School now</p>
           
                <div class="wrapper" >
               
                    <span class="icon-close">
                        <ion-icon name="close"></ion-icon>
                    </span>

                    <div class="form-box login">
                        <h2>Login</h2>
                        <form method='POSt' action="<?php echo base_url('Welcome/signin');?>">
             
                            <div class="input-box">
                                <span class="icon"><ion-icon name="mail-outline"></ion-icon></span>
                                <input type="email" name="email" required>
                                <label>Email</label>
                            </div>
                            <div class="input-box">
                                <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
                                <input type="password" name="password" required>
                                <label>Password</label>
                            </div>
                            <div class="remember-forgot">
                                <label><input type="checkbox" required>Remember me</label>
                                <a href="<?php echo base_url('Welcome/fedit');?>">Forget Password</a>
                            </div>
                            <button type="submit" class="btn">Login</button>
                            <div class="login-register">
                                <p>Don't have an account?<a href="#" class="register-link"> Register</a></p>
                            </div>

                        </form>
                    </div>
                    <div class="form-box register">
                        <h2>Registeration</h2>
                        <form method='POST' action="<?php echo base_url('Welcome/signup');?>">
                            <div class="input-box">
                                <span class="icon"><ion-icon name="person"></ion-icon></span>
                                <input type="text" name="username" required>
                                <label>Full Name</label>
                            </div>
                            <div class="input-box">
                                <span class="icon"><ion-icon name="mail-outline"></ion-icon></span>
                                <input type="email" name="email" required>
                                <label>Email</label>
                            </div>
                            <div class="input-box">
                                <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
                                <input type="password" name="password" required>
                                <label>Password</label>
                            </div>
                            <div class="remember-forgot">
                                <label><input type="checkbox" required>I agree to the terms & conditions</label>

                            </div>
                            <button type="submit" class="btn">Register</button>
                            <div class="login-register">
                                <p>Already have an account?<a href="#" class="login-link"> Login</a></p>
                            </div>

                        </form>
                    </div>
                </div>
    
                <!-- form -->

                <!-- //form -->
            </div>
        </div>
    </div>
    <!-- //banner -->

    <!-- banner bottom -->
    <section class="w3ls-bnrbtm py-5" id="about">
        <div class="container py-xl-5 py-lg-3">
            <h3 class="title-w3 mb-md-5 mb-sm-4 mb-2 text-center font-weight-bold">About Us</h3>
            <div class="row">
                <div class="col-lg-6 text-center">
                    <img src="images/r2.jpg" alt="about" class="img-fluid mt-4" />
                </div>
                <div class="col-lg-6 pr-xl-5 mt-4">
                    <h3 class="title-sub mb-4">School is called the ‘Temple of Knowledge’ in Hinduism.</h3>
                    <p class="sub-para">
                    <h5>School provides a good environment to learn.</h5>
                    </p>
                    <p class="sub-para pt-4 mt-4 border-top">The children go to school to learn.
                        After entering the School campus, children become students.

                        Children receive both primary growth and mental growth in School.

                        It is the place where we learn to differentiate between right and wrong</p>
                </div>
            </div>
        </div>
    </section>
    <!-- //banner bottom -->

    <!-- services -->
    <div class="services py-5" id="what">
        <div class="container py-xl-5 py-lg-3">
            <h3 class="title-w3 mb-xl-5 mb-sm-4 mb-2 text-center text-wh font-weight-bold">What We Do?</h3>
            <div class="row w3pvtits-services-row text-center">
                <div class="col-lg-4 serv-w3mk mt-5">
                    <div class="w3pvtits-services-grids">
                        <span class="fa fa-leanpub ser-icon" aria-hidden="true"></span>
                        <h4 class="text-bl my-4">Active Learning</h4>
                        <p class="text-left">Learning is an active process. We learn by doing.. Only Knowledge that is
                            used sticks in your mind .</p>
                        <!-- <a class="service-btn mt-xl-5 mt-4 btn" href="#">Read More<span class="fa fa-long-arrow-right ml-2"></span></a> -->
                    </div>
                </div>
                <div class="col-lg-4 serv-w3mk mt-5">
                    <div class="w3pvtits-services-grids">
                        <span class="fa fa-graduation-cap ser-icon" aria-hidden="true"></span>
                        <h4 class="text-bl my-4">Full Day Programs </h4>
                        <p class="text-left">Itaque earum rerum hic tenetur asap iente delectus rulla accumsan.</p>
                        <!-- <a class="service-btn mt-xl-5 mt-4 btn" href="#">Read More<span class="fa fa-long-arrow-right ml-2"></span></a> -->
                    </div>
                </div>
                <div class="col-lg-4 serv-w3mk mt-5">
                    <div class="w3pvtits-services-grids">
                        <span class="fa fa-users ser-icon" aria-hidden="true"></span>
                        <h4 class="text-bl my-4">Expert Teachers</h4>
                        <p class="text-left">The Great teacher INSPIRES.</p>
                        <!-- <a class="service-btn mt-xl-5 mt-4 btn" href="#">Read More<span class="fa fa-long-arrow-right ml-2"></span></a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //services -->

    <!-- courses -->

    <!-- //places -->

    <!-- stats section -->
    <div class="middlesection-w3pvt py-sm-5 pt-sm-0 pt-5 mt-5" id="stats">
        <div class="container py-xl-5 py-lg-3">
            <div class="offset-lg-4 offset-sm-3 left-build-wthree aboutright-w3pvtwthree">
                <h3 class="title-w3-2 title-w3 mb-md-5 mb-4 font-weight-bold">Our Statistics</h3>
                <div class="row">
                    <div class="col-4 w3layouts_stats_left w3_counter_grid">
                        <h4 class="counter">38+</h4>
                        <p class="para-text-w3ls text-li let">Total Teachers</p>
                    </div>
                    <div class="col-4 w3layouts_stats_left w3_counter_grid2">
                        <h4 class="counter">30</h4>
                        <p class="para-text-w3ls text-li let">Class Rooms</p>
                    </div>
                    <div class="col-4 w3layouts_stats_left w3_counter_grid1">
                        <h4 class="counter">12</h4>
                        <p class="para-text-w3ls text-li let">School Buses</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="property-paper">
            <img src="images/img3.png" alt="" class="img-fluid agents-w3" />
        </div>
    </div>
    <!-- //stats section -->

    <!-- events -->


    <!-- gallery -->
    <div class="gallery-cont text-center pb-5" id="gallery">
        <div class="container py-xl-5 py-lg-3">
            <h3 class="title-w3 mb-sm-5 mb-4 text-center text-bl font-weight-bold">Our Gallery</h3>
            <div class="row news-grids text-center no-gutters">
                <div class="col-md-4 gal-img">
                    <a href="#gal1"><img src="images/g1.jpg" alt="Gallery Image" class="img-fluid"></a>
                </div>
                <div class="col-md-4 gal-img">
                    <a href="#gal2"><img src="images/g2.jpg" alt="Gallery Image" class="img-fluid"></a>
                </div>
                <div class="col-md-4 gal-img">
                    <a href="#gal3"><img src="images/r5.jpg" alt="Gallery Image" class="img-fluid"></a>
                </div>
            </div>
            <div class="row news-grids text-center no-gutters">
                <div class="col-md-4 gal-img">
                    <a href="#gal4"><img src="images/g4.jpg" alt="Gallery Image" class="img-fluid"></a>
                </div>
                <div class="col-md-4 gal-img">
                    <a href="#gal5"><img src="images/g5.jpg" alt="Gallery Image" class="img-fluid"></a>
                </div>
                <div class="col-md-4 gal-img">
                    <a href="#gal6"><img src="images/r9.jpg" alt="Gallery Image" class="img-fluid"></a>
                </div>
            </div>
            <div class="row news-grids text-center no-gutters">
                <div class="col-md-4 gal-img">
                    <a href="#gal7"><img src="images/g7.jpg" alt="Gallery Image" class="img-fluid"></a>
                </div>
                <div class="col-md-4 gal-img">
                    <a href="#gal8"><img src="images/g8.jpg" alt="Gallery Image" class="img-fluid"></a>
                </div>
                <div class="col-md-4 gal-img">
                    <a href="#gal9"><img src="images/g9.jpg" alt="Gallery Image" class="img-fluid"></a>
                </div>
            </div>
            <!-- gallery popups -->
            <!-- popup-->
            <div id="gal1" class="pop-overlay animate">
                <div class="popup">
                    <img src="images/g1.jpg" alt="Popup Image" class="img-fluid" />
                    <p class="mt-4">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat
                        dolor.</p>
                    <a class="close" href="#gallery">&times;</a>
                </div>
            </div>
            <!-- //popup -->
            <!-- popup-->
            <div id="gal2" class="pop-overlay animate">
                <div class="popup">
                    <img src="images/g2.jpg" alt="Popup Image" class="img-fluid" />
                    <p class="mt-4">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat
                        dolor.</p>
                    <a class="close" href="#gallery">&times;</a>
                </div>
            </div>
            <!-- //popup -->
            <!-- popup-->
            <div id="gal3" class="pop-overlay animate">
                <div class="popup">
                    <img src="images/r5.jpg" alt="Popup Image" class="img-fluid" />
                    <p class="mt-4">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat
                        dolor.</p>
                    <a class="close" href="#gallery">&times;</a>
                </div>
            </div>
            <!-- //popup3 -->
            <!-- popup-->
            <div id="gal4" class="pop-overlay animate">
                <div class="popup">
                    <img src="images/g4.jpg" alt="Popup Image" class="img-fluid" />
                    <p class="mt-4">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat
                        dolor.</p>
                    <a class="close" href="#gallery">&times;</a>
                </div>
            </div>
            <!-- //popup -->
            <!-- popup-->
            <div id="gal5" class="pop-overlay animate">
                <div class="popup">
                    <img src="images/g5.jpg" alt="Popup Image" class="img-fluid" />
                    <p class="mt-4">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat
                        dolor.</p>
                    <a class="close" href="#gallery">&times;</a>
                </div>
            </div>
            <!-- //popup -->
            <!-- popup-->
            <div id="gal6" class="pop-overlay animate">
                <div class="popup">
                    <img src="images/r9.jpg" alt="Popup Image" class="img-fluid" />
                    <p class="mt-4">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat
                        dolor.</p>
                    <a class="close" href="#gallery">&times;</a>
                </div>
            </div>
            <!-- //popup -->
            <!-- popup-->
            <div id="gal7" class="pop-overlay animate">
                <div class="popup">
                    <img src="images/g7.jpg" alt="Popup Image" class="img-fluid" />
                    <p class="mt-4">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat
                        dolor.</p>
                    <a class="close" href="#gallery">&times;</a>
                </div>
            </div>
            <!-- //popup -->
            <!-- popup-->
            <div id="gal8" class="pop-overlay animate">
                <div class="popup">
                    <img src="images/g8.jpg" alt="Popup Image" class="img-fluid" />
                    <p class="mt-4">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat
                        dolor.</p>
                    <a class="close" href="#gallery">&times;</a>
                </div>
            </div>
            <!-- //popup -->
            <!-- popup-->
            <div id="gal9" class="pop-overlay animate">
                <div class="popup">
                    <img src="images/g9.jpg" alt="Popup Image" class="img-fluid" />
                    <p class="mt-4">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat
                        dolor.</p>
                    <a class="close" href="#gallery">&times;</a>
                </div>
            </div>
            <!-- //popup -->
            <!-- //gallery popups -->
        </div>
    </div>
    <!-- //gallery -->

    <!-- testimonials -->
    <section class="clients py-5" id="testi">
        <div class="container py-xl-5 py-lg-3">
            <h3 class="title-w3 mb-sm-5 mb-4 text-center text-wh font-weight-bold">What Students Say</h3>
            <div class="feedback-info text-center">
                <p> My school played an important role in shaping my life. The values and the character I developed
                    during my school days helped me in facing the world and understanding the problems. </p>
                <img src="images/te.jpg" alt=" " class="img-fluid mt-5">
                <h4 class="mt-4 text-wh font-weight-bold mb-4">RS Thakur</h4>
            </div>
        </div>
    </section>
    <!-- //testimonials -->

    <!-- apps -->


    <!-- contact-->
    <section class="contact py-5" id="contact">
        <div class="container py-xl-5 py-lg-3">
            <h3 class="title-w3 mb-sm-5 mb-4 text-center text-wh font-weight-bold">Contact Us</h3>
            <div class="contact_grid_right pt-4">
                <form action="<?php echo base_url('Student/contact_us'); ?>" method="post">
                    <div class="row contact_left_grid">
                        <div class="col-lg-6 con-left" data-aos="fade-up">
                            <div class="form-group">
                                <input class="form-control" type="text" name="name" placeholder="Name" required="">
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="email" name="email" placeholder="Email" required="">
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" name="subject" placeholder="Subject"
                                    required="">
                            </div>
                        </div>
                        <div class="col-lg-6 con-right" data-aos="fade-up">
                            <div class="form-group">
                                <textarea id="textarea" placeholder="Message" name="message" required=""></textarea>
                            </div>
                            <div class="sub-honey">
                                <button class="form-control btn" type="submit">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- //contact -->

    <!-- copyright -->
    <div class="copyright-w3ls py-4">
        <div class="container">
            <div class="row">
                <!-- copyright -->
                <p class="col-lg-8 copy-right-grids text-wh text-lg-left text-center mt-lg-2">® 2023 My School.|| Design
                    by
                    <a href="#" target="_blank">RAMDEV LODHI</a>
                </p>
                <!-- //copyright -->
                <!-- social icons -->
                <div class="col-lg-4 w3social-icons text-lg-right text-center mt-lg-0 mt-3">
                    <ul>
                        <li>
                            <a href="https://www.facebook.com/ramdevsingh.lodhi?mibextid=ZbWKwL" class="rounded-circle">
                                <span class="fa fa-facebook-f"></span>
                            </a>
                        </li>
                        <li class="px-2">
                            <a href="https://www.google.com/" class="rounded-circle">
                                <span class="fa fa-google-plus"></span>
                            </a>
                        </li>
                        <li>
                            <a href="https://twitter.com/rsthakur8815?t=j9Ui7YDHmF1A7hBbm5s22g&s=09"
                                class="rounded-circle">
                                <span class="fa fa-twitter"></span>
                            </a>
                        </li>
                        <li class="pl-2">
                            <a href="https://in.linkedin.com/in/ramdev-lodhi-645278226" class="rounded-circle">
                                <span class="fa fa-linkedin"></span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- //social icons -->
            </div>
        </div>
    </div>
    <!-- //copyright -->
    <!-- move top icon -->
    <a href="#home" class="move-top text-center">
        <span class="fa fa-angle-double-up" aria-hidden="true"></span>
    </a>
    <!-- //move top icon -->

    <script>

        const wrapper = document.querySelector('.wrapper');
        const loginLink = document.querySelector('.login-link');
        const registerLink = document.querySelector('.register-link');
        const btnPopup = document.querySelector('.btnLogin-popup');
        const iconClose = document.querySelector('.icon-close');

        registerLink.addEventListener('click', () => { wrapper.classList.add('active'); });

        loginLink.addEventListener('click', () => { wrapper.classList.remove('active'); });

        btnPopup.addEventListener('click', () => { wrapper.classList.add('active-popup'); });

        iconClose.addEventListener('click', () => { wrapper.classList.remove('active-popup'); });
        // Get the button
let mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } 
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
    </script>
  
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>

</html>