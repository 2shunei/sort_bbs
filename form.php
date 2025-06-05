<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>一言掲示板 - 投稿</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>💬 一言掲示板</h1>
    <form action="post.php" method="post">
<<<<<<< HEAD
        <?php echo "ようこそ,",$_POST['name'],"さん";?>
        
=======
        <?php echo "ようこそ、",$_POST['name'] ,"さん";?>
>>>>>>> 8ecfd6c77f866658e2fb03ae794754b44ae89f3a
        <p>コメント：<br>
        <textarea name="comment" rows="4" cols="40" required></textarea></p>
        <p><button type="submit">投稿する</button></p>
    </form>
    <p><a href="view.php">▶ 投稿一覧を見る</a></p>
    <p><a href="login.php">ログアウト</a></p>
</body>
</html>
