<?php
                include('config.php');
                session_start();
				if(isset($_POST['Login-btn']))
				{
					$email = $_POST['email'];
					$password = $_POST['password'];
		
					$query = "select * from user where email = '$email' and password = '$password'";
					$run = mysqli_query($con,$query);
					$TotalRows = mysqli_num_rows($run);

					if($TotalRows >0)
					{


            if ($email=="admin@gmail.com" && $password=="admin123") { 
            header("Location: admin_movie.php");
                        $_SESSION['email'] = $email;
            }
            else
            {
            header("Location: index.php");
            }
						$_SESSION['email'] = $email;
						
					}else
					{
						echo "<script>alert('Failed')</script>";
						header("Location: login.php");
					}
				}

				?>