<?php



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pets3";
 
// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
} 
 
$sql = "SELECT * FROM unit";
$result = $conn->query($sql);
 
if ($result->num_rows > 0) {
    // 输出数据
    while($row = $result->fetch_assoc()) {
      
      echo json_encode($row);
      break;
        echo   $row["id"] . $row["order"] . $row["title"] . $row["remark"] . "<br>";
    }
} else {
    echo "0 结果";
}
$conn->close();
?>