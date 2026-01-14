<?php
// URLのidを受け取る
$id = $_GET['id'];

// DB接続
$conn = mysqli_connect("RDSのエンドポイント", "ユーザー名", "パスワード", "DB名");

// DBから削除する（idが一致するものだけ）
$sql = "DELETE FROM tasks WHERE id = $id";
mysqli_query($conn, $sql);

// 削除が終わったら一覧画面に戻る
header("Location: index.php");
exit;
?>