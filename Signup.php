<?php

// Include config file
$sdoubledotconnect ="";
require_once 'config.php';
if($sdoubledotconnect == "../"){
require '../Auth/Configuration/Config.php';
require '../Auth/Configuration/Shop_Config.php';
}else if($sdoubledotconnect == "../../"){
require '../../Auth/Configuration/Config.php';
require '../../Auth/Configuration/Shop_Config.php';
}else if($sdoubledotconnect == "../../../"){
require '../../../Auth/Configuration/Config.php';
require '../../../Auth/Configuration/Shop_Config.php';
}else if($sdoubledotconnect == "../../../../"){
require '../../../../Auth/Configuration/Config.php';
require '../../../../Auth/Configuration/Shop_Config.php';
}else if($sdoubledotconnect == "../../../../../"){
require '../../../../../Auth/Configuration/Config.php';
require '../../../../../Auth/Configuration/Shop_Config.php';
}else if($sdoubledotconnect == "../../../../../../"){
require '../../../../../../Auth/Configuration/Config.php';
require '../../../../../../Auth/Configuration/Shop_Config.php';
}else{
require 'Auth/Configuration/Config.php';
require 'Auth/Configuration/Shop_Config.php';
}

 

// Define variables and initialize with empty values

$username = $password = $confirm_password = "";

$username_err = $password_err = $confirm_password_err = "";

 

// Processing form data when form is submitted

if($_SERVER["REQUEST_METHOD"] == "POST"){

 

    // Validate username

    if(empty(trim($_POST["username"]))){

        $username_err = "Please enter a username.";

    } else{

        // Prepare a select statement

        $sql = "SELECT id FROM users WHERE username = ?";

        

        if($stmt = mysqli_prepare($link, $sql)){

            // Bind variables to the prepared statement as parameters

            mysqli_stmt_bind_param($stmt, "s", $param_username);

            

            // Set parameters

            $param_username = trim($_POST["username"]);

            

            // Attempt to execute the prepared statement

            if(mysqli_stmt_execute($stmt)){

                /* store result */

                mysqli_stmt_store_result($stmt);

                

                if(mysqli_stmt_num_rows($stmt) == 1){

                    $username_err = "This username is already taken.";

                } else{

                    $username = trim($_POST["username"]);

                }

            } else{

                echo "Oops! Something went wrong. Please try again later.";

            }

        }

         

        // Close statement

        mysqli_stmt_close($stmt);

    }

    

    // Validate password

    if(empty(trim($_POST['password']))){

        $password_err = "Please enter a password.";     

    } elseif(strlen(trim($_POST['password'])) < 6){

        $password_err = "Password must have atleast 6 characters.";

    } else{

        $password = trim($_POST['password']);

    }

    

    // Validate confirm password

    if(empty(trim($_POST["confirm_password"]))){

        $confirm_password_err = 'Please confirm password.';     

    } else{

        $confirm_password = trim($_POST['confirm_password']);

        if($password != $confirm_password){

            $confirm_password_err = 'Password did not match.';

        }

    }

    

    // Check input errors before inserting in database

    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){

        

        // Prepare an insert statement

        $sql = "INSERT INTO users (username, password) VALUES (?, ?)";

         

        if($stmt = mysqli_prepare($link, $sql)){

            // Bind variables to the prepared statement as parameters

            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);

            

            // Set parameters

            $param_username = $username;

            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash

            

            // Attempt to execute the prepared statement

            if(mysqli_stmt_execute($stmt)){

                // Redirect to login page

                header("location: login.php");

            } else{

                echo "Something went wrong. Please try again later.";

            }

        }

         

        // Close statement

        mysqli_stmt_close($stmt);

    }

    

    // Close connection

    mysqli_close($link);

}

