<?php echo $this->Html->css('project'); ?>
<?php foreach($projects as $data) : ?>

<div class="projects_title">
	<h1><?php echo h($data['Project']['name']); ?></h1>
</div>
<div class="projects_skill">
	＜必要スキル＞<br>
	<?php echo h($data['Project']['skill']); ?>
</div>
<div class="projects_body">
	＜業務内容＞<br>
	<?php echo h($data['Project']['body']); ?>
</div>
<div class="conversion">
	<?php echo $this->Html->link('この案件にエントリーする', '/engineers/convert/'); ?>
</div>
<div class="projects">
	<table>
	<caption>＊ 案件詳細</caption>
	<tr>
		<th>最寄駅</th>
		<td><?php echo h($data['Project']['place']); ?></td>
	</tr>
	<tr>
		<th>単価（月額）</th>
		<td><?php echo h($data['Project']['money1']); ?>万円 〜 <?php echo h($data['Project']['money2']); ?> 万円</td>
	</tr>
	<tr>
		<th>清算</th>
		<td><?php echo h($data['Project']['payment1']); ?>h − <?php echo h($data['Project']['payment2']); ?>h</td>
	</tr>
	<tr>
		<th>服装</th>
		<td><?php echo h($data['Project']['clothes']); ?></td>
	</tr>
	<tr>
		<th>必須スキル</th>
		<td></td>
	</tr>
	<tr>
		<th>尚可スキル</th>
		<td><?php echo h($data['Project']['moreskill']); ?></td>
	</tr>
	<tr>
		<th>内容</th>
		<td></td>
	</tr>
	</table>
</div>
<div class="conversion">
	<?php echo $this->Html->link('この案件にエントリーする', '/engineers/convert/'); ?>
</div>
<?php endforeach; ?>
