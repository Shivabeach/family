<div class="container-top">
  <header class="labels">
    <h1>The VanHorns</h1>
  </header>
</div>

<div class="container ">
	<!-- <div class="box-left">
     <p>Screen</p>
     <div id="size"></div>
     <p>Window</p>
     <div id="size2"></div>     
  </div> -->
     <div class="main-content">
      <article>
      <div id="size3"></div>
        <h2>Our Heredity</h2>
        <p> Where we are from in the last 1000 years or so!

        <blockquote>
          <ul>
            <li>65% of our ancestry comes from Great Britain, with outliers from Scotland, France and the Netherlands</li>
            <li>14% is from Western Europe. Germany, France, Netherlands, Austria and Switzerland.</li>
            <li>10% Comes from Scandinavia. Sweden, Norway, Denmark and just a wee bit of FInland</li>
            <li>6% comes from Ireland</li>
            <li>2% Comes from Spain and the local Mediterranean areas</li>
            <li>2% comes from the Caucasus areas. That would be Turkey, Iran, Iraq, Turkmenistan, and Afghanistan.</li>
          </ul>
        </blockquote>
        <p>You may well ask how can there be bleed over from one area to the other. It's a good question. Remember, those of our English ancestors also had Scottish, French and Dutch ancestors themselves. We pick that up in our DNA. Our Caucasus DNA is slightly deeper and more on Mom's side than Dad's. Remember that almost all Europeans passed through the middle east on their way to Europe, Mediterranean, Russia and beyond.</p>
        <p>Our deep ancestry is shown on the VanHorn and Bostick headings on the menu.</p>
      </article>
			<?php foreach($results as $row):?> <!-- posts from database posts -->
				<article>
	                <?php echo "<h2> $row->title</h2>";?>
	                <?php echo $this->typography->auto_typography($row->content);?>
	                <p>Created <?php echo $row->date;?></p>
        </article>
        	<?php endforeach;?>
		</div>
    <div class="box-right">
      box right
    </div>
</div>

<div class="container-bottom">
  <footer class="flex-four">
    <h3>Footnotes</h3>
    <ul>
    	<li><sub>1</sub>*<li>
 	</ul>
  </footer>
</div>
</body>
</html>
