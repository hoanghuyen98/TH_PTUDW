<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title></title>
</head>
<body>
<div align="center">
<?php 
	if(isset($_POST["ok"]))
	{
		$username = $_POST["username"];	
		$password = $_POST["password"];	
		$gender = $_POST["gender"];
		$address = $_POST["address"];
		$note=$_POST["note"];
		if(isset($_POST["marriage"]))
		{
			$marriage = "Đã kết hôn!";	
		}
		else
		{
			$marriage="Chưa kết hôn!";
		}
		$skill = $_POST["skill"];
		
		$pl = $_POST["pl"];
		$pl_hienthi ="";
		foreach($pl as $item)
		{
			$pl_hienthi .= $item.", &nbsp;";	
		}
	
?>
<div id="register">
    	<h2>Form Đăng Ký</h2>
  <form action="?page=registerprocess" method="post" enctype="multipart/form-data">
   	  <table width="631" border="0">
    	  <tr>
    	    <td width="175">Username:</td>
    	    <td width="240"><?php echo $username;?></td>
  	    </tr>
    	  <tr>
    	    <td>Password:</td>
    	    <td><?php echo $password;?></td>
  	    </tr>
    	  <tr>
    	    <td>Gender:</td>
    	    <td><p><?php echo $gender;?></p></td>
  	    </tr>
    	  <tr>
    	    <td>Address:</td>
    	    <td><?php echo $address;?></td>
  	    </tr>
    	  
    	  <tr>
    	    <td>Programming Languages:</td>
    	    <td><?php echo $pl_hienthi;?></td>
  	    </tr>
    	  <tr>
    	    <td>Skill</td>
    	    <td><?php echo $skill;?></td>
  	    </tr>
        <tr>
        	<td>Note: </td>
            <td><?php echo $note;?></td>
        </tr>
        <tr>
        	<td>Marriage Status: </td>
            <td><?php echo $marriage;?></td>
        </tr><br />
    	  <tr>
    	    <td colspan="2">
            	<div align="center"><a href="?page=register">Come Back Register</a></div></td>
   	    </tr>
  	  </table>
    </form>
</div>
<?php } 
?>
</div>

</body>
</html>