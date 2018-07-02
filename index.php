<?php
require 'Auth/Configuration/Config.php';
require 'Auth/Configuration/Site_Config.php';
require 'Modules/Navbar/config.php';
require 'Auth/Connection.php';
$sdoubledotconnect = "";

  // Initialize the session
session_start();

?>
<!DOCTYPE html>
<html>
  <head>
  <meta http-equiv="content-type" content="text/html; charset=windows-1250">
  <meta name="viewport" content="width=device-width" />
  <title><?php echo $_CONFIG['WebName']?> | Home</title>
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
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form ...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  // ... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  // ... and run a function that displays the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form... :
  if (currentTab >= x.length) {
    //...the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false:
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class to the current step:
  x[n].className += " active";
}	
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
* {
  box-sizing: border-box;
}
 /* Container holding the image and the text */
.container {
    position: relative;
    text-align: center;
    color: white;
}

/* Bottom left text */
.bottom-left {
    position: absolute;
    bottom: 8px;
    left: 16px;
}

/* Top left text */
.top-left {
    position: absolute;
    top: 8px;
    left: 16px;
}

/* Top right text */
.top-right {
    position: absolute;
    top: 8px;
    right: 16px;
}

/* Bottom right text */
.bottom-right {
    position: absolute;
    bottom: 8px;
    right: 16px;
}

/* Centered text */
.centered {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
} 
body {
    background-color: #C0C0C0;
}
      /* Style the form element with a border around it */
form {
    border: 4px solid #f1f1f1;
}

/* Add some padding and a grey background color to containers */
.container {
    padding: 20px;
    background-color: #f1f1f1;
}

