			<?php
$sdoubledotconnect ="../../../../";
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
}else if($sdoubledotconnect == "../../../../"){
require '../../../../Auth/Configuration/Config.php';
require '../../../../Auth/Configuration/Shop_Config.php';
require '../../../../Auth/connection.php';
}else if($sdoubledotconnect == "../../../../"){
require '../../../../Auth/Configuration/Config.php';
require '../../../../Auth/Configuration/Shop_Config.php';
require '../../../../Auth/connection.php';
}else if($sdoubledotconnect == "../../../../../"){
require '../../../../../Auth/Configuration/Config.php';
require '../../../../../Auth/Configuration/Shop_Config.php';
require '../../../../../Auth/connection.php';
}else if ($sdoubledotconnect == ""){
require 'Auth/Configuration/Config.php';
require 'Auth/Configuration/Shop_Config.php';
require 'Auth/connection.php';
}
// Initialize the session

session_start();

 

// If session variable is not set it will redirect to login page

if(!isset($_SESSION['username']) || empty($_SESSION['username'])){

  header("location: ../../../../login.php");

  exit;

}

?>

<!DOCTYPE html>
<html>
  <head>
  <meta http-equiv="content-type" content="text/html; charset=windows-1250">
  <meta name="viewport" content="width=device-width" />
  <title>Gamer Emporium | Home</title>
  <link rel="stylesheet" href="../../../../css/components.css">
  <link rel="stylesheet" href="../../../../css/responsee.css">  
  <link rel="stylesheet" href="../../../../owl-carousel/owl.carousel.css">
  <link rel="stylesheet" href="../../../../owl-carousel/owl.theme.css">
  
  <script type="text/javascript" src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
  <script type="text/javascript" src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>  
  <script type="text/javascript" src="../../../../js/modernizr.js"></script>
  <script type="text/javascript" src="../../../../js/responsee.js"></script>
  <script type="text/javascript" src="../../../../owl-carousel/owl.carousel.js"></script>
  
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
            <img src="../../../../img/logo.png" width="189" height="69">
          </div>
        </div>
      </div>
      <!-- TOP NAV -->  
      <div class="line">
        <nav class="margin-bottom">
          <p class="nav-text">Custom menu text</p> 
          <div class="top-nav s-12 l-10">
            <ul>
              <li><a href="../../../../index.php">Home</a></li>
              <li><a href="../../../../Shop.php">Shop</a>
                <ul>
				  <li><a href="../../../../Shop/Video Games.php">Video Games</a>
				    <ul>
					  <li><a href="../../../../Shop/Video Games/Console.php">Console</a>
						<ul>
						  <li><a href="../../../../Shop/Video Games/Console/Playstation.php">Playstation</a>
							<ul>
							  <li><a href="../../../../Shop/Video Games/Console/Playstation/Playstation 1.php">Playstation 1</a>
								<ul>
								  <li><a href="../../../../Shop/Video Games/Console/Playstation/Playstation 1/Games.php">Games</a></li>
								  <li><a href="../../../../Shop/Video Games/Console/Playstation/Playstation 1/Systems.php">Systems</a></li>
								  <li><a href="../../../../Shop/Video Games/Console/Playstation/Playstation 1/Accessories.php">Accessories</a></li>
								</ul>
							  </li>
							  <li><a href="../../../../Shop/Video Games/Console/Playstation/Playstation 2.php">Playstation 2</a>
								<ul>
								  <li><a href="../../../../Shop/Video Games/Console/Playstation/Playstation 2/Games.php">Games</a></li>
								  <li><a href="../../../../Shop/Video Games/Console/Playstation/Playstation 2/Systems.php">Systems</a></li>
								  <li><a href="../../../../Shop/Video Games/Console/Playstation/Playstation 2/Accessories.php">Accessories</a></li>
								</ul>
							  </li>
							  <li><a href="../../../../Shop/Video Games/Console/Playstation/Playstation 3.php">Playstation 3</a>
								<ul>
								  <li><a href="../../../../Shop/Video Games/Console/Playstation/Playstation 3/Games.php">Games</a></li>
								  <li><a href="../../../../Shop/Video Games/Console/Playstation/Playstation 3/Systems.php">Systems</a></li>
								  <li><a href="../../../../Shop/Video Games/Console/Playstation/Playstation 3/Accessories.php">Accessories</a></li>
								</ul>
							  </li>
							  <li><a href="../../../../Shop/Video Games/Console/Playstation/Playstation Poratble.php">Playstation Poratable</a>
								<ul>
								  <li><a href="../../../../Shop/Video Games/Console/Playstation/Playstation Poratble/Games.php">Games</a></li>
								  <li><a href="../../../../Shop/Video Games/Console/Playstation/Playstation Poratble/Systems.php">Systems</a></li>
								  <li><a href="../../../../Shop/Video Games/Console/Playstation/Playstation Poratble/Accessories.php">Accessories</a></li>
								</ul>
							  </li>
							  <li><a href="../../../../Shop/Video Games/Console/Playstation/Playstation Move.php">Playstation Move</a>
								<ul>
								  <li><a href="../../../../Shop/Video Games/Console/Playstation/Playstation Move/Games.php">Games</a></li>
								  <li><a href="../../../../Shop/Video Games/Console/Playstation/Playstation Move/Systems.php">Systems</a></li>
								  <li><a href="../../../../Shop/Video Games/Console/Playstation/Playstation Move/Accessories.php">Accessories</a></li>
								</ul>
							  </li>
							</ul>
						  </li>
						  <li><a href="../../../../Shop/Video Games/Console/Nintendo.php">Nintendo</a>
							<ul>
							  <li><a href="../../../../Shop/Video Games/Console/Nintendo/Wii.php">Wii</a>
								<ul>
								  <li><a href="../../../../Shop/Video Games/Console/Nintendo/Wii/Games.php">Games</a></li>
								  <li><a href="../../../../Shop/Video Games/Console/Nintendo/Wii/Systems.php">Systems</a></li>
								  <li><a href="../../../../Shop/Video Games/Console/Nintendo/Wii/Accessories.php">Accessories</a></li>
								</ul>
							  </li>
							  <li><a href="../../../../Shop/Video Games/Console/Nintendo/GameCube.php">GameCube</a>
								<ul>
								  <li><a href="../../../../Shop/Video Games/Console/Nintendo/GameCube/Games.php">Games</a></li>
								  <li><a href="../../../../Shop/Video Games/Console/Nintendo/GameCube/Systems.php">Systems</a></li>
								  <li><a href="../../../../Shop/Video Games/Console/Nintendo/GameCube/Accessories.php">Accessories</a></li>
								</ul>
							  </li>
							  <li><a href="../../../../Shop/Video Games/Console/Nintendo/Nintendo 64.php">Nintendo 64</a>
								<ul>
								  <li><a href="../../../../Shop/Video Games/Console/Nintendo/Nintendo 64/Games.php">Games</a></li>
								  <li><a href="../../../../Shop/Video Games/Console/Nintendo/Nintendo 64/Systems.php">Systems</a></li>
								  <li><a href="../../../../Shop/Video Games/Console/Nintendo/Nintendo 64/Accessories.php">Accessories</a></li>
								</ul>
							  </li>
							  <li><a href="../../../../Shop/Video Games/Console/Nintendo/Gameboy.php">Gameboy</a>
							    <ul>
							      <li><a href="../../../../Shop/Video Games/Console/Nintendo/Gameboy/Games.php">Games</a></li>
							      <li><a href="../../../../Shop/Video Games/Console/Nintendo/Gameboy/Systems.php">Systems</a></li>
							      <li><a href="../../../../Shop/Video Games/Console/Nintendo/Gameboy/Accessories.php">Accessories</a></li>
							    </ul>
							  </li>
							  <li><a href="../../../../Shop/Video Games/Console/Nintendo/Gameboy Color.php">Gameboy Color</a>
							    <ul>
							      <li><a href="../../../../Shop/Video Games/Console/Nintendo/Gameboy Color/Games.php">Games</a></li>
							      <li><a href="../../../../Shop/Video Games/Console/Nintendo/Gameboy Color/Systems.php">Systems</a></li>
							      <li><a href="../../../../Shop/Video Games/Console/Nintendo/Gameboy Color/Accessories.php">Accessories</a></li>
							    </ul>
							  </li>
							  <li><a href="../../../../Shop/Video Games/Console/Nintendo/Gameboy Advance.php">Gameboy Advance</a>
							    <ul>
							      <li><a href="../../../../Shop/Video Games/Console/Nintendo/Gameboy Advance/Games.php">Games</a></li>
							      <li><a href="../../../../Shop/Video Games/Console/Nintendo/Gameboy Advance/Systems.php">Systems</a></li>
							      <li><a href="../../../../Shop/Video Games/Console/Nintendo/Gameboy Advance/Accessories.php">Accessories</a></li>
							    </ul>
							  </li>
							</ul>
						  </li>
						  <li><a href="../../../../Shop/Video Games/Console/ATARI.php">ATARI</a>
							<ul>
							  <li><a href="../../../../Shop/Video Games/Console/ATARI/2600.php">2600</a>
								<ul>
								  <li><a href="../../../../Shop/Video Games/Console/ATARI/2600/Games.php">Games</a></li>
								  <li><a href="../../../../Shop/Video Games/Console/ATARI/2600/Systems.php">Systems</a></li>
								  <li><a href="../../../../Shop/Video Games/Console/ATARI/2600/Accessories.php">Accessories</a></li>
								</ul>
							  </li>
							</ul>
						  </li>
						  <li><a href="../../../../Shop/Video Games/Console/Xbox.php">Xbox</a>
							<ul>
							  <li><a href="../../../../Shop/Video Games/Console/Xbox/Xbox.php">Xbox</a>
								<ul>
								  <li><a href="../../../../Shop/Video Games/Console/Xbox/Xbox/Games.php">Games</a></li>
								  <li><a href="../../../../Shop/Video Games/Console/Xbox/Xbox/Systems.php">Systems</a></li>
								  <li><a href="../../../../Shop/Video Games/Console/Xbox/Xbox/Accessories.php">Accessories</a></li>
								</ul>
							  </li>
							  <li><a href="../../../../Shop/Video Games/Console/Xbox/Xbox 360.php">Xbox 360</a>
								<ul>
								  <li><a href="../../../../Shop/Video Games/Console/Xbox/Xbox 360/Games.php">Games</a></li>
								  <li><a href="../../../../Shop/Video Games/Console/Xbox/Xbox 360/Systems.php">Systems</a></li>
								  <li><a href="../../../../Shop/Video Games/Console/Xbox/Xbox 360/Accessories.php">Accessories</a></li>
								</ul>
							  </li>
							</ul>
						  </li>
						  <li><a href="../../../../Shop/Video Games/Console/SEGA.php">SEGA</a>
							<ul>
							  <li><a href="../../../../Shop/Video Games/Console/SEGA/Genesis.php">Genesis</a>
								<ul>
								  <li><a href="../../../../Shop/Video Games/Console/SEGA/Genesis/Games.php">Games</a></li>
								  <li><a href="../../../../Shop/Video Games/Console/SEGA/Genesis/Systems.php">Systems</a></li>
								  <li><a href="../../../../Shop/Video Games/Console/SEGA/Genesis/Accessories.php">Accessories</a></li>
								</ul>
							  </li>
							  <li><a href="../../../../Shop/Video Games/Console/GameGear.php">GameGear</a>
								<ul>
								  <li><a href="../../../../Shop/Video Games/Console/GameGear/Games.php">Games</a></li>
								  <li><a href="../../../../Shop/Video Games/Console/GameGear/Systems.php">Systems</a></li>
								  <li><a href="../../../../Shop/Video Games/Console/GameGear/Accessories.php">Accessories</a></li>
								</ul>
							  </li>
							  <li><a href="../../../../Shop/Video Games/Console/DreamCast.php">DreamCast</a>
								<ul>
								  <li><a href="../../../../Shop/Video Games/Console/DreamCast/Games.php">Games</a></li>
								  <li><a href="../../../../Shop/Video Games/Console/DreamCast/Systems.php">Systems</a></li>
								  <li><a href="../../../../Shop/Video Games/Console/DreamCast/Accessories.php">Accessories</a></li>
								</ul>
							  </li>
							</ul>
						  </li>
						</ul>					
					  </li>
					  <li><a href="../../../../Shop/Video Games/Plug N Plays.php">Plug N Plays</a>
						<ul>
						  <li><a href="../../../../Shop/Video Games/Plug N Plays/JAKKS.php">Jakks Pacific</a></li>
						</ul>
					  </li>
					</ul>
				  </li>
			      <li><a href="../../../../Shop/Toys.php">Toys</a>
			        <ul>
				      <li><a href="../../../../Shop/Toys/Stuffed Animals.php">Stuffed Animals</a>
					    <ul>
					      <li><a href="../../../../Shop/Toys/Stuffed Animals/Beanie Babies.php">Beanie Babies</a>
						    <li><a href="../../../../Shop/Toys/Stuffed Animals/Beanie Babies/TY.php">TY</a></li>
						    <li><a href="../../../../Shop/Toys/Stuffed Animals/Beanie Babies/Nintendo.php">Nintendo</a></li>
						  </li>
					    </ul>
				      </li>
				      <li><a href="../../../../Shop/Toys/Dart Guns.php">Dart Guns</a>
					    <ul>
						  <li><a href="../../../../Shop/Toys/Dart Guns/Nerf.php">Nerf</a></li>
						  <li><a href="../../../../Shop/Toys/Dart Guns/Buzz Bee.php">Buzz Bee</a></li>
						  <li><a href="../../../../Shop/Toys/Dart Guns/Boom Co.php">Boom Co.</a></li>
						</ul>
					  </li>
				      <li><a href="../../../../Shop/Toys/Collectibles.php">Collectibles</a></li>
				      <li><a href="../../../../Shop/Toys/Trading Cards.php">Trading Cards</a>
					    <ul>
						  <li><a href="../../../../Shop/Toys/Trading Cards/TCG.php">TCG</a>
						    <ul>
					          <li><a href="../../../../Shop/Toys/Trading Cards/TCG/Pokemon.php">Pokemon</a></li>
					          <li><a href="../../../../Shop/Toys/Trading Cards/TCG/Yu-gi-oh.php">YuGiOh</a></li>
							</ul>
						  </li>
					      <li><a href="../../../../Shop/Toys/Trading Cards/Sports Cards.php">Sports Cards</a>
						    <ul>
						      <li><a href="../../../../Shop/Toys/Trading Cards/Sports Cards/BaseBall.php">BaseBall</a></li>
						      <li><a href="../../../../Shop/Toys/Trading Cards/Sports Cards/FootBall.php">FootBall</a></li>
						      <li><a href="../../../../Shop/Toys/Trading Cards/Sports Cards/BasketBall.php">BasketBall</a></li>
						      <li><a href="../../../../Shop/Toys/Trading Cards/Sports Cards/Hockey.php">Hockey</a></li>
						    </ul>
						  </li>
						</ul>
					  </li>
					</ul>
				  </li>
				</ul>
			  </li>
              <li><a href="../../../../Company.php">Company</a>
                <ul>
                  <li><a href="../../../../About.php">About</a></li>
                  <li><a href="../../../../Location.php">Location</a></li>
                </ul>
              </li>
              <li><a href="../../../../Contact.html">Contact</a>
			    <ul>
			      <li><a href="../../../../Email.html">Email</a></li>
			      <li><a href="../../../../Facebook.html">Facebook</a></li>
				</ul>
			  </li>
		    </ul>
			<?php
				if(isset($_SESSION['username']))
				{
			?>
			<ul>
			  <li><a href="../../../../logout.php">Logout</a></li>
			</ul>
			  <?php
				  }
				  else if(!isset($_SESSION['username']))
				  {
			  ?>
			<ul>
			  <li><a href="../../../../signup.php">Sign Up / Login</a></li>
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
					
					if($_CONFIG['Brand'] == "Xbox"){
					$_CONFIG['Console'] = $row['Console'];
						if($_CONFIG['Console'] == "Xbox ONE"){
						$_CONFIG['Item_Type'] = $row['Item_Type'];
						$_CONFIG['Amount'] = $row['Amount'];
					
							if(($_CONFIG['Item_Type'] == "Accessory") && ($_CONFIG['Amount'] >= "1")){
							$_CONFIG['Games'] = $row['Games'];
							}
                            if(($_CONFIG['Item_Type'] == "System") && ($_CONFIG['Amount'] >= "1")){
							$_CONFIG['Games'] = $row['Games'];
							}
                            if(($_CONFIG['Item_Type'] == "Game") && ($_CONFIG['Amount'] >= "1")){
							$_CONFIG['Games'] = $row['Games'];
							}
						}
					}
				}
			}
			
			if($_CONFIG['Item_Type'] == "Accessory"){
		
		?>
		  <div class="card" style="width:400px">
		    <a href="../../../../Shop/Video Games/Console/Xbox/Xbox ONE/Accessories/<?php echo $_CONFIG['Games']?>.php"><img class="card-img-top" src="../../../../img/Accessories/<?PHP echo $_CONFIG['Games']?>.png" alt="Card image"></a>
		  </div>
			<?php
			}
			else 
			{
             ?>
          <div class="card" style="width:400px">
		    <a href=""><img class="card-img-top" src="../../../../img/White.png" alt=""></a>
		  </div>
		  <?PHP
			}
             if($_CONFIG['Item_Type'] == "System"){
		
		?>
		  <div class="card" style="width:400px">
		    <a href="../../../../Shop/Video Games/Console/Xbox/Xbox ONE/Systems/<?php echo $_CONFIG['Games']?>.php"><img class="card-img-top" src="../../../../img/Systems/<?PHP echo $_CONFIG['Games']?>.png" alt="Card image"></a>
		  </div>
			<?php
			}
			else 
			{
            ?>
          <div class="card" style="width:400px">
		    <a href=""><img class="card-img-top" src="../../../../img/White.png" alt=""></a>
		  </div>
		  <?PHP
			}
             if($_CONFIG['Item_Type'] == "Game"){
		
		?>
		  <div class="card" style="width:400px">
		    <a href="../../../../Shop/Video Games/Console/Xbox/Xbox ONE/Games/<?php echo $_CONFIG['Games']?>.php"><img class="card-img-top" src="../../../../img/Games/<?PHP echo $_CONFIG['Games']?>.png" alt="Card image"></a>
		  </div>
			<?php
			}
			else 
			{
            ?>
          <div class="card" style="width:400px">
		    <a href=""><img class="card-img-top" src="../../../../img/White.png" alt=""></a>
		  </div>
		  <?PHP
			}
			?>
	
			</div>
	</div>
	</div>
	      <!-- FOOTER -->
      <footer class="line">
        <div class="box">
          <div class="s-12 l-6">
            <p> &copy; 
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