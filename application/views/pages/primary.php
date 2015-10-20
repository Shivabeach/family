<div class="container">
  <header class="labels">
    <h1>The VanHorns</h1>
  </header>
</div>
<div class="container">
	<section class="flex-one item">
    <article class="centered papaya">
	    <h2><a class="vanhorn-link" href="pages/van">VanHorns</a></h2>
    	
   	</article>    
  </section>

  <section class="flex-two item">
    <article class="centered papaya">
    	<h2><a class="bostick-link" href="pages/bos">Bosticks</a></h2>	    
	</article>
  </section>
</div>
<div class="container smooth ">
	<section>
		<article>
			<?php foreach($results as $row):?>
                <?php echo "<h2> $row->title</h2>";?>
                <?php echo $this->typography->auto_typography($row->content);?>
                <p>Created <?php echo $row->date;?></p>
                
        	<?php endforeach;?>
		</article>
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
