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
     $sql = "SELECT * FROM h30fpjan";

    // SQL実行
    $res = $pdo->query($sql) or die($pdo->connect_error);


    // 取得したデータを出力
    foreach( $res as $value ) {
        echo "$value[quiz]<br>";
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
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="./style.css">
    <title></title>
</head>
<body>
<?php 
 while($table = mysql_fetch_assoc($sql)) { 
 }
 ?> 
    <table>
        <tr>
             <td><?php print(htmlspecialchars($table['quiz'])); ?> </td> 
        </tr>
    </table>
<span style="margin-left:100px"><a href="#" class="btn">○</a></span>
<span style="margin-left:100px"><a href="#" class="btn">×</a></span>
<br><br>
<a href="#" class="square_btn">
    <i class="fa fa-chevron-right"></i> 次の問題へ
</a>
</body>
</html>