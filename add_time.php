<?php include 'session.php';?>
<?php
    
    include('config.php');

    if(isset($_POST['add_time']))
    {
        $time = $_POST['time'];
        $date = $_POST['date_id_fk'];

        $query="INSERT INTO `time`(`Time`, `date_id_fk`) VALUES ('$time','$date')"; 
        $run = mysqli_query($con,$query);
        if($run)
        {
            
            header('Location: admin_time.php');
            
            
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
								<h6 class="card-title">Add available time</h6>
								<form class="forms-sample" method="POST" action="add_time.php">
									<div class="form-group">
                                        <label for="exampleFormControlSelect1">Select Day</label>
                                        <select class="form-control" id="exampleFormControlSelect1" name="date_id_fk">
                                            <?php
                        $sql = "SELECT * FROM date";
                        $res = mysqli_query($con,$sql);

                        while ($row=mysqli_fetch_assoc($res)) {
                            ?>
                        
                        <option value="<?php echo $row['Id'];?>"><?php echo $row['Date'];?></option>
                    <?php
                }
                ?>
                                        </select>
                                    </div>                                                                            <label for="exampleFormControlSelect1">Select Time</label>
                                   <div class="input-group date timepicker" id="datetimepickerExample" data-target-input="nearest">

                                    <input type="text" class="form-control datetimepicker-input" data-target="#datetimepickerExample" name="time" />
                                    <div class="input-group-append" data-target="#datetimepickerExample" data-toggle="datetimepicker">
                                        <div class="input-group-text"><i data-feather="clock"></i></div>
                                    </div>
                                </div><br><Br><input type="submit" name="add_time" value="Add" class="btn btn-primary">
								</form>
              </div>
            </div>
					</div>

				</div>
			</div>
			<?php include'admin_footer.php';?>