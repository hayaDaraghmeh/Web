<?php
$valid_admin=0;
if(isset($_POST['login']))
{
    @$db=new mysqli('localhost','root','','store');
    if(mysqli_connect_errno()){
        echo " Error: could not connect to database ";
        die();


    }

    $strQry='select * from admins ';
    $res=$db ->query($strQry);
    for($i=0;$i<$res ->num_rows;$i++){
        $row=$res -> fetch_assoc();
        if($_POST['username']==$row['UserName'] && $_POST['password']==$row['Password']){
            $valid_admin=1;
            header('location:Admin.php');

        }


    }



    if ($valid_admin==0){

        ?>  <span style="color: red"><script> alert('user name or password  is not valid')</script></span>'
  <?php
    }







}?>

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>login as Admin</title>
<!--    <script>
        function move(){
            window.location.href="homePage.html";
        }
        function moveA(){
            window.location.href="Admin.html";
        }
    </script>-->
    <style>
        body{background-image: url("images/o5.jpg");background-size:cover;height: 70vh}
        .contain{

            alignment: center;
            height: 70vh;
            width:80vh;
            margin-left: 55vh;
            text-shadow:2px 2px 3px goldenrod;
            text-align: center;color: black;
            font-family:"Edwardian Script ITC";
            font-size:30px;


        }
        .form{text-align: center;width: 250px;height: 50px ;font-size: 30px ;font-family: "Edwardian Script ITC";

            box-shadow: 2px 2px 3px gold ;
            border-color:black}
    </style>
</head>
<body>
<div class="contain">
    <h1 style="font-size: 70px"  >Login As Admin </h1>

<form method="post">
        <table style="margin-left: 15vh">

            <tr>
                <td ><h3>UserName : </h3> </td>
                <td><input type="text" id="username" name="username" class="form" required="true" style="font-family: 'Bold Italic Art'"></td>
            </tr>
            <tr> <td> <h3> Password  : </h3></td>
                <td><input type="password"  id="password" name="password" class="form" required="true" style="font-family: 'Bold Italic Art'">

                </td>
            </tr>


    <!--  <button value="login" id="login" name="login" type="submit" class="form "style="background-color:floralwhite;">Login</button>-->
       <tr><td></td><td><input value="Login" type="submit" name="login" class="form" style="background-color:floralwhite;"></td> </tr>
    </table>  </form>
</div>

</body>
</html>