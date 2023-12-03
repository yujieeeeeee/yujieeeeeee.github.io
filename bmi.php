<?php include "bootstrap.php" ?>
<title>BMI換算</title>
</head>

<body>

  <div class="container">
    <h1 class="p-3 mb-2 bg-danger-subtle text-emphasis-danger " style="letter-spacing:7px;">BMI換算</h1>
    <?php include "header.php"; ?>
    <form action="bmi.php" method="POST">
    <div class="p-3 mb-2 bg-warning-subtle text-emphasis-warning  " style="letter-spacing:10px;line-height: 1.5;">身高：<input type=text size=7 name="height">(公尺)<br><br>體重：<input type=text size=7 name="weight">(公斤)<br><br>
        <input type=submit class="btn btn-danger" value="開始計算"></div>
    </form>
    <?php
    $w = $_POST["weight"];
    $h = $_POST["height"];

    $bmi = round($w / $h ** 2, 2);
    
        echo '<span style="font-size: 22px;letter-spacing:7px;line-height: 2;">'."身高：" . $h . "公分，體重：" . $w . "公斤，則<strong>BMI是：</strong>" . "<strong>". $bmi . "</strong>"."<br>".'</span>';
        if ($bmi < 18.5) {
            echo '<span style="font-size: 22px;letter-spacing:7px;">'."<strong>「體重過輕」</strong>，需要多運動，均衡飲食，以增加體能，維持健康！".'</span>';
        }
    
    if ($bmi >= 18.5 && $bmi < 24) {
        echo '<span style="font-size: 22px;letter-spacing:7px;">'."恭喜！<strong>「健康體重」</strong>，要繼續保持！".'</span>';
    }
    if ($bmi >= 24 && $bmi < 28) {
        echo '<span style="font-size: 22px;letter-spacing:7px;">'."<strong>「體重過重」</strong>了，要小心囉，趕快力行「健康體重管理」！".'</span>';
    }
    if ($bmi >27) {
        echo '<span style="font-size: 22px;letter-spacing:7px;">'."啊～<strong>「肥胖」</strong>，需要立刻力行「健康體重管理」囉！".'</span>';
    }
    
  
    ?>
    <hr>
    <p class="p-3 mb-2 bg-danger-subtle text-emphasis-danger "style="font-size: 20px;letter-spacing:7px;">BMI值計算公式: <mark><u>BMI = 體重(公斤) / 身高2(公尺2)</u> </mark> <br>
    <strong>體重正常範圍為  BMI=18.5～24</strong></p>
    <?php include "footer.php" ?>
  </div>
  
  
</body>

</html>