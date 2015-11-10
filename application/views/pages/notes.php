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
          foreach($notes as $row)
          {
            echo "<dt>Name: $row->rel_name Year: $row->year</dt>";
            echo "<dd>" . $this->typography->auto_typography($row->note) . "</dd>";
          }

        ?>
      </dl>
    </article> 
  </section>
  
  <section class="flex-two item">
   <h1 class="page-title">Bostock Notes</h1>
  	<dl>
        <?php
          foreach($notes2 as $row)
          {
            echo "<dt>Name: $row->rel_name Year: $row->year</dt>";
            echo "<dd>" . $this->typography->auto_typography($row->note) . "</dd>";
          }

        ?>
      </dl>
    </article> 
  </section>