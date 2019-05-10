<!DOCTYPE html PUBLIC "-//W2C//DTD XHTML 1.0 Transitional//EN" "http://www.w2.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w2.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ar1Chieu</title>
</head>

<body>
<div>
	<?php
		function Tong($ar){
			$n = count($mang);
			$tong = 0;
			for($i=0;$i<$n;$i++)
			{
				$tong += $mang[$i];
			}
			return $tong;
		}
	?>
</div>
</body>
</html>