<?php include 'session.php';?>
<?php
include 'config.php';

$name =$_POST['name'];
$age=$_POST['age'];
$movie=$_POST['movies'];
$class=$_POST['classes'];
$time=$_POST['time'];
$date=$_POST['date'];
$price=$_POST['price'];

echo $sql="INSERT INTO `tickets`(`Name`, `Age`, `Movie`, `Class`, `Time`, `Date`, `Price`) VALUES ('$name','$age','$movie','$class','$time','$date','$price')";
$res = mysqli_query($con,$sql);

//Resdirection To Another Page...
    if ($res == TRUE) {
        session_start();
        $_SESSION['msg'] = "Booked Successfully";
        header("Location: index.php");
    } else {
    }
    
?>