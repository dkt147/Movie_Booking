
 <?php
  include('config.php');
      echo $id = $_GET['id'];
      echo $name = $_POST['name'];

      echo $query = "delete from crud where id = '$id' "; 
      $run = mysqli_query($con,$query);
      if($run)
      {
          echo "<script> alert('Data Deleted');
          window.location.href = 'view.php';
          </script>"; 
          
      }
      else
      {
          echo "<script> alert('Data Not Deleted');
          
          </script>";
      }


  
  ?>