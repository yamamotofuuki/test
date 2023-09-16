<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>掲示板の作成</title>
    <link rel="stylesheet" type="text/css" href="style.css">    
  </head>
    
<body> 
     
    <?php
       
      mb_internal_encoding("utf8"); /*文字化け防止*/
    
      $pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","mysql"); /*データベース接続*/
    
      $stmt = $pdo->query(
          "select * from diworks_keijiban" /*情報を抽出する際のselect文*/
      ); 
    
    ?>
    
<img src="diblog_logo.jpg" width="290px">
  
<header>
  <div class="logo"></div>
    <ul>
        <li>トップ</li>
        <li>プロフィール</li>
        <li>D.IBlogについて</li>
        <li>登録フォーム</li>
        <li>問い合わせ</li>
        <li>その他</li>
    </ul>
</header>
    
<main>
  <div class="main-container">
      <div class="left">
          <h1>プログラミングに役立つ掲示板</h1>
          <form method="post" action="insert.php">
          
              <h2>入力フォーム</h2>
          
              <div>
                  <label>ハンドルネーム</label><br>
                  <input type="text" class="text" size="35" name="handlename">
              </div>
          
              <div>
                  <label>タイトル</label><br>
                  <input type="text" class="text" size="35" name="title">
              </div>
            
              <div>
                  <label>コメント</label><br>
                  <textarea cols="65" rows="7" name="comments"></textarea>
              </div>
              
          <?php
                 // もしGETパラメータにerrorが含まれている場合、エラーメッセージを表示
              if (isset($_GET['error']) && $_GET['error'] == 1) {
                  echo "<div class='error'>⚠未入力項目があります</div>";
              }                         // メッセージの色CSSで指定しているよ
          ?>
              
              <div>
                  <input type="submit" class="submit" value="投稿する">
              </div>
                
          </form>
          
    <?php
          
    while ($row = $stmt->fetch()){  /*DBからレコードを取り出しwhile文でループ処理*/
        echo"<div class='title'>";
        echo"<h3>".$row['title']."</h3>";
        echo"<div class='nakami'>";
        echo $row['comments'];
        echo"<div class='name'>posted by ".$row['handlename']."</div>";
        echo"</div>";
        echo"</div>";
    }              /* echo:取得した情報の表示と表示場所指定*/
        
    ?>
          
      </div>
  </div>
    
  <div class="right">
      <h4>人気の記事</h4>
      <h6>PHPオススメの本<br>
          PHP Myadminの使い方<br>
          いま人気のエディタTops<br>
          HTMLの基礎
    　</h6>
      <h4>オススメリンク</h4>
      <h6>ディーアイワークス株式会社<br>
          XAMPPのダウンロード<br>
          Eclipseのダウンロード<br>
          Braketsのダウンロード
      </h6>
      <h4>カテゴリ</h4>
      <h6>HTML<br>
          PHP<br>
          MySQL<br>
          Javascript
      </h6>
  </div>
</main>
 
<footer>
    Copyright D.I.works|D.I.blog is the one which provides A to Z about programming
</footer>
    
</body>    
</html>
