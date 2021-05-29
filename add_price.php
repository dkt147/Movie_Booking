<?php include 'session.php';?>
<?php
    
    include('config.php');

    if(isset($_POST['add_price']))
    {
        echo $price = $_POST['price'];
        echo $movie = $_POST['movie'];

        echo $query="INSERT INTO `price`(`Price`, `movie_id_fk`) VALUES ('$price','$movie')"; 
        $run = mysqli_query($con,$query);
        if($run)
        {
            
            header('Location: admin_price.php');
            
            
        }
        else
        {
            echo "<script> alert('Data Not Inserted');
            
            </script>";
        }
    }

     include'admin_header.php';



     ?>

    <div class="page-content">


                <div class="row">
                    <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                                <h6 class="card-title">Add Price</h6>
                                <form class="forms-sample" method="POST" action="add_price.php">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Select Movie</label>
                                        <select class="form-control" id="exampleFormControlSelect1" name="movie">
                                            <?php
    $query = "select * from movies";
    $run = mysqli_query($con,$query);
    $TotalRows = mysqli_num_rows($run);
                        while ($data = mysqli_fetch_array($run)) {
                            ?>
                        
                        <option value="<?php echo $data[0];?>"><?php echo $data[1];?></option>
                    <?php
                }
                ?>
                                        </select>
                                    </div>                                                                  <div class="form-group">
                                        <label for="exampleInputUsername1">Price</label>
                                        <input type="text" class="form-control" id="exampleInputUsername1" autocomplete="off" placeholder="Enter Price " name="price">
                                    </div><br><Br><input type="submit" name="add_price" value="Add" class="btn btn-primary">
                                </form>
              </div>
            </div>
                    </div>

                </div>
            </div>
            <?php include'admin_footer.php';?>