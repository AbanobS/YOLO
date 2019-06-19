<html lang ="en" >

<head>
    
    <meta charset ="utf-8">
    <title>SignUp</title>
    <link rel ="stylesheet" href ="CSS/SignUp.CSS">
</head>
    <div id="logo"><a href = "#">
        <img src="yologo.png" style ="width:230px;height:130px; position:absolute; top:55px; left:560px;">
        </a>
    </div>
    <h1 style ="color:white;font-weight:bold;font-family:sans-serif;position:absolute;top:250px; left:460px;">CREATE A YOLO ACCOUNT</h1>
    <h2 style ="color:antiquewhite;position:absolute;top:300px; left:450px;font-size: 20px"> Acces the world of YOLO with your free account.</h2>
    <form class = "box" action="" method ="post"> 
    <input type ="text" name="email" placeholder="Email">
    <input type ="text" name="FN" placeholder="First Name">
    <input type ="text" name="LN" placeholder="Last Name">
    <input type ="password" name="PW" placeholder="Passowrd">
    <input type ="password" name="CPW" placeholder="Confirm Passowrd">
    <p style = "color:white; position:absolute; left:33%; bottom:90px;font-weight:bold;font-family:sans-serif;">Gender :</p>
        <br>
    <input type="radio" name="gender" id ="rd"><span style="color:white;"id ="but">Male</span>
     <input type ="radio" name="genderf" id="rd"><span style="color:white;" id="but">Female</span>
    <input type ="submit" name="button" value="CREATE ACCOUNT">
        
    </form>

<?php
 if(isset($_POST['button']))
 {
     $db=mysqli_connect('localhost','root','','YOLO');
     $query=mysqli_query($db,"SELECT email FROM User WHERE email='$_POST[email]'");
     $result=mysqli_fetch_array($query);
     if(empty($result))
     { 
         if(isset($_POST['button']))
         {
             if($_POST['PW']==$_POST['CPW'])
             {
                 $FN=$_POST['FN'];
                 $LN=$_POST['LN'];
                 $email=$_POST['email'];
                 $PW=$_POST['PW'];
                 $gender=$_POST['gender'];
                 if($gender==1)
                     $gender="male";
                 else
                     $gender="female";
                     $temp="INSERT INTO user (FirstName,LastName,Email,Password,Gender) VALUES ('$FN','$LN','$email','$PW','$gender')";
             $query=mysqli_query($db,$temp);
                 header("Location:Login.php");
             }
         }
     }
 }
    ?>