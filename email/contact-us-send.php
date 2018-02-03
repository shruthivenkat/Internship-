<?php
if(isset($_POST['submit']))
{
    $msg= 'Name: '.$_POST['name']."\n".'Email:'.$_POST['email'];
    $email=$_POST['email'];
    mail('amritashruthi@gmail.com','response', $msg,$email);
    header('location: thankyou.html');
}
else
{
    header('location: index.php');
    exit(0);
}
?>