<?php
/*ファイルの読み込み：require_once */
require_once('config/status_codes.php');
/*エスケープ処理：htmlspecialchars
index.phpでpostとしてデータ送信されているため取得方法は$_POST
ENT_QUOTES:ユーザー入力からの特殊文字をHTML内で安全に表示できるようにする*/
$answer_code=htmlspecialchars($_POST['answer_code'], ENT_QUOTES);
$option=htmlspecialchars($_POST['option'],ENT_QUOTES);
/*データが正しく送信されなかった時の処理を行う */
if(!$option){
  header('Location: index.php');
}
/*header関数：別ページに移動させたりリダイレクトを行ったりする*/

foreach($status_codes as $status_code){
  if($status_code['code']===$answer_code){
    $code=$status_code['code'];
    $description=$status_code['description'];
  }
}
$result=$option===$code;
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Status Code Quiz</title>
  <link rel="stylesheet" href="css/sanitize.css">
  <link rel="stylesheet" href="css/common.css">
  <link rel="stylesheet" href="css/result.css">
</head>

<body>
  <header class="header">
    <div class="header__inner">
      <a class="header__logo" href="/">
        Status Code Quiz
      </a>
    </div>
  </header>

  <main>
<!--緑枠部分-->
<!--黄枠部分-->
<div class="result__content">
  <div class="result">
    <?php if ($result):?>
    <h2 class="result__text--correct">正解</h2>
    <?php else: ?>
    <h2 class="result__text--incorrect">不正解</h2>
    <?php endif; ?>
  </div>
  <!--ピンク枠-->
    <div class="answer-table">
      <table class="answer-table__inner">
        <tr class="answer-table__row">
          <th class="answer-table__header">ステータスコード</th>
          <td class="answer-table__text">
            <?php echo $code ?>
          </td>
        </tr>
        <tr class="answer-table__row">
          <th class="answer-table__header">説明</th>
          <td class="answer-table__text">
            <?php echo $description ?>
          </td>
        </tr>
      </table>
    </div>
   </div>
</main>
</body>


</html>

