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

$_Gallery_Config['Nintendo'] = "";
$_Gallery_Config['Sony'] = "";

$_Gallery_Config['Nintendo 64'] = "";

$_Gallery_Config['PSItems'] = "";

$_Gallery_Config['PS2Items'] = "";

$_Gallery_Config['item_Jakks'] = "";
$_Gallery_Config['Jakks'] = "";

$_Gallery_Config['Brand'] = "";
$_Gallery_Config['Console'] = "";
$_Gallery_Config['Image'] = "";
$_Gallery_Config['id'] = "";
$_Gallery_Config['Type'] = "";
?>