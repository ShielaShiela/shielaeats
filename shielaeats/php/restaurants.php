<?php include 'connectdb.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Omnifood is a premium food delivery service with the mission to bring affordable and healty meals to as many people as possible.">

    <link rel="stylesheet" type="text/css" href="vendors/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="vendors/css/grid.css">
    <link rel="stylesheet" type="text/css" href="vendors/css/ionicons.min.css">
    <link rel="stylesheet" type="text/css" href="vendors/css/animate.css">
    <link rel="stylesheet" type="text/css" href="resources/css/style.css">
    <link rel="stylesheet" type="text/css" href="resources/css/queries.css">
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,300italic' rel='stylesheet' type='text/css'>
    <title>ShielaEats</title>

    <link rel="apple-touch-icon" sizes="57x57" href="/resources/favicons/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/resources/favicons/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/resources/favicons/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/resources/favicons/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/resources/favicons/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/resources/favicons/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/resources/favicons/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/resources/favicons/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/resources/favicons/apple-touch-icon-180x180.png">
    <link rel="icon" type="image/png" href="/resources/favicons/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="/resources/favicons/favicon-194x194.png" sizes="194x194">
    <link rel="icon" type="image/png" href="/resources/favicons/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="/resources/favicons/android-chrome-192x192.png" sizes="192x192">
    <link rel="icon" type="image/png" href="/resources/favicons/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="/resources/favicons/manifest.json">
    <link rel="shortcut icon" href="/resources/favicons/favicon.ico">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-TileImage" content="/resources/favicons/mstile-144x144.png">
    <meta name="msapplication-config" content="/resources/favicons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Own Style -->
    <link href="resources/css/stylebypaul.css" rel="stylesheet" />
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.css" rel="stylesheet" />
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.js"></script>
    <!-- JQuery -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.10.1.min.js"></script>
    <!-- DataTables CSS -->
    <link href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css" rel="stylesheet">
    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js" type="text/javascript"></script>

</head>

<body>
    <header>
        <nav>
            <div class="row">
                <ul class="main-nav js--main-nav">
                    <li><img src="resources/img/logo-white.png" alt="Omnifood logo" class="logo"></li>
                    <li><img src="resources/img/logo.png" alt="Omnifood logo" class="logo-black"></li>
                    <li><a href="#delivery">Delivery Guys</a></li>
                    <li><a href="#restaurants">Restaurants</a></li>
                    <li><a href="#orders" onclick="document.getElementById('id01').style.display='block'"
                            style="width:auto;">Orders</a></li>
                    <!-- <li><a href="#signup" onclick="document.getElementById('id02').style.display='block'"
                            style="width:auto;">Sign up</a></li> -->
                </ul>
                <a class="mobile-nav-icon js--nav-icon"><i class="ion-navicon-round"></i></a>
            </div>
        </nav>
    </header>
        <!-- <div class="hero-text-box">
            <h1>Don't Cook.<br>Hello delicious meals.</h1>
             The form 
             <form class="example" action="action_page.php"> 
            <input type="text" placeholder="Search.." name="search">
            <a class="btn btn-full js--scroll-to-plans" href="#">I'm hungry</a>
             </form> -->
            <!-- <a class="btn btn-full js--scroll-to-plans" href="#">I'm hungry</a> 

            <a class="btn btn-ghost js--scroll-to-start" href="#">Show me more</a>
             <input type="text" name="search" placeholder="Search.."> 
        </div> -->


    
