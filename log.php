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
if(isset($_POST["Log_in"]))
{
    $name=$_POST['email'];
    $pwd=$_POST['pswd'];
    $cpwd="Admin";
    if($pwd==$cpwd)
    {
        echo "You are Logged in ";
    }
    else{
        echo "You Enter Wrong Password ";
    }
    
}
?>
