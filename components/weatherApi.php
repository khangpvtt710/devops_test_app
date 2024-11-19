<?php
$warning_remove = error_reporting(E_ERROR | E_PARSE);

    if(array_key_exists('submit', $_GET)){
        if(!$_GET['lat'] and !$_GET['lon']){
            $error = "Vui lòng nhập các giá trị!";
        }
        if(!$_GET['lat']){
            $error = "Vui lòng nhập vĩ độ!";
        }
        if(!$_GET['lon']){
            $error = "Vui lòng nhập kinh độ!";
        }
        if($_GET['lat'] and $_GET['lon']){
            $apiData = file_get_contents("https://api.openweathermap.org/data/2.5/weather?lat=".$_GET['lat']."&lon=".$_GET['lon']."&appid=4cf47caeefac3d6aa2b073f43c26faa3");
            // echo "$apiData";
            $xuLiJSON = json_decode($apiData, true);

            $weather = "<b>Tình trạng thời tiết: </b>".$xuLiJSON['weather']['0']['main'];
            $temperature = "<b>Nhiệt độ: </b>".$xuLiJSON['main']['temp']." độ F";
            $city = "<b>Địa điểm: </b>".$xuLiJSON['name'];
            $wind = "<b>Tốc độ gió: </b>".$xuLiJSON['wind']['speed']." km/h";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/weatherApi.css">
    <link rel="icon" type="image/x-icon" href="../images/icon.png">
    <title>Xem Thời Tiết</title>
</head>
<body>
<header>
        <a href="#" class="logo">API THỜI TIẾT</a>
        <ul>
            <li><a href="../index.php" class="active">Quay lại Home</a></li> 
        </ul>
    </header>
    <section>
        <img src="../images/stars.png" alt="" id="stars">
        <img src="../images/mountains_behind.png" alt="" id="mountains_behind">
        <center>
            <!-- <div class="search">
                <i class="fa-solid fa-magnifying-glass"></i>
                <input type="text" name="searchBar" id="searchBox" placeholder="Tìm (Max 100).." >
                <i class="fa-solid fa-arrow-right"></i>
            </div> -->
            <form action="" method="get">
                <p><label for="city" >Nhập tọa độ, sau đó nhấn Enter:</label></p>
                <p><input type="text" name="lon" id="lon" placeholder="Nhập Kinh Độ (Longitude)"></p>
                <p><input type="text" name="lat" id="lat" placeholder="Nhập Vĩ Độ (Latitude)"></p>
                <button type="submit" name="submit">Search</button>
            </form>
            
        </center>
        <img src="../images/mountains_front.png" alt="" id="mountains_front">
    </section>
    
    <footer class="footer">
        <h2>Result ..</h2>
        <div class="pokemon__infomationContainer">
            <?php
                 echo $error;
                // print_r($city); // dia diem
                // print_r($weather); // tinh trang thoi tiet
                // print_r($temperature); // nhiet do       
                // print_r($wind); // toc do gio

                echo nl2br($city."\n".$weather."\n".$temperature."\n".$wind);
            ?>
        </div>
    </footer> 
</body>
</html>