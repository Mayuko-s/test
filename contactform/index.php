<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>お問合わせフォームを作る</title>
    <link rel="stylesheet" type="text/css" href="style.css">     
</head>

    
<body>

    <h1>お問合わせフォーム</h1>
    
    <!--php確認-->
    <?php echo "test" ?>
    
    <!--postメソッド、action=送信先ファイル名-->
    <form method="post" action="mail_confirm.php">
        
        <div>
            <label>名前</label>
            <br>
            <!--name=箱の名前-->
            <!--「戻る」ボタン押下時入力された値を保持、required:入力を求める-->
            <input type="text" class="text" size="35" name="name" value="<?php if(!empty($_POST['name'])){echo $_POST['name'];} ?>" required>
        </div>
     
        <div>
            <label>メールアドレス</label>
            <br>
            <input type="text" class="text" size="35" name="mail" value="<?php if(!empty($_POST['mail'])){echo $_POST['mail'];} ?>" required>
        </div>
     
        <div>
            <label>年齢</label>
            <br>
            <select class="dropdown" name="age" required>
                <option>選択してください</option>
                <script>
                    for(var i=18; i<=65; i++){
                        document.write("<option value=" + i + <?php if(!empty($_POST['age'])){echo $_POST['age'];} ?>  + ">" + i + "歳</option>");
                    }
                </script>
                
            </select>
        </div>
     
        <div>
            <label>コメント</label>
            <br>
            <!--textareaの場合は要素の間にphp文を入れる-->
            <textarea cols="35" rows="7" name="comments" <?php if(!empty($_POST['comments'])){echo $_POST['comments'];} ?> 
            required></textarea>
        </div> 
        
        <div>
            <input type="submit" class="submit" value="送信する">
        </div>
     
    </form>
    
 </body>
</html>