<!-- List of Restaurants -->
    <section class="section-features js--section-features" id="features">
        <section id="table">
            <div class="section-container">
                <div class="table-menu">
                    <div class="form-outline">
                        <input type="text" id="searchField" class="form-control" />
                        <label class="form-label" for="searchField">Search</label>
                    </div>
                </div>
                <table class="table table-striped table-bordered table-sm" cellspacing="0" width="100%" id="companyTable">
                    <thead>
                        <tr>
                            <th scope="col">Restaurant ID</th>
                            <th scope="col">Restaurant Name</th>
                            <th scope="col">Restaurant Location</th>
                            <th scope="col">Restaurant Contact No.</th>
                            <th scope="col">Restaurant Owner</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>

                    <?php 
                        $sql = "SELECT * FROM Restaurants";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            // output data of each row
                            while($row = $result->fetch_assoc()) 
                            { ?>
                        <tr>
                            <th scope="row"><?php echo $row['RestoID'];?></th>
                            <td><?php echo $row['RestoName'];?></td>
                            <td><?php echo $row['RestoAddress'];?></td>
                            <td><?php echo $row['RestoContactno'];?></td>
                            <td><?php echo $row['RestoOwner'];?></td>
                            <td>
                                <button type="button" class="btn btn-primary" data-mdb-toggle="modal" data-mdb-target="#approveOrderModal">
                                <i class="fas fa-edit"></i></button>
                                <button type="button" class="btn btn-primary" data-mdb-toggle="modal" data-mdb-target="#approveOrderModal">
                                <i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                    <?php }} ?> 
    
                    </tbody>
                </table>
            </div>
        </section>
    </section>
<!--  RESTAURANTSSS -->
    <section class="section-features js--section-features" id="features">
        <section id="table">
            <div class="section-container">
                <div class="table-menu">
                     <div class="form-outline">
                                <input type="text" id="searchField" class="form-control" />
                                <label class="form-label" for="searchField">Search</label>
                            </div>
                        <button type="button" class="btn btn-primary" data-mdb-toggle="modal" data-mdb-target="#addDataModal">
                        <i class="fas fa-plus"></i>
                    </button>
                </div>
                <table class="table table-striped table-bordered table-sm" cellspacing="0" width="100%" id="companyTable">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Company</th>
                            <th scope="col">Office</th>
                            <th scope="col">Employees</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Shiela Co Ltd.</td>
                            <td>Taiwan</td>
                            <td>69</td>
                            <td>
                                <i class="fas fa-edit"></i>
                                <i class="fas fa-trash"></i>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Kary Hacienda</td>
                            <td>Oslob</td>
                            <td>100</td>
                            <td>
                                <i class="fas fa-edit"></i>
                                <i class="fas fa-trash"></i>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Paul</td>
                            <td>Bantayan</td>
                            <td>1</td>
                            <td>
                                <i class="fas fa-edit"></i>
                                <i class="fas fa-trash"></i>
                            </td>
                        </tr>
        
                    </tbody>
                </table>
            </div>
        </section>
