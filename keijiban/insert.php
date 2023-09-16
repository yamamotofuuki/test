<?php

mb_internal_encoding("utf8");

$pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","mysql");

$handlename = $_POST['handlename'];
$title = $_POST['title'];
$comments = $_POST['comments'];

//バリデーションを追加
if (empty($handlename) || empty($title) || empty($comments)) {
     // 未入力のフィールドがある場合、エラーメッセージを表示して元のページに戻る
    header("Location: http://localhost/diworks_keijiban/index.php?error=1");
    exit(); // この時点でスクリプトを終了
}

$pdo ->exec(
    "insert into diworks_keijiban(handlename,title,comments)value
    ('".$_POST['handlename']."','".$_POST['title']."','".$_POST['comments']."');"
);       /*データベースに格納する際のinsert文*/

header("Location:http://localhost/diworks_keijiban/index.php");
        /* りダイレクト処理　投稿した画面に戻る*/
