<?
include("../config.php");
	$today = date("Y-m-d H:i:s"); 
	$date = date("Y-m-d H:i:s", mktime(date('H'), date('i'), date('s'), date('m'), date('d') - 4, date('Y')));
		$sqll = "SELECT * FROM `vizov_kab` WHERE `data_v` > '$date' ORDER BY `vizov_kab`.`data_v` DESC LIMIT 1 OFFSET ".$_GET['num'];
		if ($results = $link->query($sqll)) 
		{
			while($obj1 = $results->fetch_object())
			{
				$nomer=$obj1->nomer;
				$bkv = $obj1->kab;
				$sqlls = "SELECT * FROM `kab_sprav` WHERE `bukva` = '$bkv'";
				if ($results1 = $link->query($sqlls)) 
				{
					while($obj11 = $results1->fetch_object())
					{
						$kab = $obj11->kab;
						echo "".$bkv.$nomer." -> ". $kab."";
					}
				}
			}
		}
?>