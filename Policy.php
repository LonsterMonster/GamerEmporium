<?php
$sdoubledotconnect ="";
if($sdoubledotconnect == "../"){
require '../Auth/Configuration/Config.php';
require '../Auth/Configuration/Site_Config.php';
require '../Auth/connection.php';
}else if($sdoubledotconnect == "../../"){
require '../../Auth/Configuration/Config.php';
require '../../Auth/Configuration/Site_Config.php';
require '../../Auth/connection.php';
}else if($sdoubledotconnect == "../../../"){
require '../../../Auth/Configuration/Config.php';
require '../../../Auth/Configuration/Site_Config.php';
require '../../../Auth/connection.php';
}else if($sdoubledotconnect == "../../../../"){
require '../../../../Auth/Configuration/Config.php';
require '../../../../Auth/Configuration/Site_Config.php';
require '../../../../Auth/connection.php';
}else if($sdoubledotconnect == "../../../../../"){
require '../../../../../Auth/Configuration/Config.php';
require '../../../../../Auth/Configuration/Site_Config.php';
require '../../../../../Auth/connection.php';
}else if($sdoubledotconnect == "../../../../../../"){
require '../../../../../../Auth/Configuration/Config.php';
require '../../../../../../Auth/Configuration/Shop_Config.php';
require '../../../../../../Auth/connection.php';
}else if ($sdoubledotconnect == ""){
require 'Auth/Configuration/Config.php';
require 'Auth/Configuration/Site_Config.php';
require 'Auth/connection.php';
}
  // Initialize the session
session_start();


?>
<!DOCTYPE html>
<html>
  <head>
  <meta http-equiv="content-type" content="text/html; charset=windows-1250">
  <meta name="viewport" content="width=device-width" />
  <title><?php echo $_CONFIG['WebName']?> | Policy</title>
  <link rel="stylesheet" href="css/components.css">
  <link rel="stylesheet" href="css/responsee.css">  
  <link rel="stylesheet" href="owl-carousel/owl.carousel.css">
  <link rel="stylesheet" href="owl-carousel/owl.theme.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
  <script type="text/javascript" src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>  
  <script type="text/javascript" src="js/modernizr.js"></script>
  <script type="text/javascript" src="js/responsee.js"></script>
  <script type="text/javascript" src="owl-carousel/owl.carousel.js"></script>
  <style>
 /* The sidebar menu */
.sidenav {
    height: 100%; /* Full-height: remove this if you want "auto" height */
    width: 160px; /* Set the width of the sidebar */
    position: fixed; /* Fixed Sidebar (stay in place on scroll) */
    z-index: 1; /* Stay on top */
    top: 0; /* Stay at the top */
    left: 0;
    background-color: #111; /* Black */
    overflow-x: hidden; /* Disable horizontal scroll */
    padding-top: 20px;
}

/* The navigation menu links */
.sidenav a {
    padding: 6px 8px 6px 16px;
    text-decoration: none;
    font-size: 15px;
    color: #818181;
    display: block;
}

/* When you mouse over the navigation links, change their color */
.sidenav a:hover {
    color: black;
}

/* Style page content */
.main {
    margin-left: 160px; /* Same as the width of the sidebar */
    padding: 0px 10px;
}

