<?php
session_start();

include "../database.php";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<head>
    <meta charset="utf-8">
    <script src="main.js"></script>
</head>

<div class="container">
  <h1 class="p-3 mb-2 bg-danger-subtle text-emphasis-danger"style="letter-spacing:7px;">我的電視選台器</h1>
  <?php include "header.php"; ?>
  <?php
    $sql = "SELECT * FROM tvinfo;";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo '<select id="tvselect">';
        while ($row = $result->fetch_assoc()) {
            echo "<option value='" .
                $row["vid"] . "'>" .
                $row["title"] . "</option>";
        }
        echo "</select>";
    }
    ?>
    <button onclick="changeTV()" class="btn btn-warning btn-lg">切換頻道</button>
    <br><br>
    <div align="center">
        <table width="800">
            <tr>
                <td align="center">
                    <h2 id="tvtitle"><mark>請選擇一個電視台</mark></h2>
                </td>
            </tr>
            <tr>
                <td align="center">
                    <div id="tvdisplay">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/m_dhMSvUCIc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen>
                        </iframe>
                    </div>
                </td>
            </tr>
        </table>
    </div>
    <?php include "../footer.php"; ?>
  </div>

</html>