<?php
	$content = 'E112'; //в этой переменной - информация для печати.
	include("../config.php");
	$bukva = $_GET['id'];
	$kab = "";
	$nomer = "";
	$sql = "SELECT * FROM `vizov_kab` WHERE `kab` = '$bukva' ORDER BY `vizov_kab`.`id` DESC";
	if ($result = $link->query($sql)) {
        while($obj = $result->fetch_object()){
           $nomer=$obj->nomer;
		   break;
        }
    }
	if($nomer == "")
	{
		$nomer = "1";
	}
	else
	{
		$nomer = $nomer+1;
	}
	$today = date("Y-m-d H:i:s"); 
	$date = $today;
	$date = date("Y-m-d H:i:s", mktime(date('H'), date('i'), date('s'), date('m'), date('d') - 3, date('Y')));
	$today = date("Y-m-d H:i:s"); 
	$query = "INSERT INTO `vizov_kab` (`id`, `kab`, `nomer`, `data_insert`, `data_v`) VALUES (NULL, '$bukva', '$nomer', '$today', '$date');";
	$res = $link->query($query);
	$content = $bukva.$nomer;
?>
<html>
<head>
</head>
<body>
<center>
<img width="50px" height="50px" src="../img/1.png"><br>
<font size="7" color="black" face="Arial"><?echo $content;?></font><br>
<font size="4" color="black" face="Arial">-----------</font><br>
<img width="100px" height="100px" src="../img/qr-code.png">
<script type='text/javascript'>
print();
</script>
<script>
function sd()
{
	document.write('<script type="text/javascript"> location="../";</scr'+'ipt>');
}
setTimeout(sd, 2000);
</script>


</center>
</body>
</html>
