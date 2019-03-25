<html>
<head><title>FP3級学習プログラムサイト</title></head>
	<style>
	html, body {
		margin: 1px;
		border: 0;
	}
	</style>
<body>
	<div align="center">
		<div style=" border: solid 1px #079B96; " align="left">
			<?php
				if(isset($errMsg)){
					echo '<div style="color:#FF0000;text-align:center;font-size:18px;">'.$errMsg.'</div>';
				}
			?>
			<div style="background-color:#006D9C; color:#FFFFFF; padding:10px;"><b>FP3級学習プログラムサイト</b></div>
			<div style="margin: 15px">
				ようこそ　ゲスト様 !
				<br>
				<a href="login.php">ログイン</a> <br>
				<a href="register.php">新規登録</a> <br>
				<a href="forgot.php">パスワードをお忘れの方</a>
			</div>
		</div>
	</div>
</body>
</html>
