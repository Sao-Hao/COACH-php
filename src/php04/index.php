<?php
require_once('config/status_codes.php');

$random_numbers=array_rand($status_codes,4);

foreach($random_numbers as $index){
$options[]=$status_codes[$index];
}
$question=$options[mt_rand(0,3)];


?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Status Code Quiz</title>
<link rel="stylesheet" href="css/sanitize.css">
<link rel="stylesheet" href="css/common.css">
<link rel="stylesheet" href="css/index.css">
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo"href="/">
                Status Code Quiz
            </a>
        </div>
    </header>

    <main>
        <div class="quiz__content">
            <div class="question">
                <p class="question__text">
                    Q.以下の内容に当てはまるステータスコードを選んでください</p>
                <p class="question__text">
                    <?php echo $question['description']?>
                </p>
            </div>
            <form class="quiz-form" action="result.php"method="post">
            <!--action=フォームが送信された後にデータが送られる先のファイル-->
            <!--フォームデータを送信する際に使うメソッド。POSTメソッドは、データを非表示でサーバーに送信するメソッド。-->
                <input type="hidden" name="answer_code" value="<?php echo $question['code']?>">
            <!--隠しフィールドで、ユーザーに表示されない情報をサーバーに送信するために使う-->
            <!--この隠しフィールドの名前で、送信時にサーバー側でこの名前をキーとして扱う-->
            <!--隠しフィールドの値で、初期状態では空ですが、JavaScriptなどを使って後から値を設定することができる-->
                <div class="quiz-form__item">
                <?php foreach($options as $option): ?>
                    <div class="quiz-form__group">
                <!-- <input>タグ(html 1-13)の id 属性と label タグの for 属性に同じものを指定することで、input タグと紐づけることができ、label 要素をクリックすることで input にチェックをつけることができます。-->


<!--謎。  なんで４つになんの？てかこれはなにしてんの？
データの受け取りの章を復習しろって。-->


                    <input class="quiz-form__radio" id="<?php echo $option['code']?>" type="radio" name="option" value="<?php echo $option['code']?>">
                    <label class="quiz-form__label" for="<?php echo $option['code']?>">
                        <?php echo $option['code']?>
                    </label>
<!-- 解答となるデータの送信 -->
<!-- hidden：ブラウザに表示させずにデータの送信を行うことができる。
今回は配列の中のcodeを通して答え合わせを行えるようにする。 -->

                    </div>
                <?php endforeach; ?>
                </div>
                <div class="quiz-form__button">
                    <button class="quiz-form__button-submit" type="submit">
                    回答
                    </button>
                </div>
            </form>
        </div>
    </main>
</body>

</html>