<?php
require '../../../../../../Auth/Configuration/Config.php';
require '../../../../../../Auth/Configuration/Site_Config.php';
require '../../../../../../Auth/Configuration/Product_Config.php';
require '../../../../../../Auth/connection.php';
$sdoubledotconnect = "../../../../../../";
$_CONFIG['Page'] = "Donkey Kong 64";

  // Initialize the session
session_start();
// If session variable is not set it will redirect to login page

if(!isset($_SESSION['username']) || empty($_SESSION['username'])){

  header("location: ../../../../../../login.php");

  exit;

}
?>
<!DOCTYPE html>
<html>
  <head>
  <meta http-equiv="content-type" content="text/html; charset=windows-1250">
  <meta name="viewport" content="width=device-width" />
  <title><?php echo $_CONFIG['WebName']?> | Home</title>
  <link rel="stylesheet" href="../../../../../../css/components.css">
  <link rel="stylesheet" href="../../../../../../css/responsee.css">  
  <link rel="stylesheet" href="../../../../../../owl-carousel/owl.carousel.css">
  <link rel="stylesheet" href="../../../../../../owl-carousel/owl.theme.css">
  <link rel="stylesheet" type="text/css" href="../../../../../../css/style.css">
  <link rel="stylesheet" href="../../../../../../assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="../../../../../../assets/tether/tether.min.css">
  <link rel="stylesheet" href="../../../../../../assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../../../../../assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="../../../../../../assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="../../../../../../assets/theme/css/style.css">
  <link rel="stylesheet" href="../../../../../../assets/mobirise/css/mbr-additional.css" type="text/css">
  <script type="text/javascript" src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
  <script type="text/javascript" src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>  
  <script type="text/javascript" src="../../../../../../js/modernizr.js"></script>
  <script type="text/javascript" src="../../../../../../js/responsee.js"></script>
  <script type="text/javascript" src="../../../../../../owl-carousel/owl.carousel.js"></script>
<script type="text/javascript" src="http://code.jquery.com/ui/1.10.1/jquery-ui.min.js"></script>	
<script type="text/javascript" src="../../../../../../js/script.js"></script>
  
   <script type="text/javascript">
    $(document).ready(function() {     
    $("#owl-demo").owlCarousel({     
    navigation : true,
    slideSpeed : 300,
    paginationSpeed : 400,
    autoPlay : true,
    singleItem:true
    });
    });  
    
    $(document).ready(function() {     
    $("#owl-demo2").owlCarousel({
    items : 4,
    lazyLoad : true,
    autoPlay : true,
    navigation : true,
    pagination : false
    });     
    });   
  </script>
  <style>
	Right{
  text-align: right;
}
.vl {
    border-left: 6px solid green;
    height: 135px;
}
input[type=text] {
    width: 130px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
    background-image: url('searchicon.png');
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
}

input[type=text]:focus {
    width: 100%;
}
* {
  box-sizing: border-box;
}

