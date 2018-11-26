<?php
$conn = mysqli_connect('localhost', 'root', 'follish', 'demo1');

$query = mysqli_query($conn, 'select * from users');

while ($row = mysqli_fetch_assoc($query)) {
  $data[] = $row;
}

// 一行代码搞定
// 允许跨域请求
//      Access-Control-Allow-Origin:  http://www.YOURDOMAIN.com             // 设置允许请求的域名，多个域名以逗号分隔

//      Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS       // 设置允许请求的方法，多个方法以逗号分隔

//      Access-Control-Allow-Headers: Authorization                         // 设置允许请求自定义的请求头字段，多个字段以逗号分隔

//      Access-Control-Allow-Credentials: true                              // 设置是否允许发送 Cookies

header('Access-Control-Allow-Origin: *');

header('Content-Type: application/json');
echo json_encode($data);

?>