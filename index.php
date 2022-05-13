<!DOCTYPE html>
<html>
	<head>
		<title>Web Profile - Tegar Sabila</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="dist/css/w3.css">
		<link rel="stylesheet" href="dist/css/w3-blue.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" crossorigin="anonymous">
		<style>
a {text-decoration: none;}
html,body {scroll-behavior: smooth;}
#item-foot i {padding:12px;}
@font-face 
  {
    font-family: 'Stolzl'; 
    src: url('dist/fonts/stolzl.ttf');
  }
body,h1,h2,h3,h4,h5,h6,p,pre {font-family: Stolzl, monospace;}
.w3-bar,h1,button {font-family: Stolzl, monospace;}
.fa-anchor,.fa-coffee {font-size:200px;}
.padding-button {padding:14px!important}
        </style>
	</head>
	<body class="w3-text-theme">
		
		<!-- get data followers, following and projects on github -->

<?php
require 'vendor/autoload.php';
$myClient = new GuzzleHttp\Client();
$Response = $myClient->request('GET', 'https://api.github.com/users/tegarsabila');

$data = $Response->getBody();
$info = json_decode($data, true);
$followers = $info['followers'];
$following = $info['following'];
$project = $info['public_repos'];
?>

<!--
<script>
var xmlhttp = new XMLHttpRequest();
var url = "http://api.github.com/users/tegarsabila";

xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        var myArr = JSON.parse(this.responseText);
        myFunction(myArr);
    }
};
xmlhttp.open("GET", url, true);
xmlhttp.send();

function myFunction(arr) {
    var followers = arr["followers"];
    var following = arr["following"];
    var project = arr["public_repos"];
    
    document.getElementById("followers").innerHTML = followers;
    document.getElementById("following").innerHTML = following;
    document.getElementById("project").innerHTML = project;
}
</script>
-->
		<!-- http get request to api visitor -->

<?php
require 'vendor/autoload.php';
$client = new GuzzleHttp\Client();
$feedResponse = $client->request('GET', 'https://camo.githubusercontent.com/91817ab10ad6f91e2f2236e3092cfe890e5ec62b1e07ce515dd1695e976d3512/68747470733a2f2f6b6f6d617265762e636f6d2f67687076632f3f757365726e616d653d7465676172736162696c61266c6162656c3d546f74616c25323050726f66696c6525323056697369746f7226636f6c6f723d303731413243267374796c653d666f722d7468652d6261646765');

$body = $feedResponse->getBody();
$xml = new SimpleXMLElement($body);

$view = "" . $xml->title . "";
$visitor = str_replace("TOTAL PROFILE VISITOR: ", "", $view);
?>

		<!-- container pertama-->
		
		<div class="w3-container w3-center w3-margin-top w3-text-theme">
			<!-- profil -->
			
			<img src="dist/img/foto.png" style="width:50%;max-width:200px height: auto; border:8px solid;border-color:#2196f3!important;" class="w3-circle w3-padding  w3-image" alt="Foto">
			
			<h2 style="padding-top: 16px;"><strong>Tegar Sabila</strong><h2>
			<h5 class="w3-opacity"><b>Pengembang Perangkat Lunak ID<b></h5>
		<!-- Sosial media -->
		<div class="w3-padding w3-xlarge">
			<a href="https://instagram.com/tegarsabila.id"><i class="fab fa-instagram fa-lg w3-margin"></i></a>
			<a href="https://twitter.com/asahikimura24_?t=5uEPGQxJrc4quFONdsaVhg&s=09"><i class="fab fa-twitter  fa-lg w3-margin"></i></a>
			<a href="//github.com/tegarsabila"><i class="fab fa-github fa-lg w3-margin"></i></a>
			<a href="https://wa.me/6289516271322"><i class="fab fa-whatsapp fa-lg w3-margin"></i></a>
			<a href="https//t.me/tegardev"><i class="fab fa-telegram-plane fa-lg w3-margin"></i></a>
			<a href="https//fb.me/asahikimura.id"><i class=" fab fa-facebook fa-lg w3-margin"></i></a>
		</div>
		
		
		<!-- Data Informasi -->
		<div class="w3-cell-row">
			<div class="w3-cell">
			    <h6><strong>
                <?php
                echo "$visitor";
                ?>
                </strong><p class="w3-opacity">Visitor</p></h6>
			</div>
			<div class="w3-cell">
			    <h6><strong>
                <?php
                echo "$project";
                ?>
                </strong><br><p class="w3-opacity">Completed<br>Projects</p></h6>
			</div>
			<div class="w3-cell">
			    <h6><strong>
                <?php
                echo "$followers";
                ?>
                </strong><br><p class="w3-opacity">Followers</p></h6>
			</div>
			<div class="w3-cell">
			    <h6><strong>
                <?php
                echo "$following";
                ?>
                </strong><br><p class="w3-opacity">Following</p></h6>
			</div>
		</div>
		
		<!-- Button join grup -->
			
		<div class="padding-button w3-margin w3-theme w3-container w3-button w3-xlarge w3-round-large">
			<a href="https://t.me/labcoding">Join Group <i class="fab fa-telegram-plane fa-lg w3-margin"></i></a>
		</div>
	</body>
</html>