/* Style the input elements and the submit button */
input[type=text], input[type=submit] {
    width: 100%;
    padding: 12px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Add margins to the checkbox */
input[type=checkbox] {
    margin-top: 16px;
}

/* Style the submit button */
input[type=submit] {
    background-color: #4CAF50;
    color: white;
    border: none;
}

input[type=submit]:hover {
    opacity: 0.8;
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
            <?PHP 
				if ($_CONFIG['Logo'] != ""){
			?>
			<img src="img/<?PHP echo $_Module_CONFIG['Logo']?>" width="189" height="69">
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
              <li><a href="index.php";>Home</a></li>
				<?php
					if(isset($_SESSION['username']))
					{
				?>
			  <li><a>Shop</a>
			    <ul>
				  <li><a href="Shop/Video Games.php">Video Games</a>
				    <ul>
					  <li><a href="Shop/Video Games/Console.php">Console</a>
						<ul>
						  <li><a href="Shop/Video Games/Console/Playstation.php">Sony</a>
							<ul>
							  <li><a href="Shop/Video Games/Console/Playstation/Playstation 1.php">Playstation 1</a>
								<ul>
								  <li><a href="Shop/Video Games/Console/Playstation/Playstation 1/Games.php">Games</a></li>
								  <li><a href="Shop/Video Games/Console/Playstation/Playstation 1/Systems.php">Systems</a></li>
								  <li><a href="Shop/Video Games/Console/Playstation/Playstation 1/Accessories.php">Accessories</a></li>
								</ul>
							  </li>
							  <li><a href="Shop/Video Games/Console/Playstation/Playstation 2.php">Playstation 2</a>
								<ul>
								  <li><a href="Shop/Video Games/Console/Playstation/Playstation 2/Games.php">Games</a></li>
								  <li><a href="Shop/Video Games/Console/Playstation/Playstation 2/Systems.php">Systems</a></li>
								  <li><a href="Shop/Video Games/Console/Playstation/Playstation 2/Accessories.php">Accessories</a></li>
								</ul>
							  </li>
							  <li><a href="Shop/Video Games/Console/Playstation/Playstation 3.php">Playstation 3</a>
								<ul>
								  <li><a href="Shop/Video Games/Console/Playstation/Playstation 3/Games.php">Games</a></li>
								  <li><a href="Shop/Video Games/Console/Playstation/Playstation 3/Systems.php">Systems</a></li>
								  <li><a href="Shop/Video Games/Console/Playstation/Playstation 3/Accessories.php">Accessories</a></li>
								</ul>
							  </li>
							  <li><a href="Shop/Video Games/Console/Playstation/Playstation Portable.php">Playstation Poratable</a>
								<ul>
								  <li><a href="Shop/Video Games/Console/Playstation/Playstation Portable/Games.php">Games</a></li>
								  <li><a href="Shop/Video Games/Console/Playstation/Playstation Portable/Systems.php">Systems</a></li>
								  <li><a href="Shop/Video Games/Console/Playstation/Playstation Portable/Accessories.php">Accessories</a></li>
								</ul>
							  </li>
							  <li><a href="Shop/Video Games/Console/Playstation/Playstation Move.php">Playstation Move</a>
								<ul>
								  <li><a href="Shop/Video Games/Console/Playstation/Playstation Move/Games.php">Games</a></li>
								  <li><a href="Shop/Video Games/Console/Playstation/Playstation Move/Systems.php">Systems</a></li>
								  <li><a href="Shop/Video Games/Console/Playstation/Playstation Move/Accessories.php">Accessories</a></li>
								</ul>
							  </li>
							</ul>
						  </li>
						  <li><a href="Shop/Video Games/Console/Nintendo.php">Nintendo</a>
							<ul>
							  <li><a href="Shop/Video Games/Console/Nintendo/Wii.php">Wii</a>
								<ul>
								  <li><a href="Shop/Video Games/Console/Nintendo/Wii/Games.php">Games</a></li>
								  <li><a href="Shop/Video Games/Console/Nintendo/Wii/Systems.php">Systems</a></li>
								  <li><a href="Shop/Video Games/Console/Nintendo/Wii/Accessories.php">Accessories</a></li>
								</ul>
							  </li>
							  <li><a href="Shop/Video Games/Console/Nintendo/GameCube.php">GameCube</a>
								<ul>
								  <li><a href="Shop/Video Games/Console/Nintendo/GameCube/Games.php">Games</a></li>
								  <li><a href="Shop/Video Games/Console/Nintendo/GameCube/Systems.php">Systems</a></li>
								  <li><a href="Shop/Video Games/Console/Nintendo/GameCube/Accessories.php">Accessories</a></li>
								</ul>
							  </li>
							  <li><a href="Shop/Video Games/Console/Nintendo/Nintendo 64.php">Nintendo 64</a>
								<ul>
								  <li><a href="Shop/Video Games/Console/Nintendo/Nintendo 64/Games.php">Games</a></li>
								  <li><a href="Shop/Video Games/Console/Nintendo/Nintendo 64/Games.php">Systems</a></li>
								  <li><a href="Shop/Video Games/Console/Nintendo/Nintendo 64/Games.php">Accessories</a></li>
								</ul>
							  </li>
							</ul>
						  </li>
						  <li><a href="Shop/Video Games/Console/ATARI.php">ATARI</a>
							<ul>
							  <li><a href="Shop/Video Games/Console/ATARI/2600.php">2600</a>
								<ul>
								  <li><a href="Shop/Video Games/Console/ATARI/2600/Games.php">Games</a></li>
								  <li><a href="Shop/Video Games/Console/ATARI/2600/Systems.php">Systems</a></li>
								  <li><a href="Shop/Video Games/Console/ATARI/2600/Accessories.php">Accessories</a></li>
								</ul>
							  </li>
							</ul>
						  </li>
						  <li><a href="Shop/Video Games/Console/Microsoft.php">Microsoft</a>
							<ul>
							  <li><a href="Shop/Video Games/Console/Microsoft/Xbox.php">Xbox</a>
								<ul>
								  <li><a href="Shop/Video Games/Console/Microsoft/Xbox/Games.php">Games</a></li>
								  <li><a href="Shop/Video Games/Console/Microsoft/Xbox/Systems.php">Systems</a></li>
								  <li><a href="Shop/Video Games/Console/Microsoft/Xbox/Accessories.php">Accessories</a></li>
								</ul>
							  </li>
							  <li><a href="Shop/Video Games/Console/Microsoft/Xbox 360.php">Xbox 360</a>
								<ul>
								  <li><a href="Shop/Video Games/Console/Microsoft/Xbox 360/Games.php">Games</a></li>
								  <li><a href="Shop/Video Games/Console/Microsoft/Xbox 360/Systems.php">Systems</a></li>
								  <li><a href="Shop/Video Games/Console/Microsoft/Xbox 360/Accessories.php">Accessories</a></li>
								</ul>
							  </li>
							  <li><a href="Shop/Video Games/Console/Microsoft/PC.php">PC</a>
								<ul>
								  <li><a href="Shop/Video Games/Console/Microsoft/PC/Games.php">Games</a></li>
								  <li><a href="Shop/Video Games/Console/Microsoft/PC/Systems.php">Systems</a></li>
								  <li><a href="Shop/Video Games/Console/Microsoft/PC/Accessories.php">Accessories</a></li>
								</ul>
							  </li>
							</ul>
						  </li>
						  <li><a href="Shop/Video Games/Console/SEGA.php">SEGA</a>
							<ul>
							  <li><a href="Shop/Video Games/Console/SEGA/Genesis.php">Genesis</a>
								<ul>
								  <li><a href="Shop/Video Games/Console/SEGA/Genesis/Games.php">Games</a></li>
								  <li><a href="Shop/Video Games/Console/SEGA/Genesis/Systems.php">Systems</a></li>
								  <li><a href="Shop/Video Games/Console/SEGA/Genesis/Accessories.php">Accessories</a></li>
								</ul>
							  </li>
							  <li><a href="Shop/Video Games/Console/SEGA/GameGear.php">GameGear</a>
								<ul>
								  <li><a href="Shop/Video Games/Console/SEGA/GameGear/Games.php">Games</a></li>
								  <li><a href="Shop/Video Games/Console/SEGA/GameGear/Systems.php">Systems</a></li>
								  <li><a href="Shop/Video Games/Console/SEGA/GameGear/Accessories.php">Accessories</a></li>
								</ul>
							  </li>
							  <li><a href="Shop/Video Games/Console/SEGA/DreamCast.php">DreamCast</a>
								<ul>
								  <li><a href="Shop/Video Games/Console/SEGA/DreamCast/Games.php">Games</a></li>
								  <li><a href="Shop/Video Games/Console/SEGA/DreamCast/Systems.php">Systems</a></li>
								  <li><a href="Shop/Video Games/Console/SEGA/DreamCast/Accessories.php">Accessories</a></li>
								</ul>
							  </li>
							</ul>
						  </li>
						</ul>					
					  </li>
					  <li><a href="Shop/Video Games/Plug N Plays.php">Plug N Plays</a>
						<ul>
						  <li><a href="Shop/Video Games/Plug N Plays/JAKKS.php">Jakks Pacific</a></li>
						</ul>
					  </li>
					</ul>
				  </li>
			      <li><a href="Shop/Toys.php">Toys</a>
			        <ul>
				      <li><a href="Shop/Toys/Stuffed Animals.php">Stuffed Animals</a>
					    <ul>
					      <li><a href="Shop/Toys/Stuffed Animals/Beanie Babies.php">Beanie Babies</a>
					        <ul>
						      <li><a href="Shop/Toys/Stuffed Animals/Beanie Babies/TY.php">TY</a></li>
						      <li><a href="Shop/Toys/Stuffed Animals/Beanie Babies/Nintendo.php">Nintendo</a></li>
                            </ul>
						  </li>
					    </ul>
				      </li>
				      <li><a href="Shop/Toys/Dart Guns.php">Dart Guns</a>
					    <ul>
						  <li><a href="Shop/Toys/Dart Guns/Nerf.php">Nerf</a></li>
						  <li><a href="Shop/Toys/Dart Guns/Buzz Bee.php">Buzz Bee</a></li>
						  <li><a href="Shop/Toys/Dart Guns/Boom Co.php">Boom Co.</a></li>
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
				<?php
					}
					else 
					{
						
					}
				?>
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
			<?php
					if(isset($_SESSION['username']))
					{
				?>
				  <li><a>Profile</a>
				    <ul>
						<?PHP
							if ($_SESSION['username'] == $_CONFIG['SADMIN']){
						?>
				      <li><a href="Profile/Profile Settings.php">Profile Settings</a>
				        <ul>
					      <li><a href="Profile/Shop Settings.php">Shop Settings</a></li>
					    </ul>
					  </li>
						<?PHP
							}
							else 
							{
								?>
							<li><a href="Profile/Profile Settings.php">Profile Settings</a></li>
							<?PHP
							}
						?>
				      <li><a href="logout.php">Logout</a></li>
					</ul>
				  </li>
				  <?php
					}		
					else if(!isset($_SESSION['username']))
					{
				  ?>
				  <li><a href="signup.php">Sign Up / Login</a></li>
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
	<section>
      <!-- CAROUSEL -->  
      <div class="line">
        <div id="owl-demo" class="owl-carousel owl-theme  margin-bottom">
          <div class="item"><img src="img/default/940x380.jpg" alt=""></div>
            <div class="item">
              <div class="container" >
               <form action="action_page.php">
                 <div class="container">
                   <h2>Subscribe to our Newsletter</h2>
                 </div>

                 <div class="container" style="background-color:white">
                   <input type="text" placeholder="Name" name="name" required>
                   <input type="text" placeholder="Email address" name="mail" required>
                   <label>
                     <input type="checkbox" checked="checked" name="subscribe"><a style="color:black"> Daily Newsletter</a> 
                   </label>
                 </div>

                  <div class="container">
                    <input type="submit" value="Subscribe">
                  </div>
                </form>
              </div>
            </div>
            <div class="item"><img src="img/teal-background.jpg" alt="" style="width:100%;"> <div class="centered"><h3>Search our Website</h3><br><input type='text' id="search"  name='search' value='' class='auto' placeholder="Search..">

			  <!-- Suggestions will be displayed in below div. -->

			  <div id="display" style="text-align: left;"></div>
              </div>
            </div>
          </div> 
        </div>

      <!-- HOME PAGE BLOCK -->      
      <div class="line">
        <div class="margin">
          <div class="s-12 l-4 margin-bottom">
            <div class="box">
              <h2>About</h2>
              <p><?php echo $_Site_Config['About']?></p>
            </div>
          </div>
          <div class="s-12 l-4 margin-bottom">
            <div class="box">
              <h2>Company</h2>
              <p><?php echo $_Site_Config['Company']?></p>
            </div>
          </div>
          <div class="s-12 l-4 margin-bottom">
            <div class="box">
              <h2>Services</h2>
              <p><?php echo $_Site_Config['Services']?></p>
            </div>
          </div>
        </div> 
	  </div>
      <!-- ASIDE NAV AND CONTENT -->
      <div class="line">
        <div class="box margin-bottom">
          <div class="margin">
          <!-- CONTENT -->
            <article class="s-12 l-8">
              <h1>Content</h1>
              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet 
              dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit 
              lobortis nisl ut aliquip ex ea commodo consequat.</p> 
              <h3>Sub Header</h3>
              <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore 
              eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril 
              delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue 
              nihil imperdiet doming id quod mazim placerat facer possim assum. </p>
            </article>
            <!-- ASIDE NAV -->
            <div class="s-12 l-4">
              <h3>Navigation</h3>
              <div class="aside-nav">
			    <ul>
			      <li><a href="index.php">Home</a></li>
					<?php
						if(isset($_SESSION['username']))
						{
					?>
			      <li><a>Shop</a>
			        <ul>
				      <li><a>Video Games</a>
				        <ul>
						  <li><a href="Shop/Video Games/Console.php">Console</a></li>
						  <li><a href="Shop/Video Games/Plug N Plays.php">Plug N Plays</a></li>
					    </ul>
					  </li>
					  <li><a>Toys</a>
						<ul>
						  <li><a href="Shop/Toys/Stuffed Animals.php">Stuffed Animals</a></li>
						  <li><a href="Shop/Toys/Dart Guns.php">Dart Guns</a>
						  <li><a href="Shop/Toys/Collectibles.php">Collectibles</a></li>
						  <li><a href="Shop/Toys/Trading Cards.php">Trading Cards</a></li>
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
				  <li><a>Company</a>
					<ul>
					  <li><a href="About.html">About</a></li>
					  <li><a href="Location.html">Location</a></li>
					</ul>
				  </li>
				  <li><a>Contact</a>
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
				  <li><a>Profile</a>
				    <ul>
				      <li><a href="Profile/Profile Settings.php">Profile Settings</a></li>
				      <li><a href="logout.php">Logout</a></li>
					</ul>
				  </li>
				  <?php
					}		
					else if(!isset($_SESSION['username']))
					{
				  ?>
				  <li><a href="signup.php">Sign Up / Login</a></li>
				  <?php
					  }
				  ?>
			    </ul>
              </div>
            </div>
          </div>
        </div>  
      </div>  	  
      <!-- GALLERY CAROUSEL -->
      <div class="line"> 
        <h2>Gallery</h2>
		   <div id="owl-demo2" class="owl-carousel margin-bottom">
		<?php
		$sql_table = "Gallery_db";
		$sql = "SELECT * FROM $sql_table WHERE Seller=?";
		 
		/* Prepare statement */
		$stmt = $conn->prepare($sql);
		if($stmt === false) {
		  trigger_error('Wrong SQL: ' . $sql . ' Error: ' . $conn->errno . ' ' . $conn->error, E_USER_ERROR);
		}
	
		$id = "GamerEmorium";
		 
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
					$_Gallery_Config['Type'] = $row['Type'];
					if ($_Gallery_Config['Type'] === "Game"){
					?>
				<div class="item"><a href="Shop/Video Games/Console/<?php echo $_Gallery_Config['Brand']?>/<?php echo $_Gallery_Config['Console']?>/Games/<?php echo $_Gallery_Config['name']?>.php"><img class="lazyOwl" data-src="img/Gallery/<?php echo $_Gallery_Config['Image']?>" alt="<?php echo $_Gallery_Config['name']?>"></a></div>
				<?php
					}
					if ($_Gallery_Config['Type'] === "Accessory"){
					?>
				<div class="item"><a href="Shop/Video Games/Console/<?php echo $_Gallery_Config['Brand']?>/<?php echo $_Gallery_Config['Console']?>/Accessories/<?php echo $_Gallery_Config['name']?>.php"><img class="lazyOwl" data-src="img/Gallery/<?php echo $_Gallery_Config['Image']?>" alt="<?php echo $_Gallery_Config['name']?>"></a></div>
				<?PHP
					}
					if ($_Gallery_Config['Type'] === "System"){
						?>
				<div class="item"><a href="Shop/Video Games/Console/<?php echo $_Gallery_Config['Brand']?>/<?php echo $_Gallery_Config['Console']?>/Systems/<?php echo $_Gallery_Config['name']?>.php"><img class="lazyOwl" data-src="img/Gallery/<?php echo $_Gallery_Config['Image']?>" alt="<?php echo $_Gallery_Config['name']?>"></a></div>
					<?PHP
					}
				}
			}
			else 
			{
			?>
			<div id="owl-demo2" class="owl-carousel margin-bottom">
          <div class="item"><a href="index.php"><img class="lazyOwl" data-src="img/default/940x380.jpg" alt=""></a></div>
		  <div class="item"><a href="index.php"><img class="lazyOwl" data-src="img/default/940x380-2.jpg" alt=""></a></div>
		  <div class="item"><a href="index.php"><img class="lazyOwl" data-src="img/default/940x380-3.jpg" alt=""></a></div>
		  <div class="item"><a href="index.php"><img class="lazyOwl" data-src="img/default/940x380.jpg" alt=""></a></div>
		  <div class="item"><a href="index.php"><img class="lazyOwl" data-src="img/default/940x380-2.jpg" alt=""></a></div>
		  <div class="item"><a href="index.php"><img class="lazyOwl" data-src="img/default/940x380-3.jpg" alt=""></a></div>
		  <div class="item"><a href="index.php"><img class="lazyOwl" data-src="img/default/940x380.jpg" alt=""></a></div>
		  <div class="item"><a href="index.php"><img class="lazyOwl" data-src="img/default/940x380-2.jpg" alt=""></a></div>
		  <div class="item"><a href="index.php"><img class="lazyOwl" data-src="img/default/940x380-3.jpg" alt=""></a></div>
		  <div class="item"><a href="index.php"><img class="lazyOwl" data-src="img/default/940x380.jpg" alt=""></a></div>
		  <div class="item"><a href="index.php"><img class="lazyOwl" data-src="img/default/940x380-2.jpg" alt=""></a></div>
		  <div class="item"><a href="index.php"><img class="lazyOwl" data-src="img/default/940x380-3.jpg" alt=""></a></div>
		  <div class="item"><a href="index.php"><img class="lazyOwl" data-src="img/default/940x380.jpg" alt=""></a></div>
		  <div class="item"><a href="index.php"><img class="lazyOwl" data-src="img/default/940x380-2.jpg" alt=""></a></div>
		  <div class="item"><a href="index.php"><img class="lazyOwl" data-src="img/default/940x380-3.jpg" alt=""></a></div>
        </div>
			
			<?php	
			}
			?>
        </div>			
      </div>
    </section>     
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
            <p class="right">Design and coding by Lonster_Monster</p><br><br>
            <p class="right"><a href="https://www.facebook.com/GamerEmp/">Facebook</a></p>
            <P class="right"></P>
          </div>
        </div>    
      </footer>
	    <script src="js/doubletap.js"> </script>
  
  <script>
  $( '#nav li:has(ul)' ).doubleTapToGo();
  </script>
  </body>
</html>