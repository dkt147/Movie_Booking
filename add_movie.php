<?php include 'session.php';?>
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

     include'admin_header.php';



     ?>

	<div class="page-content">


				<div class="row">
					<div class="col-md-6 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
								<h6 class="card-title">Add New Movie</h6>
								<form class="forms-sample" method="POST" action="add_movie.php">
									<div class="form-group">
										<label for="exampleInputUsername1">Name</label>
										<input type="text" class="form-control" id="exampleInputUsername1" autocomplete="off" placeholder="Enter Movie Name" name="name">
									</div>
									<input type="submit" name="add_movie" value="Add" class="btn btn-primary">
								</form>
              </div>
            </div>
					</div>

				</div>
			</div>
			<?php include'admin_footer.php';?>