  <!-- <div class="container-top">
  <header class="labels">
    <h1>The VanHorns Relatives</h1>
  </header>
</div> -->
<div class="container">
  
 <div class="main-content">

    <article>
        <p>I have broken the family down into 4 divisions. That being the VanHorns, Hunts, Reeds and Bosticks. The four family lines represent our parents mothers and fathers.</p>
        <p>I thought it would be nice to see what names comprise our backgrounds. And also from what countrys these names come from.</p>
        <h3>create a search engine for these names and the family they are from</h3>

    </article>



    <article id="tabs">
      <ul>
        <li><a href="#tabs-1" name="panel-1">VanHorns</a></li>
        <li><a href="#tabs-2" name="panel-2">Hunts</a></li>
        <li><a href="#tabs-3" name="panel-3">Reeds</a></li>
        <li><a href="#tabs-4" name="panel-4">Bosticks</a></li>
      </ul>
      

   <article id="tabs-1">
    <h3>VanHorn</h3>
    <ul>
      <?php 
      foreach($folks as $row):?>
          <li class="inliner"><?php echo $row->name, nbs(2) ;?></li>
          
      <?php endforeach;?>
      ?>
      </ul>
    </article>
    <article id="tabs-2">
       <h3>Hunt</h3>
    <ul>
      <?php 
        foreach($hunt as $row):?>
          <li class="inliner"><?php echo $row->name, nbs(2) ;?></li>
          
      <?php endforeach;?>
      </ul>
    </article>
    <article id="tabs-3">
       <h3>Reed</h3>
    <ul>
      <?php 
        foreach($reed as $row):?>
          <li class="inliner"><?php echo $row->name, nbs(2) ;?></li>
          
      <?php endforeach;?>
      </ul>
    </article>
    <article id="tabs-4">
       <h3>Bostick</h3>
    <ul>
      <?php 
        foreach($bostick as $row):?>
          <li class="inliner"><?php echo $row->name, nbs(2) ;?></li>
          
      <?php endforeach;?>
      </ul>
    </article>
</article>
  </div>

  
</div>
<div class="container">
</div>
</body>
</html>
