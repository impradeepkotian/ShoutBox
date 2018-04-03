<?php include 'db.php'; ?>
<?php
	//create select query
	$query = "SELECT * from shouts ORDER BY id DESC";
	$shouts = mysqli_query($con,$query); 
?>
<!DOCTYPE html>
<html>
	<head>
	<title>SHOUTBOX</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="icon"  href="img/logo.jpg">  
	</head>
<body>
	<div id="container">
		<header>
			<h1>SHOUT IT! ShoutBox</h1>
		</header>
		<div id="shouts">
			<ul>
				<?php while($row = mysqli_fetch_assoc($shouts)){?>
				<li class="shout"><span><?php echo $row['time']?>- </span><strong><u><?php echo $row['user'];?></u></strong>:<i>&nbsp;<?php echo $row['message'];?></i></li>
				<?php }?>
			</ul>
		</div>
		<div id="input">
			<?php if(isset($_GET['error'])){ ?>
			<div class="error"><?php echo $_GET['error']; ?></div>
			<?php } ?>
			<form method="post" action="process.php">
				<input type="text" class="form-control" name="user" placeholder="Enter Your Name"/>				
				<textarea class="form-control" cols="15" id="comment" name="message" placeholder="Enter Message"></textarea>
				<br/>
				<input class="shout-btn" type="submit" name="submit" value="Shout It Out!"/>
			</form>
		</div>
	</div>
</body>
</html