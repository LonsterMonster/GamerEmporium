			<?php
$sdoubledotconnect ="../../../";
if($sdoubledotconnect == "../"){
require '../Auth/Configuration/Config.php';
require '../Auth/Configuration/Shop_Config.php';
require '../Auth/connection.php';
}else if($sdoubledotconnect == "../../"){
require '../../Auth/Configuration/Config.php';
require '../../Auth/Configuration/Shop_Config.php';
require '../../Auth/connection.php';
}else if($sdoubledotconnect == "../../../"){
require '../../../Auth/Configuration/Config.php';
require '../../../Auth/Configuration/Shop_Config.php';
require '../../../Auth/connection.php';
}else if($sdoubledotconnect == "../../../"){
require '../../../../Auth/Configuration/Config.php';
require '../../../../Auth/Configuration/Shop_Config.php';
require '../../../../Auth/connection.php';
}else if($sdoubledotconnect == "../../../../"){
require '../../../../../Auth/Configuration/Config.php';
require '../../../../../Auth/Configuration/Shop_Config.php';
require '../../../../../Auth/connection.php';
}else if($sdoubledotconnect == "../../../../../"){
require '../../../../../../Auth/Configuration/Config.php';
require '../../../../../../Auth/Configuration/Shop_Config.php';
require '../../../../../../Auth/connection.php';
}else if ($sdoubledotconnect == ""){
require 'Auth/Configuration/Config.php';
require 'Auth/Configuration/Shop_Config.php';
require 'Auth/connection.php';
}
// Initialize the session

session_start();

 

// If session variable is not set it will redirect to login page

if(!isset($_SESSION['username']) || empty($_SESSION['username'])){

  header("location: ../../../login.php");

  exit;

}

?>

