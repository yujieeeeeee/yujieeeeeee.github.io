<?php
session_start();
include "bootstrap.php";
include "database.php";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
<div class="container">
  <h1 class="p-3 mb-2 bg-danger-subtle text-emphasis-danger">直播新聞台資料編輯</h1>
  <?php include "header.php"; ?>
  <?php if ($_SESSION["user"]=="administrator") {
    ?>
  <form action="addtv.php" method="POST">
    <div class="p-3 mb-2 bg-warning-subtle text-emphasis-warning " style="letter-spacing:7px;line-height: 1.5;">
      新聞台名稱：<input type=text name=title size=50 required><br><br>
      新聞台vid：<input type=text name=vid size=10 required><br>
      <input type=submit class="btn btn-warning" value="新增">
    </div>
  </form>
  <?php } ?>
  <hr>
  <?php
  $sql = "SELECT * FROM tvinfo;";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    echo "<table class='table table-striped table-danger'>";
    echo "<tr><td>編號</td><td>電視台名稱</td><td>VID</td><td>管理</td></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>" .
          "<td>" . $row["title"] . "</td>" .
          "<td>" . $row["vid"] . "</td>" ;
          
  
        if ($_SESSION["user"]=="administrator") {
          echo "<td><a href='deltv.php?id="
          . $row["id"] . "' class='btn btn-outline-danger btn-sm'>刪除</a></td>";
        }
  
          
  
  
        echo "</tr>";
      }
      echo "</table>";
    } else {
      echo "0 results";
    }
    $conn->close();
    ?>
    <?php include "footer.php"; ?>
  </div>
  