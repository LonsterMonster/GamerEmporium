<?php
$sdoubledotconnect ="../../../../../../";
if($sdoubledotconnect == "../"){
require '../Auth/Configuration/Config.php';
require '../Auth/Configuration/Product_Config.php';
require '../Auth/Configuration/Shop_Config.php';
require '../Auth/connection.php';
}else if($sdoubledotconnect == "../../"){
require '../../Auth/Configuration/Config.php';
require '../../Auth/Configuration/Product_Config.php';
require '../../Auth/Configuration/Shop_Config.php';
require '../../Auth/connection.php';
}else if($sdoubledotconnect == "../../../"){
require '../../../Auth/Configuration/Config.php';
require '../../../Auth/Configuration/Product_Config.php';
require '../../../Auth/Configuration/Shop_Config.php';
require '../../../Auth/connection.php';
}else if($sdoubledotconnect == "../../../../"){
require '../../../../Auth/Configuration/Config.php';
require '../../../../Auth/Configuration/Product_Config.php';
require '../../../../Auth/Configuration/Shop_Config.php';
require '../../../../Auth/connection.php';
}else if($sdoubledotconnect == "../../../../../../"){
require '../../../../../../Auth/Configuration/Config.php';
require '../../../../../../Auth/Configuration/Product_Config.php';
require '../../../../../../Auth/Configuration/Shop_Config.php';
require '../../../../../../Auth/connection.php';
}else if($sdoubledotconnect == "../../../../../../../"){
require '../../../../../../../Auth/Configuration/Config.php';
require '../../../../../../../Auth/Configuration/Product_Config.php';
require '../../../../../../../Auth/Configuration/Shop_Config.php';
require '../../../../../../../Auth/connection.php';
}else if ($sdoubledotconnect == ""){
require 'Auth/Configuration/Config.php';
require 'Auth/Configuration/Product_Config.php';
require 'Auth/Configuration/Shop_Config.php';
require 'Auth/connection.php';
}
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
  <title>Gamer Emporium | Home</title>
  <link rel="stylesheet" href="../../../../../../css/components.css">
  <link rel="stylesheet" href="../../../../../../css/responsee.css">  
  <link rel="stylesheet" href="../../../../../../owl-carousel/owl.carousel.css">
  <link rel="stylesheet" href="../../../../../../owl-carousel/owl.theme.css">
  
  <script type="text/javascript" src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
  <script type="text/javascript" src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>  
  <script type="text/javascript" src="../../../../../../js/modernizr.js"></script>
  <script type="text/javascript" src="../../../../../../js/responsee.js"></script>
  <script type="text/javascript" src="../../../../../../owl-carousel/owl.carousel.js"></script>
  
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
.center {
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 50%;
}
body {
  font-family: Arial;
  margin: 0;
}

* {
  box-sizing: border-box;
}

