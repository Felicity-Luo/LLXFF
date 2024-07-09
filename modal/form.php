<!-- 向数据库插入数据 -->
<?php
// 向数据库插入数据
$servername = "localhost";
$username = "llxff";
$password = "Luo116106";
$dbname = "llxff";

// 创建链接
$conn = mysqli_connect($servername, $username, $password, $dbname);
// 检查链接
if (!$conn) {
    die("连接失败: " . mysqli_connect_error());
}

$sql="INSERT INTO Message (name, email, message)
VALUES
('$_POST[name]','$_POST[email]','$_POST[message]')";

if (mysqli_multi_query($conn, $sql)) {
    echo "<script> alert('你给我说的我已经收到了。') ;history.go('-1');</script>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
 
//关闭数据库的链接
mysqli_close($conn);
?>