

    <?php

    // Include config file

    require_once 'config.php';

     

    // Define variables and initialize with empty values

    $username = $password = "";

    $username_err = $password_err = "";

     

    // Processing form data when form is submitted

    if($_SERVER["REQUEST_METHOD"] == "POST"){

     

        // Check if username is empty

        if(empty(trim($_POST["username"]))){

            $username_err = 'Please enter username.';

        } else{

            $username = trim($_POST["username"]);

        }

        

        // Check if password is empty

        if(empty(trim($_POST['password']))){

            $password_err = 'Please enter your password.';

        } else{

            $password = trim($_POST['password']);

        }

        

        // Validate credentials

        if(empty($username_err) && empty($password_err)){

            // Prepare a select statement

            $sql = "SELECT username, password FROM users WHERE username = ?";

            

            if($stmt = mysqli_prepare($link, $sql)){

                // Bind variables to the prepared statement as parameters

                mysqli_stmt_bind_param($stmt, "s", $param_username);

                

                // Set parameters

                $param_username = $username;

                

                // Attempt to execute the prepared statement

                if(mysqli_stmt_execute($stmt)){

                    // Store result

                    mysqli_stmt_store_result($stmt);

                    

                    // Check if username exists, if yes then verify password

                    if(mysqli_stmt_num_rows($stmt) == 1){                    

                        // Bind result variables

                        mysqli_stmt_bind_result($stmt, $username, $hashed_password);

                        if(mysqli_stmt_fetch($stmt)){

                            if(password_verify($password, $hashed_password)){

                                /* Password is correct, so start a new session and

                                save the username to the session */

                                session_start();

                                $_SESSION['username'] = $username;      

                                header("location: index.php");

                            } else{

                                // Display an error message if password is not valid

                                $password_err = 'The password you entered was not valid.';

                            }

                        }

                    } else{

                        // Display an error message if username doesn't exist

                        $username_err = 'No account found with that username.';

                    }

                } else{

                    echo "Oops! Something went wrong. Please try again later.";

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

        <title>Login</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">

        <style type="text/css">

            body{ font: 14px sans-serif; }

            .wrapper{ width: 350px; padding: 20px; }

        </style>
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
            <img src="img/logo.png" width="189" height="69">
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
              <li><a href="Shop.html">Shop</a>
                <ul>
				  <li><a href="Shop/Video Games.php">Video Games</a>
				    <ul>
					  <li><a href="Shop/Consoles.php">Consoles</a>
						<ul>
						  <li><a href="Shop/Consoles/Sony.php">Sony</a>
							<ul>
							  <li><a href="Shop/Consoles/Sony/Ps1.php">Playstation 1</a>
								<ul>
								  <li><a href="Shop/Consoles/Sony/Ps1/Games.php">Games</a></li>
								  <li><a href="Shop/Consoles/Sony/Ps1/Systems.php">Systems</a></li>
								  <li><a href="Shop/Consoles/Sony/Ps1/Accessories.php">Accessories</a></li>
								</ul>
							  </li>
							  <li><a href="Shop/Consoles/Sony/Ps2.php">Playstation 2</a>
								<ul>
								  <li><a href="Shop/Consoles/Sony/Ps2/Games.php">Games</a></li>
								  <li><a href="Shop/Consoles/Sony/Ps2/Systems.php">Systems</a></li>
								  <li><a href="Shop/Consoles/Sony/Ps2/Accessories.php">Accessories</a></li>
								</ul>
							  </li>
							  <li><a href="Shop/Consoles/Sony/Ps3.php">Playstation 3</a>
								<ul>
								  <li><a href="Shop/Consoles/Sony/Ps3/Games.php">Games</a></li>
								  <li><a href="Shop/Consoles/Sony/Ps3/Systems.php">Systems</a></li>
								  <li><a href="Shop/Consoles/Sony/Ps3/Accessories.php">Accessories</a></li>
								</ul>
							  </li>
							  <li><a href="Shop/Consoles/Sony/PsP.php">Playstation Poratable</a>
								<ul>
								  <li><a href="Shop/Consoles/Sony/PsP/Games.php">Games</a></li>
								  <li><a href="Shop/Consoles/Sony/PsP/Systems.php">Systems</a></li>
								  <li><a href="Shop/Consoles/Sony/PsP/Accessories.php">Accessories</a></li>
								</ul>
							  </li>
							  <li><a href="Shop/Consoles/Sony/PS Move.php">Playstation Move</a>
								<ul>
								  <li><a href="Shop/Consoles/Sony/PS Move/Games.php">Games</a></li>
								  <li><a href="Shop/Consoles/Sony/PS Move/Systems.php">Systems</a></li>
								  <li><a href="Shop/Consoles/Sony/PS Move/Accessories.php">Accessories</a></li>
								</ul>
							  </li>
							</ul>
						  </li>
						  <li><a href="Shop/Consoles/Nintendo.php">Nintendo</a>
							<ul>
							  <li><a href="Shop/Consoles/Nintendo/Wii.php">Wii</a>
								<ul>
								  <li><a href="Shop/Consoles/Nintendo/Wii/Games.php">Games</a></li>
								  <li><a href="Shop/Consoles/Nintendo/Wii/Systems.php">Systems</a></li>
								  <li><a href="Shop/Consoles/Nintendo/Wii/Accessories.php">Accessories</a></li>
								</ul>
							  </li>
							  <li><a href="Shop/Consoles/Nintendo/GameCube.php">GameCube</a>
								<ul>
								  <li><a href="Shop/Consoles/Nintendo/GameCube/Games.php">Games</a></li>
								  <li><a href="Shop/Consoles/Nintendo/GameCube/Systems.php">Systems</a></li>
								  <li><a href="Shop/Consoles/Nintendo/GameCube/Accessories.php">Accessories</a></li>
								</ul>
							  </li>
							  <li><a href="Shop/Consoles/Nintendo/Nintendo 64.php">Nintendo 64</a>
								<ul>
								  <li><a href="Shop/Consoles/Nintendo/Nintendo 64/Games.php">Games</a></li>
								  <li><a href="Shop/Consoles/Nintendo/Nintendo 64/Games.php">Systems</a></li>
								  <li><a href="Shop/Consoles/Nintendo/Nintendo 64/Games.php">Accessories</a></li>
								</ul>
							  </li>
							</ul>
						  </li>
						  <li><a href="Shop/Consoles/ATARI.php">ATARI</a>
							<ul>
							  <li><a href="Shop/Consoles/ATARI/2600.php">2600</a>
								<ul>
								  <li><a href="Shop/Consoles/ATARI/2600/Games.php">Games</a></li>
								  <li><a href="Shop/Consoles/ATARI/2600/Systems.php">Systems</a></li>
								  <li><a href="Shop/Consoles/ATARI/2600/Accessories.php">Accessories</a></li>
								</ul>
							  </li>
							</ul>
						  </li>
						  <li><a href="Shop/Consoles/Microsoft.php">Microsoft</a>
							<ul>
							  <li><a href="Shop/Consoles/Microsoft/Xbox.php">Xbox</a>
								<ul>
								  <li><a href="Shop/Consoles/Microsoft/Xbox/Games.php">Games</a></li>
								  <li><a href="Shop/Consoles/Microsoft/Xbox/Systems.php">Systems</a></li>
								  <li><a href="Shop/Consoles/Microsoft/Xbox/Accessories.php">Accessories</a></li>
								</ul>
							  </li>
							  <li><a href="Shop/Consoles/Microsoft/Xbox 360.php">Xbox 360</a>
								<ul>
								  <li><a href="Shop/Consoles/Microsoft/Xbox 360/Games.php">Games</a></li>
								  <li><a href="Shop/Consoles/Microsoft/Xbox 360/Systems.php">Systems</a></li>
								  <li><a href="Shop/Consoles/Microsoft/Xbox 360/Accessories.php">Accessories</a></li>
								</ul>
							  </li>
							  <li><a href="Shop/Consoles/Microsoft/PC.php">PC</a>
								<ul>
								  <li><a href="Shop/Consoles/Microsoft/PC/Games.php">Games</a></li>
								  <li><a href="Shop/Consoles/Microsoft/PC/Systems.php">Systems</a></li>
								  <li><a href="Shop/Consoles/Microsoft/PC/Accessories.php">Accessories</a></li>
								</ul>
							  </li>
							</ul>
						  </li>
						  <li><a href="Shop/Consoles/SEGA.php">SEGA</a>
							<ul>
							  <li><a href="Shop/Consoles/SEGA/Genesis.php">Genesis</a>
								<ul>
								  <li><a href="Shop/Consoles/SEGA/Genesis/Games.php">Games</a></li>
								  <li><a href="Shop/Consoles/SEGA/Genesis/Systems.php">Systems</a></li>
								  <li><a href="Shop/Consoles/SEGA/Genesis/Accessories.php">Accessories</a></li>
								</ul>
							  </li>
							  <li><a href="Shop/Consoles/GameGear.php">GameGear</a>
								<ul>
								  <li><a href="Shop/Consoles/GameGear/Games.php">Games</a></li>
								  <li><a href="Shop/Consoles/GameGear/Systems.php">Systems</a></li>
								  <li><a href="Shop/Consoles/GameGear/Accessories.php">Accessories</a></li>
								</ul>
							  </li>
							  <li><a href="Shop/Consoles/DreamCast.php">DreamCast</a>
								<ul>
								  <li><a href="Shop/Consoles/DreamCast/Games.php">Games</a></li>
								  <li><a href="Shop/Consoles/DreamCast/Systems.php">Systems</a></li>
								  <li><a href="Shop/Consoles/DreamCast/Accessories.php">Accessories</a></li>
								</ul>
							  </li>
							</ul>
						  </li>
						</ul>					
					  </li>
					  <li><a href="Shop/Plug N Plays.php">Plug N Plays</a>
						<ul>
						  <li><a href="Shop/Plug N Plays/JAKKS.php">Jakks Pacific</a></li>
						</ul>
					  </li>
					</ul>
				  </li>
			      <li><a href="Toys.html">Toys</a>
			        <ul>
				      <li><a href="Toysanimals.html">Stuffed Animals</a>
					    <ul>
					      <li><a href="ToysBeanieBabies.html">Beanie Babies</a></li>
					      <li><a href="VinNintendo.html">Vintage Nintendo</a></li>
					    </ul>
				      </li>
				      <li><a href="ToysDartGuns.html">Dart Guns</a>
					    <ul>
						  <li><a href="ToysDartGuns.html">Nerf</a></li>
						  <li><a href="ToysDartGuns.html">Buzz Bee</a></li>
						  <li><a href="ToysDartGuns.html">Boom Co.</a></li>
						</ul>
					  </li>
				      <li><a href="ToysCollect.html">Collectibles</a></li>
				      <li><a href="ToysTCG.html">Trading Cards</a>
					    <ul>
					      <li><a href="CardsPokemon.html">Pokemon</a></li>
					      <li><a href="CardsYu-gi-oh.html">YuGiOh</a></li>
					      <li><a href="SportsCards.html">SportsCards</a>
						    <ul>
						      <li><a href="CardsBaseBall.html">BaseBall</a></li>
						      <li><a href="CardsFootBall.html">FootBall</a></li>
						      <li><a href="CardsBasketBall.html">BasketBall</a></li>
						      <li><a href="CardsHockey.html">Hockey</a></li>
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
			      <li><a href="Contact.html">Email</a></li>
			      <li><a href="Contact.html">Facebook</a></li>
				</ul>
			  </li>
		    </ul>
			<ul>
			  <li><a href="signup.php">Sign Up / Login</a></li>
			</ul>
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

            <h2>Login</h2>

            <p>Please fill in your credentials to login.</p>

            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

                <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">

                    <label>Username</label>

                    <input type="text" name="username"class="form-control" value="<?php echo $username; ?>">

                    <span class="help-block"><?php echo $username_err; ?></span>

                </div>    

                <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">

                    <label>Password</label>

                    <input type="password" name="password" class="form-control">

                    <span class="help-block"><?php echo $password_err; ?></span>

                </div>

                <div class="form-group">

                    <input type="submit" class="btn btn-primary" value="Login">

                </div>

                <p>Don't have an account? <a href="signup.php">Sign up now</a>.</p>

            </form>

        </div>    
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

    </html>

