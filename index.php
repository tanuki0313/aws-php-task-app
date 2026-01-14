<!DOCTYPE html>
<html>
<head>
    <title>AWSタスク管理</title>
</head>
<body>
    <h1>タスク管理アプリ</h1>

    <form action="save.php" method="post">
        <input type="text" name="task_name" placeholder="例：AWS勉強" required>
        <button type="submit">追加</button>
    </form>

    <hr>

    <h2>現在のタスク一覧</h2>
    <ul>
        <?php
        // DB接続設定
        $conn = mysqli_connect("RDSのエンドポイント", "ユーザー名", "パスワード", "DB名");

        // データの読み出し（idとtask_nameを取得する）
        $result = mysqli_query($conn, "SELECT id, task_name FROM tasks");

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<li>";
            echo htmlspecialchars($row['task_name']);
            // 削除リンク（idをdelete.phpに送る）
            echo " <a href='delete.php?id=" . $row['id'] . "'>[削除]</a>";
            echo "</li>";
        }
        ?>
    </ul>
</body>
</html>