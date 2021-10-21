<?
include("../config.php");
$id = "";
$bkv = $_GET['bk'];
$sqll = "SELECT * FROM `kab_sprav` where bukva='$bkv' ORDER BY `id` ASC";
if($bkv != '')
{
	if ($results = $link->query($sqll)) 
	{
		while($obj1 = $results->fetch_object())
		{
			$id=$obj1->id;
			$activ=$obj1->activ;
			if($activ == "0")
			{
				$query = "UPDATE `kab_sprav` SET `activ` = '1' WHERE `kab_sprav`.`id` = ".$id;
				$link->query($query);
				echo "true|unlock";
			}
			else
			{
				$query = "UPDATE `kab_sprav` SET `activ` = '0' WHERE `kab_sprav`.`id` = ".$id;
				$link->query($query);
				echo "true|lock";
			}
			
			break;
		}
	}
}
else
{
	echo "error|no parameters passed";
}
?>