<!--         
        <div class="row">
            <h2>Get food fast &mdash; not fast food</h2>
            <p class="long-copy">
                Hello, we're FoodZilla, your new premium food delivery service. We know you're always busy. No time for
                cooking. So let us take care of that, we're really good at it, we promise!
            </p>
        </div>

        <div class="row js--wp-1">
            <div class="col span-1-of-4 box">
                <i class="ion-ios-infinite-outline icon-big"></i>
                <h3>Up to 365 days/year</h3>
                <p>
                    Never cook again! We really mean that. Our subscription plans include up to 365 days/year coverage.
                    You can also choose to order more flexibly if that's your style.
                </p>
            </div>
            <div class="col span-1-of-4 box">
                <i class="ion-ios-stopwatch-outline icon-big"></i>
                <h3>Ready in 20 minutes</h3>
                <p>
                    You're only twenty minutes away from your delicious and super healthy meals delivered right to your
                    home. We work with the best chefs in each town to ensure that you're 100% happy.
                </p>
            </div>
            <div class="col span-1-of-4 box">
                <i class="ion-ios-nutrition-outline icon-big"></i>
                <h3>100% organic</h3>
                <p>
                    All our vegetables are fresh, organic and local. Animals are raised without added hormones or
                    antibiotics. Good for your health, the environment, and it also tastes better!
                </p>
            </div>
            <div class="col span-1-of-4 box">
                <i class="ion-ios-cart-outline icon-big"></i>
                <h3>Order anything</h3>
                <p>
                    We don't limit your creativity, which means you can order whatever you feel like. You can also
                    choose from our menu containing over 100 delicious meals. It's up to you!
                </p>
            </div>
        </div> -->
    </section>

    <section class="section-meals">
        <ul class="meals-showcase clearfix">
            <li>
                <figure class="meal-photo">
                    <img src="resources/img/1.jpg" alt="Korean bibimbap with egg and vegetables">
                </figure>
            </li>
            <li>
                <figure class="meal-photo">
                    <img src="resources/img/2.jpg" alt="Simple italian pizza with cherry tomatoes">
                </figure>
            </li>
            <li>
                <figure class="meal-photo">
                    <img src="resources/img/3.jpg" alt="Chicken breast steak with vegetables">
                </figure>
            </li>
            <li>
                <figure class="meal-photo">
                    <img src="resources/img/4.jpg" alt="Autumn pumpkin soup">
                </figure>
            </li>
        </ul>
        <ul class="meals-showcase clearfix">
            <li>
                <figure class="meal-photo">
                    <img src="resources/img/5.jpg" alt="Paleo beef steak with vegetables">
                </figure>
            </li>
            <li>
                <figure class="meal-photo">
                    <img src="resources/img/6.jpg" alt="Healthy baguette with egg and vegetables">
                </figure>
            </li>
            <li>
                <figure class="meal-photo">
                    <img src="resources/img/7.jpg" alt="Burger with cheddar and bacon">
                </figure>
            </li>
            <li>
                <figure class="meal-photo">
                    <img src="resources/img/8.jpg" alt="Granola with cherries and strawberries">
                </figure>
            </li>
        </ul>
    </section>

<!-- 
    <section class="section-steps" id="works">
        <div class="row">
            <h2>How it works &mdash; Simple as 1, 2, 3</h2>
        </div>
        <div class="row">
            <div class="col span-1-of-2 steps-box">
                <img src="resources/img/app-iPhone.png" alt="Omnifood app on iPhone" class="app-screen js--wp-2">
            </div>
            <div class="col span-1-of-2 steps-box">
                <div class="works-step clearfix">
                    <div>1</div>
                    <p>Choose the subscription plan that best fits your needs and sign up today.</p>
                </div>
                <div class="works-step clearfix">
                    <div>2</div>
                    <p>Order your delicious meal using our mobile app or website. Or you can even call us!</p>
                </div>
                <div class="works-step clearfix">
                    <div>3</div>
                    <p>Enjoy your meal after less than 20 minutes. See you the next time!</p>
                </div>

                <a href="#" class="btn-app"><img src="resources/img/download-app.svg" alt="App Store Button"></a>
                <a href="#" class="btn-app"><img src="resources/img/download-app-android.png"
                        alt="Play Store Button"></a>
            </div>
        </div>
    </section> -->

    <!-- <section class="section-cities" id="cities">
        <div class="row">
            <h2>We're currently in these cities</h2>
        </div>
        <div class="row js--wp-3">
            <div class="col span-1-of-4 box">
                <img src="resources/img/lisbon-3.jpg" alt="Lisbon">
                <h3>Lisbon</h3>
                <div class="city-feature">
                    <i class="ion-ios-person icon-small"></i>
                    1600+ happy eaters
                </div>
                <div class="city-feature">
                    <i class="ion-ios-star icon-small"></i>
                    60+ top chefs
                </div>
                <div class="city-feature">
                    <i class="ion-social-twitter icon-small"></i>
                    <a href="#">@omnifood_lx</a>
                </div>
            </div>
            <div class="col span-1-of-4 box">
                <img src="resources/img/san-francisco.jpg" alt="San Francisco">
                <h3>San Francisco</h3>
                <div class="city-feature">
                    <i class="ion-ios-person icon-small"></i>
                    3700+ happy eaters
                </div>
                <div class="city-feature">
                    <i class="ion-ios-star icon-small"></i>
                    160+ top chefs
                </div>
                <div class="city-feature">
                    <i class="ion-social-twitter icon-small"></i>
                    <a href="#">@omnifood_sf</a>
                </div>
            </div>
            <div class="col span-1-of-4 box">
                <img src="resources/img/berlin.jpg" alt="Berlin">
                <h3>Berlin</h3>
                <div class="city-feature">
                    <i class="ion-ios-person icon-small"></i>
                    2300+ happy eaters
                </div>
                <div class="city-feature">
                    <i class="ion-ios-star icon-small"></i>
                    110+ top chefs
                </div>
                <div class="city-feature">
                    <i class="ion-social-twitter icon-small"></i>
                    <a href="#">@omnifood_berlin</a>
                </div>
            </div>
            <div class="col span-1-of-4 box">
                <img src="resources/img/london.jpg" alt="London">
                <h3>London</h3>
                <div class="city-feature">
                    <i class="ion-ios-person icon-small"></i>
                    1200+ happy eaters
                </div>
                <div class="city-feature">
                    <i class="ion-ios-star icon-small"></i>
                    50+ top chefs
                </div>
                <div class="city-feature">
                    <i class="ion-social-twitter icon-small"></i>
                    <a href="#">@omnifood_london</a>
                </div>
            </div>
        </div>

    </section> -->
