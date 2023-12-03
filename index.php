<?php 
  session_start();
  // 以下是密碼檢查的程式碼 
  $account = $_POST["account"];
  $password = $_POST["password"];
  if ($account!="" && $password!="") {
    if ($account=="jasmi" && $password=="a2611511")
    {
        $_SESSION["user"] = "administrator";
    }
  }
?>
<?php include "bootstrap.php" ?>
<title>黃俞絜的入口網站</title>
</head>

<body>
    <div class="container">
      <h1 class="p-3 mb-2 bg-danger-subtle text-emphasis-danger text-center" style="letter-spacing:10px;">歡迎來到黃俞絜的網站</h1>
        <?php include "header.php"; ?>
<?php
  if ($_SESSION["user"] !="administrator") {
?>
<form action="index.php" method="POST">
<div class="p-3 mb-2 bg-warning-subtle text-emphasis-warning text-center " style="letter-spacing:10px;line-height: 1.5;">
  帳號：<input type=text size=10 name="account"><br>
  密碼：<input type=password size=10 name="password"><br>
  <input type=submit value="登入">
  <input type=reset value="清除">
</div>
</form>
<?php
  } else {
    echo '<span style="font-size: 30px; letter-spacing:10px;line-height: 3;">'.'<div class="text-center">'.'<mark>'."歡迎點選上面功能表!!!".'</mark>'.'</div>';
  }
?>      
    </div>
<?php include "footer.php" ?>