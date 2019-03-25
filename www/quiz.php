<?php

// 変数の初期化
$sql = null;
$res = null;
$pdo = null;

try {
    // データベースに接続
    $pdo = new PDO(
        'mysql:dbname=question;host=localhost;charset=utf8mb4',
        'root',
        'root',
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]
    );

    /* データベースから値を取ってきたり， データを挿入したりする処理 */
    // SQL作成
     $sql = "SELECT qiuzid FROM h30fpjan order by no ASC";

    // SQL実行
    $res = $pdo->query($sql) or die($pdo->connect_error);


    // 取得したデータを出力
// レコードを連想配列で一気に取得
$rows = $sql->fetchAll(PDO::FETCH_ASSOC);
foreach($rows as $row){
    ?>
    <div class = "qclass<? echo $row['id'];?>"><?
    echo $row['quiz'] . "\n";
    </div>
}


} catch (PDOException $e) {

    // エラーが発生した場合は「500 Internal Server Error」でテキストとして表示して終了する
    // - もし手抜きしたくない場合は普通にHTMLの表示を継続する
    // - ここではエラー内容を表示しているが， 実際の商用環境ではログファイルに記録して， Webブラウザには出さないほうが望ましい
    header('Content-Type: text/plain; charset=UTF-8', true, 500);
    exit($e->getMessage()); 

}
// Webブラウザにこれから表示するものがUTF-8で書かれたHTMLであることを伝える
// (これか <meta charset="utf-8"> の最低限どちらか1つがあればいい． 両方あっても良い．)
header('Content-Type: text/html; charset=utf-8');


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="./style.css">
    <title></title>
</head>
<body>



</body>
</html>