img {
  vertical-align: middle;
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
  padding: 2px 8px;
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
.boxed {
  border: 2px Black ;
  background-color:DarkGrey; 
} 
	</style>
  
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
            <img src="../../../../../../img/logo.png" width="189" height="69">
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
              <li><a href="../../../../../../Shop.php">Shop</a>
                <ul>
				  <li><a href="../../../../../../Shop/Video Games.php">Video Games</a>
				    <ul>
					  <li><a href="../../../../../../Shop/Video Games/Consoles.php">Consoles</a>
						<ul>
						  <li><a href="../../../../../../Shop/Video Games/Consoles/Sony.php">Sony</a>
							<ul>
							  <li><a href="../../../../../../Shop/Video Games/Consoles/Sony/Ps1.php">Playstation 1</a>
								<ul>
								  <li><a href="../../../../../../Shop/Video Games/Consoles/Sony/Ps1/Games.php">Games</a></li>
								  <li><a href="../../../../../../Shop/Video Games/Consoles/Sony/Ps1/Systems.php">Systems</a></li>
								  <li><a href="../../../../../../Shop/Video Games/Consoles/Sony/Ps1/Accessories.php">Accessories</a></li>
								</ul>
							  </li>
							  <li><a href="../../../../../../Shop/Video Games/Consoles/Sony/Ps2.php">Playstation 2</a>
								<ul>
								  <li><a href="../../../../../../Shop/Video Games/Consoles/Sony/Ps2/Games.php">Games</a></li>
								  <li><a href="../../../../../../Shop/Video Games/Consoles/Sony/Ps2/Systems.php">Systems</a></li>
								  <li><a href="../../../../../../Shop/Video Games/Consoles/Sony/Ps2/Accessories.php">Accessories</a></li>
								</ul>
							  </li>
							  <li><a href="../../../../../../Shop/Video Games/Consoles/Sony/Ps3.php">Playstation 3</a>
								<ul>
								  <li><a href="../../../../../../Shop/Video Games/Consoles/Sony/Ps3/Games.php">Games</a></li>
								  <li><a href="../../../../../../Shop/Video Games/Consoles/Sony/Ps3/Systems.php">Systems</a></li>
								  <li><a href="../../../../../../Shop/Video Games/Consoles/Sony/Ps3/Accessories.php">Accessories</a></li>
								</ul>
							  </li>
							  <li><a href="../../../../../../Shop/Video Games/Consoles/Sony/PsP.php">Playstation Poratable</a>
								<ul>
								  <li><a href="../../../../../../Shop/Video Games/Consoles/Sony/PsP/Games.php">Games</a></li>
								  <li><a href="../../../../../../Shop/Video Games/Consoles/Sony/PsP/Systems.php">Systems</a></li>
								  <li><a href="../../../../../../Shop/Video Games/Consoles/Sony/PsP/Accessories.php">Accessories</a></li>
								</ul>
							  </li>
							  <li><a href="../../../../../../Shop/Video Games/Consoles/Sony/PS Move.php">Playstation Move</a>
								<ul>
								  <li><a href="../../../../../../Shop/Video Games/Consoles/Sony/PS Move/Games.php">Games</a></li>
								  <li><a href="../../../../../../Shop/Video Games/Consoles/Sony/PS Move/Systems.php">Systems</a></li>
								  <li><a href="../../../../../../Shop/Video Games/Consoles/Sony/PS Move/Accessories.php">Accessories</a></li>
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
							  <li><a href="../../../../../../Shop/Video Games/Consoles/GameGear.php">GameGear</a>
								<ul>
								  <li><a href="../../../../../../Shop/Video Games/Consoles/GameGear/Games.php">Games</a></li>
								  <li><a href="../../../../../../Shop/Video Games/Consoles/GameGear/Systems.php">Systems</a></li>
								  <li><a href="../../../../../../Shop/Video Games/Consoles/GameGear/Accessories.php">Accessories</a></li>
								</ul>
							  </li>
							  <li><a href="../../../../../../Shop/Video Games/Consoles/DreamCast.php">DreamCast</a>
								<ul>
								  <li><a href="../../../../../../Shop/Video Games/Consoles/DreamCast/Games.php">Games</a></li>
								  <li><a href="../../../../../../Shop/Video Games/Consoles/DreamCast/Systems.php">Systems</a></li>
								  <li><a href="../../../../../../Shop/Video Games/Consoles/DreamCast/Accessories.php">Accessories</a></li>
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
              <li><a href="../../../../../../Company.php">Company</a>
                <ul>
                  <li><a href="../../../../../../About.php">About</a></li>
                  <li><a href="../../../../../../Location.php">Location</a></li>
                </ul>
              </li>
              <li><a href="../../../../../../Contact.html">Contact</a>
			    <ul>
			      <li><a href="../../../../../../Email.html">Email</a></li>
			      <li><a href="../../../../../../Facebook.html">Facebook</a></li>
				</ul>
			  </li>
		    </ul>
			<?php
				if(isset($_SESSION['username']))
				{
			?>
			<ul>
			  <li><a href="../../../../../../logout.php">Logout</a></li>
			</ul>
			  <?php
				  }
				  else if(!isset($_SESSION['username']))
				  {
			  ?>
			<ul>
			  <li><a href="../../../../../../signup.php">Sign Up / Login</a></li>
			</ul>
			  <?php
				  }
			  ?>
		  </div>
          <div class=" hide-s l-2">
            <i class="icon-facebook_circle icon2x right padding"></i>
          </div>
        </nav>
      </div>
    </header>
	<div class="container">
	  <div class="line">
	
	<?php
			$sql_table = "games_selling_db";
			$sql = "SELECT * FROM $sql_table;";
			$results = $conn->query($sql);

			if ($results->num_rows > 0) {
				// output data of each row
				while($row = $results->fetch_assoc()) {
					$_CONFIG['Games'] = $row['Games'];
					$_CONFIG['Brand'] = $row['Brand'];
					$_CONFIG['Console'] = $row['Console'];
					$_CONFIG['Item_Type'] = $row['Item_Type'];
					$_CONFIG['Amount'] = $row['Amount'];
					
					if($_CONFIG['Brand'] == "Playstation"){
					$_CONFIG['PSGames'] = $row['Games'];
					}
				}
			}
			$sql_table = "product_info_db";
			$sql = "SELECT * FROM $sql_table;";
			$results = $conn->query($sql);
			if ($results->num_rows > 0) {
				// output data of each row
				while($row = $results->fetch_assoc()) {
					$_CONFIG['Name'] = $row['Name'];
					$_CONFIG['Quality'] = $row['Quality'];
					$_CONFIG['Description'] = $row['Description'];
					$_CONFIG['Product_Info'] = $row['Product_Info'];
					$_CONFIG['Amount'] = $row['Amount'];
					
					if($_CONFIG['Name'] == "Crash Bandicoot and the Wrath of Cortex"){
					$_CONFIG['PSName'] = $row['Name'];
					}
				}
			}
			
			
			
			if($_CONFIG['PSGames'] == "Crash Bandicoot and the Wrath of Cortex"){
		
		?>
		  <div class="container">
  <div class="mySlides">
    <div class="numbertext">1 / 3</div>
    <img src="../../../../../../img/Brands/Playstation/Playstation 2/Games/<?php echo $_CONFIG['PSName']?>/Product_Image 1.jpg" style="width:25%"class="center">
  </div>

  <div class="mySlides">
    <div class="numbertext">2 / 3</div>
    <img src="../../../../../../img/Brands/Playstation/Playstation 2/Games/<?php echo $_CONFIG['PSName']?>/Product_Image 2.jpg" style="width:25%"class="center">
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 3</div>
    <img src="../../../../../../img/Brands/Playstation/Playstation 2/Games/<?php echo $_CONFIG['PSName']?>/Product_Image 3.jpg" style="width:25%"class="center">
  </div>
    
  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>

  <div class="caption-container">
    <p id="caption"></p>
  </div>

  <div class="row">
    <div class="column">
      <img class="demo cursor" src="../../../../../../img/Brands/Playstation/Playstation 2/Games/<?php echo $_CONFIG['PSName']?>/Product_Image 1.jpg" style="width:100%" onclick="currentSlide(1)" alt="Front">
    </div>
    <div class="column">
      <img class="demo cursor" src="../../../../../../img/Brands/Playstation/Playstation 2/Games/<?php echo $_CONFIG['PSName']?>/Product_Image 2.jpg" style="width:100%" onclick="currentSlide(2)" alt="Back">
    </div>
    <div class="column">
      <img class="demo cursor" src="../../../../../../img/Brands/Playstation/Playstation 2/Games/<?php echo $_CONFIG['PSName']?>/Product_Image 3.jpg" style="width:100%" onclick="currentSlide(3)" alt="CD">
    </div>
  </div>
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

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
<div class="boxed">

<?php
echo $_CONFIG['Product_Info'];
?>

</div> 
<?php
			}
			else 
			{
			}
			?>
		</div>
	  </div>
  </body>
</html>  
	