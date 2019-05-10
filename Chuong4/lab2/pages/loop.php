<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Caculate</title>
</head>
<body>
	<div align="center">
		<table width="500" height="160" border="1">
			<tr>
				<td>
				<br>

				<strong>Vẽ bằng for:</strong> <br />
				<?php
					$ve = "*";
					for($i=0; $i<10; $i++){
						for($j=0; $j<$i; $j++){
							echo $ve;
						}
						echo "<br>";
					}
				?>
				</td>

				<td>
				<strong>Vẽ bằng while:</strong> <br />
				<?php
					$m = 1;
					while($m < 10){
						$n = 0;
						while($n<$m){
							echo $ve;
							$n++;
						}
						echo "<br>";
						$m++;
					}
				?>
				</td>
	      		<td>
          			<strong>Vẽ bằng do-while:</strong> <br />
            		<?php
					$q=1;
					do
					{
						$t=0;
						do
						{
							echo $ve;
							$t++;
						}	
						while($t<$q);
						echo "<br>";
						$q++;
					}
					while($q<10);
			?>
          </td>
			</tr>
		</table>
	</div>

</body>
</html>