<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>welcome page</title>
    <script>
        function login(){
            window.location.href="logInPage.html";
        }
        function signup(){
            window.location.href="signUp.html";
        }
        function visit(){
            window.location.href="visitingPage.html";
        }
    </script>
    <style>
        body{background-image: url("images/o5.jpg");width:200vh;height: 100% ;background-size: cover}

        .contain{color:black;text-align:center;padding-top:50px;font-family:"Edwardian Script ITC"; text-shadow: 2px 2px 3px goldenrod}
        .gu{text-align: center;}
        .b1{width: 250px ;height: 50px;border-color: black;border-radius: 5px ;text-align:center;
            color:black ;font-size: 20px ;
            text-shadow:2px 2px 3px goldenrod;
            box-shadow: 2px 2px 3px gold ;
               background-color:floralwhite}
        .f{padding-top: 100px; text-align: center;font-family:Papyrus;font-size: 30px;color:black;text-shadow: 2px 3px 7px goldenrod;}

        .bt{font-size: 30px;font-family:"MV Boli";text-shadow:2px 3px 2px orange;width: 250px;height: 50px;border-radius: 5px;box-shadow: 2px 2px 3px gold ; background-color: floralwhite;border-color:saddlebrown}
        .t{text-align: center;
            font-family:"MV Boli";font-size: 20px;
            text-decoration-color: #004b91;
            border:2px midnightblue solid;
            width:150vh;
        }

    </style>
</head>
<body >

<div class="contain">


    <br>
    <p><h2 style="font-size:50px;" >Welcome to</h2>  </p>
    <p><h1 style="font-size:150px">Moda Mix Store</h1> </p>
   <div class="gu">
       <form method="post" >
   <pre> <input value="log in" type="button" class="b1" onclick="login()">  <input value="sign up" type="button" class="b1" onclick="signup()">  <input value="visit store" type="button" class="b1" onclick="visit()"></pre>

   </form>
</div>
</div>

</div>

</body>
</html>