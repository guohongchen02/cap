<?php

include_once "includes/html_top.php";

session_start();

include_once "login_check.php";
 
include_once "includes/php_header.php";

$heading = "Web Config";

include_once "includes/functions.php";

include_once "includes/html_header.php";

echo "<h1>" . $heading . "</h1>";

include_once "includes/connection.php";

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


?>
<form id="form1" name="form1" method="post" action="config_action.php">
<table class='viewTable shade'>

<tr><td width="20%">Webname:</td><td width="80%"><input type="text" name="webname" id="webname" size ="35" required="required" value="<?php echo $rows['webname']; ?>"></td></tr>
<tr><td width="20%">Tel:</td><td width="80%"><input type="text" name="tel" id="tel" size ="35" required="required" value="<?php echo $rows['tel']; ?>"></td></tr>
<tr><td width="20%">Address:</td><td width="80%"><input type="text" name="address" id="address" size ="35" required="required" value="<?php echo $rows['address']; ?>"></td></tr>
<tr><td width="20%">Copyright:</td><td width="80%"><input type="text" name="copyright" id="copyright" size ="35" required="required" value="<?php echo $rows['copyright']; ?>"></td></tr>
<tr><td width="20%">Email:</td><td width="80%"><input type="text" name="email" id="email" size ="35" required="required" value="<?php echo $rows['email']; ?>"></td></tr>
<tr><td width="20%">Business Hours:</td><td width="80%"><input type="text" name="businesshours" id="businesshours" size ="35" required="required" value="<?php echo $rows['businesshours']; ?>"></td></tr>
<tr><td width="20%">Dimsum Service:</td><td width="80%"><input type="text" name="dimsumservice" id="dimsumservice" size ="35" required="required" value="<?php echo $rows['dimsumservice']; ?>"></td></tr>
<tr><td width="20%">Image path:</td><td width="80%"><input type="text" name="image_path" id="image_path" size ="35" required="required" value="<?php echo $rows['image_path']; ?>"></td></tr>
<tr><td width="20%">Style path:</td><td width="80%"><input type="text" name="style_path" id="style_path" size ="35" required="required" value="<?php echo $rows['style_path']; ?>"></td></tr>
<tr><td width="20%">Style page:</td><td width="80%"><input type="text" name="style_page" id="style_page" size ="35" required="required" value="<?php echo $rows['style_page']; ?>"></td></tr>
<tr><td width="20%">Programmer:</td><td width="80%"><input type="text" name="programmer" id="programmer" size ="35" required="required" value="<?php echo $rows['programmer']; ?>"></td></tr>
<tr><td>Index keywords:</td>
<td>
<textarea name="indexkeywords" id="indexkeywords" cols="36" rows="5" required="required"><?php echo $rows['indexkeywords']; ?></textarea></tr>
<tr><td>Menu keywords:</td><td><textarea name="menukeywords" id="menukeywords" cols="36" rows="5" required="required"><?php echo $rows['menukeywords']; ?></textarea></td></tr>
<tr><td>Dimsum keywords:</td><td><textarea name="dimsumkeywords" id="dimsumkeywords" cols="36" rows="5" required="required"><?php echo $rows['dimsumkeywords']; ?></textarea></td></tr>
<tr><td>catering keywords:</td>
<td>
<textarea name="cateringkeywords" id="cateringkeywords" cols="36" rows="5" required="required"><?php echo $rows['cateringkeywords']; ?></textarea></td></tr>
<tr><td>About keywords:</td><td><textarea name="aboutkeywords" id="aboutkeywords" cols="36" rows="5" required="required"><?php echo $rows['aboutkeywords']; ?></textarea></td></tr>
<tr><td>Contact keywords:</td><td><textarea name="contactkeywords" id="contactkeywords" cols="36" rows="5" required="required"><?php echo $rows['contactkeywords']; ?></textarea></td></tr>
<tr><td>Index description:</td><td><textarea name="indexdescription" id="indexdescription" cols="36" rows="5" required="required"><?php echo $rows['indexdescription']; ?></textarea></td></tr>
<tr><td>Menu description:</td><td><textarea name="menudescription" id="menudescription" cols="36" rows="5" required="required"><?php echo $rows['menudescription']; ?></textarea></td></tr>
<tr><td>Dimsum description:</td><td><textarea name="dimsumdescription" id="dimsumdescription" cols="36" rows="5" required="required"><?php echo $rows['dimsumdescription']; ?></textarea></td></tr>
<tr><td>Catering description:</td><td><textarea name="cateringdescription" id="cateringdescription" cols="36" rows="5" required="required"><?php echo $rows['cateringdescription']; ?></textarea></td></tr>
<tr><td>About description:</td><td><textarea name="aboutdescription" id="aboutdescription" cols="36" rows="5" required="required"><?php echo $rows['aboutdescription']; ?></textarea></td></tr>
<tr><td>Contact description:</td><td><textarea name="contactdescription" id="contactdescription" cols="36" rows="5" required="required"><?php echo $rows['contactdescription']; ?></textarea></td></tr>		
	
<tr><td></td><td class='col1'><input type='submit' name='Submit' value='Submit' /></td>

</tr>

</table>
</form>

<?php include_once "includes/footer.php"; ?>