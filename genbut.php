<?
if($_GET['sear'] != "")
{
	$sql = "SELECT * FROM `kab_sprav` WHERE `sear` = '".$_GET['sear']."'";
	if ($result = $link->query($sql))
	{
		while($obj = $result->fetch_object())
		{
			$cdsknc = false;
			$kab=$obj->kab;
			$c=$obj->activ;
			$name_button=$obj->name_button;
			$bukva=$obj->bukva;
			//bukva
			$sql1 = "SELECT count(kab) as 'cokab',kab FROM `vizov_kab` where kab = '$bukva' GROUP by kab";
			if ($result1 = $link->query($sql1))
			{
				while($obj2 = $result1->fetch_object())
				{
					$ddd = $obj2->cokab;
					if($c == 1)
					{
						echo '<div style="width: 500px;"><a type="submit" style="height: auto;overflow-x: hidden;" href="zap/?id='.$bukva.'" value="" class="button">'.$name_button.'. В очереди:'.$ddd.' человек(а)</a></div><br>';
					}
					else
					{
						echo '<div style="width: 500px;"><a type="submit" style="height: auto;overflow-x: hidden;" href="zap/?id='.$bukva.'" value="" class="disabled">'.$name_button.'</a></div><br>';
					}
					$cdsknc = true;
				}
			}
			
			if($cdsknc == false)
			{
				if($c == 1)
				{
					echo '<div style="width: 500px;"><a type="submit" style="height: auto;overflow-x: hidden;" href="zap/?id='.$bukva.'" value="" class="button">'.$name_button.'. В очереди: 0 человек</a></div><br>';
				}
				else
				{
					echo '<div style="width: 500px;"><a type="submit" style="height: auto;overflow-x: hidden;" href="zap/?id='.$bukva.'" value="" class="disabled">'.$name_button.'</a></div><br>';
				}
			}
			

		}
	}
	echo '<a type="submit" style="height: auto;overflow-x: hidden;" href="/" value="" class="button">Вернуться в меню.</a></div><br>';
}
else
{
	$sql = "SELECT * FROM `bt_menu`";
	if ($result = $link->query($sql))
	{
		while($obj = $result->fetch_object())
		{
			$name_button=$obj->bt_name;
			$bukva=$obj->id;
			//bukva
			echo '<div style="width: 500px;"><a type="submit" style="height: auto;overflow-x: hidden;" href="?sear='.$bukva.'" value="" class="button">'.$name_button.'</a></div><br>';

		}
	}
}

?>