<!-- 
    <section class="section-testimonials">
        <div class="row">
            <h2>Our customers can't live without us</h2>
        </div>
        <div class="row">
            <div class="col span-1-of-3">
                <blockquote>
                    Omnifood is just awesome! I just launched a startup which leaves me with no time for cooking, so
                    Omnifood is a life-saver. Now that I got used to it, I couldn't live without my daily meals!
                    <cite><img src="resources/img/customer-1.jpg" alt="Customer 1 photo">Alberto Duncan</cite>
                </blockquote>
            </div>
            <div class="col span-1-of-3">
                <blockquote>
                    Inexpensive, healthy and great-tasting meals, delivered right to my home. We have lots of food
                    delivery here in Lisbon, but no one comes even close to Omifood. Me and my family are so in love!
                    <cite><img src="resources/img/customer-2.jpg" alt="Customer 2 photo">Joana Silva</cite>
                </blockquote>
            </div>
            <div class="col span-1-of-3">
                <blockquote>
                    I was looking for a quick and easy food delivery service in San Franciso. I tried a lot of them and
                    ended up with Omnifood. Best food delivery service in the Bay Area. Keep up the great work!
                    <cite><img src="resources/img/customer-3.jpg" alt="Customer 3 photo">Milton Chapman</cite>
                </blockquote>
            </div>
        </div>
    </section> -->


    <!-- <section class="section-plans js--section-plans" id="plans">
        <div class="row">
            <h2>Start eating healthy today</h2>
        </div>
        <div class="row">
            <div class="col span-1-of-3">
                <div class="plan-box js--wp-4">
                    <div>
                        <h3>Premium</h3>
                        <p class="plan-price">$399 <span>/ month</span></p>
                        <p class="plan-price-meal">That's only 13.30$ per meal</p>
                    </div>
                    <div>
                        <ul>
                            <li><i class="ion-ios-checkmark-empty icon-small"></i>1 meal every day</li>
                            <li><i class="ion-ios-checkmark-empty icon-small"></i>Order 24/7</li>
                            <li><i class="ion-ios-checkmark-empty icon-small"></i>Access to newest creations</li>
                            <li><i class="ion-ios-checkmark-empty icon-small"></i>Free delivery</li>
                        </ul>
                    </div>
                    <div>
                        <a href="#" class="btn btn-full">Sign up now</a>
                    </div>
                </div>
            </div>
            <div class="col span-1-of-3">
                <div class="plan-box">
                    <div>
                        <h3>Pro</h3>
                        <p class="plan-price">$149 <span>/ month</span></p>
                        <p class="plan-price-meal">That's only 14.90$ per meal</p>
                    </div>
                    <div>
                        <ul>
                            <li><i class="ion-ios-checkmark-empty icon-small"></i>1 meal 10 days/month</li>
                            <li><i class="ion-ios-checkmark-empty icon-small"></i>Order 24/7</li>
                            <li><i class="ion-ios-checkmark-empty icon-small"></i>Access to newest creations</li>
                            <li><i class="ion-ios-checkmark-empty icon-small"></i>Free delivery</li>
                        </ul>
                    </div>
                    <div>
                        <a href="#" class="btn btn-ghost">Sign up now</a>
                    </div>
                </div>
            </div>
            <div class="col span-1-of-3">
                <div class="plan-box">
                    <div>
                        <h3>Starter</h3>
                        <p class="plan-price">19$ <span>/ meal</span></p>
                        <p class="plan-price-meal">&nbsp;</p>
                    </div>
                    <div>
                        <ul>
                            <li><i class="ion-ios-checkmark-empty icon-small"></i>1 meal</li>
                            <li><i class="ion-ios-checkmark-empty icon-small"></i>Order from 8 am to 12 pm</li>
                            <li><i class="ion-ios-close-empty icon-small"></i></li>
                            <li><i class="ion-ios-checkmark-empty icon-small"></i>Free delivery</li>
                        </ul>
                    </div>
                    <div>
                        <a href="#" class="btn btn-ghost">Sign up now</a>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- <section class="section-form">
        <div class="row">
            <h2>We're happy to hear from you</h2>
        </div>
        <div class="row">
            <form method="post" action="#" class="contact-form">
                <div class="row">
                    <div class="col span-1-of-3">
                        <label for="name">Name</label>
                    </div>
                    <div class="col span-2-of-3">
                        <input type="text" name="name" id="name" placeholder="Your name" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col span-1-of-3">
                        <label for="email">Email</label>
                    </div>
                    <div class="col span-2-of-3">
                        <input type="email" name="email" id="email" placeholder="Your email" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col span-1-of-3">
                        <label for="find-us">How did you find us?</label>
                    </div>
                    <div class="col span-2-of-3">
                        <select name="find-us" id="find-us">
                            <option value="friends" selected>Friends</option>
                            <option value="search">Search engine</option>
                            <option value="ad">Advertisement</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col span-1-of-3">
                        <label>Newsletter?</label>
                    </div>
                    <div class="col span-2-of-3">
                        <input type="checkbox" name="news" id="news" checked> Yes, please
                    </div>
                </div>
                <div class="row">
                    <div class="col span-1-of-3">
                        <label>Drop us a line</label>
                    </div>
                    <div class="col span-2-of-3">
                        <textarea name="message" placeholder="Your message"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col span-1-of-3">
                        <label>&nbsp;</label>
                    </div>
                    <div class="col span-2-of-3">
                        <input type="submit" value="Send it!">
                    </div>
                </div>

            </form>

        </div>
    </section> -->
    <footer>
        <div class="row">
            <div class="col span-1-of-2">
                <ul class="footer-nav">
                    <li><a href="#">About us</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Press</a></li>
                    <li><a href="#">iOS App</a></li>
                    <li><a href="#">Android App</a></li>
                </ul>
            </div>
            <div class="col span-1-of-2">
                <ul class="social-links">
                    <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                    <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                    <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                    <li><a href="#"><i class="ion-social-instagram"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <p>
                Copyright &copy; 2019 by FoodZilla. All rights reserved.
            </p>
        </div>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/respond/1.4.2/respond.min.js"></script>
    <script src="//cdn.jsdelivr.net/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//cdn.jsdelivr.net/selectivizr/1.0.3b/selectivizr.min.js"></script>
    <script src="vendors/js/jquery.waypoints.min.js"></script>
    <script src="resources/js/script.js"></script>

    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date(); a = s.createElement(o),
                m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-61026110-2', 'auto');
        ga('send', 'pageview');

    </script>

