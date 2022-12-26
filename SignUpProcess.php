<?php
$con=mysqli_connect("localhost","root","","store") or die(mysqli_error($con));
//$con=mysqli_connect("localhost","root","","store") or die(mysqli_error($con));
?>

<?php
session_start();
$CustomerName= mysqli_real_escape_string($con,$_POST['CustomerName']);
$password=md5(md5(mysqli_real_escape_string($con,$_POST['password'])));
if(strlen($password)<6){
    echo "Password should have atleast 6 characters. Redirecting you back to registration page...";
    ?>
    <meta http-equiv="refresh" content="2;url=signUp.php" />
    <?php
}
$email=mysqli_real_escape_string($con,$_POST['email']);
$regex_email="/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[_a-z0-9-]+)*(\.[a-z]{2,3})$/";
if(!preg_match($regex_email,$email)){
    echo "Incorrect email. Redirecting you back to registration page...";
    ?>
    <meta http-equiv="refresh" content="2; url=signUp.php" />
    <?php
}
$CardNumber=$_POST['CardNumber'];
if(strlen($CardNumber)<12){
    echo "Incorrect card number. Redirecting you back to registration page...";
    ?>
    <meta http-equiv="refresh" content="2;url=signup.php" />
<?php
}
$address=mysqli_real_escape_string($con,$_POST['address']);
$contact=mysqli_real_escape_string($con,$_POST['contact']);

$duplicate_user_query="select id from customers where CustomerName='$CustomerName'";
$duplicate_user_result=mysqli_query($con,$duplicate_user_query) or die(mysqli_error($con));
$rows_fetched=mysqli_num_rows($duplicate_user_result);
if($rows_fetched>0)
    { ?>
    <script>
        window.alert("This Customer Name already exists!");
    </script>
    <meta http-equiv="refresh" content="1;url=signUp.php"/>
    <?php
}else {


    $add_customer_query = "insert into customers(CustomerName,Password,email,CardNuumber,Address,ContactNumber) values ('$CustomerName','$password','$email','$CardNumber','$address','$contact')";
    $add_customer_result = mysqli_query( $con, $add_customer_query ) or die( mysqli_error( $con ) );
?>
    <script>alert('Customer SignedUp Successfully')</script>
    <?php
}
$_SESSION['CustomerName']=$CustomerName;
    $_SESSION['id']=mysqli_insert_id($con);



