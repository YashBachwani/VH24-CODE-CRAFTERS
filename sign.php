<?php 
$host="localhost:3307";
$username="root";
$password="";
$dbname="educater's";
$conn=mysqli_connect($host,$username,$password,$dbname);
if(!$conn)
{
    die("Sorry You are Not connected ".
    mysqli_connect_error());
}
if(isset($_POST["Sign_UP"]))
{
    $name=$_POST['txt'];
    $email=$_POST['email'];
    $pwd=$_POST['pswd'];
    $cpwd="Admin";
    $insert="INSERT INTO account (Username,Email,Password) VALUES('$name','$email','$pwd')";
    if($conn->query($insert)===TRUE)
    {
        echo "Entry is Created";
    }
    else{
        echo "Entry is not Created";
    }
    
}

if(isset($_POST["Log_in"]))
{
    $name=$_POST['email'];
    $pwd=$_POST['pswd'];
    $cpwd="123456789";
    if($pwd==$cpwd)
    {
        echo "You are Logged in ";
    }
    else{
        echo "You Enter Wrong Password ";
    }
    
}
?>