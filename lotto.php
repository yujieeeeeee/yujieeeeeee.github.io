<?php include "bootstrap.php" ?>

<body>
    <div class="container">
        <h1 class="p-3 mb-2 bg-danger-subtle text-emphasis-danger" style="letter-spacing:10px;">樂透號碼預測</h1>
        <?php include "header.php"; ?>
        <?php
        echo "<br>";
        echo '<span style="font-size: 30px; letter-spacing:10px;">'."<mark>本期樂透特別號預測：" . rand(1, 45) . "</mark>".'</span>';
        ?>
        <p class="text-danger" style="font-size: 25px;line-height: 3;"><u>註:此為電腦隨機預測，不准請勿責怪!!!</u></p>
        <?php include "footer.php" ?>
    </div>
    