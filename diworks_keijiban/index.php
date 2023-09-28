<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
<title>diworksblog 掲示板</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
    
<body>
    
<?php
    
mb_internal_encoding("utf8");
$pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","root");
//PDOでselect文を使う
//from テーブル名
$stmt = $pdo->query("select * from diworks_keijiban");

?>
    <div class="container">
        
        <header>
            <img src="diblog_logo.jpg">
            <ul>
                <li>トップ</li>
                <li>プロフィール</li>
                <li>D.I.Blogについて</li>
                <li>登録フォーム</li>
                <li>問い合わせ</li>
                <li>その他</li>    
            </ul>
        </header>
        
        <main>
        
            <div class="left">
                
                <h1>プログラミングに役立つ掲示板</h1>
                
                <div class="nyuryoku">
               
                    <h2>入力フォーム</h2>
                    
                    <!--postメソッド、action=送信先ファイル-->
                    <form method="post" action="insert.php">
                        
                        <div>
                            <label>ハンドルネーム</label><br>
                            <!--required:入力を求める-->
                            <input type="text" class="text" size="50" name='handlename' required>
                        </div>

                        <div>
                            <label>タイトル</label><br>
                            <input type="text" class="text" size="50" name='title' required>
                        </div>

                        <div>
                            <label>コメント</label><br>
                            <textarea cols="80" rows="12" name='comments' required></textarea>
                        </div>

                        <input type="submit" class="submit" value="投稿する">
                    
                    </form>

                </div>
                
        
                <?php
                //繰り返し投稿内容を追加していく
                //stmt=statement, fetch=go and get
                while($row = $stmt->fetch()){

                    echo "<div class='kiji'>";
                    echo "<h3>".$row['title']."</h3>";
                    echo "<div class='contents'>";
                    echo $row['comments'];
                    echo "<div class='handlename'>posted by ".$row['handlename']."</div>";
                    echo "</div>";
                    echo "</div>";
                    
                }
                
                ?>
            </div>
            
            
            <div class="right">
                <h2>人気の記事</h2>
                <li>PHPオススメ本</li>
                <li>PHP MyAdminの使い方</li>
                <li>いま人気のエディタTops</li>
                <li>HTMLの基礎</li>

                <h2>オススメリンク</h2>
                <li>ﾃﾞｨｰｱｲﾜｰｸｽ株式会社</li>
                <li>XAMPPのダウンロード</li>
                <li>Eclipseのダウンロード</li>
                <li>Bracketsのダウンロード</li>

                <h2>カテゴリ</h2>
                <li>HTML</li>
                <li>PHP</li>
                <li>MySQL</li>
                <li>JavaScript</li>
            </div>
            
            <footer>
                Copyright D.I.Works| D.I.blog is the one which provides A to Z about  programming
            </footer>
        </main>
    
    </div>
</body>

</html>