<!DOCTYPE html>
<html>
  <head>
  <meta http-equiv="content-type" content="text/html; charset=windows-1250">
  <meta name="viewport" content="width=device-width" />
  <title>Gamer Emporium | Home</title>
  <link rel="stylesheet" href="../../../css/components.css">
  <link rel="stylesheet" href="../../../css/responsee.css">  
  <link rel="stylesheet" href="../../../owl-carousel/owl.carousel.css">
  <link rel="stylesheet" href="../../../owl-carousel/owl.theme.css">
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  
  
  <script type="text/javascript" src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
  <script type="text/javascript" src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>  
  <script type="text/javascript" src="../../../js/modernizr.js"></script>
  <script type="text/javascript" src="../../../js/responsee.js"></script>
  <script type="text/javascript" src="../../../owl-carousel/owl.carousel.js"></script>
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
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
      body {
    background-color: #C0C0C0;
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
            <img src="../../../img/logo.png" width="189" height="69">
          </div>
        </div>
      </div>
      <!-- TOP NAV -->  
      <div class="line">
        <nav class="margin-bottom">
          <p class="nav-text">Custom menu text</p> 
          <div class="top-nav s-12 l-10">
            <ul>
              <li><a href="../../../index.php">Home</a></li>
              <li><a href="../../../Shop.php">Shop</a>
                <ul>
				  <li><a href="../../../Shop/Video Games.php">Video Games</a>
				    <ul>
					  <li><a href="../../../Shop/Video Games/Console.php">Console</a>
						<ul>
						  <li><a href="../../../Shop/Video Games/Console/Playstation.php">Playstation</a>
							<ul>
							  <li><a href="../../../Shop/Video Games/Console/Playstation/Playstation 1.php">Playstation 1</a>
								<ul>
								  <li><a href="../../../Shop/Video Games/Console/Playstation/Playstation 1/Games.php">Games</a></li>
								  <li><a href="../../../Shop/Video Games/Console/Playstation/Playstation 1/Systems.php">Systems</a></li>
								  <li><a href="../../../Shop/Video Games/Console/Playstation/Playstation 1/Accessories.php">Accessories</a></li>
								</ul>
							  </li>
							  <li><a href="../../../Shop/Video Games/Console/Playstation/Playstation 2.php">Playstation 2</a>
								<ul>
								  <li><a href="../../../Shop/Video Games/Console/Playstation/Playstation 2/Games.php">Games</a></li>
								  <li><a href="../../../Shop/Video Games/Console/Playstation/Playstation 2/Systems.php">Systems</a></li>
								  <li><a href="../../../Shop/Video Games/Console/Playstation/Playstation 2/Accessories.php">Accessories</a></li>
								</ul>
							  </li>
							  <li><a href="../../../Shop/Video Games/Console/Playstation/Playstation 3.php">Playstation 3</a>
								<ul>
								  <li><a href="../../../Shop/Video Games/Console/Playstation/Playstation 3/Games.php">Games</a></li>
								  <li><a href="../../../Shop/Video Games/Console/Playstation/Playstation 3/Systems.php">Systems</a></li>
								  <li><a href="../../../Shop/Video Games/Console/Playstation/Playstation 3/Accessories.php">Accessories</a></li>
								</ul>
							  </li>
							  <li><a href="../../../Shop/Video Games/Console/Playstation/Playstation Poratble.php">Playstation Poratable</a>
								<ul>
								  <li><a href="../../../Shop/Video Games/Console/Playstation/Playstation Poratble/Games.php">Games</a></li>
								  <li><a href="../../../Shop/Video Games/Console/Playstation/Playstation Poratble/Systems.php">Systems</a></li>
								  <li><a href="../../../Shop/Video Games/Console/Playstation/Playstation Poratble/Accessories.php">Accessories</a></li>
								</ul>
							  </li>
							  <li><a href="../../../Shop/Video Games/Console/Playstation/Playstation Move.php">Playstation Move</a>
								<ul>
								  <li><a href="../../../Shop/Video Games/Console/Playstation/Playstation Move/Games.php">Games</a></li>
								  <li><a href="../../../Shop/Video Games/Console/Playstation/Playstation Move/Systems.php">Systems</a></li>
								  <li><a href="../../../Shop/Video Games/Console/Playstation/Playstation Move/Accessories.php">Accessories</a></li>
								</ul>
							  </li>
							</ul>
						  </li>
						  <li><a href="../../../Shop/Video Games/Console/Nintendo.php">Nintendo</a>
							<ul>
							  <li><a href="../../../Shop/Video Games/Console/Nintendo/Wii.php">Wii</a>
								<ul>
								  <li><a href="../../../Shop/Video Games/Console/Nintendo/Wii/Games.php">Games</a></li>
								  <li><a href="../../../Shop/Video Games/Console/Nintendo/Wii/Systems.php">Systems</a></li>
								  <li><a href="../../../Shop/Video Games/Console/Nintendo/Wii/Accessories.php">Accessories</a></li>
								</ul>
							  </li>
							  <li><a href="../../../Shop/Video Games/Console/Nintendo/GameCube.php">GameCube</a>
								<ul>
								  <li><a href="../../../Shop/Video Games/Console/Nintendo/GameCube/Games.php">Games</a></li>
								  <li><a href="../../../Shop/Video Games/Console/Nintendo/GameCube/Systems.php">Systems</a></li>
								  <li><a href="../../../Shop/Video Games/Console/Nintendo/GameCube/Accessories.php">Accessories</a></li>
								</ul>
							  </li>
							  <li><a href="../../../Shop/Video Games/Console/Nintendo/Nintendo 64.php">Nintendo 64</a>
								<ul>
								  <li><a href="../../../Shop/Video Games/Console/Nintendo/Nintendo 64/Games.php">Games</a></li>
								  <li><a href="../../../Shop/Video Games/Console/Nintendo/Nintendo 64/Systems.php">Systems</a></li>
								  <li><a href="../../../Shop/Video Games/Console/Nintendo/Nintendo 64/Accessories.php">Accessories</a></li>
								</ul>
							  </li>
							  <li><a href="../../../Shop/Video Games/Console/Nintendo/Gameboy.php">Gameboy</a>
							    <ul>
							      <li><a href="../../../Shop/Video Games/Console/Nintendo/Gameboy/Games.php">Games</a></li>
							      <li><a href="../../../Shop/Video Games/Console/Nintendo/Gameboy/Systems.php">Systems</a></li>
							      <li><a href="../../../Shop/Video Games/Console/Nintendo/Gameboy/Accessories.php">Accessories</a></li>
							    </ul>
							  </li>
							  <li><a href="../../../Shop/Video Games/Console/Nintendo/Gameboy Color.php">Gameboy Color</a>
							    <ul>
							      <li><a href="../../../Shop/Video Games/Console/Nintendo/Gameboy Color/Games.php">Games</a></li>
							      <li><a href="../../../Shop/Video Games/Console/Nintendo/Gameboy Color/Systems.php">Systems</a></li>
							      <li><a href="../../../Shop/Video Games/Console/Nintendo/Gameboy Color/Accessories.php">Accessories</a></li>
							    </ul>
							  </li>
							  <li><a href="../../../Shop/Video Games/Console/Nintendo/Gameboy Advance.php">Gameboy Advance</a>
							    <ul>
							      <li><a href="../../../Shop/Video Games/Console/Nintendo/Gameboy Advance/Games.php">Games</a></li>
							      <li><a href="../../../Shop/Video Games/Console/Nintendo/Gameboy Advance/Systems.php">Systems</a></li>
							      <li><a href="../../../Shop/Video Games/Console/Nintendo/Gameboy Advance/Accessories.php">Accessories</a></li>
							    </ul>
							  </li>
							</ul>
						  </li>
						  <li><a href="../../../Shop/Video Games/Console/ATARI.php">ATARI</a>
							<ul>
							  <li><a href="../../../Shop/Video Games/Console/ATARI/2600.php">2600</a>
								<ul>
								  <li><a href="../../../Shop/Video Games/Console/ATARI/2600/Games.php">Games</a></li>
								  <li><a href="../../../Shop/Video Games/Console/ATARI/2600/Systems.php">Systems</a></li>
								  <li><a href="../../../Shop/Video Games/Console/ATARI/2600/Accessories.php">Accessories</a></li>
								</ul>
							  </li>
							</ul>
						  </li>
						  <li><a href="../../../Shop/Video Games/Console/Xbox.php">Xbox</a>
							<ul>
							  <li><a href="../../../Shop/Video Games/Console/Xbox/Xbox.php">Xbox</a>
								<ul>
								  <li><a href="../../../Shop/Video Games/Console/Xbox/Xbox/Games.php">Games</a></li>
								  <li><a href="../../../Shop/Video Games/Console/Xbox/Xbox/Systems.php">Systems</a></li>
								  <li><a href="../../../Shop/Video Games/Console/Xbox/Xbox/Accessories.php">Accessories</a></li>
								</ul>
							  </li>
							  <li><a href="../../../Shop/Video Games/Console/Xbox/Xbox 360.php">Xbox 360</a>
								<ul>
								  <li><a href="../../../Shop/Video Games/Console/Xbox/Xbox 360/Games.php">Games</a></li>
								  <li><a href="../../../Shop/Video Games/Console/Xbox/Xbox 360/Systems.php">Systems</a></li>
								  <li><a href="../../../Shop/Video Games/Console/Xbox/Xbox 360/Accessories.php">Accessories</a></li>
								</ul>
							  </li>
							</ul>
						  </li>
						  <li><a href="../../../Shop/Video Games/Console/SEGA.php">SEGA</a>
							<ul>
							  <li><a href="../../../Shop/Video Games/Console/SEGA/Genesis.php">Genesis</a>
								<ul>
								  <li><a href="../../../Shop/Video Games/Console/SEGA/Genesis/Games.php">Games</a></li>
								  <li><a href="../../../Shop/Video Games/Console/SEGA/Genesis/Systems.php">Systems</a></li>
								  <li><a href="../../../Shop/Video Games/Console/SEGA/Genesis/Accessories.php">Accessories</a></li>
								</ul>
							  </li>
							  <li><a href="../../../Shop/Video Games/Console/GameGear.php">GameGear</a>
								<ul>
								  <li><a href="../../../Shop/Video Games/Console/GameGear/Games.php">Games</a></li>
								  <li><a href="../../../Shop/Video Games/Console/GameGear/Systems.php">Systems</a></li>
								  <li><a href="../../../Shop/Video Games/Console/GameGear/Accessories.php">Accessories</a></li>
								</ul>
							  </li>
							  <li><a href="../../../Shop/Video Games/Console/DreamCast.php">DreamCast</a>
								<ul>
								  <li><a href="../../../Shop/Video Games/Console/DreamCast/Games.php">Games</a></li>
								  <li><a href="../../../Shop/Video Games/Console/DreamCast/Systems.php">Systems</a></li>
								  <li><a href="../../../Shop/Video Games/Console/DreamCast/Accessories.php">Accessories</a></li>
								</ul>
							  </li>
							</ul>
						  </li>
						</ul>					
					  </li>
					  <li><a href="../../../Shop/Video Games/Plug N Plays.php">Plug N Plays</a>
						<ul>
						  <li><a href="../../../Shop/Video Games/Plug N Plays/JAKKS.php">Jakks Pacific</a></li>
						</ul>
					  </li>
					</ul>
				  </li>
			      <li><a href="../../../Shop/Toys.php">Toys</a>
			        <ul>
				      <li><a href="../../../Shop/Toys/Stuffed Animals.php">Stuffed Animals</a>
					    <ul>
					      <li><a href="../../../Shop/Toys/Stuffed Animals/Beanie Babies.php">Beanie Babies</a>
					        <ul>
						      <li><a href="../../../Shop/Toys/Stuffed Animals/Beanie Babies/TY.php">TY</a></li>
						      <li><a href="../../../Shop/Toys/Stuffed Animals/Beanie Babies/Nintendo.php">Nintendo</a></li>
                              </ul>
						  </li>
					    </ul>
				      </li>
				      <li><a href="../../../Shop/Toys/Dart Guns.php">Dart Guns</a>
					    <ul>
						  <li><a href="../../../Shop/Toys/Dart Guns/Nerf.php">Nerf</a></li>
						  <li><a href="../../../Shop/Toys/Dart Guns/Buzz Bee.php">Buzz Bee</a></li>
						  <li><a href="../../../Shop/Toys/Dart Guns/Boom Co.php">Boom Co.</a></li>
						</ul>
					  </li>
				      <li><a href="../../../Shop/Toys/Collectibles.php">Collectibles</a></li>
				      <li><a href="../../../Shop/Toys/Trading Cards.php">Trading Cards</a>
					    <ul>
						  <li><a href="../../../Shop/Toys/Trading Cards/TCG.php">TCG</a>
						    <ul>
					          <li><a href="../../../Shop/Toys/Trading Cards/TCG/Pokemon.php">Pokemon</a></li>
					          <li><a href="../../../Shop/Toys/Trading Cards/TCG/Yu-gi-oh.php">YuGiOh</a></li>
							</ul>
						  </li>
					      <li><a href="../../../Shop/Toys/Trading Cards/Sports Cards.php">Sports Cards</a>
						    <ul>
						      <li><a href="../../../Shop/Toys/Trading Cards/Sports Cards/BaseBall.php">BaseBall</a></li>
						      <li><a href="../../../Shop/Toys/Trading Cards/Sports Cards/FootBall.php">FootBall</a></li>
						      <li><a href="../../../Shop/Toys/Trading Cards/Sports Cards/BasketBall.php">BasketBall</a></li>
						      <li><a href="../../../Shop/Toys/Trading Cards/Sports Cards/Hockey.php">Hockey</a></li>
						    </ul>
						  </li>
						</ul>
					  </li>
					</ul>
				  </li>
				</ul>
			  </li>
              <li><a href="../../../Company.php">Company</a>
                <ul>
                  <li><a href="../../../About.php">About</a></li>
                  <li><a href="../../../Location.php">Location</a></li>
                </ul>
              </li>
              <li><a href="../../../Contact.html">Contact</a>
			    <ul>
			      <li><a href="../../../Email.html">Email</a></li>
			      <li><a href="../../../Facebook.html">Facebook</a></li>
				</ul>
			  </li>
			<?php
				if(isset($_SESSION['username']))
				{
			?>
			  <li><a href="../../../logout.php">Logout</a></li>
			  <?php
				  }
				  else if(!isset($_SESSION['username']))
				  {
			  ?>
			  <li><a href="../../../signup.php">Sign Up / Login</a></li>
			  <?php
				  }
			  ?>
              </ul>
		  </div>
          <div class=" hide-s l-2">
            <i class="icon-facebook_circle icon2x right padding"></i>
          </div>
        </nav>
      </div>
    </header>
	<div class="container">
	  <div class="line">
		 <div class="card-deck">
	
	<?php
		$sql_table = "games_selling_db";
		$sql = "SELECT * FROM $sql_table WHERE Console_Type=?";
		 
		/* Prepare statement */
		$stmt = $conn->prepare($sql);
		if($stmt === false) {
		  trigger_error('Wrong SQL: ' . $sql . ' Error: ' . $conn->errno . ' ' . $conn->error, E_USER_ERROR);
		}
	
		$id = "Console";
		 
		/* Bind parameters. Types: s = string, i = integer, d = double,  b = blob */
		$stmt->bind_param("s", $id);
		 
		/* Execute statement */
		if ($stmt->execute()){
		 
		/* Fetch result to array */
		$res = $stmt->get_result();
		  while($row = $res->fetch_array(MYSQLI_ASSOC)) {
                $_CONFIG['Brand'] = $row['Brand'];
				$_CONFIG['Console'] = $row['Console'];
					if(($_CONFIG['Brand'] == "Playstation") && ($_CONFIG['Amount'] >= "1")){
                    
				    }
				}
        }
			
             if($_CONFIG['Console'] == "Playstation 1"){
		
		?>
		  <div class="card" style="width:400px">
		    <a href="../../../Shop/Video Games/Console/Playstation/Playstation 1<?php echo $_CONFIG['Games']?>.php"><img class="card-img-top" src="../../../img/Games/<?PHP echo $_CONFIG['Games']?>.png" alt="Card image"></a>
		  </div>
			<?php
			}
			else 
			{
            ?>
          <div class="card" style="width:400px">
		    <a href=""><img class="card-img-top" src="../../../img/White.png" alt=""></a>
		  </div>
		  <?PHP
			}
             ?>
             <br>
             <?PHP
             if($_CONFIG['Console'] == "Playstation 2"){
		
		?>
		  <div class="card" style="width:400px">
		    <a href="../../../Shop/Video Games/Console/Playstation/Playstation 2<?php echo $_CONFIG['Games']?>.php"><img class="card-img-top" src="../../../img/Games/<?PHP echo $_CONFIG['Games']?>.png" alt="Card image"></a>
		  </div>
			<?php
			}
			else 
			{
            ?>
          <div class="card" style="width:400px">
		    <a href=""><img class="card-img-top" src="../../../img/White.png" alt=""></a>
		  </div>
		  <?PHP
			}
             ?>
             <br>
             <?PHP
             if($_CONFIG['Console'] == "Playstation 3"){
		
		?>
		  <div class="card" style="width:400px">
		    <a href="../../../Shop/Video Games/Console/Playstation/Playstation 3<?php echo $_CONFIG['Games']?>.php"><img class="card-img-top" src="../../../img/Games/<?PHP echo $_CONFIG['Games']?>.png" alt="Card image"></a>
		  </div>
			<?php
			}
			else 
			{
            ?>
          <div class="card" style="width:400px">
		    <a href=""><img class="card-img-top" src="../../../img/White.png" alt=""></a>
		  </div>
		  <?PHP
			}
             ?>
          </div>
           <br>
            <div class="card-deck">
            <?PHP
             if($_CONFIG['Console'] == "Playstation 4"){
		
		?>
		  <div class="card" style="width:400px">
		    <a href="../../../Shop/Video Games/Console/Playstation/Playstation 4<?php echo $_CONFIG['Games']?>.php"><img class="card-img-top" src="../../../img/Games/<?PHP echo $_CONFIG['Games']?>.png" alt="Card image"></a>
		  </div>
			<?php
			}
			else 
			{
            ?>
          <div class="card" style="width:400px">
		    <a href=""><img class="card-img-top" src="../../../img/White.png" alt=""></a>
		  </div>
		  <?PHP
			}
                ?>
             <br>
             <?PHP
             if($_CONFIG['Console'] == "Playstation Move"){
		
		?>
		  <div class="card" style="width:400px">
		    <a href="../../../Shop/Video Games/Console/Playstation/Playstation Move<?php echo $_CONFIG['Games']?>.php"><img class="card-img-top" src="../../../img/Games/<?PHP echo $_CONFIG['Games']?>.png" alt="Card image"></a>
		  </div>
			<?php
			}
			else 
			{
            ?>
          <div class="card" style="width:400px">
		    <a href=""><img class="card-img-top" src="../../../img/White.png" alt=""></a>
		  </div>
		  <?PHP
			}
                ?>
             <br>
             <?PHP
             if($_CONFIG['Console'] == "Playstation Portable"){
		
		?>
		  <div class="card" style="width:400px">
		    <a href="../../../Shop/Video Games/Console/Playstation/Playstation Portable<?php echo $_CONFIG['Games']?>.php"><img class="card-img-top" src="../../../img/Games/<?PHP echo $_CONFIG['Games']?>.png" alt="Card image"></a>
		  </div>
			<?php
			}
			else 
			{
            ?>
          <div class="card" style="width:400px">
		    <a href=""><img class="card-img-top" src="../../../img/White.png" alt=""></a>
		  </div>
		  <?PHP
			}
			?>
			<br>
	
			</div>
	</div>
	</div>
	      <!-- FOOTER -->
      <section class="footer3 cid-qWBMITaxlt" id="footer3-17">

        <div class="container">
            <div class="media-container-row content text-white">
                <div class="col-12 col-md-3">
                    <div class="media-wrap">
                        <a href="<?PHP echo $_CONFIG['Logo_Link']?>">
                            <img src="<?PHP echo $sdoubledotconnect?>/<?PHP echo $_CONFIG['Logo']?>" alt="Mobirise">
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-3 mbr-fonts-style display-7">
                    <h5 class="pb-3">
                        Address
                    </h5>
                    <p class="mbr-text">
                        1234 Street Name
                        <br>City, AA 99999
                    </p>
                </div>
                <div class="col-12 col-md-3 mbr-fonts-style display-7">
                    <h5 class="pb-3">
                        Contacts
                    </h5>
                    <p class="mbr-text">
                        Email: support@mobirise.com
                        <br>Phone: +1 (0) 000 0000 001
                        <br>Fax: +1 (0) 000 0000 002
                    </p>
                </div>
                <div class="col-12 col-md-3 mbr-fonts-style display-7">
                    <h5 class="pb-3">
                        Links
                    </h5>
                    <p class="mbr-text">
                        <a class="text-primary" href="https://mobirise.com/">Website builder</a>
                        <br><a class="text-primary" href="https://mobirise.com/mobirise-free-win.zip">Download for Windows</a>
                        <br><a class="text-primary" href="https://mobirise.com/mobirise-free-mac.zip">Download for Mac</a>
                    </p>
                </div>
            </div>
            <div class="footer-lower">
                <div class="media-container-row">
                    <div class="col-sm-12">
                        <hr>
                    </div>
                </div>
                <div class="media-container-row mbr-white">
                    <div class="col-sm-6 copyright">
                        <p class="mbr-text mbr-fonts-style display-7">
                            © Copyright 2017 Mobirise - All Rights Reserved
                        </p>
                    </div>
                    <div class="col-md-6">
                        <div class="social-list align-right">
                            <div class="soc-item">
                                <a href="https://twitter.com/mobirise" target="_blank">
                                    <span class="socicon-twitter socicon mbr-iconfont mbr-iconfont-social"></span>
                                </a>
                            </div>
                            <div class="soc-item">
                                <a href="https://www.facebook.com/pages/Mobirise/1616226671953247" target="_blank">
                                    <span class="socicon-facebook socicon mbr-iconfont mbr-iconfont-social"></span>
                                </a>
                            </div>
                            <div class="soc-item">
                                <a href="https://www.youtube.com/c/mobirise" target="_blank">
                                    <span class="socicon-youtube socicon mbr-iconfont mbr-iconfont-social"></span>
                                </a>
                            </div>
                            <div class="soc-item">
                                <a href="https://instagram.com/mobirise" target="_blank">
                                    <span class="socicon-instagram socicon mbr-iconfont mbr-iconfont-social"></span>
                                </a>
                            </div>
                            <div class="soc-item">
                                <a href="https://plus.google.com/u/0/+Mobirise" target="_blank">
                                    <span class="socicon-googleplus socicon mbr-iconfont mbr-iconfont-social"></span>
                                </a>
                            </div>
                            <div class="soc-item">
                                <a href="https://www.behance.net/Mobirise" target="_blank">
                                    <span class="socicon-behance socicon mbr-iconfont mbr-iconfont-social"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
  </body>
</html>  