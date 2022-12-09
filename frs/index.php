<!DOCTYPE html>
<html>
	
	<head>
		<meta name="viewport" content="with=device-width, initial-scale=1.0">
		
			<title>FILE REGISTRY SYSTEM</title>
			<link rel="stylesheet" href="style.css">
			<link rel="preconnect" href="https://fonts.gstatic.com">
			<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,500;1,100&display=swap" rel="stylesheet">
			<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
			
			
			
	</head>
		
	<body>
	
	<section class="header" id="home">
		<nav>
			<a href="index.php"><img src="images/logo.png"></a>
				<div class="nav-links" id="navLinks">
					<i class="fa fa-times" style="color:#fff" onClick="hideMenu()"></i>
					<ul>
						<li><a href="#home">HOME</a></li>
						<li><a href="#file">FILE</a></li>
						
						<li><a href="admin/login.php"><i class="fa fa-fw fa-user" style="color:#fff"></i>ADMIN</a></li>
					</ul>
				</div>
				<i class="fa fa-bars" style="color:#fff" onClick="showMenu()"></i>
			</nav>
			
			<div class="text-box">
				<h1>FILE REGISTRY SYSTEM</h1>
			</div>
	</section>
		
	
	<!----- FILE SECTION ---->
	
	<section class="file" id="file">
		<h1>FILE <i class="fa fa-file" aria-hidden="true"></i></h1>
		
		
		<a href="borrow.php" class="button">FILE BORROW</a>
	
	
	
	</section>
	
	
	
	
	
	
	
	
	
	
	
	<!----- JAVASCRIPT FOR TOGGLE MENU	------>
	
	<script>
		
		var navLinks = document.getElementById("navLinks");
		
		function showMenu(){
			navLinks.style.right = "0";
		}
		function hideMenu(){
			navLinks.style.right = "-200px";
		}
	</script>
		
		
	
	</body>

</html>
	