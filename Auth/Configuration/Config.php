<?PHP
//Web Related 
$_CONFIG['WebName'] = "GamerEmporium"; //Name of website
$_CONFIG['EMail'] = "lonniegibson16@gmail.com"; // Your email address
$_CONFIG['Logo'] = "img/logo.png"; //link to the logo picture file in the site
$_CONFIG['Year'] = "2016-2018"; // Years you have been in business 
$_CONFIG['Construct'] = "img/default/construction.png";
$_CONFIG['SADMIN'] = "LonsterMonster" || "Lonster_Monster"; //Super admins usernames
$_CONFIG['Admin'] = $_CONFIG['SADMIN']; //admins usernames
$_CONFIG['Mederator'] = $_CONFIG['Admin'] || "LittleBoyBlue"; //Moderators usernames
$_CONFIG['Advertiser'] = $_CONFIG['Mederator'] || "LittleBoyBlue"; // Advertisers Names
$_CONFIG['Maint'] = "img/default/construction.png";
$_CONFIG['maintenance'] = false;
$_CONFIG['Placeholder'] = "";


//Social media Links
$_CONFIG['Facebook'] = "https://www.facebook.com/GamerEmp/"; // Facebook Group link
$_CONFIG['Twitter'] = "https://twitter.com/GamerEmpoium"; // Twitter link
$_CONFIG['InstaGram'] = ""; // Instagram link

//Database
$_CONFIG['User_DB'] = "gamer emporium"; //User database name
$_CONFIG['User_table'] = "users"; //User table name

//Web pages
$_CONFIG['Privacy'] = "Policy/Privacy Policy.php";
$_CONFIG['Disclaimer'] = "Policy/Disclaimer.php";
$_CONFIG['Cookie'] = "Policy/Cookie Consent.php";
$_CONFIG['Testemonial'] = "Company/Testimonials.php"; 
$_CONFIG['News'] = "Company/News.php";

$_CONFIG['Progress'] = "0";

if ($_CONFIG['WebName'] == ""){
$_CONFIG['WebName'] = false;
}
if ($_CONFIG['EMail'] == ""){
$_CONFIG['EMail'] = false;
}
if ($_CONFIG['Logo'] == ""){
$_CONFIG['Logo'] = false;
}
if ($_CONFIG['Year'] == ""){
$_CONFIG['Year'] = false;
}
if ($_CONFIG['Facebook'] == ""){
$_CONFIG['Facebook'] = false;
}
if ($_CONFIG['Twitter'] == ""){
$_CONFIG['Twitter'] = false;
}
if ($_CONFIG['InstaGram'] == ""){
$_CONFIG['InstaGram'] = false;
}




?>