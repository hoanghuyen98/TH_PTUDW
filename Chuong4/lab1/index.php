<?php
    if(isset($_GET["page"])){
        $page = $_GET["page"];
    }
    else{
        $page = "";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>C4 Lab1</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <img src="images/bacho.jpg" alt="" width="100%" height="200px">
        <div>
            <ul>
                <li><a href="?page=caculate">Caculate</a></li>
                <li><a href="?page=drawtable">Draw Table</a></li>
                <li><a href="?page=register">Register</a></li>
                <li><a href="?page=contact">Contact</a></li>
            </ul>
        </div>
        <table border="1" style="border:double 1px black"  width="100%" height="350" >
            <tr>
               <td>
                    <?php
                        include_once("pages/left.php");
                    ?>
               </td> 
               <td colspan="4">
                    <?php
                        switch($page){
                            case "contact": include_once("pages/contact.php");
                            break;
                            case "register": include_once("pages/register.php");
                            break;
                            case "drawtable": include_once("pages/drawtable.php");
                            break;
                            case "caculate": include_once("pages/caculate.php");
                            break;
                            default: echo "<h2 align='center'>Content is here</h2>";
                        }
                    ?>
               </td>
            </tr>
        </table>
    </div>
</body>
</html>