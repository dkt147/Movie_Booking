<?php include 'session.php';?>
<?php
    
include 'admin_header.php';
?>
<div class="page-content">

				<nav class="page-breadcrumb">
					<ol class="breadcrumb"><a type="button" href="add_time.php" class="btn btn-primary"> Add Time</a>

					</ol>
				</nav>

				<div class="row">
					<div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                
                <div class="table-responsive">
                  <?php
    
    include('config.php');
    $query = "select * from time";
    $run = mysqli_query($con,$query);
    $TotalRows = mysqli_num_rows($run);
    if($TotalRows != 0)
    {
        ?>
                  <table id="dataTableExample" class="table">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Date</th>                        
                        <th>Time</th>
                         </tr>
                    </thead>
                    <tbody>
                      <?php
                      while ($data = mysqli_fetch_array($run)) 
        {
        ?>
                      <tr>
                        <td><?php echo $data[0]?></td>
                        <td><?php echo $data[2]?></td>
                        <td><?php echo $data[1]?></td>
                         <td><a href="edit_time.php?id=<?php echo $data[0]?>">Edit</a> | <a href="delete_time.php?id=<?php echo $data[0]?>">Delete</a></td>

                      </tr>
                    <?php } 
                  }
                  else
                    {
                      echo "No record Found";
                    }?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
					</div>
				</div>

			</div>

      <?php
include 'admin_footer.php';
      ?>