<!DOCTYPE html>
<html>
<head>
    <title>Welcome to Camarines Norte</title>
    <link rel = "icon" href = "../Resources/Icon/web-icon.png" type = "image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" 
    integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" 
    crossorigin="anonymous" 
    referrerpolicy="no-referrer" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="../CSS/home_style.css"> 
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

    <div class="image">
        <p class="qoute">LIFE SHOULD BE FILLED WITH 
            <br>
            COMFORT | DISCOVERIES | FREEDOM
        </p>
    </div>

    <div class="navigations">
        <div class="navigate">
            <img src="../Resources/Icon/location.png" class="nav_icons">
            <a href="destination.php" class="nav_title">Destinations</a>

        </div>

        <div class="navigate">
            <img src="../Resources/Icon/beach.png" class="nav_icons">
            <a href="festival.php" class="nav_title">Festivals</a>

        </div>

        <div class="navigate">
            <img src="../Resources/Icon/database.png" class="nav_icons">
            <a href="spot.php" class="nav_title">Save our spot</a>
            
        </div>

    </div>
    <hr class="line">

    <div class="home_content">
        <h1 class="home_title">
            Welcome to Camarines Norte!
        </h1>
        <p class="home_description">
            Discover the wonders of each location. Along its eastern shores, 
            Camarines Norte shares borders with Quezon and Camarines Sur, 
            two neighboring provinces. The fertile plains and valleys 
            of the coast contrast sharply with the rolling hills and mountains of the interior. 
            The Calaguas group of islands, for example, are a blessing in this regard. 
            As a result, the province is a great place to go boating or hiking.
        </p>
    </div>
    <div class="map_container">
        <div class="camnorte_map">
            <img src="../Resources/Image/map.jpg" class="map">
        </div>
    </div>

    <div class="adds">
        <div class="additionals">
            
            <div class="additional_content">
                <img src="../Resources/Image/tourist.png" class="content_images">
                <div class="info">
                    <h1>Travel Around</h1>
                    <h2>Places you haven't been before</h2>
                    <p>
                    View the wonders of each location. Each location
                    will surely make you come back again.
                    </p>
                    <a href="destination.php" class="button">Read More</a>
                </div>

            </div>

            <div class="additional_content">
                <img src="../Resources/Image/event.jpg" class="content_images">
                <div class="info">
                    <h1>Look And See</h1>
                    <h2>The colors of festivals</h2>
                    <p>
                    Attend a festival or fair, or other cultural events. View the colorful and fun events through which
                    each events comprises of something of their culture.
                    </p>
                    <a href="festival.php" class="button">Read More</a>
                </div>

            </div>
            
            <div class="additional_content">
                <img src="../Resources/Image/nature.jpg" class="content_images">
                <div class="info">
                    <h1>Nature Alert:</h1>
                    <h2>Be responsible</h2>
                    <p>
                        In every turn of life, in every where you go
                        you should be reminded to be mindful about the place you visit.
                    </p>
                    <a href="spot.php" class="button">Read More</a>
                </div>

            </div>
                
        </div>
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