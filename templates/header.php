<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<!-- Bootstrap -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="../includes/DataTables/datatables.min.css" rel="stylesheet">
		<link href="css/font-awesome.min.css" rel="stylesheet">
		<script src="js/jquery-2.1.3.min.js"></script>
		<script src="../includes/DataTables/datatables.min.js" rel="stylesheet"></script>
		<script src="js/bootstrap.min.js"></script>
		    <!-- Custome Css -->
    	<link rel="stylesheet" href="../Profile/post.css">
    	<link rel="stylesheet" href="../app.css">
    	<!-- CSS only -->
    	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    	<!-- JavaScript Bundle with Popper -->
    	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    	</script>
    	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
		<title><?php echo $title; ?></title>
		<style>
#profile{
  border-radius:100%;
  margin-top:10px;
  width:60px;
  height:60px;
}
		</style>
	</head>
	<body>

						<?php
							if (isset($_SESSION["user"]))
							{	
								echo '<nav class="navbar navbar-inverse navbar-static-top"><div class="container-fluid">';
								echo '<div class="navbar-header"><a class="navbar-brand" href="home.php">Independence of myanmar</a></div>';
								echo '<ul class="nav navbar-nav"><p class="navbar-text navbar-right">';
								//echo '<div class="container" id="pic_box">';
  								echo '<div class="grid-7">';
								//echo '<div class="card color-card" id="pic_profile">';
      							echo '<img src="',$_SESSION["user"]["avatar"],'" alt="profile-pic" class="profile"id="profile">';
      							echo '<a href="user.php"><h1 class="title" style="color:white;">',$_SESSION["user"]["username"],'</h1></a>';
      							echo '<a href="logout.php" class=\"navbar-link\" ><button class="btn color-a top" style="color:white;"> log out</button></a>';
      							echo '<hr></div>';
								/*echo '<img src="';
								echo $_SESSION["user"]["avatar"];
								echo '"  alt="Avatar" style="width:80px" id="profile">';
								echo "<br>";
								echo "<a href=\"user.php\" class=\"navbar-link\">";
								echo "<h3>";
								echo $_SESSION["user"]["username"];
								echo "</h3>";
								echo "</a>(";
								echo "<a href=\"logout.php\" class=\"navbar-link\" >logout";
								echo "</a>)";*/
							}
						?>
					</p>
			    		<li>
							<?php
								if (isset($_SESSION["user"]) && $_SESSION["user"]["status"] == "ADMIN")
								{
									echo "<a href=\"admin_panel.php\" class=\"navbar-link\">";
										echo "<span class=\"glyphicon glyphicon-cog\"> </span>";
										echo " Admin Panel";
									echo "</a>";
								}
							?>
						</li>
					</ul>
				</div><!-- /.container-fluid -->
		</nav>
		//<div class="container">