<!-- Modal -->
<div class="modal fade" id="addDataModal" tabindex="-1" aria-labelledby="addDataModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addDataModalLabel">Add Restaurants</h5>
                <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form-outline">
                    <input type="text" id="restaurantName" class="form-control" />
                    <label class="form-label" for="restaurantname">Restaurant Name</label>
                </div>
                <div class="form-outline">
                    <input type="text" id="restaurantAddress" class="form-control" />
                    <label class="form-label" for="restaurantAddress">Location</label>
                </div>

                <div class="form-outline">
                    <input type="text" id="restaurantContact" class="form-control" />
                    <label class="form-label" for="restaurantContact">Contact No.</label>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">
                    Close
                </button>
                <button type="button" class="btn btn-primary" onclick="productUpdate()" data-mdb-dismiss="modal">Save
                    changes</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="approveOrderModal" tabindex="-1" aria-labelledby="approveOrderLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="approveOrderLabel">Approve and Assign Courier</h5>
                <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form-outline">
                    <input type="text" id="orderNo" class="form-control" />
                    <label class="form-label" for="restaurantname">Order #</label>
                </div>
                <div class="form-outline">
                    <input type="text" id="customerNo" class="form-control" />
                    <label class="form-label" for="customerNo">Customer #</label>
                </div>

                <div class="form-outline">
                    <input type="text" id="deliveryAddress" class="form-control" />
                    <label class="form-label" for="deliveryAddress">Delivery Address</label>
                </div>
                <div class="form-outline">
                    <input type="text" id="restaurantNo" class="form-control" />
                    <label class="form-label" for="restaurantNo">Restaurant #</label>
                </div>
                <div class="form-outline">
                    <input type="text" id="courierNo" class="form-control" />
                    <label class="form-label" for="courierNo">Courier #</label>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">
                    Close
                </button>
                <button type="button" class="btn btn-primary" onclick="productUpdate()" data-mdb-dismiss="modal">Approve</button>
            </div>
        </div>
    </div>
