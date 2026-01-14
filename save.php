<?php
// index.phpから送られてきたデータを受け取る
$task = $_POST['task_name'];

// DB接続
$conn = mysqli_connect("RDSのエンドポイント", "ユーザー名", "パスワード", "DB名");

// DBに保存
$sql = "INSERT INTO tasks (task_name) VALUES ('$task')";
mysqli_query($conn, $sql);

// 保存が終わったら戻る
header("Location: index.php");
exit;
?>