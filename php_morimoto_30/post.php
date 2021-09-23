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
<div id="wapper">

<p id="title">新規会員登録</p>

<form method="POST" action="write.php">
    <div class="flex">
        <p>メールアドレス :<br><span class="s">*お客様IDとなります</span></p><input type="email" name="mail" class=input >
    </div >
    <div class="flex">
        <p>パスワード :</p><input type="password" name="pass" class=input >
    </div>
    
    <div class="flex">
        <p>お名前 :</p><input type="text" name="name" class=input >
    </div>
    <div class="flex">
        <p>電話番号 :</p><input type="tel" name="tel" class=input placeholder="ハイフン無しでご記入ください">
    </div>
    

    <input type="submit" value="登録" class="button">


</form>
</div>




    

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>