</div>
<script src="resources/js/md-scripts.js"></script>

<!-- Add Menu Modal -->
<div id="id01" class="modal">
    <section class="section-form">
    <form class="modal-content animate" action="/action_page.php" method="post">
        <div class="row">
            <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
            <h2 style="color: #555">Add Menu</h2>
            <div class="imgcontainer">
                <img src="resources/img/customer-4.jpg" alt="Avatar" class="avatar">
                <input type="file" name="UploadImage" id="fileToUpload">
                <!-- Add Add Button Here -->
            </div>
        </div>
        <div class="row">
            <form method="post" action="#" class="contact-form">
                <div class="row">
                    <div class="col span-1-of-3">
                        <label for="foodname">Food Name</label>
                    </div>
                    <div class="col span-2-of-3">
                        <input type="text" name="foodname" id="foodname" placeholder="Name of Food" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col span-1-of-3">
                        <label for="foodprice">Price</label>
                    </div>
                    <div class="col span-2-of-3">
                        <input type="text" name="foodprice" id="foodprice" placeholder="Selling Price $NTD" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col span-1-of-3">
                        <label for="availability">Availability</label>
                    </div>
                    <div class="col span-2-of-3">
                        <select name="availability" id="availability">
                            <option value="available" selected>Available</option>
                            <option value="notavailable">Not Available</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col span-1-of-3">
                        <label>&nbsp;</label>
                    </div>
                    <div class="col span-2-of-3">
                    <a href="#cancel" onclick="document.getElementById('id01').style.display='none'"
                                class="btn btn-ghost js--scroll-to-start">Cancel</a>
                        <input type="submit" value="Add to Menu List">
                    </div>
                </div>
    </form>
    </section>
</div>
<script>
    // Get the modal
    var modal = document.getElementsByClassName('modal');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
        if (event.target == modal[0]) {
            modal[0].style.display = "none";
        }
        else if (event.target == modal[1]) {
            modal[1].style.display = "none";
        }
    }
</script>
</body>
</html>