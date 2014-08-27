
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial=1.0">
	<title>IT/WEB業界の案件が集まる求人サイトProject Hacks</title>
	<meta name="discription" content="">
	<meta name="keywords" content="">
	<link rel="stylesheet" href="http://yui.yahooapis.com/3.17.2/build/cssreset/cssreset-min.css">
	<link rel="styleseet" href="recruit.css">
	<?php echo $this->Html->css('convert'); ?>
	<link rel="shortcut icon" href="favicon.ico">
	<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js'></script>
</head>
<body>
<div id ="container">
<div id="header">
	<div class="header_title">
		<h1>IT/WEB業界の案件が集まる求人サイト</h1>
	</div>
	<div class="wrappar">
		<div class="logo">
			<a href="/projecthacks/">
				<h2>PROJECT HACKS</h2>
				<p>http://projecthacks.co.jp</p>
			</a>
		</div>
		<div class="menu">
			<ul>
				<li>
					<a href="/projecthacks/projects/search">案件を探す</a>
				</li>
				<li>
					<a href="">ブックマーク</a>
				</li>
				<li>
					<a href="">初めての方へ</a>
				</li>
				<li>
					<a href="">お問い合わせ</a>
				</li>
				<li>
					<a href="">ログイン</a>
				</li>
			</ul>
		</div>
		<div class="register">
			<a href="/projecthacks/engineers/convert">簡単1分！無料登録はこちらから</a>
		</div>
	</div>
</div>
<div id="main">
	<div class="wrappar">
	<div class="add_title">
		<h1>会員登録</h1>
		<p>1分で完了！無料登録</p>
	</div>
	<div class="new_add">
		<?php echo $this->Form->create('Engineer', array(
		'type' => 'file')); ?>
		<table class="add_body">
			<tr>
				<th>氏名<span class="need">必須</span></th>
				<td>
					<?php echo $this->Form->input('familyname', array('label' => '',
																		'div' => false,
																		'name' => 'familyname',
																		'id' => 'familyname',
																		'placeholder' => '鈴木')); ?>

					<?php echo $this->Form->input('name', array('label' =>'',
																'div' => false,
																'name' => 'name',
																'id' => 'name',
																'placeholder' => '太郎')); ?>
				</td>
			</tr>
			<tr>
				<th>カナ<span class="need">必須</span></th>
				<td>
					<?php echo $this->Form->input('familyname_kana', array('label' =>'',
																			'div' => false,
																			'name' => 'familyname_kana',
																			'id' => 'familyname_kana',
																			'placeholder' => 'スズキ')); ?>
					<?php echo $this->Form->input('name_kana', array('label' =>'',
																		'div' => false,
																		'name' => 'name_kana',
																		'id' => 'name_kana',
																		'placeholder' => 'タロウ')); ?>
				</td>
			</tr>
			<tr>
				<th>性別<span class="need">必須</span></th>
				<td>
					<?php echo $this->Form->input('sex', array(
													'label' => '',
													'name' => 'sex',
													'id' => 'sex',
													'type' => 'radio',
													'legend'=>false,
													'checked' => true, 
													'options' => array('male' => '  男性 ', 'female'=>'  女性  ')
													)); ?>
				</td>
			</tr>
			<tr>
				<th>生年月日<span class="need">必須</span></th>
				<td>
					<?php echo $this->Form->input('year', array('label' =>'',
//																	'name' => 'year',
//																	'id' =>'year',
																	'div' => false,
																	'options' => $years));?> / 

					<?php echo $this->Form->input('month', array('label' =>'',
//																	'name' => 'month',
//																	'id' =>'month',
																	'div' => false,
																	'options' => $months)); ?> /  
					<?php echo $this->Form->input('day', array('label' =>'',
//																	'name' => 'day',
//																	'id' =>'day',
																	'div' => false,
																	'options' => $days)); ?>
				</td>
			</tr>
			<tr>
				<th>メールアドレス<span class="need">必須</span></th>
				<td>
					<?php echo $this->Form->input('email', array('label' =>'',
																	'name' => 'email',
																	'id' => 'email',
																	'div' => false)); ?>
				</td>
			</tr>
			<tr>
				<th>電話番号</th>
				<td>
					<?php echo $this->Form->input('tell', array('label' =>'',
																'name' => 'tell',
																'id' => 'tell',
																'div' => false)); ?>
				</td>
			</tr>
			<tr>
				<th>スキルシート<span class="need"> 必須</span></th>
				<td><?php echo $this->Form->input('file', array('type' => 'file',
																'label' => '',
//																'name' => 'file',
//																'id' => 'file',
																'div' => false)); ?>
				</td>
			</tr>
			<tr>
				<th>希望コメント</th>
				<td><?php echo $this->Form->input('memo', array('label' => '',
																	'name' => 'memo',
																	'id' => 'memo',
																	'div' => false,
																	'rows' =>3,
																	'placeholder' => array('希望単価、ポジション、言語、勤務地、勤務開始日など'))); ?>
				</td>
			</tr>
		</table>
		<?php echo $this->Form->submit('規約に同意して登録する', array('class' => 'conversion')); ?>
	<?php echo $this->Form->end(); ?>
	</div>
</div>
</div>
<div id="footer">
	<p>--- Copyright HACKS, Inc. All rights reserved. ---</p>
</div>
</div>
</body>
</html>