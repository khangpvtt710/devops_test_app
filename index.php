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
        <a href="https://aws.amazon.com/vi/devops/what-is-devops/" class="logo" target="_blank">Devops là gì?</a>
        <ul>
            <li><a href="index.php#footer" class="active">Thành Viên</a></li>
            <li><a href="https://github.com/khangpvtt710/devops_test_app" target="_blank">GitHub</a></li>
            <li><a href="./components/getApi.php">Mẫu API</a></li>
            <li><a href="./components/weatherApi.php">Xem Thời Tiết</a></li>
        </ul>

    </header>
    <section>
        <img src="images/stars.png" alt="" id="stars">
        <img src="images/mountains_behind.png" alt="" id="mountains_behind">
        <h2 id="text">xin chào</h2>

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
                            <li>Email: <a href="mailto:Hongngoc108169@gmail.com"><b>Hongngoc108169@gmail.com</b></a></li>
                        </ul>
                    </li>
                    <li>
                        <h3>Liên hệ : </h3>
                        <ul>
                            <li>Facebook: <a href="https://www.facebook.com/miinee1081699?mibextid=LQQJ4d" target="_blank"> Hồng Ngọc</a></li> <br />
                            <li>Facebook: <a href="https://www.facebook.com/trhkhanggg710/" target="_blank"> Hoàng
                                    Khang </a></li> <br />

                        </ul>
                    </li>
                </ul>
            </div>
    </footer>
</body>

</html>
