<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Register</title>
</head>
<body>
    <div style="margin-left: 200px">
      <?php
        if(isset($_POST["ok"])){
          $ten = $_POST["ten"];
          $diachi = $_POST["diachi"];
          $nghe = $_POST["nghe"];
          $ghichu = $_POST["ghichu"];

          echo "<h2>";
          echo "Tên: ".$ten."<br>";
          echo "Địa chỉ: ".$diachi."<br>";
          echo "Nghề: ".$nghe."<br>";
          echo "Ghi chú: ".$ghichu."<br>";
          echo "</h2>";       
        }
        else{
      ?>
      <form action="" method="post" enctype="multipart/form-data">
  <table width="379" height="219" border="0">
    <tr>
      <td height="36" colspan="2"><strong>Form Dang Ky</strong></td>
    </tr>
    <tr>
      <td width="148">Tên: </td>
      <td width="355"><input type="text" name="ten" /></td>
    </tr>
    <tr>
      <td>Địa chỉ: </td>
      <td><input type="text" name="diachi" />;</td>
    </tr>
    <tr>
      <td>Nghề: </td>
      <td><input type="text" name="nghe" /></td>
    </tr>
    <tr>
      <td>Ghi chú: </td>
      <td><textarea style="overflow:scroll" name="ghichu">
      		
      </textarea></td>
    </tr>
    <tr>
      <td colspan="2">
      	<input type="reset" name="Reset" value="Xóa" />
      	<input type="submit" name="ok" value="Đăng Ký" />
      </td>
    </tr>
  </table>
  </form>
  <?php
		}
  ?>
    </div>
</body>
</html>