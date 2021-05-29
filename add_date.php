<?php include 'session.php';?>
<?php
    
    include('config.php');

    if(isset($_POST['add_date']))
    {
        echo $name = $_POST['date'];

        $query="insert into date (date)
        values('$name')"; 
        $run = mysqli_query($con,$query);
        if($run)
        {
            
            header('Location: admin_date.php');
            
            
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
                            <form action="add_date.php" method="POST">
                            <div class="card-body">
                                <h6 class="card-title">Add new date</h6>
                                <label for="exampleInputUsername1">Available Date</label>
                                <div class="input-group date datepicker" id="datePickerExample">
                                    <input type="text" class="form-control" name="date"><span class="input-group-addon"><i data-feather="calendar"></i></span>
                                    <br>
                                    <input type="submit" name="add_date" value="Add" class="btn btn-primary">
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
				</div>
			</div>
			<?php include'admin_footer.php';?>