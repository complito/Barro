<!DOCTYPE html>
<html>
    <head>
        <title><?=$title?></title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="styles/main.css">
        <link rel="icon" type="image/png" sizes="16x16" href="images/favicon16x16.png">
        <link rel="icon" type="image/png" sizes="32x32" href="images/favicon32x32.png">
        <link rel="icon" type="image/png" sizes="192x192" href="images/favicon192x192.png">
        <link rel="icon" type="image/png" sizes="512x512" href="images/favicon512x512.png">
    </head>
    <body class="font">
        <div class="wrapper">
            <header class="h_70 w_full bg_191919">
                <div class="w_960 h_70 m_0_auto">
                    <a href="index.php">
                        <img src="images/barro_logo.png">
                    </a>
                    <div class="float_r">
                        <?=$links?>
                    </div>
                </div>
            </header>
            <div class="pad_b_100">
                <?=$content?>
            </div>
            <footer class="footer w_full">
                <div class="w_960 m_0_auto">
                    <div class="f_block float_l">
                        <span class="bold">+7 123 456 78-90</span><br>
                        info@barro.ru<br>
                        г. Екатеринбург, ул. Улица, д. 20                    
                    </div>
                    <div class="f_block float_r">
                        Пн-Пт: 12:00-06:00<br>
                        Сб-Вс: 14:00-06:00
                    </div>
                </div>
            </footer>
        </div>
    </body>
</html>