<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
    <title>LoM 会員登録</title>

    <link rel="icon" href="">
    <link rel="stylesheet" href="css/post.css">
    <link rel="stylesheet" href="css/reset.css">

</head>
<body>

<?php

include("funcs.php");

$name = $_POST['name'];
$mail = $_POST['mail'];
$tel = $_POST['tel'];
$tel2 = substr($tel, 0,3) .'-'. substr($tel, 3,4) .'-'. substr($tel, 7,4);

// 登録日
date_default_timezone_set('Asia/Tokyo');
$date = date("Y/m/d");

// echo $date;
// echo $name;
// echo $mail;
// echo $tel;



// 配列化

// 連想配列→ファイルからうまく取り込めず断念。。。
// $cosinfo = array(
//     'ID' => $mail,
//     'indata' => $date,
//     'name' => $name ,
//     'tel' => $tel
// );


$cosinfo = array($mail, $name, $tel, $date, $tel2 );

// echo $cosinfo['tel'];
// var_dump($cosinfo);

// json化
$json = json_encode($cosinfo). "\n";


?>


<div id="wapper">

<p id="title">登録情報確認</p>

<!-- <form method="POST" action="kakunin.php"> -->
    <div class="flex">
        <p>お名前 :</p><p class=input ><?= h($name); ?></p>
    </div >
    <div class="flex">
        <p>メールアドレス/ID :</p><p class=input ><?= h($mail); ?></p>
        
    </div>
    
    <div class="flex">
        <p>電話番号 :</p><p class=input ><?= h($tel2); ?></p>
    </div>
   
    <div class="flex2">
        <div><input type="submit" value="登録" class="button" name="touroku" onclick="location.href='read.php'"></div>
        <div><input type="button" value="修正" class="button" onclick= "location.href='post.php'"></div>
    </div>

<!-- </form> -->
</div>
    


<?php
// 登録ボタンを押したら下記の処理にしたい。時間あったら挑戦。
$file = fopen("data/data.txt", "a" ); //ファイルOPEN 

fwrite( $file, $json ); //書込みです
fclose( $file ); //ファイル閉じる


// 連想配列→ゲットしたものをうまく表示出来ないので、一旦凍結
// $file = fopen("data/data.txt", "a" ); //ファイルOPEN 
    // foreach($cosinfo as $key => $value){
    // fwrite( $file, $key.'='.$value. "\n" ); //書込みです 

// }

// fclose( $file ); //ファイル閉じる

?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>