<!DOCTYPE html>
<html lang="en">

<head> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>City Hospital | Sri Lanka</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- <link rel="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous"> -->
    
    <link rel="stylesheet" href="CSS/Indexstyle.css">
</head>
<body>

    <!-- Header section -->

    <header class="header">

    <img src="Images/logo.jpg" width="80" height="80" alt="">
    <div class="col-lg-2 col-md-3  col-sm-12" style="color:#000;font-weight:bold; font-size:42px; margin-top: 1% !important;">
        <a data-toggle="collapse" data-target="#menu" href="#menu">CITY HOSPITAL</a>
    </div>

    <nav class="navbar">
        <a href="#home">Home</a>
        <a href="#services">Services</a>
        <a href="#logins">Logins</a>
        <a href="#gallery">Gallery</a>
        <a href="#about-us">About Us</a>
        <a href="#contact-us">Contact Us</a>
    </nav> 
    <div class="icons">
        <div class="fas fa-search" id="search-btn"></div>
    </div>
    <h3 id="emy">Emergency<br> 1969 </h3>

    <!-- search -->
    <form action="" class="search-form">
        <input type="search" id="search-box" placeholder="search here...">
        <label for="search-box" class="fas fa-search"></label>
    </form>
    </header>
    <!-- header end -->

    <!-- home -->
    <section class="home" id="home">
        <div class="content">
            <p>Welcome To City Hospital</p>
            <h3>Most Trusted Health Partner Of Life</h3>
            <p id="z">Every day is a new opportunity for you to do something for yout health.</p> <br>
        </div>

    </section>

<!--  ************************* Logins ************************** -->
    
<section id="logins" class="logins container-fluid">
        <div class="container">
            <div class="inner-title">
                <h2 id="A">Logins</h2>
            </div>
            <div class="logins-cont">
                <div class="row no-margin">
                    <div class="logins-smk">
                        <div class="logins-single">

                            <img src="images/patient.jpg" alt="">

                            <div class="logins-single-det">
                                <h6>Patient Portal</h6>
                                <a href="Patient_Login.php" target="_blank">
                                    <button class="btn btn-success btn-sm">Login</button>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="logins-smk">
                        <div class="logins-single">

                                <img src="images/doctor.jpg" alt="">

                            <div class="logins-single-det">
                                <h6>Doctors Portal</h6>
                                <a href="Doctor_Login.php" target="_blank">
                                    <button class="btn btn-success btn-sm">Login</button>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="logins-smk">
                        <div class="logins-single">

                                <img src="images/admin.jpg" alt="">

                            <div class="logins-single-det">
                                <h6>Admin Portal</h6>
                    
                                <a href="Admin_Login.php" target="_blank">
                                    <button class="btn btn-success btn-sm">Login</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>  

    <!-- ################# Our key features #######################--->


    <section id="services" class="key-features department">
        <div class="container">
            <div class="inner-title">

                <p>Our Key Features</p>
                <h2>Take a look at some of our key features</h2>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-key">
                        <i class="fas fa-heartbeat"></i>
                        <h5>Cardiology</h5>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-key">
                        <i class="fas fa-ribbon"></i>
                        <h5>Orthopaedic</h5>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-key">
                       <i class="fab fa-monero"></i>
                        <h5>Neurologist</h5>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-key">
                        <i class="fas fa-capsules"></i>
                        <h5>Pharma Pipeline</h5>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-key">
                        <i class="fas fa-prescription-bottle-alt"></i>
                        <h5>Pharma Team</h5>
                    </div>
                </div>



                <div class="col-lg-4 col-md-6">
                    <div class="single-key">
                        <i class="far fa-thumbs-up"></i>
                        <h5>High Quality treatments</h5>

                    </div>
                </div>
            </div>
        </div>

    </section>
    

                <!--  ************************* Gallery Starts Here ************************** -->
                
    <div id="gallery" class="gallery">    
        <div class="container">
            <div class="inner-title">
                <p>Our Gallery</p>
                <h2>View Our Gallery</h2>
            </div>
                

        <div class="gallery-filter d-none d-sm-block row ">
            <button class="btn btn-default filter-button" data-filter="all" onclick="show1(),show2(),show3(),show4(),show5(),show6()">All</button>
            <button class="btn btn-default filter-button" data-filter="hdpe" onclick="hide3(),hide4(),hide5(),hide6()">Dental</button>
            <button class="btn btn-default filter-button" data-filter="sprinkle" onclick="hide1(),hide2(),hide4(),hide5(),hide6()">Cardiology</button>
            <button class="btn btn-default filter-button" data-filter="spray" onclick="hide1(),hide2(),hide3(),hide5(),hide6()"> Neurology</button>
            <button class="btn btn-default filter-button" data-filter="irrigation" onclick="hide1(),hide2(),hide3(),hide3(),hide5()">Laboratry</button>
        </div>
        <br/>

        <div class="row">

            <div class="a">
                <img src="images/gallery/gallery_01.jpg" id="img1" class="img-responsive">
            </div>

            <div class="a">
                <img src="images/gallery/gallery_02.jpg" id="img2" class="img-responsive">
            </div>

            <div class="a">
                <img src="images/gallery/gallery_03.jpg" id="img3" class="img-responsive">
            </div>
        </div>

        <div class="row Y">
            <div class="a">
                <img src="images/gallery/gallery_04.jpg" id="img4" class="img-responsive">
            </div>

            <div class="a">
                <img src="images/gallery/gallery_05.jpg" id="img5" class="img-responsive">
            </div>

            <div class="a">
                <img src="images/gallery/gallery_06.jpg" id="img6" class="img-responsive">
            </div>
        </div>
    </div>
    <script>    
        function hide1() {
            document.getElementById("img1").style.visibility = "hidden";
        }
        function hide2() {
            document.getElementById("img2").style.visibility = "hidden";
        }
        function hide3() {
            document.getElementById("img3").style.visibility = "hidden";
        }
        function hide4() {
            document.getElementById("img4").style.visibility = "hidden";
        }
        function hide5() {
            document.getElementById("img5").style.visibility = "hidden";
        }
        function hide6() {
            document.getElementById("img6").style.visibility = "hidden";
        }
        function show1() {
            document.getElementById("img1").style.visibility = "visible";
        }
        function show2() {
            document.getElementById("img2").style.visibility = "visible";
        }
        function show3() {
            document.getElementById("img3").style.visibility = "visible";
        }
        function show4() {
            document.getElementById("img4").style.visibility = "visible";
        }
        function show5() {
            document.getElementById("img5").style.visibility = "visible";
        }
        function show6() {
            document.getElementById("img6").style.visibility = "visible";
        }
        </script>
       
       </div>
        <!-- ######## Gallery End ####### -->

        <!-- Branches -->

    <section class="branches-container" class="heading" id="branches">
    <h1 id="h1"> Branches </h1>
        <div class="row">
            <a href="Galle.php" class="branches">
                <img src="Images/branches/Galle.jpg" width="300px" height="300px" alt="">
                <p class="branches-title">GALLE</p>
            </a><a href="Kurunegala.php" class="branches">
                <img src="Images/branches/Kurunegala.jpg" width="300px" height="300px" alt="">
                <p class="branches-title">KURUNEGALA</p>
            <a href="Jaffna.php" class="branches">
                <img src="Images/branches/Jaffna.jpg" width="300px" height="300px" alt="">
                <p class="branches-title">JAFFNA</p>
            </a>
        </div> 
    </section>

    <hr width="90%">
    <br>
