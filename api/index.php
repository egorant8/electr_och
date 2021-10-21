<?
include("../config.php");
$id = "";
$bkv = $_GET['bk'];
if($bkv != '')
{
	$sqll = "SELECT * FROM `vizov_kab` where kab='$bkv' ORDER BY `id` ASC";
	if ($results = $link->query($sqll)) 
	{
		while($obj1 = $results->fetch_object())
		{
			$id=$obj1->id;
			$query = "DELETE FROM `vizov_kab` WHERE `vizov_kab`.`id` = ".$id;
			$link->query($query);
			echo "true|";
				$id = "";
				if($bkv != '')
				{
					$sqll = "SELECT * FROM `vizov_kab` where kab='$bkv' ORDER BY `vizov_kab`.`data_v` ASC";
					if ($results = $link->query($sqll)) 
					{
						while($obj1 = $results->fetch_object())
						{
							$id=$obj1->id;
							$today = date("Y-m-d H:i:s"); 
							$query = "UPDATE `vizov_kab` SET `data_v` = '$today' WHERE `vizov_kab`.`id` = ".$id;
							$link->query($query);
							echo "true|0";
							break;
						}
					}
					
				}
				else
				{
					echo "error|no parameters passed";
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