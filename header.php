
<header class="header">
			<div class="container">
				<div class="header-area">
					<div class="logo">
						<a href="index-2.html"><img src="assets/img/logo.png" alt="logo" /></a>
					</div>
					<div class="header-right">
						<form action="#">
							<select>
								<option value="Movies">Movies</option>
								<option value="Movies">Movies</option>
								<option value="Movies">Movies</option>
							</select>
							<input type="text"/>
							<button><i class="icofont icofont-search"></i></button>
						</form>
						<ul>
                            <?php

                            if(isset($_SESSION['email']))
                            {
                                ?>
							<li><a href="#">Welcome <?php echo $_SESSION['email']?>!</a></li>
                            <form action="logout.php" method="POST">
                            <input type="submit" class="btn btn-danger" value="logout" name="logout">
							</form>
                       <?php
                        }
                        else{
                            ?>

                            <li><a  href="login.php">Login</a></li>
                        <?php
                        }
                        ?>   
						</ul>
					</div>
					<div class="menu-area">
						<div class="responsive-menu"></div>
					    <div class="mainmenu">
                            <ul id="primary-menu">
                                <li><a class="active" href="index.php?id=1">Home</a></li>
                                <li><a href="movies.php?id=2">Movies</a></li>
                                <li><a href="top-movies.php?id=3">Top Movies</a></li>
                                <li><a href="blog.php?id=4">News</a></li>
								<li><a href="#">Pages <i class="icofont icofont-simple-down"></i></a>
									<ul>
										<li><a href="blog-details.php?id=5">Blog Details</a></li>
										<li><a href="movie-details.php?id=6">Movie Details</a></li>
									</ul>
								</li>
                                <?php

if(isset($_SESSION['email']))
{
    ?>
                                <li><a class="theme-btn" href="#"><i class="icofont icofont-ticket"></i> Tickets</a></li>
      <?php
}
?>
                            </ul>
					    </div>
					</div>
				</div>
			</div>
		</header>