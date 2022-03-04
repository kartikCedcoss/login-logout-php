<?php
session_start();



if(isset($_POST['btnSubmit'])){
    $_SESSION['input1']= $_POST['input1'];
    $_SESSION['input2']=$_POST['input2'];
}
echo  "Hello--  "." ".$_SESSION['input1']." "."<br> <br>";
echo   "Your Password is ".$_SESSION['input2']."<br> <br>";
echo   "<a href='index.php'><input type=button name='logout' value='logout'></a>"
?>