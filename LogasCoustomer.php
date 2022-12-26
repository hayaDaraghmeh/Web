<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>login as coustomer</title>
    <script>
        function move(){
            window.location.href="homePage.html";
        }
    </script>
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
    <h1 style="font-size: 70px"  >Login As Coustomer </h1>



    <form method="post" >
     <table style="margin-left: 15vh">

         <tr>
             <td ><h3>User Name : </h3> </td>
            <td><input type="text" class="form"  id="user-name" style="font-family: 'Bold Italic Art'"></td>
         </tr>
         <tr> <td> <h3> Password  : </h3></td>
             <td><input type="password" class="form"  style="font-family: 'Bold Italic Art'"><br>
                 remember my password <input type="checkbox" style="width: 20px;height: 20px" id="pass-word" >
             </td>
        </tr>


        </table>


        <br>
     <input value="Login" type="button" class="form" style="background-color:floralwhite;" onclick="move()"></a>
    </form>
</div>

</body>
</html>