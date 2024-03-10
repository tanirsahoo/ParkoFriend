<!doctype html>
<html lang="en" class="no-js">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <script src="https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.css" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/new2.css">
    <link rel="stylesheet" href="css/style_map.css">
    <script src="js/modernizr.js"></script>

    <title>ParkoFriend | Your friend to solve all parking problems.</title>
</head>

<body>
    <header>
        <div class="cd-dropdown-wrapper">
            <a class="cd-dropdown-trigger" href="#0">Menu</a>
            <nav class="cd-dropdown">
                <h2>Title</h2>
                <a href="#0" class="cd-close">Close</a>
                <ul class="cd-dropdown-content">
                    <li>
                        <form class="cd-search">
                            <input type="search" placeholder="Search...">
                        </form>
                    </li>
                    <li><a href="http://codyhouse.co/?p=748">About Us</a></li>
                    <li><a href="http://codyhouse.co/?p=748">Contact</a></li>
                    <li><a href="http://codyhouse.co/?p=748">Privacy Policies</a></li>
                    <li><a href="http://codyhouse.co/?p=748">Logout</a></li>
                </ul>
            </nav>
        </div>
        <div class="dropdown-menu" id="profile-dropdown" style="right: 20px;">
            <ul>
                <li>Name</li>
                <li>Credit Points</li>
                <li>No of Bookings</li>
                <li>Active Bookings</li>
                <li>Update Profile</li>
            </ul>
        </div>
    </header>

    <main class="cd-main-content">
        <section class="map_area" id="map_content">
            <div id="map"></div>
        </section>
    </main>


    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <h6>About</h6>
                    <p class="text-justify">Scanfcode.com <i>CODE WANTS TO BE SIMPLE </i> is an initiative to help the
                        upcoming programmers with the code. Scanfcode focuses on providing the most efficient code or
                        snippets as the code wants to be simple. We will help programmers build up concepts in different
                        programming languages that include C, C++, Java, HTML, CSS, Bootstrap, JavaScript, PHP, Android,
                        SQL and Algorithm.</p>
                </div>

                <div class="col-xs-6 col-md-3">
                    <h6>Categories</h6>
                    <ul class="footer-links">
                        <li><a href="http://scanfcode.com/category/c-language/">C</a></li>
                        <li><a href="http://scanfcode.com/category/front-end-development/">UI Design</a></li>
                        <li><a href="http://scanfcode.com/category/back-end-development/">PHP</a></li>
                        <li><a href="http://scanfcode.com/category/java-programming-language/">Java</a></li>
                        <li><a href="http://scanfcode.com/category/android/">Android</a></li>
                        <li><a href="http://scanfcode.com/category/templates/">Templates</a></li>
                    </ul>
                </div>

                <div class="col-xs-6 col-md-3">
                    <h6>Quick Links</h6>
                    <ul class="footer-links">
                        <li><a href="http://scanfcode.com/about/">About Us</a></li>
                        <li><a href="http://scanfcode.com/contact/">Contact Us</a></li>
                        <li><a href="http://scanfcode.com/contribute-at-scanfcode/">Contribute</a></li>
                        <li><a href="http://scanfcode.com/privacy-policy/">Privacy Policy</a></li>
                        <li><a href="http://scanfcode.com/sitemap/">Sitemap</a></li>
                    </ul>
                </div>
            </div>
            <hr>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-6 col-xs-12">
                    <p class="copyright-text">Copyright &copy; 2017 All Rights Reserved by
                        <a href="#">Scanfcode</a>.
                    </p>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <ul class="social-icons">
                        <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
                        <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>



    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
    <script src="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.js"></script>
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/jquery.menu-aim.js"></script>
    <script src="js/main.js"></script>
    <script src="js/script_for_map.js"></script>
</body>

</html>