<?php
mb_internal_encoding("utf8");
    
    //データベースに接続
    $pdo = new PDO(
        //データベース名、ホスト名
        "mysql:dbname=lesson01;host=localhost;",
        //ユーザ名
        "root",
        //パスワード
        "root"
    );

    //更新された行数を返す
    $pdo ->exec("insert into contactform(name,mail,age,comments)  values('".$_POST['name']."','".$_POST['mail']."','".$_POST['age']."','".$_POST['comments']."');");

?>


<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
    <title>お問合わせフォームを作る</title>
    <link rel="stylesheet" type="text/css" href="style2.css">
</head>

<body>
    <h1>お問合わせフォーム</h1>
    
    <div class="confirm">
        <p>
            お問い合わせ有難うございました。<br>
            3営業日以内に担当者よりご連絡差し上げます。
        </p>
    </div>

</body>
</html>