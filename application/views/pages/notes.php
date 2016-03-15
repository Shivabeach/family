<div class="container">
  <header class="labels">
    <h1>The VanHorn Notes</h1>
  </header>
</div>
<div class="container">
  <section class="flex-one item">
    <h1 class="page-title">VanHorn Notes</h1>
    <article>
      <dl>
      	<?php
        //from pages/notes
          foreach($notes as $row)
          {
            echo "<dt>Name: $row->rel_name<br> Year: $row->year</dt>";
            echo "<dd>" . $this->typography->auto_typography($row->note) . "</dd>";           
          }
        ?>
      </dl>
    </article> 
  </section>
  
  <section class="flex-one item">
   <h1 class="page-title">Bostick Notes</h1>
   <article>
  	<dl>
        <?php
         //from pages/notes
          foreach($notes2 as $row)
          {
            echo "<dt>Name: $row->rel_name<br> Year: $row->year</dt>";
            echo "<dd>" . $this->typography->auto_typography($row->note) . "</dd>";
          }
        ?>
    </dl>
   </article>    
  </section>
  </div>

