<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Caculate</title>
</head>
<body>
	<div style="margin: 0px 300px">
	<?php
		$gt = 1;
		for($i=1; $i <= 10; $i++){
			$gt = $gt * $i;
		}
		echo "10 giai thua thi bang: ".$gt."<br>";

		$dtht = (pow(10,2)*3.14);
		echo "Diện tích hình tròn có bán kính là 10 là: ".$dtht."<br>";

		$ttkc = (4/3)*3.14*pow(10,3);
		echo "Thể tích mặt cầu có bán kính là 10 là: ".$ttkc."<br>";	
	?>
	<marquee scrollamount="4" direction="left" loop="50" behavior="slide" onmouseover="this.stop()" onmouseout="this.start()">
Hello!</marquee>
	</div>

</body>
</html>