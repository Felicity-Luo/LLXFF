<!-- 创建数据库 -->
<?php
// 创建数据库

$servername = "localhost";   //服务器名
$username = "dome22";      //用户名
$password = "dome22";      // 密码
 
// 创建连接
$conn = new mysqli($servername, $username, $password);
// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
} 
 
// 创建数据库
$sql = "CREATE DATABASE form";    //创建myDB的数据库
if ($conn->query($sql) === TRUE) {
    echo "数据库创建成功";
} else {
    echo "Error creating database: " . $conn->error;
}
 
$conn->close();
?>


<!-- 创建数据表 -->
<?php
//创建数据表
$servername = "localhost";     //服务器名
$username = "dome22";         //用户名
$password = "dome22";         //密码
$dbname = "dome22";           //数据库名
 
// 创建连接
$conn = mysqli_connect($servername, $username, $password, $dbname);
// 检测连接
if (!$conn) {
    die("连接失败: " . mysqli_connect_error());
}
 
// 使用 sql 创建数据表          创建Message名的数据表 
$sql = "CREATE TABLE Message (     
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(30) NOT NULL,
email VARCHAR(50) NOT NULL,
message VARCHAR(300),
reg_date TIMESTAMP
)";
 
if (mysqli_query($conn, $sql)) {
    echo "数据表 Message 创建成功";
} else {
    echo "创建数据表错误: " . mysqli_error($conn);
}
 
mysqli_close($conn);
?>

<!-- 向数据库插入数据 -->
<?php
// 向数据库插入数据
$servername = "localhost";
$username = "dome22";
$password = "dome22";
$dbname = "dome22";

// 创建链接
$conn = mysqli_connect($servername, $username, $password, $dbname);
// 检查链接
if (!$conn) {
    die("连接失败: " . mysqli_connect_error());
}

$sql="INSERT INTO Persons (FirstName, LastName, Age)    //数据表表名
VALUES
('$_POST[firstname]','$_POST[lastname]','$_POST[age]')";  //form表 表ID or name

if (mysqli_multi_query($conn, $sql)) {
    echo "新记录插入成功";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
 
mysqli_close($conn);
?>