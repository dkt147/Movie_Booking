<?php include 'session.php';?>
<?php
    
    include('config.php');

//Checking if button is clicked or not...
if (isset($_POST['edit_time'])) {

//Connection Stablishing...

    echo $eeid = $_POST['id'];
    echo $date = $_POST['date'];
    echo $time = $_POST['time'];
    

//Update Query for Mysql...
    echo $query = "UPDATE `time` SET `Time`='$time' , Date_id_fk = $date WHERE Id = $eeid";
    $res = mysqli_query($con, $query);

//Redirection to another page...
    header("Location: admin_time.php");

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
                                    $query = "SELECT * FROM `time` Where Id = {$eid}";

    $run = mysqli_query($con,$query);
    $TotalRows = mysqli_num_rows($run);
                        while ($data = mysqli_fetch_array($run)) {
                                ?>
                                <h6 class="card-title">Edit Time</h6>
                                <form class="forms-sample" method="POST" action="edit_time.php">
                                 <input type="text" class="form-control" value="<?php echo $data[0]; ?>" name="id">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Select Day</label>
                                        <select class="form-control" id="exampleFormControlSelect1" name="date">
                        
                        <option value="<?php echo $data[2];?>"><?php echo $data[2];?></option>
                        
                                        </select>
                                    </div>                                                                  <div class="form-group">
                                        <label for="exampleInputUsername1">Price</label>
                                        <input type="text" class="form-control" id="exampleInputUsername1" autocomplete="off" placeholder="Enter Price " name="time" value="<?php echo  $data[1];?>">
                                    </div><br><Br><input type="submit" name="edit_time" value="Add" class="btn btn-primary">
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