?>
     

    <!DOCTYPE html>

    <html lang="en">

    <head>

        <meta charset="UTF-8">

        <title>Sign Up</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
		  <link rel="stylesheet" href="css/components.css">
  <link rel="stylesheet" href="css/responsee.css">  
  <link rel="stylesheet" href="owl-carousel/owl.carousel.css">
  <link rel="stylesheet" href="owl-carousel/owl.theme.css">
  
  <script type="text/javascript" src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
  <script type="text/javascript" src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>  
  <script type="text/javascript" src="js/modernizr.js"></script>
  <script type="text/javascript" src="js/responsee.js"></script>
  <script type="text/javascript" src="owl-carousel/owl.carousel.js"></script>
  
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
        <style type="text/css">

            body{ font: 14px sans-serif; }

            .wrapper{ width: 350px; padding: 20px; }

        </style>

    </head>

    <body class="size-960">

	<header>
	  <div class="line">
        <div class="w3-container w3-black">
          <div class="s-6 l-2">
            <?PHP 
				if ($_CONFIG['Logo'] != ""){
			?>
			<img src="img/logo.png" width="189" height="69">
			<?php
				}
				else
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
          <p class="nav-text">Custom menu text</p> 
          <div class="top-nav s-12 l-10">
            <ul>
              <li><a href="index.php">Home</a></li>
              <li><a href="Shop.php">Shop</a>
                <ul>
				  <li><a href="Shop/Video Games.php">Video Games</a>
				    <ul>
					  <li><a href="Shop/Video Games/Consoles.php">Consoles</a>
						<ul>
						  <li><a href="Shop/Video Games/Consoles/Sony.php">Sony</a>
							<ul>
							  <li><a href="Shop/Video Games/Consoles/Sony/Ps1.php">Playstation 1</a>
								<ul>
								  <li><a href="Shop/Video Games/Consoles/Sony/Ps1/Games.php">Games</a></li>
								  <li><a href="Shop/Video Games/Consoles/Sony/Ps1/Systems.php">Systems</a></li>
								  <li><a href="Shop/Video Games/Consoles/Sony/Ps1/Accessories.php">Accessories</a></li>
								</ul>
							  </li>
							  <li><a href="Shop/Video Games/Consoles/Sony/Ps2.php">Playstation 2</a>
								<ul>
								  <li><a href="Shop/Video Games/Consoles/Sony/Ps2/Games.php">Games</a></li>
								  <li><a href="Shop/Video Games/Consoles/Sony/Ps2/Systems.php">Systems</a></li>
								  <li><a href="Shop/Video Games/Consoles/Sony/Ps2/Accessories.php">Accessories</a></li>
								</ul>
							  </li>
							  <li><a href="Shop/Video Games/Consoles/Sony/Ps3.php">Playstation 3</a>
								<ul>
								  <li><a href="Shop/Video Games/Consoles/Sony/Ps3/Games.php">Games</a></li>
								  <li><a href="Shop/Video Games/Consoles/Sony/Ps3/Systems.php">Systems</a></li>
								  <li><a href="Shop/Video Games/Consoles/Sony/Ps3/Accessories.php">Accessories</a></li>
								</ul>
							  </li>
							  <li><a href="Shop/Video Games/Consoles/Sony/PsP.php">Playstation Poratable</a>
								<ul>
								  <li><a href="Shop/Video Games/Consoles/Sony/PsP/Games.php">Games</a></li>
								  <li><a href="Shop/Video Games/Consoles/Sony/PsP/Systems.php">Systems</a></li>
								  <li><a href="Shop/Video Games/Consoles/Sony/PsP/Accessories.php">Accessories</a></li>
								</ul>
							  </li>
							  <li><a href="Shop/Video Games/Consoles/Sony/PS Move.php">Playstation Move</a>
								<ul>
								  <li><a href="Shop/Video Games/Consoles/Sony/PS Move/Games.php">Games</a></li>
								  <li><a href="Shop/Video Games/Consoles/Sony/PS Move/Systems.php">Systems</a></li>
								  <li><a href="Shop/Video Games/Consoles/Sony/PS Move/Accessories.php">Accessories</a></li>
								</ul>
							  </li>
							</ul>
						  </li>
						  <li><a href="Shop/Video Games/Consoles/Nintendo.php">Nintendo</a>
							<ul>
							  <li><a href="Shop/Video Games/Consoles/Nintendo/Wii.php">Wii</a>
								<ul>
								  <li><a href="Shop/Video Games/Consoles/Nintendo/Wii/Games.php">Games</a></li>
								  <li><a href="Shop/Video Games/Consoles/Nintendo/Wii/Systems.php">Systems</a></li>
								  <li><a href="Shop/Video Games/Consoles/Nintendo/Wii/Accessories.php">Accessories</a></li>
								</ul>
							  </li>
							  <li><a href="Shop/Video Games/Consoles/Nintendo/GameCube.php">GameCube</a>
								<ul>
								  <li><a href="Shop/Video Games/Consoles/Nintendo/GameCube/Games.php">Games</a></li>
								  <li><a href="Shop/Video Games/Consoles/Nintendo/GameCube/Systems.php">Systems</a></li>
								  <li><a href="Shop/Video Games/Consoles/Nintendo/GameCube/Accessories.php">Accessories</a></li>
								</ul>
							  </li>
							  <li><a href="Shop/Video Games/Consoles/Nintendo/Nintendo 64.php">Nintendo 64</a>
								<ul>
								  <li><a href="Shop/Video Games/Consoles/Nintendo/Nintendo 64/Games.php">Games</a></li>
								  <li><a href="Shop/Video Games/Consoles/Nintendo/Nintendo 64/Games.php">Systems</a></li>
								  <li><a href="Shop/Video Games/Consoles/Nintendo/Nintendo 64/Games.php">Accessories</a></li>
								</ul>
							  </li>
							</ul>
						  </li>
						  <li><a href="Shop/Video Games/Consoles/ATARI.php">ATARI</a>
							<ul>
							  <li><a href="Shop/Video Games/Consoles/ATARI/2600.php">2600</a>
								<ul>
								  <li><a href="Shop/Video Games/Consoles/ATARI/2600/Games.php">Games</a></li>
								  <li><a href="Shop/Video Games/Consoles/ATARI/2600/Systems.php">Systems</a></li>
								  <li><a href="Shop/Video Games/Consoles/ATARI/2600/Accessories.php">Accessories</a></li>
								</ul>
							  </li>
							</ul>
						  </li>
						  <li><a href="Shop/Video Games/Consoles/Microsoft.php">Microsoft</a>
							<ul>
							  <li><a href="Shop/Video Games/Consoles/Microsoft/Xbox.php">Xbox</a>
								<ul>
								  <li><a href="Shop/Video Games/Consoles/Microsoft/Xbox/Games.php">Games</a></li>
								  <li><a href="Shop/Video Games/Consoles/Microsoft/Xbox/Systems.php">Systems</a></li>
								  <li><a href="Shop/Video Games/Consoles/Microsoft/Xbox/Accessories.php">Accessories</a></li>
								</ul>
							  </li>
							  <li><a href="Shop/Video Games/Consoles/Microsoft/Xbox 360.php">Xbox 360</a>
								<ul>
								  <li><a href="Shop/Video Games/Consoles/Microsoft/Xbox 360/Games.php">Games</a></li>
								  <li><a href="Shop/Video Games/Consoles/Microsoft/Xbox 360/Systems.php">Systems</a></li>
								  <li><a href="Shop/Video Games/Consoles/Microsoft/Xbox 360/Accessories.php">Accessories</a></li>
								</ul>
							  </li>
							  <li><a href="Shop/Video Games/Consoles/Microsoft/PC.php">PC</a>
								<ul>
								  <li><a href="Shop/Video Games/Consoles/Microsoft/PC/Games.php">Games</a></li>
								  <li><a href="Shop/Video Games/Consoles/Microsoft/PC/Systems.php">Systems</a></li>
								  <li><a href="Shop/Video Games/Consoles/Microsoft/PC/Accessories.php">Accessories</a></li>
								</ul>
							  </li>
							</ul>
						  </li>
						  <li><a href="Shop/Video Games/Consoles/SEGA.php">SEGA</a>
							<ul>
							  <li><a href="Shop/Video Games/Consoles/SEGA/Genesis.php">Genesis</a>
								<ul>
								  <li><a href="Shop/Video Games/Consoles/SEGA/Genesis/Games.php">Games</a></li>
								  <li><a href="Shop/Video Games/Consoles/SEGA/Genesis/Systems.php">Systems</a></li>
								  <li><a href="Shop/Video Games/Consoles/SEGA/Genesis/Accessories.php">Accessories</a></li>
								</ul>
							  </li>
							  <li><a href="Shop/Video Games/Consoles/GameGear.php">GameGear</a>
								<ul>
								  <li><a href="Shop/Video Games/Consoles/GameGear/Games.php">Games</a></li>
								  <li><a href="Shop/Video Games/Consoles/GameGear/Systems.php">Systems</a></li>
								  <li><a href="Shop/Video Games/Consoles/GameGear/Accessories.php">Accessories</a></li>
								</ul>
							  </li>
							  <li><a href="Shop/Video Games/Consoles/DreamCast.php">DreamCast</a>
								<ul>
								  <li><a href="Shop/Video Games/Consoles/DreamCast/Games.php">Games</a></li>
								  <li><a href="Shop/Video Games/Consoles/DreamCast/Systems.php">Systems</a></li>
								  <li><a href="Shop/Video Games/Consoles/DreamCast/Accessories.php">Accessories</a></li>
								</ul>
							  </li>
							</ul>
						  </li>
						</ul>					
					  </li>
					  <li><a href="Shop/Video Games/Clug N Plays.php">Plug N Plays</a>
						<ul>
						  <li><a href="Shop/Video Games/Clug N Plays/JAKKS.php">Jakks Pacific</a></li>
						</ul>
					  </li>
					</ul>
				  </li>
			      <li><a href="Shop/Toys.php">Toys</a>
			        <ul>
				      <li><a href="Shop/Toys/Stuffed Animals.php">Stuffed Animals</a>
					    <ul>
					      <li><a href="Shop/Toys/Stuffed Animals/Beanie Babies.php">Beanie Babies</a>
						    <li><a href="Shop/Toys/Stuffed Animals/Beanie Babies/TY.php">TY</a></li>
						    <li><a href="Shop/Toys/Stuffed Animals/Beanie Babies/Nintendo.php">Nintendo</a></li>
						  </li>
					    </ul>
				      </li>
				      <li><a href="Shop/Dart Guns.php">Dart Guns</a>
					    <ul>
						  <li><a href="Shop/Dart Guns/Toys/Dart Guns/Nerf.php">Nerf</a></li>
						  <li><a href="Shop/Dart Guns/Toys/Dart Guns/Buzz Bee.php">Buzz Bee</a></li>
						  <li><a href="Shop/Dart Guns/Toys/Dart Guns/Boom Co.php">Boom Co.</a></li>
						</ul>
					  </li>
				      <li><a href="Shop/Toys/Collectibles.php">Collectibles</a></li>
				      <li><a href="Shop/Toys/Trading Cards.php">Trading Cards</a>
					    <ul>
						  <li><a href="Shop/Toys/Trading Cards/TCG.php">TCG</a>
						    <ul>
					          <li><a href="Shop/Toys/Trading Cards/TCG/Pokemon.php">Pokemon</a></li>
					          <li><a href="Shop/Toys/Trading Cards/TCG/Yu-gi-oh.php">YuGiOh</a></li>
							</ul>
						  </li>
					      <li><a href="Shop/Toys/Trading Cards/Sports Cards.php">Sports Cards</a>
						    <ul>
						      <li><a href="Shop/Toys/Trading Cards/Sports Cards/BaseBall.php">BaseBall</a></li>
						      <li><a href="Shop/Toys/Trading Cards/Sports Cards/FootBall.php">FootBall</a></li>
						      <li><a href="Shop/Toys/Trading Cards/Sports Cards/BasketBall.php">BasketBall</a></li>
						      <li><a href="Shop/Toys/Trading Cards/Sports Cards/Hockey.php">Hockey</a></li>
						    </ul>
					      </li>
					    </ul>  
				      </li>
				    </ul>
			      </li>
				</ul>
			  </li>
              <li><a href="Company.html">Company</a>
                <ul>
                  <li><a href="About.html">About</a></li>
                  <li><a href="Location.html">Location</a></li>
                </ul>
              </li>
              <li><a href="Contact.html">Contact</a>
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
		    </ul>
			<?php
				if(isset($_SESSION['username']))
				{
			?>
			<ul>
			  <li><a href="logout.php">Logout</a></li>
			</ul>
			  <?php
				  }
				  else if(!isset($_SESSION['username']))
				  {
			  ?>
			<ul>
			  <li><a href="signup.php">Sign Up / Login</a></li>
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
	<section>
	<div class="row">
      <div class="col-md-4"></div>
        <div class="col-md-4">
	       <div class="container">
	  
        <div class="wrapper">

            <h2>Sign Up</h2>

            <p>Please fill this form to create an account.</p>

            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

                <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">

                    <label>Username</label>

                    <input type="text" name="username"class="form-control" value="<?php echo $username; ?>">

                    <span class="help-block"><?php echo $username_err; ?></span>

                </div>    

                <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">

                    <label>Password</label>

                    <input type="password" name="password" class="form-control" value="<?php echo $password; ?>">

                    <span class="help-block"><?php echo $password_err; ?></span>

                </div>

                <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">

                    <label>Confirm Password</label>

                    <input type="password" name="confirm_password" class="form-control" value="<?php echo $confirm_password; ?>">

                    <span class="help-block"><?php echo $confirm_password_err; ?></span>

                </div>

                <div class="form-group">

                    <input type="submit" class="btn btn-primary" value="Submit">

                    <input type="reset" class="btn btn-default" value="Reset">

                </div>

                <p>Already have an account? <a href="login.php" text-color="blue">Login here</a>.</p>

            </form>
		
        </div>    
	  </div>
	  </div>
	</section>
	      <!-- FOOTER -->
      <footer class="line">
        <div class="box">
          <div class="s-12 l-6">
            <p>© 2018 GamerEmporium, All Rights Reserved</p>
          </div>
          <div class="s-12 l-6">
            <p class="right">Design and coding by Responsee</p>
          </div>
        </div>    
      </footer>
  </body>	
		
    </body>

    </html>

