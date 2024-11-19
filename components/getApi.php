<?php
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API Example</title>
    <script src="./getApi.js" defer></script>
    <link rel="stylesheet" type="text/css" href="../css/getApi.css" >
    <link rel="icon" type="image/x-icon" href="../images/icon.png">
</head>
<body>
    <!-- no fucking session here -->
    <header>
        <a href="#" class="logo">API</a>
        <ul>
            <li><a href="../index.php" class="active">Quay lại Home</a></li> 
        </ul>
    </header>
    <section>
        <img src="../images/stars.png" alt="" id="stars">
        <img src="../images/mountains_behind.png" alt="" id="mountains_behind">
        <center>
            <div class="search">
                <i class="fa-solid fa-magnifying-glass"></i>
                <input type="text" name="searchBar" id="searchBox" placeholder="Tìm (Max 100).." >
                <i class="fa-solid fa-arrow-right"></i>
            </div>
            
        </center>
        <img src="../images/mountains_front.png" alt="" id="mountains_front">
    </section>
    
    <footer class="footer">
        <h2>Result ..</h2>
        <div class="search__container" id="search__containerID">
            <!-- render form js file -->
        </div>
        <div class="pokemon__container" id="pokemon__containerID">
             <!-- render from js  file -->
        </div>
        
    </footer>
</body>
</html>