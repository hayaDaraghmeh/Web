<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home bage</title>

    <style>

        body {background-color: khaki;background-image: url("images/o5.jpg") ;background-size:cover;height: 90vh;}

        .header{width: 100%;height: 70vh; position:absolute}
        .header .navbar {
            opacity: 100%;
            width: 200vh;
            height: 60px;
            background-color: cadetblue;
            background-image:url("images/o22.gif");
            background-size: 30vh;

            position: fixed;
            text-align: left;
        }
        .header .navbar  h2{
            position: relative;
            left:20px ;
            bottom: 15px;
            word-spacing: 20px;
            font-size: 25px;

        }
        .header .navbar a{

            color:white;

        }
        .header .photo{alignment: center;text-align: center;}
        .header .photo img{width: 60%;height: 70vh;margin-left: 10vh;position: absolute;top: 10vh ;right: 5vh}
        .header .photo h2{font-size: 60px;color:goldenrod;font-family: "Comic Sans MS";position: absolute;bottom:30vh;left: 50vh;opacity:0.5}
        .header .photo h1{font-size: 100px;color:black;font-family:Vivaldi;position: absolute;bottom: 37vh;left: 53vh;text-shadow:2px 2px 3px goldenrod;}
        .b1{width: 350px ;height: 300px;border-color: black;border-radius: 5px ;text-align:center;
            position:absolute;top:45vh;left: 60px;
            color:white;font-size: 70px ;
            font-family:Vivaldi;
            background-image: url("men/partsM.jpg");
            background-size: 550px;
            background-position: center;
            text-shadow:2px 2px 3px whitesmoke;
            box-shadow: 2px 2px 3px gold ;

            background-color:floralwhite}
        .b2{width: 350px ;height: 300px;border-color: black;border-radius: 5px ;text-align:center;
            position:absolute;top:45vh;left:570px;
            color:black ;font-size: 20px ;
            background-image: url("wommen/partsW.jpg");
            background-size: 550px;
            background-position: center;
            text-shadow:2px 2px 3px goldenrod;
            box-shadow: 2px 2px 3px gold ;
            background-color:floralwhite}
        .b3{width: 350px ;height: 300px;border-color: black;border-radius: 5px ;text-align:center;
            position:absolute;top:45vh;left:1070px;
            color:black ;font-size: 20px ;
            background-image: url("childreme/partsCH.jpg");
            background-size: 550px;
            background-position: center;
            text-shadow:2px 2px 3px goldenrod;
            box-shadow: 2px 2px 3px gold ;
            background-color:floralwhite}
        .bag{ background-image: url("images/o4.jpg");
            background-size:cover;height: 60vh;width:150vh;
            position: relative;left:25vh;top:25vh;right :15vh;
            border: #004b91 8px solid;

        }

        .t{text-align: center;
            font-family:"MV Boli";font-size: 20px;
            text-decoration-color: #004b91;
            border:2px midnightblue solid;
            width:150vh;
        }
        .f{padding-top: 100px; text-align: center;font-family:Papyrus;font-size: 30px;color:black;text-shadow: 2px 3px 7px goldenrod;}

        .bt{font-size: 30px;font-family:"MV Boli";text-shadow:2px 3px 2px orange;width: 250px;height: 50px;border-radius: 5px;box-shadow: 2px 2px 3px gold ; background-color: floralwhite;border-color:saddlebrown}

    </style>
</head>
<body>

<div class="header">

    <div class="navbar">

        <div class="navcont">
            <h2><a href="homePage..php" >Home</a>
                <a href="Admin.php" >AdminPage</a>
                <a href="admins.php" >Admins</a>
                <a href="addAdmin.html" >Add Admin</a>
                <a href="coustomers.html" >Customres</a>
                <a href="addCoustomer.html" >Add Coustomer</a>
                <a href="Oreders.html" >Orders</a>
                <a href="store.html" >Store</a>
            </h2>
        </div>


    </div>
    <div class="photo">
        <img src="images/o116.png" alt="">
        <div>
            <h1> Moda Mix Store</h1>
        </div>

        <div class="bag" >
            <table  class="t" border="1" >
                <tr>
                    <td>
                        item
                    </td>
                    <td>
                        item name
                    </td>
                    <td>
                        item ID
                    </td>
                    <td>
                        size
                    </td>
                    <td>
                        count
                    </td>
                    <td>
                        price
                    </td>
                </tr>





            </table>
            <div id="imgplace" class="elements">

            </div>
        </div>
    </div>

</div>

</body>
</html>