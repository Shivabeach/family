<div class="container">
  <header class="labels">
    <h1>The VanHorns Relatives</h1>
  </header>
</div>
<div class="container">
  
  <section class="flex-one item">
    <h1 id="tips" class="page-title">Beginnings</h1>

    <article>
      <h2>Names!</h2>
      <p>
        These are names from verified relatives for which we have the complete chain of births in common with someone
      </p> 
      <dl>
    <?php
      foreach($folks as $row)
      {
        echo "<dt> $row->family </dt>";
        echo "<dd class='tool' title='Click Me'> $row->male </dd>";
        echo "<dd class='tool' title='Click Me'> $row->female </dd>";
        echo "<dd class='tool' title='Click Me'> $row->relationship </dd>";
        echo "<dd> Born  $row->year </dd>";
        echo "<a href='#tips'>Top</a>";
      }
    ?>
      </dl>
    </article>

  </section>

  <section class="flex-two item">
    <h1>Search</h1>
    <article>
      <h3>Pick a Name</h3>
     <p>Pick a name from the column on the left and search</p>
     <?php echo validation_errors(); ?>
     <?php 
     $attr = array (
     'id' => 'ajax'
     );
      echo form_open('forms/relative_search', $attr);
      $attr1 = [
        'name' => 'name',
        'type' => 'search',
        'placeholder' => 'Relative Search',
        'style' => 'width: 50%',
      ];
      echo form_input($attr1);
      echo form_submit('submit', 'Submit');
      $attr2 = [
        'id' => 'clear',
        'value' => 'Clear All'
      ];
      echo form_reset($attr2);
      echo form_close();
     ?>
    </article>
    <article id="display"></article>
  </section>
</div>
<div class="container">
  <footer class="flex-four">
    <h3>Footnotes</h3>
    <ul>
    <li><sub>1</sub> link 1 <li>
    <li><sub>2</sub> link 2</li>
  </ul>
  </footer>
</div>
</body>
</html>