<?php
require_once('age.php');


function h($v){
	return htmlspecialchars($v,ENT_QUOTES,'utf-8');
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link type="text/css" rel="stylesheet" href="style.css">
<title>formpractice</title>
</head>
<body>
<div class="container">
	<div class="input">
	    <h1>選んだセレクトメニューを再読み込み時、初期状態で選ばれているようにする</h1>
		<form method="post" action="">
			<label for="uname">お名前</label><br>
            <input type="text" name="uname" placeholder="ここに名前を入れてね" value="<?=isset($_POST['uname'])&&$_POST['uname']?h($_POST['uname']):''; ?>"><br>
            <label for="age">年齢</label><br>
			<select name="age">
				<?php foreach($age as $key=>$val):
					if($key==$_POST['age']): ?>
						<option value="<?=$key; ?>" selected><?=$val ?></option>
					<?php else: ?>
						<option value="<?=$key; ?>"><?=$val ?></option>
					<?php endif; ?>
			
				<?php endforeach?>
			</select>
			<input type="submit" value="送信">	
		</form>
	</div>
	<div class="check">
        <?= isset($_POST['uname'])&&$_POST['uname']?'あなたの名前は'.h($_POST['uname']).'さんですね':'';  ?>
        <?= isset($_POST['age'])&& $_POST['age']!=='0'?'あなたの年齢は'.$age[$_POST['age']].'ですね':'';  ?>
	
	
	</div>
    <p>ソースコードはgithubにアップしています<a href="https://github.com/makotoschool/formpractice" target="_blank">https://github.com/makotoschool/formpractice</a></p>
</div>

</body>
</html>