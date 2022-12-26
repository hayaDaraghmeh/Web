

<?php

require 'includes/connection.php';
session_start();
if(isset($_POST['sign'])){
header('location:homePage.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <script>
        function move(){
            window.location.href="homePage.html";
        }
    </script>
    <style>
        body{background-image: url("images/o5.jpg");background-size:cover;height: 135vh}
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
    <h1 style="font-size: 70px"  >Sign Up</h1>
    <form method="post" action="includes/SignUpProcess.php">
        <table style="margin-left: 15vh">
            <tr>
                <td ><h3>Customer Name: </h3> </td>
                <td><input type="text" class="form" name="CustomerName"  style="font-family: 'Bold Italic Art'" required="true"></td>
             </tr>
             <tr> <td> <h3> Password  : </h3></td>
                <td><input type="password" name="password" class="form"  style="font-family: 'Bold Italic Art'" required="true">
                </td>
              </tr>
              <tr>
                <td ><h3>Email Address: </h3> </td>
                <td><input id="email" type="email" name="email" placeholder="email@company.com" class="form" required="true"></td>

<!--                <td><input type="email" class="form"  style="font-family: 'Bold Italic Art'"></td>-->
            </tr>
            <tr>
                <td ><h3>Card Number: </h3> </td>
                <td><input type="text" class="form"  name="CardNumber" style="font-family: 'Bold Italic Art'"required="true"></td>
            </tr>
            <tr>
                <td ><h3>Address: </h3> </td>
                <td><input type="text" class="form" name="address" placeholder="Country_city_street" required="true"></td>
            </tr>
            <tr>
                <td ><h3>Contact Number: </h3> </td>
                <td><input type="text" class="form" name="contact"  style="font-family: 'Bold Italic Art'"required="true"></td>
            </tr>

        </table>


<!--       <button name="sign" type="submit" class="form" style="background-color:floralwhite;font-size: 40px >SignUp </button>-->
      <input type="submit" name="sign" class="form" value="Sign Up" required="true">
     <input value="Reset" type="reset" class="form" style="background-color:floralwhite;font-size: 40px" >


    </form>
</div>

</body>
</html>