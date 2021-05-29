

<?php

include('config.php');

$id = $_GET['id'];

$query = "select * from crud where id = '$id'";
$run = mysqli_query($con,$query);
$data = mysqli_fetch_array($run);
?>

 <div class="container">
        <div class="row">
            <div class="col-md-12">
                
    
<form action="update.php" method="post">

    <input type="hidden" name="id" value="<?php echo $data[1];?>">
    <input type="text" placeholder="Enter Name" name="name" required value="<?php echo $data[1];?>" >
    <br><br>
    <input type="submit" value="Update" name="updateBtn" class="btn btn-info btn-block">
    
</form>

</div>
        </div>
    </div>
    <?php
    
        $name = $_POST['name'];

        $query = "update crud set name = '$name' where id = '$id' "; 
        $run = mysqli_query($con,$query);
        if($run)
        {
            echo "<script> alert('Data Updated');
            window.location.href = 'view.php';
            </script>"; 
            
        }
        else
        {
            echo "<script> alert('Data Not Updated');
            
            </script>";
        }

    
    
    ?>