<?php include_once('../connection.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Magnetic - Stunning Responsive HTML5/CSS3 Photography Template</title>
	<meta charset="utf-8">
	<meta name="author" content="pixelhint.com">
	<meta name="description" content="Magnetic is a stunning responsive HTML5/CSS3 photography/portfolio website  template"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
	<link rel="stylesheet" type="text/css" href="/css/reset.css">
	<link rel="stylesheet" type="text/css" href="/css/main.css">
    <script type="text/javascript" src="/js/jquery.js"></script>
    <script type="text/javascript" src="/js/main.js"></script>
	<link rel="icon" href="/img/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;subset=cyrillic" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=PT+Serif:400,400i,700,700i" rel="stylesheet">
</head>
<body>

<?php include_once('../header.php'); ?>

	<section class="main map clearfix">
	<div id="map"></div>
		<script type="text/javascript">
	var markers = [
			{lat:59.92, lng:30.31},
			{lat:59.94, lng:30.30},
			{lat:59.93, lng:30.34},
			{lat:59.94, lng:30.38}
	];
	var locations = [];
	var map;
	function init(){
		map = new google.maps.Map(document.getElementById('map'), {
		zoom: 12,
		center: {lat: 59.94, lng: 30.34},
		mapTypeId: 'roadmap',
		zoomControl: false,
		mapTypeControl: false,
		rotateControl: false,
		fullscreenControl: false,
		disableDefaultUI: true,
		draggable: false,
		scaleControl: false,
		scrollwheel: false,
		navigationControl: false,
		streetViewControl: false,
		styles: [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}]
		});
		//create markers
	}
	$(document).ready(function() {
		for (var i = 0; i < markers.length; i++) {
			addMarkerWithTimeout(markers[i], i);
		}
	});
	function addMarkerWithTimeout(position, timeout) {
		window.setTimeout(function() {
			locations.push(new google.maps.Marker({
			position: position,
			map: map
			}));
		}, timeout);
	}
	</script>
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCqSWZf2uDH9-9lLkNyM3Y94iEK3TJKGok&callback=init"></script>
	</section><!-- end main/map -->
		<footer>
		<div class="logo">
			<img src="/img/no_image.png" class="" alt=""/>
			<div class="name">Грачев Юрий</div>
			<div class="hashtag">
			<p>#Программист</p><br/>
			<p>#Дизайнер</p><br/>
			<p>#Просто</p><p>#Хороший</p><p>#Человек</p>
			</div>
		</div>
	</footer>
</body>
</html>