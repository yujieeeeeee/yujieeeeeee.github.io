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
  <h1 class="p-3 mb-2 bg-danger-subtle text-emphasis-danger"style="letter-spacing:10px;" >班級健康管理</h1>
  <?php include "header.php"; ?>
  <?php if ($_SESSION["user"]=="administrator") {
    ?>
  <form action="add.php" method="POST">
    <div class="p-3 mb-2 bg-warning-subtle text-emphasis-warning"style="letter-spacing:5px;">姓名：<input type=text name=name size=10 class="border border-warning border border-4" required><br><br>
    身高：<input type=text name=height size=5 class="border border-warning border border-4" required>公分<br><br>
    體重：<input type=text name=weight size=5 class="border border-warning border border-4" required>公斤<br><br><input type=submit class="btn btn-warning" value="新增"></div>
    
    
  </form>
  <?php } ?>
  <hr>
  <?php
  $sql = "SELECT * FROM bodyinfo order by h desc";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    echo "<table class='table table-striped table-danger'>";
    echo "<tr><td>編號</td><td>姓名</td><td>身高</td><td>體重</td><td>管理</td></tr>";
    while ($row = $result->fetch_assoc()) {
      echo "<tr>";
      echo "<td>" . $row["id"] . "</td>" .
        "<td>" . $row["name"] . "</td>" .
        "<td>" . $row["h"] . "</td>" .
        "<td>" . $row["w"] . "</td>";

      if ($_SESSION["user"]=="administrator") {
        echo "<td><a href='del.php?id="
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
