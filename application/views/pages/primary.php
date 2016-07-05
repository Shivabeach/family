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
        <h2>Our Heredity</h2>
        <p> Where we are from in the last 500 years or so!
        <blockquote>
          <ul>
            <li>65% of our ancestry comes from Great Britain, with outliers from Scotland, France and the Netherlands</li>
            <li>14% is from Western Europe. Germany, France, Netherlands, Austria and Switzerland.</li>
            <li>10% Comes from Scandinavia. Sweden, Norway, Denmark and just a wee bit of Finland</li>
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
	                <p class="end">Created <?php echo $row->date;?></p>
        </article>
        	<?php endforeach;?>
		</div>
    <div class="box-right">
      <h2>Relative Notes</h2>
      <article>
          <h3>Robert "The Smythe" Pease</h3>
          <h4>1485 - 1547, 13th great-grandfather</h4>
          <p> Robert lived through these historical events:</p>
            <ul class="sidenotes">   
                <li>1483-1485: Reign of King Richard III (York) </li>
                <li>1485-1509: Reign of King Henry VII (Tudor) </li>
                <li>1492: Columbus discovers the New World (age 7) </li>
                <li>1509-1547: Reign of King Henry VIII (Tudor) and his 6 wives</li> 
                <li>1513: Henry VIII invaded France </li>
                <li>1513: Scotland's James IV invaded England but were defeated. </li>
                <li>1522: Magellan circumnavigates the world </li>
                <li>1533: Henry VIII married Anne Boleyn and broke from the Catholic Church. Parliament passed the First Act of Secession and all adults in the kingdom had to agree to it by an oath or face imprisonment for life. Several were beheaded. The Church of England did not give freedom to the Protestant Reformers. Robert Pease was abt 48. </li>
                <li>1547: Robert Pease died the year Henry VIII died.</li>
            </ul>
          </p>
      </article>
      <article>
          <h3>Alonzo A Bostick</h3>
          <h4>1841 - 1920, great-grandfather</h4>
          <h4>Lapeer Days</h4>
          <ul class="sidenotes">
              <li>On Aug. 28, 1901, Alonzo A. Bostick and his son Austin celebrated the grand opening of Bostick Stove Works in Lapeer. Neither Alonzo nor his son could have foreseen the legacy they bestowed on our community. The simple grand opening celebration inspired the idea of a community festival held for the first time the following year. The Lapeer Days Festival was born. From simple beginning’s it has grown over the years to become the county’s largest festival and Michigan’s largest FREE festival!</li>
          </ul>
      </article>
      <article>
          <h3>John "The Clothier" Pease</h3>
          <h4>1640 - 1616, 11th great-grandfather</h4>
          <p>He lived during tumultuous times in England. </p>
            <ul class="sidenotes">        
                 <li> He lived through the reigns of Henry VIII, Edward VI, (Bloody) Mary I, Elizabeth I (he was age 18-63), and James I. </li>
                 <li> He was 71 in 1611 when the King James Bible was published. </li>
                 <li> He was 72 in 1612 when the last burning of heretics in England was recorded.</li>
             </ul>
          </p>
      </article>
    </div>
</div>

<div class="container-bottom">
  <footer class="flex-four">
  <div id="size3"></div>
    <h3>Footnotes</h3>
    <ul>
    	<li><sub>1</sub>*<li>
 	</ul>
  </footer>
</div>

