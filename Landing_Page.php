<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <script src="https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.css" />
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
	</header>

	<main class="cd-main-content">
		<section class="map_area" id="map_content">
			<div id="map"></div>
		</section>

		<section class="destination_acquire">
			<div class="destination1">
			</div>
		</section>
	</main>

<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
<script src="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.js"></script>
<script src="js/jquery-2.1.1.js"></script>
<script src="js/jquery.menu-aim.js"></script>
<script src="js/main.js"></script>
<script src="js/script_for_map.js"></script>
</body>
</html>