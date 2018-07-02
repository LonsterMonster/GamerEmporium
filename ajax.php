<?php

//Including Database configuration file.

include "Auth/connection.php";
include 'Auth/Configuration/Shop_Config.php';

//Getting value of "search" variable from "script.js".

if (isset($_POST['search'])) {

//Search box value assigning to $Name variable.

   $Name = $_POST['search'];

//Search query.

   $Query = "SELECT * FROM games_selling_db WHERE Games LIKE '%$Name%' LIMIT 5";

//Query execution

   $ExecQuery = MySQLi_query($conn, $Query);

//Creating unordered list to display result.

   echo '

<ul>

   ';

   //Fetching result from database.

   while ($Result = MySQLi_fetch_array($ExecQuery)) {

       ?>

   <!-- Creating unordered list items.

        Calling javascript function named as "fill" found in "script.js" file.

        By passing fetched result as parameter. -->

   <li onclick='fill("<?php echo $Result['Games']; ?>")'>
	<?php

				$_CONFIG['Games'] = $Result['Games'];
				$_CONFIG['Brand'] = $Result['Brand'];
				$_CONFIG['Console'] = $Result['Console'];
				$_CONFIG['Amount'] = $Result['Amount'];
				$_CONFIG['Console_Type'] = $Result['Console_Type'];
				$_CONFIG['Shop_Type'] = $Result['Shop_Type'];
				$_CONFIG['Item_Type'] = $Result['Item_Type'];
				if($_CONFIG['Item_Type'] === "Game"){
					$_CONFIG['Item_Type'] = "Games";
				}
				else
				{
					
				}
				if($_CONFIG['Console_Type'] === "Console"){
					$_CONFIG['Console_Type'] = "Consoles";
				} 
				else
				{
					
				}
					if($_CONFIG['Games'] == $Result['Games']){?>
					
   <a href="Shop/<?php echo $_CONFIG['Shop_Type']?>/<?php echo $_CONFIG['Console_Type']?>/<?php echo $_CONFIG['Brand']?>/<?php echo $_CONFIG['Console']?>/<?php echo $_CONFIG['Item_Type']?>/<?php echo $_CONFIG['Games']?>.php ">

   <!-- Assigning searched result in "Search box" in "search.php" file. -->

       <?php echo $Result['Games']; ?>
	</a>
	<?php
					} 

					?>
   </li>

   <!-- Below php code is just for closing parenthesis. Don't be confused. -->

   <?php

}}


?>

</ul>