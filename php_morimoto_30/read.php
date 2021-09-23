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

// 連想配列うまく扱えず一旦凍結
// $cosinfo = file("data/data.txt");
// $result = array();
// foreach($cosinfo as $row){

   
//     $params = explode("=",$row);
//     $result[$params[0]] = $params[1];
    
//     var_dump($result);
    
// }



// ファイルを開く
$openFile = fopen('data/data.txt', 'r');

// ファイル内容を1行ずつ読み込んで出力

while ($str = fgets($openFile)) {
    // echo $str ;


    // $read = explode("," , $str);

    // echo $read ;

$jsond = json_decode($str,ture);
    // echo $jsond ;
    // var_dump($jsond);

    $id = $jsond[0];
    // echo $id ;

    $name2 = $jsond[1];
    $tel2 = $jsond[2];
    $data2 = $jsond[3];
    $tel3 = $jsond[4];

    // echo $name2;
    // echo $tel2;
    // echo $data2;
    // echo $tel3;

}

// ファイルを閉じる
fclose($openFile);

?>

<div id="wapper">

<span id="title">以下の内容で登録いたしました。</span><br>
<span >登録日：</span><span><?php echo $data2 ; ?></span>
<div class="kara"></div>


    <div class="flex">
        <p>お名前 :</p><p class=input ><?php echo $name2 ; ?></p>
    </div >
    <div class="flex">
        <p>メールアドレス/ID :</p><p class=input ><?php echo $id ; ?></p>
        
    </div>
    
    <div class="flex">
        <p>電話番号 :</p><p class=input ><?php echo $tel3 ; ?></p>
    </div>
   
    <div class="flex2">
        <div><input type="button" value="data確認" class="button" onclick= "location.href='data/data.txt'"></div>
    </div>

    

</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>


