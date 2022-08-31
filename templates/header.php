<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<!-- Bootstrap -->
		<?php 
	  if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
         $url = "https://";   
    else  
         $url = "http://";   
    // Append the host(domain name, ip) to the URL.   
    $url.= $_SERVER['HTTP_HOST'];   
    
    // Append the requested resource location to the URL   
    $url.= $_SERVER['REQUEST_URI'];    
    
    if ($url=="http://127.0.0.1:8000/php/login.php") {
    	 			echo '    <link rel="stylesheet" href="../Main/main.css">
    <link rel="stylesheet" href="../app.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>';
    }
  else if ($url=="http://127.0.0.1:8000/php/show_society.php"){
  	echo '  <link rel="stylesheet" href="../Main/society.css">
    <link rel="stylesheet" href="../app.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
    <!-- Feather icons -->
    <script src="https://unpkg.com/feather-icons"></script>';

  }
    else if ($url=="http://127.0.0.1:8000/php/home.php"){
  	echo '<link href="css/bootstrap.min.css" rel="stylesheet">    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js">
    </script>
		<link href="../includes/DataTables/datatables.min.css" rel="stylesheet">
		<link href="css/font-awesome.min.css" rel="stylesheet">
		<script src="js/jquery-2.1.3.min.js"></script>
		<script src="../includes/DataTables/datatables.min.js" rel="stylesheet"></script>
		<script src="js/bootstrap.min.js"></script>';

  }
    else {
    	echo '<link href="css/bootstrap.min.css" rel="stylesheet">    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js">
    </script>
		<link href="../includes/DataTables/datatables.min.css" rel="stylesheet">
		<link href="css/font-awesome.min.css" rel="stylesheet">
		<script src="js/jquery-2.1.3.min.js"></script>
		<script src="../includes/DataTables/datatables.min.js" rel="stylesheet"></script>
		<script src="js/bootstrap.min.js"></script>';
    }
			
		 ?>

		<title><?php echo $title; ?></title>
		<style>
#profile{
  border-radius:100%;
  margin-top:10px;
  width:60px;
  height:60px;

}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}
		</style>
		<style type="text/css">
#profileDisplay { display: block; height: 60px; width: 60px; margin: 0px auto; border-radius: 50%; }
.img-placeholder {
  width: 60px;
  color: white;
  height: 100%;
  background: black;
  opacity: .7;
  height: 60px;
  border-radius: 50%;
  z-index: 2;
  position: absolute;
  left: 50%;
  transform: translateX(-50%);
  display: none;
}
.img-placeholder h4 {
  margin-top: 40%;
  color: white;
}
.img-div:hover .img-placeholder {
  display: block;
  cursor: pointer;
}

  </style>
	</head>
	<body>


						<?php
							if (isset($_SESSION["user"]))
							{	
								echo '					<ul>
  <li><a class="active" href="home.php"><h3>Home</h3></a></li>  <li style="float:right"><a class="active" href="logout.php"><h3>Log out</h3></a></li>
  <li style="float:right"><a href="user.php"><img src="',$_SESSION["user"]["avatar"],'" alt="profile-pic" class="profile"id="profile"><h3>',$_SESSION["user"]["username"],'</h3></a></li>
';
								/*
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

							<?php
								if (isset($_SESSION["user"]) && $_SESSION["user"]["status"] == "ADMIN")
								{
									echo "<li>";
									echo "<a href=\"admin_panel.php\" class=\"navbar-link\">";
										echo "<span class=\"glyphicon glyphicon-cog\"> </span>";
										echo "<h3> Admin Panel</h3>";
									echo "</a>";
									echo "</li>";
								}
							?>

					</ul>
				
		<?php
		if (isset($_SESSION["user"]))
		{
			echo '		<div class="container">';
		} 
	?>
