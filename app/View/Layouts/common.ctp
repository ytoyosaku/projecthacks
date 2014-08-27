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
	<?php
		echo $this->Html->css('common');

		if ($this->action === 'search') {
			echo $this->Html->css('search');
		}
	?>
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
			<a href="/projects/">
				<h2>PROJECT HACKS</h2>
				<p>http://projecthacks.co.jp</p>
			</a>
		</div>
		<div class="menu">
			<ul>
				<li>
					<a href="/projects/search">案件を探す</a>
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
			<a href="/engineers/convert">簡単1分！無料登録はこちらから</a>
		</div>
	</div>
</div>

<div id="search">
	<div class="wrappar">
		<form action="/projects/search/" id="ProjectSerch" method="get" accept-charset="utf-8">
				<ul>
					<li class="skillselect">
							<select name="skill" class="skill">
								<option value>スキルを選択</option>
								<optgroup label="サーバーサイド">
									<option value="1">PHP</option>
									<option value="2">Java</option>
									<option value="3">Ruby</option>
									<option value="4">PHP</option>
								</optgroup>
								<optgroup label="スマホアプリ">
									<option value="1">PHP</option>
									<option value="1">PHP</option>
									<option value="1">PHP</option>
									<option value="1">PHP</option>
								</optgroup>
								<optgroup label="フロントエンド">
									<option value="1">PHP</option>
									<option value="1">PHP</option>
									<option value="1">PHP</option>
									<option value="1">PHP</option>
								</optgroup>
							</select>
							<select name="position" class="position">
								<option value>ポジションを選択</option>
								<optgroup label="サーバーサイド">
									<option value="1">コンサルタント</option>
									<option value="2">PM</option>
									<option value="3">PMO</option>
									<option value="4">PL</option>
								</optgroup>
								<optgroup label="スマホアプリ">
									<option value="1">PHP</option>
									<option value="1">PHP</option>
									<option value="1">PHP</option>
									<option value="1">PHP</option>
								</optgroup>
								<optgroup label="フロントエンド">
									<option value="1">PHP</option>
									<option value="1">PHP</option>
									<option value="1">PHP</option>
									<option value="1">PHP</option>
								</optgroup>
							</select>
							<select name="money" class="money">
								<option value>単価下限を選択</option>
									<option value="20">20万円以上</option>
									<option value="30">30万円以上</option>
									<option value="40">40万円以上</option>
									<option value="50">50万円以上</option>
									<option value="60">60万円以上</option>
									<option value="70">70万円以上</option>
									<option value="80">80万円以上</option>
									<option value="90">90万円以上</option>
									<option value="100">100万円以上</option>
								</optgroup>
							</select>
					</li>
					
					<li class="freeword">
						<input name="freeword" type="text" class="freeword" id="freeword" placeholder="フリーワードを入力">
					</li>
					<li class="submit">
						<input value="検索する" type="submit" class="submit">
					</li>
				</ul>
			</form>
	</div>
</div>
<div class="pickup">
	<p>TOP>検索</p>
</div>
<div id="content">
	<?php echo $this->fetch('content'); ?>
</div>
	<div id="subfooter">
		<ul>
			<li class="engineer">
				<p>開発</p>
				<ul>
					<li>
						<a href="">PHP</a>
					</li>
					<li>
						<a href="">Java</a>
					</li>
					<li>
						<a href="">Ruby</a>
					</li>
					<li>
						<a href="">Android</a>
					</li>
					<li>
						<a href="">iOS</a>
					</li>
				</ul>
			</li>
			<li class="designer">
				<p>制作</p>
				<ul>
					<li>
						<a href="">UIデザイナー</a>
					</li>
					<li>
						<a href="">フロントエンド</a>
					</li>
					<li>
						<a href="">イラストレーター</a>
					</li>
					<li>
						<a href="">ディレクター</a>
					</li>
					<li>
						<a href="">Flash</a>
					</li>
				</ul>
			</li>
			<li class="position">
				<p>ポジション</p>
				<ul>
					<li>
						<a href="">プログラマー</a>
					</li>
					<li>
						<a href="">システムエンジニア</a>
					</li>
					<li>
						<a href="">プロジェクトマネージャー</a>
					</li>
					<li>
						<a href="">プランナー</a>
					</li>
					<li>
						<a href="">ディレクター</a>
					</li>
				</ul>
			</li>
			<li class="service">
				<p>サービス</p>
				<ul>
					<li>
						<a href="">ソーシャルゲーム</a>
					</li>
					<li>
						<a href="">広告</a>
					</li>
					<li>
						<a href="">ECサイト</a>
					</li>
					<li>
						<a href="">業務システム</a>
					</li>
					<li>
						<a href="">運用</a>
					</li>
				</ul>
			</li>
			<li class="company">
				<p>運営会社</p>
				<ul>
					<li>
						<a href="">運営会社</a>
					</li>
					<li>
						<a href="">プライバシーポリシー</a>
					</li>
					<li>
						<a href="">利用規約</a>
					</li>
					<li>
						<a href="">お問い合わせ</a>
					</li>
				</ul>
			</li>
		</ul>
	</div>
	<div id="footer">
		<p>--- Copyright HACKS, Inc. All rights reserved. ---</p>
	</div>
</div>
</body>
</html>
