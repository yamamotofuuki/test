<?php
session_start();

//フォームからのデータをセッションに保存
$_SESSION['name'] = $_POST['name'];
$_SESSION['mail'] = $_POST['mail'];
$_SESSION['age'] = $_POST['age'];
$_SESSION['comments'] = $_POST['comments'];

?>

<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>問い合わせフォーム作成</title>
    <link rel="stylesheet" type="text/css" href="style2.css">
  </head>
    
  <body>
    <h1>お問合せ内容の確認</h1>
    
    <div class="confirm">
        <p>お問合せ内容はこちらで宜しでしょうか？<br>
           よろしければ「送信する」ボタンを押してください。
        </p>
      
        <p>名前<br>
            <?php echo $_POST['name'];?>  <!--フォームから送信された名前のデータを表示-->
        </p>
        
        <p>メールアドレス<br>
            <?php echo $_POST['mail'];?>
        </p>
        
        <p>年齢<br>
            <?php echo $_POST['age'];?>
        </p>
        
        <p>コメント<br>
            <?php echo $_POST['comments'];?>
        </p>
        
    <form action="index.php">
        <input type="submit" class="button1" value="戻って修正する">
    </form>
    
    <form action="insert.php" method="post">
        <input type="submit" class="button2" value="登録する">
            <!--htmlから引き渡されたpostをinsert.phpへと送信-->
        <input type="hidden" value="<?php echo $_POST ['name'];?>" name="name">
        <input type="hidden" value="<?php echo $_POST['mail'];?>" name="mail">
        <input type="hidden" value="<?php echo $_POST['age'];?>" name="age">
        <input type="hidden" value="<?php echo $_POST ['comments'];?>" name="comments">
    </form>　　　　<!--隠しフィールド（フォームのデータをユーザーに表示せずに送信する）-->
        
    </div>
  </body>
</html>
