<?php
echo 'hello'
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="icon" type="image/x-icon" href="images/icon.png">
</head>

<body>
    <header>
        <a href="https://topdev.vn/blog/devops-la-gi/" class="logo" target="_blank">what's devops?</a>
        <ul>
            <li><a href="index.php#footer" class="active">Members</a></li>
            <li><a href="https://github.com/TrHgTung/php_app_deploy" target="_blank">GitHub</a></li>
            <li><a href="./components/getApi.php">Mẫu API</a></li>
            <li><a href="./components/weatherApi.php">Xem Thời Tiết</a></li>
        </ul>

    </header>
    <section>
        <img src="images/stars.png" alt="" id="stars">
        <img src="images/mountains_behind.png" alt="" id="mountains_behind">
        <h2 id="text">Welcome</h2>

        <a href="components/cat.php" id="btn">to DevOps</a>
        <!-- con meo nhay -->
        <img src="images/mountains_front.png" alt="" id="mountains_front">

    </section>
    <footer class="footer">
        <div class="grid footer__container">
            <div class="grid footer__container">
                <ul>
                    <li>
                        <h3>DevOps</h3>
                        <ul class="foot-item-box">
                            <li>Email: <a href="mailto:tungng14@gmail.com"><b>tungng14@gmail.com</b></a></li>
                        </ul>
                    </li>
                    <li>
                        <h3>Contact Me: </h3>
                        <ul>
                            <li>Facebook: <a href="https://www.facebook.com/nguyentuanhung12345" target="_blank"> Hoàng
                                    Tùng</a></li> <br />
                            <li>Facebook: <a href="#" target="_blank"> Như Ý</a></li> <br />
                            <li>Facebook: <a href="#" target="_blank"> Ánh Tuyết</a></li> <br />
                            <li>Facebook: <a href="#" target="_blank"> Minh Phát</a></li> <br />
                            <li>Facebook: <a href="#" target="_blank"> Trọng Hậu</a></li> <br />

                        </ul>
                    </li>
                </ul>
            </div>
    </footer>
</body>

</html>