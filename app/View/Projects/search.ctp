
	<h3>
		<?php echo $this->paginator->counter(array(
			'format' => '%count%件の案件が見つかりました'));?>
	</h3>
	<?php foreach($projects as $project) : ?>
	<div id="project">
		<span class="clock">
			<?php echo date('Y-m-d', strtotime($project['Project']['modified'])); ?>更新
		</span>
		<h4><?php echo $this->Html->link($project['Project']['name'], '/projects/project/' .$project['Project']['id']); ?></h4>
		<ul class="details">
			<li>
				<span>最寄駅</span>
				<div class="td">
					<?php echo h($project['Project']['station']); ?>
				</div>
			</li>
			<li>
				<span>単価</span>
				<div class="td">
					<?php echo h($project['Project']['money1']); ?>万円
					〜
					<?php echo h($project['Project']['money2']); ?>万円
				</div>
			</li>
			<li>
				<span>清算</span>
				<div class="td">
					<?php echo h($project['Project']['payment1']); ?>
					 - 
					<?php echo h($project['Project']['payment2']); ?>
				</div>
			</li>
			<li>
				<span>工程</span>
				<div class="td">
					<?php echo h($project['Project']['progress']); ?>
				</div>
			</li>
			<li>
				<span>ポジション</span>
				<div class="td">
					<?php echo h($project['Position']['name']); ?>
				</div>
			</li>
			<li>
				<span>サービス</span>
				<div class="td">
					<?php echo h($project['Service']['name']); ?>
				</div>
			</li>
			<li>
				<span>スキル</span>
				<div class="td">
					<?php echo h($project['Project']['skill']); ?>
				</div>
			</li>
		</ul>
		<div class="text">
			<?php echo h($project['Project']['body']); ?>
		</div>
		<div class="conversion">
			<?php echo $this->Html->link('エントリーする', '/engineers/convert/'); ?>
		</div>
		<div class="more_read">
			<?php echo $this->Html->link('詳細を読む', '/projects/project/'.$project['Project']['id']); ?>
		</div>
	</div>
	<?php endforeach; ?>
	<div class="paginate">
		<?php
		if (!empty($this->request->query)) {
			$this->paginator->options(array(
    			'url' => $this->request->query,
    			'convertKeys' => array_keys($this->request->query),
    		));
		}
			
			echo $this->paginator->Prev('« 前へ ');
			echo $this->paginator->numbers();
			echo $this->paginator->Next(' 次へ »');		
		?>
	</div>
