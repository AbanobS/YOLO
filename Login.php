<html lang ="en" >

<head>
    
    <meta charset ="utf-8">
    <title>Login</title>
    <link rel ="stylesheet" href ="CSS/Login.CSS">
</head>
    <body>
    <div id="logo"><a href = "Homepage.html">
        <img src="yologo.png" style ="width:230px;height:130px; position:absolute; top:55px; left:560px;">
        </a>
    </div>
    <h1>Login</h1>
    <form class = "box" action="" method ="post"> 
    <input type ="text" name="email" placeholder="Email">
    <input type ="password" name="PW" placeholder="Passowrd">
    <input type ="submit" name="NM" value="Login">
    </form>

<p style = "text-decoration-color: white;font-size: 20px; font-weight: bold;width:230px;height:130px;position: absolute;bottom:1px; left:660px;">
    O R </p>
 <p1 style ="height:130px;position: absolute;top:580px; left:550px;">Need an account ? <a href = "SignUp.php" style = "color:darkorange;text-decoration: none; ">   Sign up for free</a>
    </p1>
        </body>
</html>


<?php
//$email=$_POST['email'];
$db=mysqli_connect('localhost','root','','YOLO');
//$query=mysqli_query($db,"SELECT Email , Password FROM User WHERE email='$email'");
//$result=mysqli_fetch_array($query);
if(isset($_POST['NM']))
{
    if($_POST['PW']==$result[1]){
        header("location:Homepage.php");
    }
    else
    {
        ?>
<html><div class="Invalid"> Invalid Password!</div></html>
