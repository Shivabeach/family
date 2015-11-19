<div class="container">
  <header class="labels">
    <h1>The VanHorns</h1>
  </header>
</div>

<div class="container smooth ">
	<section class="main-page">
		<article>
			<?php foreach($results as $row):?> <!-- posts from database posts -->
				<article>
	                <?php echo "<h2> $row->title</h2>";?>
	                <?php echo $this->typography->auto_typography($row->content);?>
	                <p>Created <?php echo $row->date;?></p>
                </article>
        	<?php endforeach;?>
		
	</section>
</div>

<div class="container">
  <footer class="flex-four">
    <h3>Footnotes</h3>
    <ul>
    	<li><sub>1</sub>*<li>
 	</ul>
  </footer>
</div>
</body>
</html>
