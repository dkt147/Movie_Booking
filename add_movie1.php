<?php 

    
    include('config.php');

    if(isset($_POST['add_movie']))
    {
        echo $name = $_POST['name'];

        $query="insert into movies (name)
        values('$name')"; 
        $run = mysqli_query($con,$query);
        if($run)
        {
            
            header('Location: admin_movie.php');
            
            
        }
        else
        {
            echo "<script> alert('Data Not Inserted');
            
            </script>";
        }
    }
 ?>