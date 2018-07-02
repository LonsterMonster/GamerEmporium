<?php
if($sdoubledotconnect == "../"){
require '../Auth/connection.php';
}else if($sdoubledotconnect == "../../"){
require '../../Auth/connection.php';
}else if($sdoubledotconnect == "../../../"){
require '../../../Auth/connection.php';

}else if($sdoubledotconnect == "../../../../"){
require '../../../../Auth/connection.php';

}else if($sdoubledotconnect == "../../../../../"){
require '../../../../../Auth/connection.php';

}else if($sdoubledotconnect == "../../../../../../"){
require '../../../../../../Auth/connection.php';

}else{
require 'Auth/connection.php';
}

//Settings
$_Config['Country'] = "";
$_CONFIG['Address'] = "";
$_CONFIG['State'] = "";
$_CONFIG['ZIP'] = "";
$_CONFIG['F_Name'] = "";
$_CONFIG['L_Name'] = "";
$_CONFIG['U_Name'] = "";
$_CONFIG['Phone'] = "";	
$_SESSION['username'] = $username;
$_CONFIG['U_Id'] = "";
$_CONFIG_U_ID = "";
$_CONFIG['SETTINGS'] = false;

$sql_table = "userinfo";
$sql = "SELECT * FROM $sql_table";
$results = $conn->query($sql);

if ($results->num_rows> 0) {
	// output data of each row
	while($row = $results->fetch_assoc()) {
		$_CONFIG['U_Id'] = $row['id'];
		$_CONFIG_U_ID = $row['id'];
	}
}


$sql_table = "userinfo";
$sql = "SELECT * FROM $sql_table WHERE 'id' = $_CONFIG_U_ID";
$results = $conn->query($sql);

if ($results->num_rows> 0) {
	// output data of each row
	while($row = $results->fetch_assoc()) {
		$_CONFIG['C_Name'] = $row['CustomName'];
		$_CONFIG['F_Name'] = $row['First Name'];
		$_CONFIG['L_Name'] = $row['Last Name'];
		$_CONFIG['ZIP'] = $row['Zipcode'];
		$_CONFIG['Add'] = $row['Address'];
		$_CONFIG['State'] = $row['State'];
		$_CONFIG['SETTINGS'] = true;
	}
}
else 
{
	$_CONFIG['SETTINGS'] = false;
}
if (isset($_POST['sub'])){
	$zip = $_POST["zip"];
	$State = $_POST["State"];
	$F_Name = $_POST["F_Name"];
	$L_Name = $_POST["L_Name"];
	$Add = $_POST["Add"];
	$sql_table = "userinfo";
	$sql = "SELECT * FROM $sql_table WHERE id = $_CONFIG_U_ID;";
	$results = $conn->query($sql);
	if ($results) {
		$sql = "INSERT INTO $sql_table (Zipcode, State, First Name, Last Name, Address) VALUES ('$zip', '$State', '$F_Name', '$L_Name', '$Add');";
		$results = $conn->query($sql);
		if ($results){
			$_CONFIG['SETTINGS'] = true;
		}
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
}

?>