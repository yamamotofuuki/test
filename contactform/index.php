<?php
// セッション開始または再開
session_start();

// POSTリクエストを処理
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //フォームから送信されたデータをセッション変数に保存
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['mail'] = $_POST['mail'];
    $_SESSION['age'] = $_POST['age'];
    $_SESSION['comments'] = $_POST['comments'];
}

// セッション変数から値を取得し、フォームに表示
$name = isset($_SESSION['name']) ? $_SESSION['name'] : '';
$mail = isset($_SESSION['mail']) ? $_SESSION['mail'] : '';
$age = isset($_SESSION['age']) ? $_SESSION['age'] : '';
$comments = isset($_SESSION['comments']) ? $_SESSION['comments'] : '';
?>

<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>問い合わせフォーム作成</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
    
  <body>
    
    <h1>お問合せフォーム</h1>
    <form method="post" action="mail_confirm.php">
        
      <div>
        <label>名前</label><br>
        <input type="text" class="text" size="35" name="name" value="<?php echo $name; ?>">
      </div>         <!-- name="xxx"部分は箱の名前（任意-->
      
      <div>
        <label>メールアドレス</label><br>  
        <input type="text" class="text" size="35" name="mail" value="<?php echo $mail; ?>">
      </div>
        
      <div>
        <label>年齢</label><br>
        <select class="dropdown" name="age">
          <option>選択してください</option>
            
             <?php
             for ($i = 18; $i <= 65; $i++) {        //年齢コードの意味が理解できないw
                 echo '<option value="'.$i.'"';
                 
                  if ($age == $i) {
                      echo 'selected="selected"';
                  }
                  echo '>'.$i.'歳</option>';
             }
             ?>
            
            
        </select>
      </div>
        
      <div>
        <label>コメント</label><br>
          <textarea cols="35" rows="7" name="comments"><?php echo $comments; ?></textarea>
      </div>
        
      <div>
          <input type="submit" class="submit" value="送信する">
      </div>
      
    </form>
  
  </body>
</html>   
  