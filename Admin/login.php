<?php
$servername = "localhost";
$username = "root";
$password = "";


// Create connection
$conn = new mysqli($servername, $username, $password,);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>



<!-- 
<html>
<head> 
<title>Login--Admin </title>

<link rel="stylesheet" href="../css/admin.css">

</head>
 
<body>
<div class="login">

<h1 class="text-center"> Login </h1> <br>

<?php 
if(isset($_SESSION['login']))
{
echo $_SESSION['login'];
unset($_SESSION['login']);
    }
    ?>

<?php
if(isset($_SESSION['no-login-message']))
{ 
echo $_SESSION['no-login-message'];
unset($_SESSION['no-login-message']);
}
?> 

<form action="" method="POST" class="text-center">
    <br>

    <b> Username: </b>
    <input type="text" name="username" placeholder="Enter Username"><br><br>
        
     <b> Password: </b>
    <input type="password" name="password" placeholder="Enter Password"><br><br>
    <input type="submit" name="submit" value="Login" class="">
        
    <br><br>
    </form>



</div>
</body>
</html>



<?php
if(isset($_POST['submit']))  
{
    
   $username= mysqli_real_escape_string($conn, $_POST['username']);
    $pass=md5($_POST['password']);
    $password= mysqli_real_escape_string($conn, $pass);


$sql="SELECT * FROM tbl_admin WHERE username='$username' AND password='$password'";

$res=mysqli_query($conn,$sql); 
$count=mysqli_num_rows($res);
if($count==1){
   $_SESSION['login']="<div class='success'> Login Success </div>";
    $_SESSION['user']=$username; 
    header("location:".SITEURL.'admin/'); 
}
else{
    $_SESSION['login']="<div class='error text-center'> Username and password is incorrect </div>";
    header("location:".SITEURL.'admin/login.php');
}

}




?> -->