<nav class="navbar navbar-default">
					<div class="container-fluid">
						<div class="navbar-header">
							<!-- Navbar toggle button -->
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu" aria-expanded="false">
								<i class="fa fa-bars"></i>
							</button>
							<!-- Sidebar toggle button -->
							<button type="button" class="sidebar-toggle">
								<i class="fa fa-bars"></i>
							</button>
							<a class="navbar-brand text-size-24" href="index.php">Dashboard</a>
						</div>
						<div class="collapse navbar-collapse" id="menu">
							
							<ul class="nav navbar-nav navbar-right">
							    <li><img class="img-circle" height="50" width="50" src="<?php echo $_SESSION['foto']; ?>"></li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['fullname']; ?> <span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li><a href="profiles.php">Profiles</a></li>
										<li><a href="logout.php">Sign Out</a></li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
				</nav>