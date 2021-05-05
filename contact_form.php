<?php 
    session_start(); 
    $mode = 'input'; 
    $errmessage = array(); 
    if( isset($_POST['back']) && $_POST['back'] ){

    } else if( isset($_POST)['confirm']) && $_POST['confirm'] ){
        //確認画面
        if()
    }


?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>お問い合わせフォーム</title>
</head>
<body>
    <?php if( $mode == 'input'  ){ ?>
        <!--　入力画面-->
    <?php 
        if( $errmessage ){
        echo '<div style="color:red;">';
        echo implode('<br>', $errmessage );
        echo '</div>'; 
        }
    ?>
    <form action="./contactform.php" method="post">
        名前<input type="text" name="fullname" value="">
        Eメール<input type="email" name="email" value="">
        本文<textarea name="message" id="" cols="" rows=""></textarea>
        <input type="submit" name="confirm" value="確認" class="button">
    </form>
</body>
</html>

