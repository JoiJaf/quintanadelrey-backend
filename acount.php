<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quintana del rey</title>
    <link rel="shortcut icon" href="./img/logo.png">

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Cabin:wght@500;700&family=Marcellus&family=Roboto:wght@400;700&display=swap"
        rel="stylesheet">
    <!-- font -->

    <link rel="stylesheet" href="./css/main.css">


</head>

<body>

    <header class="header">

        <div class="header-red-bar">
            <div class="header-ctn">
                <a class="logo" href="index.php">
                    <img src="./img/graphic-identifier.png" alt="graphic-identifier">
                </a>

                <!-- mobile nav btn -->

                <input class="mobile-check" type="checkbox">
                <label class="mobile-btn">
                    <span></span>
                </label>

                <!-- mobile nav btn -->

                <nav class="navigation">
                    <a class="navigation-link" href="index.php">Home</a>
                    <a class="navigation-link" href="categories.php">Product</a>
                    <a class="navigation-link" href="#">Contact</a>

                    <a href="#">
                        <svg width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path
                                d="M6 2a1 1 0 0 1 .993 .883l.007 .117v1.068l13.071 .935a1 1 0 0 1 .929 1.024l-.01 .114l-1 7a1 1 0 0 1 -.877 .853l-.113 .006h-12v2h10a3 3 0 1 1 -2.995 3.176l-.005 -.176l.005 -.176c.017 -.288 .074 -.564 .166 -.824h-5.342a3 3 0 1 1 -5.824 1.176l-.005 -.176l.005 -.176a3.002 3.002 0 0 1 1.995 -2.654v-12.17h-1a1 1 0 0 1 -.993 -.883l-.007 -.117a1 1 0 0 1 .883 -.993l.117 -.007h2zm0 16a1 1 0 1 0 0 2a1 1 0 0 0 0 -2zm11 0a1 1 0 1 0 0 2a1 1 0 0 0 0 -2z"
                                stroke-width="0" fill="currentColor" />
                        </svg>
                    </a>

                    <a class="login" href="register.php">
                        <img class="logo-user" src="./img/user.png" alt="user-logo">
                    </a>
                    <a class="login" href="register.php">Login</a>
                </nav>
            </div>
        </div>


    </header>


    <main>


        <section class="ctn-us">
            <img class="img-us" src="./img/perfil.webp" alt="">
            <h2 class="us-name">Cuenta de usuario</h2>
        </section>

        <div class="container-profile">

        <aside class="sidebar">
            <ul class="list-pr">
                <a href="acount.php">
                    <li class="sb-ctn-link">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-circle"
                            width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#9e9e9e" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                            <path d="M12 10m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                            <path d="M6.168 18.849a4 4 0 0 1 3.832 -2.849h4a4 4 0 0 1 3.834 2.855" />
                        </svg>
                        <p class="sb-text clr">my profile</p>
                    </li>
                </a>

                <hr>

                <a href="orders.php">
                    <li class="sb-ctn-link">
                        
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-shopping-cart"
                            width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#9e9e9e" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M6 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                            <path d="M17 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                            <path d="M17 17h-11v-14h-2" />
                            <path d="M6 5l14 1l-1 7h-13" />
                        </svg>
                        <p class="sb-text">my orders</p>
                    </li>
                </a>


            </ul>

        </aside>

        <div>
            <div>
                <h3 class="subtitle">Information</h3>
                <hr>
                <form action="">
                    <div class="fr-space">
                        <label class="fr-text" for="">Name:</label>
                        <div class="size-fr">
                        <input class="fr-input-us" type="text" value="name" >
                        <input class="fr-input-us" type="text" value="surname" >
                        </div>
                        
                    </div>

                    <div class="fr-space">
                        <label class="fr-text" for="">Phone:</label>
                        <input class="fr-input-us" type="text" value="" placeholder="">
                    </div>

                    <div class="fr-space">
                        <label class="fr-text" for="">E-mail:</label>
                        <input class="fr-input-us" type="text" value="" placeholder="venezuela@gmail">
                    </div>

                    <div class="fr-space">
                        <label class="fr-text" for="">birthdate:</label>
                        <input class="fr-input-us" type="date">
                    </div>

                    <input class="fr-button" type="submit">

                </form>
            </div>

            <div class="passw">
                <h3 class="subtitle">password</h3>
                <hr>
                <form action="">
                    <div class="fr-space">
                    <label class="fr-text" for="">New password</label>
                    <input class="fr-input-us" type="password">
                    </div>
                    
                    <input class="fr-button" type="submit" name="" id="">
                </form>
            </div>

        </div>


        </div>


    </main>



    <footer class="footer">
        <div class="footer-layout">
            <div class="logo">
                <a href="index.php">
                    <img class="logo-footer" src="./img/graphic-identifier.png" alt="graphic-identifier">
                </a>
            </div>

            <div class="links">
                <h2 class="footer-title">
                    about us
                </h2>
                <ul class="footer-links">
                    <a href="">
                        <li>Reservation rules and policies</li>
                    </a>
                    <a href="">
                        <li>Accessibility</li>
                    </a>
                    <a href="">
                        <li>Address</li>
                    </a>
                    <a href="">
                        <li>Account</li>
                    </a>
                    <a href="">
                        <li>Contact Us</li>
                    </a>
                    <a href="">
                        <li>Help</li>
                    </a>
                    <a href="">
                        <li>Download our mobile app</li>
                    </a>
                </ul>
                <div class="download-app">
                    <a href="https://www.apple.com/la/app-store/">
                        <img src="./img/app-store.png" alt="app-store">
                    </a>
                    <a href="https://play.google.com/store/">
                        <img src="./img/google-play.png" alt="google-play">
                    </a>
                </div>
            </div>

            <div class="ctn-form">

                <h4 class="subtitle">write to us</h4>
                <form class="form">
                    <input class="placeholder" type="text" placeholder="Email Address">
                    <input class="submit" type="submit" value="">
                </form>

                <h4 class="subtitle">
                    Search us in:
                </h4>

                <div class="footer-network">
                    <a href="https://www.facebook.com/?locale=es_LA"><img src="./img/facebook-link.png"
                            alt="facebook"></a>
                    <a href="https://www.instagram.com/"><img src="./img/instagram-link.png" alt="instagram"></a>
                    <a href="https://www.whatsapp.com/?lang=es_LA"><img src="./img/whatsApp-link.png"
                            alt="whatsApp"></a>
                    <a href="https://twitter.com/?lang=es"><img src="./img/twitter-link.png" alt="twitter"></a>
                </div>


            </div>




        </div>

        <p class="text-end">
            © All rights reserved. Quintana del rey 2023
        </p>
    </footer>

    <script src="./js/funtions.js"></script>


</body>

</html>