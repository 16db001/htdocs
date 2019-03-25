<?php


// 変数の初期化
$pdo = null;

// Connecting database
try {
	$pdo = new PDO(
        'mysql:dbname=test;host=localhost;charset=utf8mb4',
        'root',
        'root',
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]
    );
}catch(PDOException $e) {
	echo $e->getMessage();
        header('Content-Type: text/plain; charset=UTF-8', true, 500);
}

?>
