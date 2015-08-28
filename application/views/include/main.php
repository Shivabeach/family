<!-- This is the main page feed include -->
<main>
<header class="top">
	<h1>VanHorn Family</h1>
</header>
<div class="row">
	<div class="grid-2 center color1 vanhorn">
		<article class="centered">
			<h2><a href="#" class="vanhorn-link">VanHorns</a></h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor, enim ad animi eaque perspiciatis, sed!</p>
		</article>
	</div>
	<div class="grid-2 center color2 bostick">
		<article class="centered">
			<h2><a href="#" class="bostick-link">Bosticks</a></h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum magnam repellat et accusantium temporibus aliquam, corporis nisi maxime officiis ullam.</p>
		</article>
	</div>
</div>
<article>
	<?php foreach($results as $row):?>
	<section>
		<h2 class="section-header"><?php echo $row->title;?></h2>
		<?php echo $this->typography->auto_typography($row->content);?>
		<p>Created <?php echo $row->date;?></p>
		<hr>
	</section>
	<?php endforeach;?>
</article>
</main>