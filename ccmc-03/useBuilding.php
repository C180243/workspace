<?php
require_once("class/Building.php");
$kasumigaseki = new Building("霞が関ビル", 147);
$sunshine = new Building("サンシャイン60", 240);
?>
<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<title>Buildingクラスを利用する</title>
	<link rel="stylesheet" href="../assets/css/style.css" />
	<link rel="stylesheet" href="../assets/css/ccmc-03.css" />
</head>

<body>
	<h1>Buildingクラスを利用する</h1>
	<dl>
		<dt><?= $kasumigaseki->getName() ?></dt>
		<dd><?= $kasumigaseki->getProfile() ?></dd>
	</dl>
	<dl>
		<dt>サンシャイン60</dt>
		<dd>サンシャイン60の高さは240mです。</dd>
	</dl>
	<p><a href="index.html">インデックスに戻る</a></p>
</body>

</html>