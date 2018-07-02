

    <?php

    // Initialize the session

    session_start();

     

    // If session variable is not set it will redirect to login page

    if(!isset($_SESSION['username']) || empty($_SESSION['username'])){

      header("location: login.php");

      exit;

    }

    ?>

     

    <!DOCTYPE html>

    <html lang="en">

    <head>

        <meta charset="UTF-8">

        <title>Welcome</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">

        <style type="text/css">

            body{ font: 14px sans-serif; text-align: center; }

        </style>

    </head>

    <body>
	<!DOCTYPE html>
<html>
  <head>
  <meta http-equiv="content-type" content="text/html; charset=windows-1250">
  <meta name="viewport" content="width=device-width" />
  <title>Gamer Emporium | Home</title>
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
              <li><a href="index.html">Home</a></li>
              <li><a href="Shop.html">Shop</a>
                <ul>
				  <li><a href="Consoles.html">Consoles</a>
				    <ul>
					  <li><a href="SonyConsoles.html">Sony</a>
					    <ul>
					      <li><a href="PsOneConsole.html">Playstation 1</a>
							<ul>
							  <li><a href="PS1Games.html">Games</a></li>
							  <li><a href="PS1Games.html">Systems</a></li>
							  <li><a href="PS1Games.html">Accessories</a></li>
							</ul>
						  </li>
						  <li><a href="PsTwoConsole.html">Playstation 2</a>
						    <ul>
							  <li><a href="PS1Games.html">Games</a></li>
							  <li><a href="PS1Games.html">Systems</a></li>
							  <li><a href="PS1Games.html">Accessories</a></li>
							</ul>
						  </li>
						  <li><a href="PsThreeConsole.html">Playstation 3</a>
						    <ul>
							  <li><a href="PS1Games.html">Games</a></li>
							  <li><a href="PS1Games.html">Systems</a></li>
							  <li><a href="PS1Games.html">Accessories</a></li>
							</ul>
						  </li>
						  <li><a href="PsPConsole.html">Playstation Poratable</a>
						    <ul>
							  <li><a href="PS1Games.html">Games</a></li>
							  <li><a href="PS1Games.html">Systems</a></li>
							  <li><a href="PS1Games.html">Accessories</a></li>
							</ul>
						  </li>
						  <li><a href="PsMoveConsole.html">Playstation Move</a>
						    <ul>
							  <li><a href="PS1Games.html">Games</a></li>
							  <li><a href="PS1Games.html">Systems</a></li>
							  <li><a href="PS1Games.html">Accessories</a></li>
						    </ul>
						  </li>
						</ul>
					  </li>
					  <li><a href="NinConsoles.html">Nintendo</a>
					    <ul>
						  <li><a href="WiiConsole.html">Wii</a>
						    <ul>
							  <li><a href="PS1Games.html">Games</a></li>
							  <li><a href="PS1Games.html">Systems</a></li>
							  <li><a href="PS1Games.html">Accessories</a></li>
							</ul>
						  </li>
						  <li><a href="GameCubeConsole.html">GameCube</a>
						  <ul>
							  <li><a href="PS1Games.html">Games</a></li>
							  <li><a href="PS1Games.html">Systems</a></li>
							  <li><a href="PS1Games.html">Accessories</a></li>
							</ul>
						  </li>
						  <li><a href="Nintendo64Console.html">Nintendo 64</a>
						    <ul>
							  <li><a href="PS1Games.html">Games</a></li>
							  <li><a href="PS1Games.html">Systems</a></li>
							  <li><a href="PS1Games.html">Accessories</a></li>
							</ul>
						  </li>
						</ul>
					  </li>
				      <li><a href="ATARIConsoles.html">ATARI</a>
					    <ul>
					      <li><a href="2600Console.html">2600</a>
						    <ul>
							  <li><a href="PS1Games.html">Games</a></li>
							  <li><a href="PS1Games.html">Systems</a></li>
							  <li><a href="PS1Games.html">Accessories</a></li>
							</ul>
						  </li>
						</ul>
					  </li>
					  <li><a href="MicroConsoles.html">Microsoft</a>
					    <ul>
					      <li><a href="XboxConsole.html">Xbox</a>
						    <ul>
							  <li><a href="PS1Games.html">Games</a></li>
							  <li><a href="PS1Games.html">Systems</a></li>
							  <li><a href="PS1Games.html">Accessories</a></li>
							</ul>
						  </li>
					      <li><a href="Xbox360Console.html">Xbox 360</a>
						    <ul>
							  <li><a href="PS1Games.html">Games</a></li>
							  <li><a href="PS1Games.html">Systems</a></li>
							  <li><a href="PS1Games.html">Accessories</a></li>
							</ul>
						  </li>
						  <li><a href="PCConsole.html">PC</a>
						    <ul>
							  <li><a href="PS1Games.html">Games</a></li>
							  <li><a href="PS1Games.html">Systems</a></li>
							  <li><a href="PS1Games.html">Accessories</a></li>
							</ul>
						  </li>
						</ul>
					  </li>
					  <li><a href="SEGAConsoles.html">SEGA</a>
					    <ul>
						  <li><a href="GenesisConsole.html">Genesis</a>
						    <ul>
							  <li><a href="PS1Games.html">Games</a></li>
							  <li><a href="PS1Games.html">Systems</a></li>
							  <li><a href="PS1Games.html">Accessories</a></li>
							</ul>
						  </li>
						  <li><a href="GameGearConsole.html">GameGear</a>
						    <ul>
							  <li><a href="PS1Games.html">Games</a></li>
							  <li><a href="PS1Games.html">Systems</a></li>
							  <li><a href="PS1Games.html">Accessories</a></li>
							</ul>
						  </li>
						  <li><a href="DreamCastConsole.html">DreamCast</a>
						    <ul>
							  <li><a href="PS1Games.html">Games</a></li>
							  <li><a href="PS1Games.html">Systems</a></li>
							  <li><a href="PS1Games.html">Accessories</a></li>
							</ul>
						  </li>
						</ul>
					  </li>
					</ul>					
			      </li>
			      <li><a href="PlugNPlays.html">Plug N Plays</a>
			        <ul>
				      <li><a href="PlugJAKKS.html">Jakks Pacific</a></li>
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

        <div>

            <h1>Hi, <b><?php echo htmlspecialchars($_SESSION['username']); ?></b>. Welcome to our site.</h1>

        </div>

        <p><a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a></p>

    </body>

    </html>

