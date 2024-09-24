<?php
	
	include 'config.php';

	if (isset($_POST['post_comment'])) {

		$name = $_POST['name'];
		$message = $_POST['message'];
		
		$sql = "INSERT INTO comment (name, message)
		VALUES ('$name', '$message')";

		if ($conn->query($sql) === TRUE) {
		  echo "";
		} else {
		  echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Save Our Spot</title>
    <link rel = "icon" href = "../Resources/Icon/web-icon.png" type = "image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" 
    integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" 
    crossorigin="anonymous" 
    referrerpolicy="no-referrer" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../CSS/spot_style.css"> 
</head>
<body>
    <div class="header">
        <nav>
            <input type="checkbox" id="check">
            <label for="check" class="checkbtn">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </label>
            <img src="../Resources/Icon/web-icon.png" class="logo">
            <label class="title">Wonders of Cam.Norte</label>

            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="destination.php">Destination</a></li>
                <li><a href="festival.php">Festivals</a></li>
                <li><a href="spot.php">Save our spot</a></li>
            </ul>
        </nav>
    </div>

    <div class="box1">
        <h1 class="text">EXPLORE WHILE 
            <br>
            PRACTICING SUSTAINABILITY.</h1>
    </div>
    <div class="box2">
        <h1 class="text">ALWAYS BE A 
            <br>
            RESPONSIBLE TOURIST</h1>
    </div>
    <div class="box3">
        <h1 class="text">RESPECT EVERYONE 
            <br>AROUND YOU</h1>
    </div>

    <div class="wrapper">
		<form action="" method="post" class="form">
            <h2>Leave a comment here!!!</h2>
			<input type="text" class="name" name="name" placeholder="Name">
			<br>
			<textarea name="message" cols="30" rows="10" class="message" placeholder="Message"></textarea>
			<br>
			<button type="submit" class="btn" name="post_comment">Post Comment</button>
		</form>
	</div>

	<div class="content">
		<?php

			$sql = "SELECT * FROM comment";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			  while($row = $result->fetch_assoc()) {
			   
		?>
		<h3><?php echo $row['name']; ?></h3>
		<p><?php echo $row['message']; ?></p>
        <hr class="line">
		<?php } } ?>
	</div>

    <footer>
        <div class="foot_container">
                <div class="foot_logo">
                    <img src="../Resources/Icon/web-icon.png" alt="logo">
                </div>
            <div class="foot_vl"></div>
            <div class="foot_title">
                <h1>Wonders Of Camarines Norte</h1> 
                    <br><hr><br>
                <h2><i>Follow us on </i> </a></h2>   
                <a href="https://www.facebook.com/groups/992573388177226/posts/1204557416978821/" target="_blank">
                    <img class="fblogo" src="../Resources/Icon/facebook.png" alt="fb logo">
            </div>
        </div>
    </footer>
</body>
</html>