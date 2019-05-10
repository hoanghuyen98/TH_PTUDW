<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Contact</title>
</head>

<body>
	<div align="center">
		<?php
			if(isset($_POST["ok"]))
			{
				$username = $_POST["username"];	
				$gender = $_POST["gender"];
				$address = $_POST["address"];
				$note=$_POST["note"];
			}
		?>
		<div>
			<h2>Contact form</h2>
			<form action="" method="post" enctype="multipart/form-data">
   	  		<table>
    	  		<tr>
    	    		<td width="103">Username:</td>
    	    		<td width="149"><input type="text" name="username" value="" /></td>
  	    		</tr>
        		<tr>
    	    		<td>Gender:</td>
    	    		<td><p>
   	          		<input type="radio" name="gender" value="Male" checked="checked"/>Male
   	          		<input type="radio" name="gender" value="Female" />Female</p></td>
  	    		</tr>
    	  		<tr>
    	    		<td>Address:</td>
    	    		<td>
            			<select multiple="multiple" name="address">
                			<option value="Hà Nội" selected="selected">Hà Nội</option>
                    		<option value="TP Hồ Chí Minh">TP Hồ Chí Minh</option>
                    		<option value="Đà Nẵng">Đà Nẵng</option>
                    		<option value="Huế">Huế</option>
                		</select>
            		</td>
  	    		</tr>
        		<tr>
        			<td>Note: </td>
            		<td>
            			<textarea name="note" cols="50" rows="5" style="overflow:scroll;"></textarea>
            		</td>
        		</tr>
    	  		<tr>
    	    		<td colspan="2">
            			<input type="reset" name="reset" value="Reset" />
            			<input type="submit" name="ok" value="Send mail" />
            		</td>
   	    		</tr>
  	  		</table>
    		</form>
			<?php
    		if(isset($_POST["ok"]))
			{
				echo "Username: <strong style='color:red;'>$username</strong><br>";
				echo "Gender: <strong style='color:red;'>$gender</strong><br>";
				echo "Address: <strong style='color:red;'>$address</strong><br>";
				echo "Note: <strong style='color:red;'>$note</strong><br>";	
			}
			?>
		</div>
	</div>
</body>
</html>