<!--  ************************* About Us Starts Here ************************** -->
        
<section id="about-us" class="about-us">
        <div class="row">
            <div class="image-bg no-padding">
                
            </div>
            <div class="description">
                <h1>About Our Hospital</h1>
                <div class="box">
                <p>We’re not your typical healthcare provider; we’re here to give the care and coverage you need to thrive. 
                    We are operating since 1993 under the new management while adding enormous value to the Healthcare service of Sri Lanka. 
                    City Hospital not only provides specialized medical services but also has a staff that understands its patients’ 
                    varied needs thus providing them and their families a personalized service in a truly comfortable environment.
                <br><br>We partner with City Hospital Diagnostics services (CHD) so you have the accurate and reliable information 
                    regarding your health issues through our laboratory reports. Having the 36-bed strength and performing more than 200 
                    surgeries, we provide medical care to more than 3500 patients per month. We also partner with communities to help them 
                    thrive and our excellence has been recognized and reinforced by the number of awards and accreditations.</p>
                </div>
            </div>
        </div>
    </section>    
    

    <!-- footer -->
    <section id="contact-us" class="footer">
        <div class="box-container">
    
            <img src="Images/logo.jpg" width="200" height="200" alt="" id="foot-img">

            <div class="box">
                <h3>Contact Us</h3>
                <a href="#" class="links"> <i class="fas fa-phone"></i>Galle  >  +011-456-7890 </a>
                <a href="#" class="links"> <i class="fas fa-phone"></i>Kurunegala  >  +011-222-3333 </a>
                <a href="#" class="links"> <i class="fas fa-phone"></i>Jaffna  >  +011-789-4545 </a>
                <a href="#" class="links"> <i class="fas fa-envelope"></i> cityhospital@gmail.com </a>
                <a href="#" class="links"> <i class="fas fa-map-marker-alt"></i> Galle, Sri Lanka - 400104 </a>
            </div>


            <div class="box">
                <div class="share">
                    <h3>Follow Us</h3>
                    <a href="#" class="fab fa-facebook-f" src="https://rainbowpages.lk/other/unclassified/city-hospital-lab-service/"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>

                <div class="box">
                    <h3>Other</h3>
                    <a href="#" class="links"> <i class="fas fa-arrow-right"></i> Online Admission </a>
                    <a href="#" class="links"> <i class="fas fa-arrow-right"></i> Terms & Conditions </a>
                    <a href="#" class="links"> <i class="fas fa-arrow-right"></i> Privacy Policy </a>
                    <a href="#" class="links"> <i class="fas fa-arrow-right"></i> FAQ </a>
                </div>
                <!-- <img src="image/payment.png" class="payment-img" alt=""> -->
            </div>
        </div>

        </div>

        <div class="credit"> created by <span> City Hospital </span> | all rights reserved </div>

    </section>
    <!-- footer end -->
</body>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"73cd032ce8a01e89","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2022.8.0","si":100}' crossorigin="anonymous"></script>

    <script src="Js/Script.js"></script>
</html>