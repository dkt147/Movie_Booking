<?php include 'session.php';?>
<?php


//Checking If button is clicked or not..
if (isset($_GET['id'])) {


  //Getting id from Url...
    $did = $_GET['id'];

  //Connection Stablishing...
    include 'config.php';

  //Delete Query For Mysql...
    $query = "DELETE FROM `date` WHERE Id = $did";
    $res = mysqli_query($con, $query);

  //Delete and Redirect to same page...
    header("Location: admin_date.php");
  
  //Connection Close...
    mysqli_close($con);
}