/* On smaller screens, where height is less than 450px, change the style of the sidebar (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}
} 
  </style>
</head>
  <body class="size-960">
    <!-- HEADER -->
    <header>
	  <div class="line">
        <div class="w3-container w3-black">
          <div class="s-6 l-2">
            <?PHP 
				if ($_CONFIG['Logo'] != false){
			?>
			<img src="img/logo.png" width="189" height="69">
			<?php
				}
				else if ($_CONFIG['Logo'] == false)
				{
			?>
			<img src="img/Default/logo.png" width="189" height="69">
			<?php
				}
			?>
          </div>
        </div>
      </div>
      <!-- TOP NAV -->  
      <div class="line">
        <nav class="margin-bottom">
          <p  class="nav-text" style="margin-left: 0px">Custom menu text</p> 
          <div class="top-nav s-12 l-10">
            <ul>
              <li style="margin-left: 0px"><a href="index.php">Home</a></li>
				<?php
					if(isset($_SESSION['username']))
					{
				?>
			  <li style="margin-left: 0px"><a href="Shop.php">Shop</a>
			    <ul>
				  <li style="margin-left: 0px"><a href="Shop/Video Games.php">Video Games</a>
				    <ul>
					  <li style="margin-left: 0px"><a href="Shop/Video Games/Consoles.php">Consoles</a>
						<ul>
						  <li style="margin-left: 0px"><a href="Shop/Video Games/Consoles/Sony.php">Sony</a>
							<ul>
							  <li style="margin-left: 0px"><a href="Shop/Video Games/Consoles/Sony/Ps1.php">Playstation 1</a>
								<ul>
								  <li style="margin-left: 0px"><a href="Shop/Video Games/Consoles/Sony/Ps1/Games.php">Games</a></li>
								  <li style="margin-left: 0px"><a href="Shop/Video Games/Consoles/Sony/Ps1/Systems.php">Systems</a></li>
								  <li style="margin-left: 0px"><a href="Shop/Video Games/Consoles/Sony/Ps1/Accessories.php">Accessories</a></li>
								</ul>
							  </li>
							  <li style="margin-left: 0px"><a href="Shop/Video Games/Consoles/Sony/Ps2.php">Playstation 2</a>
								<ul>
								  <li style="margin-left: 0px"><a href="Shop/Video Games/Consoles/Sony/Ps2/Games.php">Games</a></li>
								  <li style="margin-left: 0px"><a href="Shop/Video Games/Consoles/Sony/Ps2/Systems.php">Systems</a></li>
								  <li style="margin-left: 0px"><a href="Shop/Video Games/Consoles/Sony/Ps2/Accessories.php">Accessories</a></li>
								</ul>
							  </li>
							  <li style="margin-left: 0px"><a href="Shop/Video Games/Consoles/Sony/Ps3.php">Playstation 3</a>
								<ul>
								  <li style="margin-left: 0px"><a href="Shop/Video Games/Consoles/Sony/Ps3/Games.php">Games</a></li>
								  <li style="margin-left: 0px"><a href="Shop/Video Games/Consoles/Sony/Ps3/Systems.php">Systems</a></li>
								  <li style="margin-left: 0px"><a href="Shop/Video Games/Consoles/Sony/Ps3/Accessories.php">Accessories</a></li>
								</ul>
							  </li style="margin-left: 0px">
							  <li style="margin-left: 0px"><a href="Shop/Video Games/Consoles/Sony/PsP.php">Playstation Poratable</a>
								<ul>
								  <li style="margin-left: 0px"><a href="Shop/Video Games/Consoles/Sony/PsP/Games.php">Games</a></li>
								  <li style="margin-left: 0px"><a href="Shop/Video Games/Consoles/Sony/PsP/Systems.php">Systems</a></li>
								  <li style="margin-left: 0px"><a href="Shop/Video Games/Consoles/Sony/PsP/Accessories.php">Accessories</a></li>
								</ul>
							  </li>
							  <li style="margin-left: 0px"><a href="Shop/Video Games/Consoles/Sony/PS Move.php">Playstation Move</a>
								<ul>
								  <li style="margin-left: 0px"><a href="Shop/Video Games/Consoles/Sony/PS Move/Games.php">Games</a></li>
								  <li style="margin-left: 0px"><a href="Shop/Video Games/Consoles/Sony/PS Move/Systems.php">Systems</a></li>
								  <li style="margin-left: 0px"><a href="Shop/Video Games/Consoles/Sony/PS Move/Accessories.php">Accessories</a></li>
								</ul>
							  </li style="margin-left: 0px">
							</ul>
						  </li>
						  <li style="margin-left: 0px"><a href="Shop/Video Games/Consoles/Nintendo.php">Nintendo</a>
							<ul>
							  <li style="margin-left: 0px"><a href="Shop/Video Games/Consoles/Nintendo/Wii.php">Wii</a>
								<ul>
								  <li style="margin-left: 0px"><a href="Shop/Video Games/Consoles/Nintendo/Wii/Games.php">Games</a></li>
								  <li style="margin-left: 0px"><a href="Shop/Video Games/Consoles/Nintendo/Wii/Systems.php">Systems</a></li>
								  <li style="margin-left: 0px"><a href="Shop/Video Games/Consoles/Nintendo/Wii/Accessories.php">Accessories</a></li>
								</ul>
							  </li>
							  <li style="margin-left: 0px"><a href="Shop/Video Games/Consoles/Nintendo/GameCube.php">GameCube</a>
								<ul>
								  <li style="margin-left: 0px"><a href="Shop/Video Games/Consoles/Nintendo/GameCube/Games.php">Games</a></li>
								  <li style="margin-left: 0px"><a href="Shop/Video Games/Consoles/Nintendo/GameCube/Systems.php">Systems</a></li>
								  <li style="margin-left: 0px"><a href="Shop/Video Games/Consoles/Nintendo/GameCube/Accessories.php">Accessories</a></li>
								</ul>
							  </li>
							  <li style="margin-left: 0px"><a href="Shop/Video Games/Consoles/Nintendo/Nintendo 64.php">Nintendo 64</a>
								<ul>
								  <li style="margin-left: 0px"><a href="Shop/Video Games/Consoles/Nintendo/Nintendo 64/Games.php">Games</a></li>
								  <li style="margin-left: 0px"><a href="Shop/Video Games/Consoles/Nintendo/Nintendo 64/Games.php">Systems</a></li>
								  <li style="margin-left: 0px"><a href="Shop/Video Games/Consoles/Nintendo/Nintendo 64/Games.php">Accessories</a></li>
								</ul>
							  </li>
							</ul>
						  </li>
						  <li style="margin-left: 0px"><a href="Shop/Video Games/Consoles/ATARI.php">ATARI</a>
							<ul>
							  <li style="margin-left: 0px"><a href="Shop/Video Games/Consoles/ATARI/2600.php">2600</a>
								<ul>
								  <li style="margin-left: 0px"><a href="Shop/Video Games/Consoles/ATARI/2600/Games.php">Games</a></li>
								  <li style="margin-left: 0px"><a href="Shop/Video Games/Consoles/ATARI/2600/Systems.php">Systems</a></li>
								  <li style="margin-left: 0px"><a href="Shop/Video Games/Consoles/ATARI/2600/Accessories.php">Accessories</a></li>
								</ul>
							  </li>
							</ul>
						  </li>
						  <li style="margin-left: 0px"><a href="Shop/Video Games/Consoles/Microsoft.php">Microsoft</a>
							<ul>
							  <li><a href="Shop/Video Games/Consoles/Microsoft/Xbox.php">Xbox</a>
								<ul>
								  <li style="margin-left: 0px"><a href="Shop/Video Games/Consoles/Microsoft/Xbox/Games.php">Games</a></li>
								  <li style="margin-left: 0px"><a href="Shop/Video Games/Consoles/Microsoft/Xbox/Systems.php">Systems</a></li>
								  <li style="margin-left: 0px"><a href="Shop/Video Games/Consoles/Microsoft/Xbox/Accessories.php">Accessories</a></li>
								</ul>
							  </li>
							  <li style="margin-left: 0px"><a href="Shop/Video Games/Consoles/Microsoft/Xbox 360.php">Xbox 360</a>
								<ul>
								  <li style="margin-left: 0px"><a href="Shop/Video Games/Consoles/Microsoft/Xbox 360/Games.php">Games</a></li>
								  <li style="margin-left: 0px"><a href="Shop/Video Games/Consoles/Microsoft/Xbox 360/Systems.php">Systems</a></li>
								  <li style="margin-left: 0px"><a href="Shop/Video Games/Consoles/Microsoft/Xbox 360/Accessories.php">Accessories</a></li>
								</ul>
							  </li>
							  <li style="margin-left: 0px"><a href="Shop/Video Games/Consoles/Microsoft/PC.php">PC</a>
								<ul>
								  <li style="margin-left: 0px"><a href="Shop/Video Games/Consoles/Microsoft/PC/Games.php">Games</a></li>
								  <li style="margin-left: 0px"><a href="Shop/Video Games/Consoles/Microsoft/PC/Systems.php">Systems</a></li>
								  <li style="margin-left: 0px"><a href="Shop/Video Games/Consoles/Microsoft/PC/Accessories.php">Accessories</a></li>
								</ul>
							  </li>
							</ul>
						  </li>
						  <li style="margin-left: 0px"><a href="Shop/Video Games/Consoles/SEGA.php">SEGA</a>
							<ul>
							  <li style="margin-left: 0px"><a href="Shop/Video Games/Consoles/SEGA/Genesis.php">Genesis</a>
								<ul>
								  <li style="margin-left: 0px"><a href="Shop/Video Games/Consoles/SEGA/Genesis/Games.php">Games</a></li>
								  <li style="margin-left: 0px"><a href="Shop/Video Games/Consoles/SEGA/Genesis/Systems.php">Systems</a></li>
								  <li style="margin-left: 0px"><a href="Shop/Video Games/Consoles/SEGA/Genesis/Accessories.php">Accessories</a></li>
								</ul>
							  </li>
							  <li><a href="Shop/Video Games/Consoles/SEGA/GameGear.php">GameGear</a>
								<ul>
								  <li style="margin-left: 0px"><a href="Shop/Video Games/Consoles/SEGA/GameGear/Games.php">Games</a></li>
								  <li style="margin-left: 0px"><a href="Shop/Video Games/Consoles/SEGA/GameGear/Systems.php">Systems</a></li>
								  <li style="margin-left: 0px"><a href="Shop/Video Games/Consoles/SEGA/GameGear/Accessories.php">Accessories</a></li>
								</ul>
							  </li>
							  <li><a href="Shop/Video Games/Consoles/SEGA/DreamCast.php">DreamCast</a>
								<ul>
								  <li><a href="Shop/Video Games/Consoles/SEGA/DreamCast/Games.php">Games</a></li>
								  <li><a href="Shop/Video Games/Consoles/SEGA/DreamCast/Systems.php">Systems</a></li>
								  <li><a href="Shop/Video Games/Consoles/SEGA/DreamCast/Accessories.php">Accessories</a></li>
								</ul>
							  </li>
							</ul>
						  </li>
						</ul>					
					  </li>
					  <li style="margin-left: 0px"><a href="Shop/Video Games/Plug N Plays.php">Plug N Plays</a>
						<ul>
						  <li style="margin-left: 0px"><a href="Shop/Video Games/Plug N Plays/JAKKS.php">Jakks Pacific</a></li>
						</ul>
					  </li>
					</ul>
				  </li>
			      <li style="margin-left: 0px"><a href="Shop/Toys.php">Toys</a>
			        <ul>
				      <li style="margin-left: 0px"><a href="Shop/Toys/Stuffed Animals.php">Stuffed Animals</a>
					    <ul>
					      <li style="margin-left: 0px"><a href="Shop/Toys/Stuffed Animals/Beanie Babies.php">Beanie Babies</a>
						    <li style="margin-left: 0px"><a href="Shop/Toys/Stuffed Animals/Beanie Babies/TY.php">TY</a></li>
						    <li style="margin-left: 0px"><a href="Shop/Toys/Stuffed Animals/Beanie Babies/Nintendo.php">Nintendo</a></li>
						  </li>
					    </ul>
				      </li>
				      <li style="margin-left: 0px"><a href="Shop/Toys/Dart Guns.php">Dart Guns</a>
					    <ul>
						  <li style="margin-left: 0px"><a href="Shop/Toys/Dart Guns/Nerf.php">Nerf</a></li>
						  <li style="margin-left: 0px"><a href="Shop/Toys/Dart Guns/Buzz Bee.php">Buzz Bee</a></li>
						  <li style="margin-left: 0px"><a href="Shop/Toys/Dart Guns/Boom Co.php">Boom Co.</a></li>
						</ul>
					  </li>
				      <li style="margin-left: 0px"><a href="Shop/Toys/Collectibles.php">Collectibles</a></li>
				      <li style="margin-left: 0px"><a href="Shop/Toys/Trading Cards.php">Trading Cards</a>
					    <ul>
						  <li style="margin-left: 0px"><a href="Shop/Toys/Trading Cards/TCG.php">TCG</a>
						    <ul>
					          <li style="margin-left: 0px"><a href="Shop/Toys/Trading Cards/TCG/Pokemon.php">Pokemon</a></li>
					          <li style="margin-left: 0px"><a href="Shop/Toys/Trading Cards/TCG/Yu-gi-oh.php">YuGiOh</a></li>
							</ul>
						  </li>
					      <li style="margin-left: 0px"><a href="Shop/Toys/Trading Cards/Sports Cards.php">Sports Cards</a>
						    <ul>
						      <li style="margin-left: 0px"><a href="Shop/Toys/Trading Cards/Sports Cards/BaseBall.php">BaseBall</a></li>
						      <li style="margin-left: 0px"><a href="Shop/Toys/Trading Cards/Sports Cards/FootBall.php">FootBall</a></li>
						      <li style="margin-left: 0px"><a href="Shop/Toys/Trading Cards/Sports Cards/BasketBall.php">BasketBall</a></li>
						      <li style="margin-left: 0px"><a href="Shop/Toys/Trading Cards/Sports Cards/Hockey.php">Hockey</a></li>
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
              <li style="margin-left: 0px"><a href="Company.html">Company</a>
                <ul>
                  <li style="margin-left: 0px"><a href="About.html">About</a></li>
                  <li style="margin-left: 0px"><a href="Location.html">Location</a></li>
                </ul>
              </li>
              <li style="margin-left: 0px"><a href="Contact.html">Contact</a>
			    <ul>
				<?PHP 
				if ($_CONFIG['EMail'] != "")
				{
				?>
			      <li style="margin-left: 0px"><a href="mailto:<?php echo $_CONFIG['EMail']?>">Email</a></li>
				<?PHP
				}
				else
				{
					
				}
				if ($_CONFIG['Facebook'] != "")
				{
				?>
			      <li style="margin-left: 0px"><a href="<?php echo $_CONFIG['Facebook']?>">Facebook</a></li>
				<?PHP
				}
				else
				{
					
				}
				if ($_CONFIG['Twitter'] != "")
				{
				?>
				  <li style="margin-left: 0px"><a href="<?php echo $_CONFIG['Twitter']?>">Twitter</a></li>
				<?PHP
				}
				else
				{
					
				}
				if ($_CONFIG['InstaGram'] != "")
				{
				?>
				  <li style="margin-left: 0px"><a href="<?php echo $_CONFIG['InstaGram']?>">Instagram</a></li>
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
			  <li style="margin-left: 0px"><a href="Profile.php">Profile</a>
			    <ul>
				  <li style="margin-left: 0px"><a href="Profile/Settings.php">Profile Settings</a></li>
				  <li style="margin-left: 0px"><a href="Profile/Orders.php">Orders</a></li>
				  <li style="margin-left: 0px"><a href="Profile/Cart.php">Cart</a></li>
			      <li style="margin-left: 0px"><a href="logout.php">Logout</a></li>
				</ul>
			  </li>
			  <li style="margin-left: 0px" class="active-item"><a>Policies</a>
			    <ul>
			      <li style="margin-left: 0px"><a href="Policy.php#Privacy">Privacy Policy</a></li>
				  <li style="margin-left: 0px"><a href="Policy.php#Return">Return Policy</a></li>
				  <li style="margin-left: 0px"><a href="Policy.php#Disclaimer"></a></li>
			    </ul>
			  </li>
			  <?php
				  }
				  else if(!isset($_SESSION['username']))
				  {
			  ?>

			  <li style="margin-left: 0px"><a href="signup.php">Sign Up / Login</a></li>

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
<div class="w3-sidebar w3-bar-block w3-collapse w3-card w3-animate-left" style="width:200px;" id="mySidebar">
  <button class="w3-bar-item w3-button w3-large w3-hide-large" onclick="w3_close()">Close &times;</button>
  <h2>Our Policies</h2>
  <p style="text-indent: 25px">Explore our Policies by <h5 style="text-indent: 25px">clicking on one below.</h4></p>
  <div class="panel-group">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" href="#collapse1">Privacy Policy</a>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse">
        <div class="panel-body"> <a href="Policy.php#Privacy">Privacy Policy Head</div>
		<div class="panel-body"> <a href="Policy.php#Privacy">Privacy Policy Head</div>
		<div class="panel-body"> <a href="Policy.php#Privacy">Privacy Policy Head</div>
		<div class="panel-body"> <a href="Policy.php#Privacy">Privacy Policy Head</div>
        <div class="panel-footer">Panel Footer</div>
      </div>
	  <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" href="#collapse2">Return Policy</a>
        </h4>
      </div>
      <div id="collapse2" class="panel-collapse collapse">
        <div class="panel-body"> <a href="Policy.php#RetTop">Return Policy Top</a></div>
		<div class="panel-body"> <a href="Policy.php#RetMiddle">Return Policy Middle</a></div>
		<div class="panel-body"> <a href="Policy.php#RetBottom">Return Policy Bottom</a></div>
		<div class="panel-body"> <a href="Policy.php#Return Update"> Last Updated</a></div>
		<div class="panel-body"> <a href="Policy.php#Returns">Return Policy Returns</a></div>
		<div class="panel-body"> <a href="Policy.php#Return Process">Return Policy Return Process</a></div>
		<div class="panel-body"> <a href="Policy.php#Refunds">Return Policy Refunds</a></div>
		<div class="panel-body"> <a href="Policy.php#Exceptions">Return Policy Exceptions</a></div>
		<div class="panel-body"> <a href="Policy.php#Questions">Return Policy Questions</a></div>
      </div>
	  <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" href="#collapse3">Disclaimers</a></a>
        </h4>
      </div>
      <div id="collapse3" class="panel-collapse collapse">
        <div class="panel-body"> <a href="Policy.php#DisTop">Disclaimer Top</a></div>
		<div class="panel-body"> <a href="Policy.php#DisMiddle">Disclaimer Middle</a></div>
		<div class="panel-body"> <a href="Policy.php#DisBottom">Disclaimer Bottom</a></div>
		<div class="panel-body"> <a href="Policy.php#Disclaimers">Disclaimers for GamerEmporium.com</a></div>
		<div class="panel-body"> <a href="Policy.php#Consent">Disclaimer Consent</a></div>
		<div class="panel-body"> <a href="Policy.php#Disclaimer Update">Disclaimer Update</a></div>
      </div>
    </div>
  </div>
  </div>
  <div class="w3-main" style="margin-left:200px">

<div class="w3-teal">
  <button class="w3-button w3-teal w3-xlarge w3-hide-large" onclick="w3_open()">&#9776;</button>
    <div class="w3-container" style="color:black">
	  <div class="line">		
	  
		<p style="text-align: left;"><strong><span style="font-size: xx-large;" id="RetTop" id="ReturnPolicy">RETURN POLICY</span></strong></p>
		<p id="Return Update"><strong><span style="color: #999999;">Last Updated June 06, 2018</span></strong></p>
		<p>&nbsp;</p>
		<p>Thank you for your purchase. We hope you are happy with your purchase however if you are not completely satisfied with your purchase for and reason, you may return it to us for an exchange only. Please see below for more information on our return policy.</p>
		<p><span style="font-size: large;" id="Returns"><strong>RETURNS</strong></span></p>
		<p>All returns must be postmarked within seven (7) days of the purchase date. All returned items must be in new and unused condition, with all original tags and lables attached.</p>
		<p><span style="font-size: large;" id="Return Process"><strong>RETURN PROCESS</strong></span></p>
		<p>To return an item. please email customer service at lonniegibson16@gmail.com to obtain a Return Merchandise Authorization (RMA) number. After recieving a RMA number, place the item securely in its original packaging and the return form provided, and mail you return to the following address:</p>
		<p>Gamer Emporium<br /> Attn Returns<br /> RMA#<br /> 2267 Old Mountain Rd<br /> Statesville, NC 28625<br /> United States</p>
		<p id="RetMiddle">Please note, you will be responsible for all return shipping charges We strongly recommend that you use a trackable methof to mail your return.</p>
		<p><span style="font-size: large;" id="Refunds"><strong>REFUNDS</strong></span></p>
		<p>After recieving your return and inspecting the condition of your item, we will process your exchange. Please allow at least four (4) days from the receipt of your item to process your exchange. We will notify you by email when your return has been processed.</p>
		<p><span style="font-size: large;" id="Exceptions"><strong> EXCEPTIONS</strong></span></p>
		<p>The following items connot be exchange</p>
		<ul>
		<li>Video Games</li>
		<li>Books</li>
		</ul>
		<p>&nbsp;</p>
		<p>For defective or damaged products, please contact us at the customer service number to arrange a refund or exchange.</p>
		  <ul>
		    <li>Please Note A 15% restocking fee will be charged for all returns</li>
		    <li>Sale items are FINAL SALE and cannot be returned</li>
		  </ul>
		<p><span style="font-size: large;" id="Questions"><strong>QUESTIONS</strong></span></p>
		<p id="RetBottom">If you have any questions concering our return policy, please contact us at: lonniegibson16@gmail.com</p>
		  </div>

		<br /><br /><hr />
		<br>
		<br>
		<div class="line">
		<h1 id="DisTop" id="Disclaimers">Disclaimer for GamerEmporium</h1>
		<p> If you require any more information or have any questions about our site's disclaimer, please feel free to contact us by email at <a href="&#109;&#97;&#105;&#108;&#116;&#111;:&#108;&#111;&#110;&#110;&#105;&#101;&#103;&#105;&#98;&#115;&#111;&#110;16&#64;&#103;&#109;&#97;&#105;&#108;&#46;&#99;&#111;&#109;">&#67;&#111;&#110;&#116;&#97;&#99;&#116; &#85;&#115;</a><h2>Disclaimers for GamerEmporium.com:</h2>
		<p>
		All the information on this website is published in good faith and for general information purpose only. GamerEmporium.com does not make any warranties about the completeness, reliability and accuracy of this information. Any action you take upon the information you find on this website (GamerEmporium.com), is strictly at your own risk. GamerEmporium.com will not be liable for any losses and/or damages in connection with the use of our website.
		</p>
		<p id="DisMiddle">
		From our website, you can visit other websites by following hyperlinks to such external sites. While we strive to provide only quality links to useful and ethical websites, we have no control over the content and nature of these sites. These links to other websites do not imply a recommendation for all the content found on these sites. Site owners and content may change without notice and may occur before we have the opportunity to remove a link which may have gone 'bad'.
		</a>
		</p>
		<p>
		Please be also aware that when you leave our website, other sites may have different privacy policies and terms which are beyond our control. Please be sure to check the Privacy Policies of these sites as well as their "Terms of Service" before engaging in any business or uploading any information.
		</p>

		<h3 id="DisBottom" id="Consent">Consent</h3>
		<p>
		By using our website, you hereby consent to our disclaimer and agree to its terms.
		</p><h3 id="Disclaimer Update">Update</h3><p>This site disclaimer was last updated on: Saturday, June 9th, 2018</p><br /><em> · Should we update, amend or make any changes to this document, those changes will be prominently posted here.</em><br /><br /><hr />
		</div>
		</div>
		</div>
		</div>
<script>
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
}
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}
</script>
      <!-- FOOTER -->
      <footer class="line">
        <div class="box">
          <div class="s-12 l-6">
            <p style="margin-left: 0px"> &copy; 
			<?php 
			if($_CONFIG['Year'] != "")
			{ 
			echo $_CONFIG['Year'];
			}
			else
			{
			echo date("Y");
			}
			?> <?php echo $_CONFIG['WebName']?>, All Rights Reserved</p>
          </div>
          <div class="s-12 l-6">
            <p class="right">Design and coding by Responsee</p>
          </div>
        </div>    
      </footer>
  </body>
  </html>