<?php include "bootstrap.php" ?>
<title>匯率換算</title>
</head>

<body>
    <div class="container">
        <h1 class="p-3 mb-2 bg-danger-subtle text-emphasis-danger "style="letter-spacing:10px;">匯率換算</h1>
        <?php include "header.php"; ?>
        <form action="rate.php" method=POST>
            <div class="p-3 mb-2 bg-warning-subtle text-emphasis-warning " style="font-size: 23px;letter-spacing:10px;line-height: 3;">
                新台幣：<input type=text size=10 name=ntd>元
                <input type=submit class="btn btn-warning" value="開始轉換成美金">
            </div>
        </form>
        <?php

        $NTD = $_POST["ntd"];
        if ($NTD == 0 || $NTD == "") {
            $NTD = 10000;
        }
        $USD = $NTD * 0.033;
        echo '<span style="font-size: 25px;letter-spacing:10px;line-height: 1.7">'."新台幣" . $NTD . "元換成美金是" . $USD . "元".'</span>';
        ?>
        <p  style="font-size: 25px;letter-spacing:10px;line-height:3 ;"><a href="https://rate.bot.com.tw/xrt" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">每日匯率查詢</a></p>
        <?php include "footer.php" ?>
    </div>

    
  
</body>

</html>