/* Position the image container (needed to position the left and right arrows) */
.container {
  position: relative;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Add a pointer when hovering over the thumbnail images */
.cursor {
  cursor: pointer;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 40%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* Container for image text */
.caption-container {
  text-align: center;
  background-color: #222;
  padding: 2px 16px;
  color: white;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Six columns side by side */
.column {
  float: left;
  width: 16.66%;
}

/* Add a transparency effect for thumnbail images */
.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}
div.gallery {
    margin: 5px;
    border: 1px solid #ccc;
    float: left;
    width: 180px;
}

div.gallery:hover {
    border: 1px solid #777;
}

div.gallery img {
    width: 100%;
    height: auto;
}

div.desc {
    padding: 15px;
    text-align: center;
}
</style>
<script>
var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
} 
</script>
  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  </head>
  <body class="size-960">
    <!-- HEADER -->
    <header>
	  <div class="line">
        <div class="w3-container w3-black">
          <div class="s-6 l-2">
            <?PHP 
				if ($_CONFIG['Logo'] != ""){
			?>
			<img src="../../../../../../img/logo.png" width="189" height="69">
			<?php
				}
				else
				{
			?>
			<img src="../../../../../../img/Default/logo.png" width="189" height="69">
			<?php
				}
			?>
          </div>
        </div>
      </div>
      <!-- TOP NAV -->  
      <div class="line">
        <nav class="margin-bottom">
          <p class="nav-text">Custom menu text</p> 
          <div class="top-nav s-12 l-10">
            <ul>
              <li><a href="../../../../../../index.php">Home</a></li>
				<?php
					if(isset($_SESSION['username']))
					{
				?>
			  <li><a href="../../../../../../Shop.php">Shop</a>
			    <ul>
				  <li><a href="../../../../../../Shop/Video Games.php">Video Games</a>
				    <ul>
					  <li><a href="../../../../../../Shop/Video Games/Consoles.php">Consoles</a>
						<ul>
						  <li><a href="../../../../../../Shop/Video Games/Consoles/Playstation.php">Sony</a>
							<ul>
							  <li><a href="../../../../../../Shop/Video Games/Consoles/Playstation/Playstation 1.php">Playstation 1</a>
								<ul>
								  <li><a href="../../../../../../Shop/Video Games/Consoles/Playstation/Playstation 1/Games.php">Games</a></li>
								  <li><a href="../../../../../../Shop/Video Games/Consoles/Playstation/Playstation 1/Systems.php">Systems</a></li>
								  <li><a href="../../../../../../Shop/Video Games/Consoles/Playstation/Playstation 1/Accessories.php">Accessories</a></li>
								</ul>
							  </li>
							  <li><a href="../../../../../../Shop/Video Games/Consoles/Playstation/Playstation 2.php">Playstation 2</a>
								<ul>
								  <li><a href="../../../../../../Shop/Video Games/Consoles/Playstation/Playstation 2/Games.php">Games</a></li>
								  <li><a href="../../../../../../Shop/Video Games/Consoles/Playstation/Playstation 2/Systems.php">Systems</a></li>
								  <li><a href="../../../../../../Shop/Video Games/Consoles/Playstation/Playstation 2/Accessories.php">Accessories</a></li>
								</ul>
							  </li>
							  <li><a href="../../../../../../Shop/Video Games/Consoles/Playstation/Playstation 3.php">Playstation 3</a>
								<ul>
								  <li><a href="../../../../../../Shop/Video Games/Consoles/Playstation/Playstation 3/Games.php">Games</a></li>
								  <li><a href="../../../../../../Shop/Video Games/Consoles/Playstation/Playstation 3/Systems.php">Systems</a></li>
								  <li><a href="../../../../../../Shop/Video Games/Consoles/Playstation/Playstation 3/Accessories.php">Accessories</a></li>
								</ul>
							  </li>
							  <li><a href="../../../../../../Shop/Video Games/Consoles/Playstation/Playstation Portable.php">Playstation Poratable</a>
								<ul>
								  <li><a href="../../../../../../Shop/Video Games/Consoles/Playstation/Playstation Portable/Games.php">Games</a></li>
								  <li><a href="../../../../../../Shop/Video Games/Consoles/Playstation/Playstation Portable/Systems.php">Systems</a></li>
								  <li><a href="../../../../../../Shop/Video Games/Consoles/Playstation/Playstation Portable/Accessories.php">Accessories</a></li>
								</ul>
							  </li>
							  <li><a href="../../../../../../Shop/Video Games/Consoles/Playstation/Playstation Move.php">Playstation Move</a>
								<ul>
								  <li><a href="../../../../../../Shop/Video Games/Consoles/Playstation/Playstation Move/Games.php">Games</a></li>
								  <li><a href="../../../../../../Shop/Video Games/Consoles/Playstation/Playstation Move/Systems.php">Systems</a></li>
								  <li><a href="../../../../../../Shop/Video Games/Consoles/Playstation/Playstation Move/Accessories.php">Accessories</a></li>
								</ul>
							  </li>
							</ul>
						  </li>
						  <li><a href="../../../../../../Shop/Video Games/Consoles/Nintendo.php">Nintendo</a>
							<ul>
							  <li><a href="../../../../../../Shop/Video Games/Consoles/Nintendo/Wii.php">Wii</a>
								<ul>
								  <li><a href="../../../../../../Shop/Video Games/Consoles/Nintendo/Wii/Games.php">Games</a></li>
								  <li><a href="../../../../../../Shop/Video Games/Consoles/Nintendo/Wii/Systems.php">Systems</a></li>
								  <li><a href="../../../../../../Shop/Video Games/Consoles/Nintendo/Wii/Accessories.php">Accessories</a></li>
								</ul>
							  </li>
							  <li><a href="../../../../../../Shop/Video Games/Consoles/Nintendo/GameCube.php">GameCube</a>
								<ul>
								  <li><a href="../../../../../../Shop/Video Games/Consoles/Nintendo/GameCube/Games.php">Games</a></li>
								  <li><a href="../../../../../../Shop/Video Games/Consoles/Nintendo/GameCube/Systems.php">Systems</a></li>
								  <li><a href="../../../../../../Shop/Video Games/Consoles/Nintendo/GameCube/Accessories.php">Accessories</a></li>
								</ul>
							  </li>
							  <li><a href="../../../../../../Shop/Video Games/Consoles/Nintendo/Nintendo 64.php">Nintendo 64</a>
								<ul>
								  <li><a href="../../../../../../Shop/Video Games/Consoles/Nintendo/Nintendo 64/Games.php">Games</a></li>
								  <li><a href="../../../../../../Shop/Video Games/Consoles/Nintendo/Nintendo 64/Games.php">Systems</a></li>
								  <li><a href="../../../../../../Shop/Video Games/Consoles/Nintendo/Nintendo 64/Games.php">Accessories</a></li>
								</ul>
							  </li>
							</ul>
						  </li>
						  <li><a href="../../../../../../Shop/Video Games/Consoles/ATARI.php">ATARI</a>
							<ul>
							  <li><a href="../../../../../../Shop/Video Games/Consoles/ATARI/2600.php">2600</a>
								<ul>
								  <li><a href="../../../../../../Shop/Video Games/Consoles/ATARI/2600/Games.php">Games</a></li>
								  <li><a href="../../../../../../Shop/Video Games/Consoles/ATARI/2600/Systems.php">Systems</a></li>
								  <li><a href="../../../../../../Shop/Video Games/Consoles/ATARI/2600/Accessories.php">Accessories</a></li>
								</ul>
							  </li>
							</ul>
						  </li>
						  <li><a href="../../../../../../Shop/Video Games/Consoles/Microsoft.php">Microsoft</a>
							<ul>
							  <li><a href="../../../../../../Shop/Video Games/Consoles/Microsoft/Xbox.php">Xbox</a>
								<ul>
								  <li><a href="../../../../../../Shop/Video Games/Consoles/Microsoft/Xbox/Games.php">Games</a></li>
								  <li><a href="../../../../../../Shop/Video Games/Consoles/Microsoft/Xbox/Systems.php">Systems</a></li>
								  <li><a href="../../../../../../Shop/Video Games/Consoles/Microsoft/Xbox/Accessories.php">Accessories</a></li>
								</ul>
							  </li>
							  <li><a href="../../../../../../Shop/Video Games/Consoles/Microsoft/Xbox 360.php">Xbox 360</a>
								<ul>
								  <li><a href="../../../../../../Shop/Video Games/Consoles/Microsoft/Xbox 360/Games.php">Games</a></li>
								  <li><a href="../../../../../../Shop/Video Games/Consoles/Microsoft/Xbox 360/Systems.php">Systems</a></li>
								  <li><a href="../../../../../../Shop/Video Games/Consoles/Microsoft/Xbox 360/Accessories.php">Accessories</a></li>
								</ul>
							  </li>
							  <li><a href="../../../../../../Shop/Video Games/Consoles/Microsoft/PC.php">PC</a>
								<ul>
								  <li><a href="../../../../../../Shop/Video Games/Consoles/Microsoft/PC/Games.php">Games</a></li>
								  <li><a href="../../../../../../Shop/Video Games/Consoles/Microsoft/PC/Systems.php">Systems</a></li>
								  <li><a href="../../../../../../Shop/Video Games/Consoles/Microsoft/PC/Accessories.php">Accessories</a></li>
								</ul>
							  </li>
							</ul>
						  </li>
						  <li><a href="../../../../../../Shop/Video Games/Consoles/SEGA.php">SEGA</a>
							<ul>
							  <li><a href="../../../../../../Shop/Video Games/Consoles/SEGA/Genesis.php">Genesis</a>
								<ul>
								  <li><a href="../../../../../../Shop/Video Games/Consoles/SEGA/Genesis/Games.php">Games</a></li>
								  <li><a href="../../../../../../Shop/Video Games/Consoles/SEGA/Genesis/Systems.php">Systems</a></li>
								  <li><a href="../../../../../../Shop/Video Games/Consoles/SEGA/Genesis/Accessories.php">Accessories</a></li>
								</ul>
							  </li>
							  <li><a href="../../../../../../Shop/Video Games/Consoles/SEGA/GameGear.php">GameGear</a>
								<ul>
								  <li><a href="../../../../../../Shop/Video Games/Consoles/SEGA/GameGear/Games.php">Games</a></li>
								  <li><a href="../../../../../../Shop/Video Games/Consoles/SEGA/GameGear/Systems.php">Systems</a></li>
								  <li><a href="../../../../../../Shop/Video Games/Consoles/SEGA/GameGear/Accessories.php">Accessories</a></li>
								</ul>
							  </li>
							  <li><a href="../../../../../../Shop/Video Games/Consoles/SEGA/DreamCast.php">DreamCast</a>
								<ul>
								  <li><a href="../../../../../../Shop/Video Games/Consoles/SEGA/DreamCast/Games.php">Games</a></li>
								  <li><a href="../../../../../../Shop/Video Games/Consoles/SEGA/DreamCast/Systems.php">Systems</a></li>
								  <li><a href="../../../../../../Shop/Video Games/Consoles/SEGA/DreamCast/Accessories.php">Accessories</a></li>
								</ul>
							  </li>
							</ul>
						  </li>
						</ul>					
					  </li>
					  <li><a href="../../../../../../Shop/Video Games/Plug N Plays.php">Plug N Plays</a>
						<ul>
						  <li><a href="../../../../../../Shop/Video Games/Plug N Plays/JAKKS.php">Jakks Pacific</a></li>
						</ul>
					  </li>
					</ul>
				  </li>
			      <li><a href="../../../../../../Shop/Toys.php">Toys</a>
			        <ul>
				      <li><a href="../../../../../../Shop/Toys/Stuffed Animals.php">Stuffed Animals</a>
					    <ul>
					      <li><a href="../../../../../../Shop/Toys/Stuffed Animals/Beanie Babies.php">Beanie Babies</a>
						    <li><a href="../../../../../../Shop/Toys/Stuffed Animals/Beanie Babies/TY.php">TY</a></li>
						    <li><a href="../../../../../../Shop/Toys/Stuffed Animals/Beanie Babies/Nintendo.php">Nintendo</a></li>
						  </li>
					    </ul>
				      </li>
				      <li><a href="../../../../../../Shop/Toys/Dart Guns.php">Dart Guns</a>
					    <ul>
						  <li><a href="../../../../../../Shop/Toys/Dart Guns/Nerf.php">Nerf</a></li>
						  <li><a href="../../../../../../Shop/Toys/Dart Guns/Buzz Bee.php">Buzz Bee</a></li>
						  <li><a href="../../../../../../Shop/Toys/Dart Guns/Boom Co.php">Boom Co.</a></li>
						</ul>
					  </li>
				      <li><a href="../../../../../../Shop/Toys/Collectibles.php">Collectibles</a></li>
				      <li><a href="../../../../../../Shop/Toys/Trading Cards.php">Trading Cards</a>
					    <ul>
						  <li><a href="../../../../../../Shop/Toys/Trading Cards/TCG.php">TCG</a>
						    <ul>
					          <li><a href="../../../../../../Shop/Toys/Trading Cards/TCG/Pokemon.php">Pokemon</a></li>
					          <li><a href="../../../../../../Shop/Toys/Trading Cards/TCG/Yu-gi-oh.php">YuGiOh</a></li>
							</ul>
						  </li>
					      <li><a href="../../../../../../Shop/Toys/Trading Cards/Sports Cards.php">Sports Cards</a>
						    <ul>
						      <li><a href="../../../../../../Shop/Toys/Trading Cards/Sports Cards/BaseBall.php">BaseBall</a></li>
						      <li><a href="../../../../../../Shop/Toys/Trading Cards/Sports Cards/FootBall.php">FootBall</a></li>
						      <li><a href="../../../../../../Shop/Toys/Trading Cards/Sports Cards/BasketBall.php">BasketBall</a></li>
						      <li><a href="../../../../../../Shop/Toys/Trading Cards/Sports Cards/Hockey.php">Hockey</a></li>
						    </ul>
						  </li>
						</ul>
					  </li>
				    </ul>
			      </li>
				</ul>
			  </li>
				<?php
					}
					else 
					{
						
					}
				?>
              <li><a href="../../../../../../Company.html">Company</a>
                <ul>
                  <li><a href="../../../../../../About.html">About</a></li>
                  <li><a href="../../../../../../Location.html">Location</a></li>
                </ul>
              </li>
              <li><a href="../../../../../../Contact.html">Contact</a>
			    <ul>
				<?PHP 
				if ($_CONFIG['EMail'] != "")
				{
				?>
			      <li><a href="mailto:<?php echo $_CONFIG['EMail']?>">Email</a></li>
				<?PHP
				}
				else
				{
					
				}
				if ($_CONFIG['Facebook'] != "")
				{
				?>
			      <li><a href="<?php echo $_CONFIG['Facebook']?>">Facebook</a></li>
				<?PHP
				}
				else
				{
					
				}
				if ($_CONFIG['Twitter'] != "")
				{
				?>
				  <li><a href="<?php echo $_CONFIG['Twitter']?>">Twitter</a></li>
				<?PHP
				}
				else
				{
					
				}
				if ($_CONFIG['InstaGram'] != "")
				{
				?>
				  <li><a href="<?php echo $_CONFIG['InstaGram']?>">Instagram</a></li>
				<?PHP
				}
				else
				{
					
				}
				?>
				</ul>
			  </li>
			<?php
				if(isset($_SESSION['username']))
				{
			?>
			  <li><a href="../../../../../../Profile.php">Profile</a>
			  	<ul>
				<li>
				  <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" >
				    <input type="hidden" name="cmd" value="_s-xclick">
				    <input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----">
				    <input type="image" src="../../../../../../img/rsz_1rsz_title_cart.png" border="0" name="submit" alt="&nbsp;&nbsp;View Cart" style="color:white">
				  </form>
				  </li>
				  <li><a href="../../../../../../logout.php">Logout</a></li>
				</ul>
			  </li>
			  <?php
				  }
				  else if(!isset($_SESSION['username']))
				  {
			  ?>
			  <li><a href="../../../../../../signup.php">Sign Up / Login</a></li>
			  <?php
				  }
			  ?>
			  </UL>
		  </div>
          <div class=" hide-s l-2">
            <i class="icon-facebook_circle icon2x right padding"></i>
          </div>
        </nav>
      </div>
    </header> 
	<section class="features11 cid-qViyJvVSup" id="features11-12">

    <div class="container">   
        <div class="col-md-12">
            <div class="media-container-row">
                 <!-- Container for the image gallery -->
				<div class="container">
				<?php
				$sql_table = "games_selling_db";
				$sql = "SELECT * FROM $sql_table WHERE Games=?";
				 
				/* Prepare statement */
				$stmt = $conn->prepare($sql);
				if($stmt === false) {
				  trigger_error('Wrong SQL: ' . $sql . ' Error: ' . $conn->errno . ' ' . $conn->error, E_USER_ERROR);
				}
			
				$id = "Donkey Kong 64";
				 
				/* Bind parameters. Types: s = string, i = integer, d = double,  b = blob */
				$stmt->bind_param("s", $id);
				 
				/* Execute statement */
				if ($stmt->execute()){
				 
				/* Fetch result to array */
				$res = $stmt->get_result();
				while($row = $res->fetch_array(MYSQLI_ASSOC)) {
						$_Product_Config['Brand'] = $row['Brand'];
						$_Product_Config['Console'] = $row['Console'];
						$_Product_Config['Games'] = $row['Games'];
						$_Product_Config['Product_Pic1'] = $row['image_1'];
						$_Product_Config['Product_Pic2'] = $row['image_2'];
						$_Product_Config['Product_Pic3'] = $row['image_3'];
						$_Product_Config['Product_Pic4'] = $row['image_4'];
						$_Product_Config['Product_Pic5'] = $row['image_5'];
						$_Product_Config['Product_Pic6'] = $row['image_6'];
						$_Product_Config['Product_Pic_Name1'] = $row['Image_Pic_Name1'];
						$_Product_Config['Product_Pic_Name2'] = $row['Image_Pic_Name2'];
						$_Product_Config['Product_Pic_Name3'] = $row['Image_Pic_Name3'];
						$_Product_Config['Product_Pic_Name4'] = $row['Image_Pic_Name4'];
						$_Product_Config['Product_Pic_Name5'] = $row['Image_Pic_Name5'];
						$_Product_Config['Product_Pic_Name5'] = $row['Image_Pic_Name6'];
						if($_Product_Config['Games'] === "Donkey Kong 64"){
				?>
					
				  <!-- Full-width images with number text -->
				  <?php
				  if(!empty($_Product_Config['Product_Pic1']) or !empty($_Product_Config['Product_Pic1'])){
				  ?>
				  <div class="mySlides" style="display: inline;">
					<div class="numbertext">1 / 2</div>
					  <img src="../../../../../../img/Brands/<?php echo $_Product_Config['Brand']?>/<?php echo $_Product_Config['Console']?>/Games/<?php echo $_Product_Config['Games']?>/<?php echo $_Product_Config['Product_Pic1'] ?>" style="width:100%">
				  </div>
				  <?php
				  }
				  else
				  {
					  
				  }
				 if(!empty($_Product_Config['Product_Pic2']) or !empty($_Product_Config['Product_Pic2'])){
				  ?>
				  <div class="mySlides" style="display: none;">
					<div class="numbertext">2 / 2</div>
					  <img src="../../../../../../img/Brands/<?php echo $_Product_Config['Brand']?>/<?php echo $_Product_Config['Console']?>/Games/<?php echo $_Product_Config['Games']?>/<?php echo $_Product_Config['Product_Pic2'] ?>" style="width:100%">
				  </div>
				  <?php
				  }
				  else
				  {
					  
				  }
				  ?>
				  

				  <!-- Next and previous buttons -->
				  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
				  <a class="next" onclick="plusSlides(1)">&#10095;</a>

				  <!-- Image text -->
				  <div class="caption-container">
					<p id="caption"></p>
				  </div>
				  

				  <!-- Thumbnail images -->
				  <div class="row">
				  <?php
				  if(!empty($_Product_Config['Product_Pic1']) or !empty($_Product_Config['Product_Pic1'])){
				  ?>
					<div class="column">
					  <img class="demo cursor" src="../../../../../../img/Brands/<?php echo $_Product_Config['Brand']?>/<?php echo $_Product_Config['Console']?>/Games/<?php echo $_Product_Config['Games']?>/<?php echo $_Product_Config['Product_Pic1'] ?>" style="width:100%" onclick="currentSlide(1)" alt="<?php echo $_Product_Config['Product_Pic_Name1'] ?>">
					</div>
					<?php
				  }
				  else
				  {
					  
				  }
				  if(!empty($_Product_Config['Product_Pic2']) or !empty($_Product_Config['Product_Pic2'])){
				  ?>
					<div class="column">
					  <img class="demo cursor" src="../../../../../../img/Brands/<?php echo $_Product_Config['Brand']?>/<?php echo $_Product_Config['Console']?>/Games/<?php echo $_Product_Config['Games']?>/<?php echo $_Product_Config['Product_Pic2'] ?>" style="width:100%" onclick="currentSlide(2)" alt="<?php echo $_Product_Config['Product_Pic_Name2'] ?>">
					</div>
					<?php
				  }
				  else
				  {
					  
				  }
				  if(!empty($_Product_Config['Product_Pic3']) or !empty($_Product_Config['Product_Pic3'])){
				  ?>
					<div class="column">
					  <img class="demo cursor" src="../../../../../../img/Brands/<?php echo $_Product_Config['Brand']?>/<?php echo $_Product_Config['Console']?>/Games/<?php echo $_Product_Config['Games']?>/<?php echo $_Product_Config['Product_Pic3'] ?>" style="width:100%" onclick="currentSlide(3)" alt="<?php echo $_Product_Config['Product_Pic_Name3']?>">
					</div>
					<?php
				  }
				  else
				  {
					  
				  }
				 if(!empty($_Product_Config['Product_Pic4']) or !empty($_Product_Config['Product_Pic4'])){
				  ?>
					<div class="column">
					  <img class="demo cursor" src="../../../../../../img/Brands/<?php echo $_Product_Config['Brand']?>/<?php echo $_Product_Config['Console']?>/Games/<?php echo $_Product_Config['Games']?>/<?php echo $_Product_Config['Product_Pic4'] ?>" style="width:100%" onclick="currentSlide(4)" alt="<?php echo $_Product_Config['Product_Pic_Name4']?>">
					</div>
					<?php
				  }
				  else
				  {
					  
				  }
				  if(!empty($_Product_Config['Product_Pic5']) or !empty($_Product_Config['Product_Pic5'])){
				  ?>
					<div class="column">
					  <img class="demo cursor" src="../../../../../../img/Brands/<?php echo $_Product_Config['Brand']?>/<?php echo $_Product_Config['Console']?>/Games/<?php echo $_Product_Config['Games']?>/<?php echo $_Product_Config['Product_Pic5'] ?>" style="width:100%" onclick="currentSlide(5)" alt="<?php echo $_Product_Config['Product_Pic_Name5']?>">
					</div>
					<?php
				  }
				  else
				  {
					  
				  }
				  if(!empty($_Product_Config['Product_Pic6']) or !empty($_Product_Config['Product_Pic6'])){
				  ?>
					<div class="column">
					  <img class="demo cursor" src="../../../../../../img/Brands/<?php echo $_Product_Config['Brand']?>/<?php echo $_Product_Config['Console']?>/Games/<?php echo $_Product_Config['Games']?>/<?php echo $_Product_Config['Product_Pic6'] ?>" style="width:100%" onclick="currentSlide(6)" alt="<?php echo $_Product_Config['Product_Pic_Name6']?>">
					</div>
				<?php
				  }
				  else
				  {
					  
				  }
				  ?>
				  </div>
				  <?php
					
				}
			}
			}
				
			?>
				</div> 
			<?php
			$sql_table = "product_info_db";
			$sql = "SELECT * FROM $sql_table WHERE Name=?";
			 
			/* Prepare statement */
			$stmt = $conn->prepare($sql);
			if($stmt === false) {
			  trigger_error('Wrong SQL: ' . $sql . ' Error: ' . $conn->errno . ' ' . $conn->error, E_USER_ERROR);
			}
		
			$id = "Donkey Kong 64";
			 
			/* Bind parameters. Types: s = string, i = integer, d = double,  b = blob */
			$stmt->bind_param("s", $id);
			 
			/* Execute statement */
			if ($stmt->execute()){
			 
			/* Fetch result to array */
			$res = $stmt->get_result();
			while($row = $res->fetch_array(MYSQLI_ASSOC)) {
							$_Product_CONFIG['Name'] = $row['Name'];
							$_Product_CONFIG['Info'] = $row['Product_Info'];
							$_Product_CONFIG['Description'] = $row['Description'];
							$_Product_CONFIG['Quality'] = $row['Quality'];
							$_Product_CONFIG['Amount'] = $row['Amount'];
							$_Product_CONFIG['Buy_Button'] = $row['Buy_Button'];
							$_Product_CONFIG['Price'] = $row['Price'];
							$_Product_CONFIG['Ship_Price'] = $row['Ship_Price'];

							if ($_Product_CONFIG['Name'] === "Donkey Kong 64"){
							?>
                <div class=" align-left aside-content">
                    <h2 class="mbr-title pt-2 mbr-fonts-style display-2">
						<?php echo $_Product_CONFIG['Name']?>
                    </h2>
                    <div class="mbr-section-text">
                        <p class="mbr-text mb-5 pt-3 mbr-light mbr-fonts-style display-5">
                        Condition: <?php echo $_Product_CONFIG['Quality']?><br>
						<br>
						Price: $<?php echo $_Product_CONFIG['Price']?><br>
						Shipping: $<?php echo $_Product_CONFIG['Ship_Price']?><br>
						<?php echo $_Product_CONFIG['Buy_Button']?><br>
						<?php echo $_Product_CONFIG['Description']?>
                        </p>
                    </div>

                    <div class="block-content">
                        <div class="card p-3 pr-3">
                            <div class="media">  
                                <div class="media-body">
                                    <h4 class="card-title mbr-fonts-style display-7">
                                        <?php echo $_Product_CONFIG['Info']?>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
				<?php
							}
						}
					}
					else 
					{
						?>
				<div class=" align-left aside-content">
                    <h2 class="mbr-title pt-2 mbr-fonts-style display-2">
						Default Name
                    </h2>
                    <div class="mbr-section-text">
                        <p class="mbr-text mb-5 pt-3 mbr-light mbr-fonts-style display-5">
                        Condition: Unknown<br>
						<br>
						Price: $0<br>
						Shipping: $0<br>
						<br>
						Product Information: None
                        </p>
                    </div>

                    <div class="block-content">
                        <div class="card p-3 pr-3">
                            <div class="media">  
                                <div class="media-body">
                                    <h4 class="card-title mbr-fonts-style display-7">
                                        <?php echo $_Product_CONFIG['Info']?>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
				<?PHP
					}
					?>
            </div>
        </div> 
    </div>      
	<div class="container">
	<div class="line">
	<h2>Related Products</h2>
		   <div id="owl-demo2" class="owl-carousel margin-bottom">
		<?php
			$sql_table = "Gallery_db";
				$sql = "SELECT * FROM $sql_table WHERE Console=? LIMIT 5;";
				 
				/* Prepare statement */
				$stmt = $conn->prepare($sql);
				if($stmt === false) {
				  trigger_error('Wrong SQL: ' . $sql . ' Error: ' . $conn->errno . ' ' . $conn->error, E_USER_ERROR);
				}
			
				$id = "Nintendo 64";
				 
				/* Bind parameters. Types: s = string, i = integer, d = double,  b = blob */
				$stmt->bind_param("s", $id);
				 
				/* Execute statement */
				if ($stmt->execute()){
				 
				/* Fetch result to array */
				$res = $stmt->get_result();
				while($row = $res->fetch_array(MYSQLI_ASSOC)) {
					$_Gallery_Config['Brand'] = $row['Brand'];
					$_Gallery_Config['Console'] = $row['Console'];
					$_Gallery_Config['Image'] = $row['Image'];
					$_Gallery_Config['id'] = $row['id'];
					$_Gallery_Config['name'] = $row['Name'];
				?>
				
				
          <div class="item"><a href="../../../../../../Shop/Video Games/Consoles/<?php echo $_Gallery_Config['Brand']?>/<?php echo $_Gallery_Config['Console']?>/Games/<?php echo $_Gallery_Config['name']?>.php"><img class="lazyOwl" data-src="../../../../../../img/Gallery/<?php echo $_Gallery_Config['Image']?>" alt="<?php echo $_Gallery_Config['name']?>"></a></div>
				<?php
				}
			} else {
			?>
			<div id="owl-demo2" class="owl-carousel margin-bottom">
          <div class="item"><a href="index.php"><img class="lazyOwl" data-src="img/default/940x380.jpg" alt=""></a></div>
		  <div class="item"><a href="index.php"><img class="lazyOwl" data-src="img/default/940x380-2.jpg" alt=""></a></div>
		  <div class="item"><a href="index.php"><img class="lazyOwl" data-src="img/default/940x380-3.jpg" alt=""></a></div>
		  <div class="item"><a href="index.php"><img class="lazyOwl" data-src="img/default/940x380.jpg" alt=""></a></div>
		  <div class="item"><a href="index.php"><img class="lazyOwl" data-src="img/default/940x380-2.jpg" alt=""></a></div>
        </div>
			
			<?php	
			}
			?>
        </div>			
      </div>
	</div>
</section>