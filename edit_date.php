<?php include 'session.php';?>
<?php
    
    include('config.php');

//Checking if button is clicked or not...
if (isset($_POST['edit_date'])) {

//Connection Stablishing...

    echo $eeid = $_POST['id'];
    echo $date = $_POST['date'];

//Update Query for Mysql...
    echo $query = "UPDATE `date` SET `Date`='$date' WHERE Id = $eeid";
    $res = mysqli_query($con, $query);

//Redirection to another page...
    header("Location: admin_date.php");

//Connection Close...
    mysqli_close($con);
}

     include'admin_header.php';



     ?>

    <div class="page-content">


                <div class="row">
                    <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <?php
                            //Checking if button is clicked or not...
                                if (isset($_GET['id'])) {
                                  //Getting id from Url...
                                    $eid = $_GET['id'];
                                  //Creating Session...

                                    //Getting Data to edit...
                                    $query = "SELECT * FROM `date` Where Id = {$eid}";

    $run = mysqli_query($con,$query);
    $TotalRows = mysqli_num_rows($run);
                        while ($data = mysqli_fetch_array($run)) {
                                ?>
                                <h6 class="card-title">Edit Date</h6>
                                <form class="forms-sample" method="POST" action="edit_date.php">
                                 <input type="text" class="form-control" value="<?php echo $data[0]; ?>" name="id">
                                    <div class="form-group">
                                        <label for="exampleInputUsername1">Date</label>
                                        <input type="text" class="form-control" id="exampleInputUsername1" autocomplete="off" placeholder="Enter Price " name="date" value="<?php echo  $data[1];?>">
                                    </div><br><Br><input type="submit" name="edit_date" value="Add" class="btn btn-primary">
                                </form>
                                <?php
                            }

                        
                    }
                            ?>
              </div>
            </div>
                    </div>

                </div>
            </div>
            <?php include'admin_footer.php';?>