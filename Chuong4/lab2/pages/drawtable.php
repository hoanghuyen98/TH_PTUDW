<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Drawtable</title>
</head>
<body>
	<div align="center">
	<?php
			if(isset($_POST["ve"])){
				$so_dong = $_POST["dong"];
				$so_cot = $_POST["cot"];
				echo "<table border='1px' align='center' width='300px' height='100px'>";
					for($y=0; $y < $so_cot; $y++){
						echo "<tr>";
							for($x=0; $x < $so_dong; $x++){
								echo "<td>";
									if($x <= $y){
										echo $y+1;
									}
								echo "</td>";
							}
						echo "</tr>";	
					}
				echo "</table>";
			}
			else{
		?>
		<form action="" method="post" enctype="multipart/form-data">
			<div align="center">
				<table width="318" height="139">
					<tr>
						<td>Nhap so dong</td>
						<td><input type="number" name="dong"></td>
					</tr>
					<tr>
						<td>Nhập số cột</td>
   	        <td><input type="number" name="cot"></td>
					</tr>
					<tr>
					<tr>
   	        <td colspan="2">
							<input type="submit" name="ve" value="Vẽ">
							<input type="reset" value="Nhập lại">
						</td>
          </tr>
					</tr>
				</table>
			</div>
		</form>
			<?php } ?>
	</div>

</body>
</html>