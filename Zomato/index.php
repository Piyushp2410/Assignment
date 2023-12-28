<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- bootstrap stylesheet cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <link rel="stylesheet" href="style.css">

    <!-- bootstrap js cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body>
    <!-- zomato header -->
    <div class="container-fluid" id="header">
        <div class="row">
            <div class="col-md-6 mt-5">
                <!-- get the app -->
                <a href="index.html" style="text-decoration: none; color: white;"><i class="bi bi-phone-fill"></i>Get
                    The App</a>
            </div>
            <div class="col-md-6 mt-5">
                <!-- investor relation , add restaurant -->
                <ul class="header-link">
                    <li class="m-2 p-0"><a href="#" class="text-decoration-none text-dark">Investor Relation</a></li>
                    <li class="m-2 p-0"><a href="#" class="text-decoration-none text-dark">Add Restaurant</a></li>
                    <li class="m-2 p-0"><a href="login.html" class="text-decoration-none text-dark">Log In</a></li>
                    <li class="m-2 p-0"><a href="Register.html" class="text-decoration-none text-dark">Sign In</a></li>
                </ul>
            </div>
        </div>
        <div class="container">
            <center class="mt-5">
                <h1 style="font-size: 5rem; font-family: cursive;">Zomato</h1>
                <h4>Discover the best food & drinks in Rajkot</h4>
            </center>
            <div id="name">
                <center class="mt-5 mb-5" style="display: flex; margin-left: 440px;">
                    <button type="button" class="btn btn-white border border-1"><i class="bi bi-geo-alt-fill"
                            style="color: white;"></i></button>
                    <li class="dropdown "><a class="dropdown-toggle" data-bs-toggle="dropdown" href="#"
                            style="text-decoration: none; color: white;">Rajkot</a></li>
                    <div class="input-group">
                        <input type="text" name="search" placeholder="Search For Restaurant" class="form-control"
                            style="width: 80%;">
                        <button type="button" class="btn btn-white border border-1"><i class="bi bi-search"
                                style="color: white;"></i></button>
                    </div>
                </center>
            </div>
        </div>
    </div>
    <!-- navbar -->
    <nav class="nav navbar navbar-expand-md mt-3">
        <a href="" class="navbar-brand"
            style=" color: rgb(199, 66, 66); font-size: 1.9rem; font-family: cursive; margin-left: 600px;">Best
            Offers
            hurry
            up!</a>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <center>
                    <img src="images/4.jpg" class="img-fluid rounded p-5" style="width: 60%; height: auto;">
                    <p class="text-center mt-1"><b>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Asperiores
                            ab, optio, mollitia
                            blanditiis delectus veritatis commodi recusandae veniam provident adipisci impedit ducimus
                            doloribus est. Delectus sit enim ea dolore praesentium!</b></p>
                    <p><button type="button" class="btn btn-primary btn-sm">Addtocard</button></p>
                </center>
            </div>
            <div class="col-md-6">
                <center>
                    <img src="images/5.jpg" class="img-fluid rounded p-5" style="width: 65%; height: auto;">
                    <p class="text-center mt-1"><b>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Asperiores
                            ab, optio, mollitia
                            blanditiis delectus veritatis commodi recusandae veniam provident adipisci impedit ducimus
                            doloribus est. Delectus sit enim ea dolore praesentium!</b></p>
                    <p><button type="button" class="btn btn-primary btn-sm">Addtocard</button></p>
                </center>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-header text-center pb-5">
                    <h2>Founder</h2>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sit consectetur totam eaque modi
                        assumenda fugiat harum architecto unde minima. Molestias odit repellendus nisi suscipit
                        accusantium expedita fugit aspernatur quod eum!</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card text-center">
                    <div class="card-body">
                        <img src="images/founder/Akriti-Chopra.webp" alt="" class="img-fluid rounded-circle"
                            style="width: 50%;">
                        <h3 class="card-title py-2"> Akriti-Chopra</h3>
                        <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequatur
                            ipsam,
                            asperiores officia modi ullam facilis pariatur placeat unde quidem.</p>
                        <p class="socials">
                            <i class="bi bi-twitter text-dark mx-1"></i>
                            <i class="bi bi-facebook text-dark mx-1"></i>
                            <i class="bi bi-linkedin text-dark mx-1"></i>
                            <i class="bi bi-instagram text-dark mx-1"></i>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center">
                    <div class="card-body">
                        <img src="images/founder/Deepinder Goyal.jpg" alt="" class="img-fluid rounded-circle"
                            style="width: 50%;">
                        <h3 class="card-title py-2">Deepinder-Goyal</h3>
                        <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequatur
                            ipsam,
                            asperiores officia modi ullam facilis pariatur placeat unde quidem.</p>
                        <p class="socials">
                            <i class="bi bi-twitter text-dark mx-1"></i>
                            <i class="bi bi-facebook text-dark mx-1"></i>
                            <i class="bi bi-linkedin text-dark mx-1"></i>
                            <i class="bi bi-instagram text-dark mx-1"></i>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center">
                    <div class="card-body">
                        <img src="images/founder/Capture-1582790724227.webp" alt="" class="img-fluid rounded-circle"
                            style="width: 50%;">
                        <h3 class="card-title py-2">Gunjan-Patidar</h3>
                        <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequatur
                            ipsam,
                            asperiores officia modi ullam facilis pariatur placeat unde quidem.</p>
                        <p class="socials">
                            <i class="bi bi-twitter text-dark mx-1"></i>
                            <i class="bi bi-facebook text-dark mx-1"></i>
                            <i class="bi bi-linkedin text-dark mx-1"></i>
                            <i class="bi bi-instagram text-dark mx-1"></i>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer start -->
    <div class="footer p-5" style="background-color: rgb(236, 229, 229); margin-top: 100px;">
        <div class="row">
            <div class="col-md-2 4">
                <ul class="footer-about">
                    <li><a href="" style="color: black; text-decoration: none;">
                            <h2>ZOMATO</h2>
                        </a></li>
                    <li><a href="">
                            <h4>About Zomato</h4>
                        </a></li>
                    <li><a href="">Who We Are</a></li>
                    <li><a href="">Blog</a></li>
                    <li><a href="">Work With Us</a></li>
                    <li><a href="">Investor Relations</a></li>
                    <li><a href="">Report Fraud</a></li>
                    <li><a href="">Contact Us</a></li>
                </ul>
            </div>
            <div class="col-md-2 4">
                <ul class="footer-about">
                    <br><br>
                    <li><a href="">
                            <h4>Zomaverse</h4>
                        </a></li>
                    <li><a href="">Zomato</a></li>
                    <li><a href="">Blinkit</a></li>
                    <li><a href="">Feeding India</a></li>
                    <li><a href="">Hyperpure</a></li>
                    <li><a href="">Zomaland</a></li>
                </ul>
            </div>
            <div class="col-md-2 4">
                <ul class="footer-about">
                    <br><br>
                    <li><a href="">
                            <h4>For Restaurant</h4>
                        </a></li>
                    <li><a href="">Partner With Us</a></li>
                    <li><a href="">Apps For You</a></li>
                    <br>
                    <li><a href="">
                            <h5>For Enterprises</h5>
                        </a></li>
                    <li><a href="">Zomato For Enterprise</a></li>
                </ul>
            </div>
            <div class="col-md-2 4">
                <ul class="footer-about">
                    <br><br>
                    <li><a href="">
                            <h4>Learn More</h4>
                        </a></li>
                    <li><a href="">Privacy</a></li>
                    <li><a href="">Security</a></li>
                    <li><a href="">Terms</a></li>
                    <li><a href="">sitemap</a></li>
                </ul>
            </div>
            <div class="col-md-2 4">
                <ul class="footer-about">
                    <br><br>
                    <li><a href="">
                            <h4>Social Link</h4>
                        </a></li>
                    <p class="socials">
                        <i class="bi bi-linkedin text-dark mx-1"></i>
                        <i class="bi bi-instagram text-dark mx-1"></i>
                        <i class="bi bi-twitter text-dark mx-1"></i>
                        <i class="bi bi-youtube text-dark mx-1"></i>
                        <i class="bi bi-facebook text-dark mx-1"></i>
                    </p>
                    <img src="images/footer/1.webp" style=" width: 80%;">
                    <br><br>
                    <img src="images/footer/2.webp" style=" width: 80%;">
                </ul>
            </div>
        </div>
        <p class="mt-5 text-black" style="text-align: center; margin-bottom: 0;">@2023 #Piyush Parmar ©copyright</p>
    </div>
    <!-- footer end -->
</body>

</html>