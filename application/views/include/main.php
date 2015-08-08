<main>
		<header class="top">
			<h1>VanHorn Family</h1>
		</header>

		<article>
			<section>
			<?php foreach($results as $row):?>
				<h2 class="section-header"><?php echo $row->title;?></h2>
				<?php echo $this->typography->auto_typography($row->content);?>
				<p>Created <?php echo $row->date;?></p>
				<hr>
			<?php endforeach;?>
			</section>

			
		</article>
	</main>