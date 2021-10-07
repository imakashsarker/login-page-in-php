<?php
$conn=mysqli_connect("localhost","root","","user_login");
if(!$conn)
{
   echo"database connection error";
}
if(isset($_POST['submit'])){
   $user_name=$_POST['user_login'];
   $password=$_POST['password'];

   $sql="select * from user_login where user_name= '$user_login' and password = '$password'";
  $result = mysqli_query($conn,$sql);
   $count = mysqli_num_rows($result);
   if ($count==1){
      echo"<script>windows.open('home.php?class=login successfull','_self')</script>";
   }
   else
   {
     echo"<script>alert('user name or password is incorrect!')</script>";
   }
}
?>
