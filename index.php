<?
include("config.php");

?>
<html>
 <head>
  <meta charset="utf-8">
  <title>Тест</title>
 </head>
 <style>
.button{
 text-decoration:none; 
 text-align:center; 
 -webkit-border-radius:4px;
 -moz-border-radius:4px; 
 border-radius: 4px; 
 font:20px Arial, Helvetica, sans-serif; 
 font-weight:bold; 
 color:#ffffff; 
 background-color:#c73b3b; 
  text-align: center;
  padding: 10px 10px 10px 10px;
  border-radius: 3px;
  text-align: center;
  width: 400px;
    height: auto;
	display: block
  }
	input{
		display: block;
	}

	::-webkit-input-placeholder {
		text-align:center;
	}

	:-moz-placeholder { /* Firefox 18- */
		text-align:center;  
	}

	::-moz-placeholder {  /* Firefox 19+ */
		text-align:center;  
	}

	:-ms-input-placeholder {  
		text-align:center; 
	}
.disabled {
 text-decoration:none; 
 text-align:center; 
 padding:11px 32px; 
 border:solid 1px #004F72; 
 -webkit-border-radius:4px;
 -moz-border-radius:4px; 
 border-radius: 4px; 
 font:20px Arial, Helvetica, sans-serif; 
 font-weight:bold; 
 color:#ffffff; 
 background-color:#808080; 
  
  padding: 10px 10px;
  color: #fff;
  border-radius: 3px;
  text-align: center;
  width: 400px;
  overflow: hidden;
    height: auto;
  pointer-events: none;
  cursor: default;
	display: block
}
 </style>
	<body style="background-image: url('img/background_white.png')">
		<center>
			<div  style="border: 0px double black;  margin-top: 10px; ">
					<header>
					<br>
						<div style="min-height: 180px;margin-right: 110px;  margin-left: 110px;">
							<font size="5" style="margin-top: 210px;" color="black" face="Arial">
								Вологодская городская поликлиника №1
							</font><br>
							<img onclick="serd()" width="100px" height="100px" src="img/logo.png">
							<br>
						</div>
					</header>
					<div style="margin-right: 110px;  margin-left: 110px;">
							<center><br><br>
							<? 
							include('genbut.php'); 
        ob_flush();
        flush();?><div style="width: 500px;">
							<br><br>
							<font size="5" color="red" face="Arial">
								<marquee style=""  behavior="scroll" direction="left" bgcolor="" color="red">
									<? echo $beg_stroka; ?>
								</marquee>
							</font>
								<br>
								<img width="40%" height="30%" src="../img/qr--code.png">
						</center>
					</div>
			</div>
		</center>
	</body>
</html>

<script>
setTimeout("document.location.reload()", 60000);
setInterval(serd, 3000);
function serd()
{
	setTimeout("var elems = document.getElementsByTagName('img'); for(var i=100; i<150; i++){ setTimeout(serd1, i*10, i, elems); }", 100);
	
	//setTimeout("var elems = document.getElementsByTagName('img'); for(var i=150; i>100; i--){ setTimeout(serd1, i*10, i, elems); }", 5000);
	
}
function serd1(i, elems)
{
	elems[0].style.width=i+'px'; elems[0].style.height=i+'px';
}
</script>