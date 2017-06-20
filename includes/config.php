<?php
include_once "./admin/includes/connection.php";


$sql="SELECT *"
. " FROM config"
. " WHERE id = 1";



try {
     $result = $connection->query($sql);
} 
catch (PDOException $e) {
     die("Query failed! " . $e->getMessage());
}

$rows = $result->fetch(PDO::FETCH_ASSOC);

$webname = $rows['webname'];

$tel = $rows['tel'];
$address = $rows['address'];
$copyright = $rows['copyright'];
$email = $rows['email'];
$businesshours = $rows['businesshours'];
$dimsumservice = $rows['dimsumservice'];

$indexkeywords = $rows['indexkeywords'];
$menukeywords = $rows['menukeywords'];
$dimsumkeywords = $rows['dimsumkeywords'];
$cateringkeywords = $rows['cateringkeywords'];
$aboutkeywords = $rows['aboutkeywords'];
$contactkeywords = $rows['contactkeywords'];
$indexdescription = $rows['indexdescription'];
$menudescription = $rows['menudescription'];
$dimsumdescription = $rows['dimsumdescription'];
$cateringdescription = $rows['cateringdescription'];
$aboutdescription = $rows['aboutdescription'];
$contactdescription = $rows['contactdescription'];	

$image_path = $rows['image_path'];
$style_path = $rows['style_path'];
$style_page = $rows['style_page'];

$programmer = $rows['programmer'];
?>