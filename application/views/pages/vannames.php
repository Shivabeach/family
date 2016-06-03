  <!-- <div class="container-top" id="top">
  <header class="labels">
    <h1>The VanHorn Relatives</h1>
  </header>
  </div> -->
<div class="container high">
    <div class="main-content">
        <h1 id="tips" class="page-title">VanHorn Ancestral Names</h1>
        <h2>Names!</h2>
      <p>
        These are names from verified relatives for which we have the complete chain of births in common with a cousin. Simply click on a name or year to put that name in the search box to the right. Then click search.
      </p> 
      <ul>
    <?php
      foreach($folks as $row)
      {
         echo "<li class='inliner' title='Click Me'> $row->male </li>";
         echo "<li class='inliner' title='Click Me'> $row->female </li>";
      }
    ?>
      </ul>
    </div>
  <div class="box-right">
    <h1>Search</h1>
     <p>Pick a name from the column on the left and search ≡ </p>
     <?php echo validation_errors(); ?>
     <?php 
     $attr = array (
     'id' => 'ajax',
     'class' => 'pure-form'
     );
      echo form_open('forms/relative_search', $attr);
      $attr1 = [
        'name' => 'name',
        'type' => 'search',
        'placeholder' => 'Relative Search',
        'style' => 'width: 50%',
      ];
      echo form_input($attr1);
      $attr3 = [
        'id' => 'submit',
        'value' => 'Submit',
        'type' => 'submit',
        'class' => 'pure-button'
      ];
      echo form_submit($attr3);
      $attr2 = [
        'id' => 'clear',
        'value' => 'Clear All',
        'type' => 'reset',
        'class' => 'pure-button'
      ];
      echo form_reset($attr2);
      echo form_close();
     ?>
    <article id="display"></article>
  </div>
</div>
<!-- <div class="container">
  <footer class="flex-four">
    <h3>Footnotes</h3>
    <ul>
    <li><sub>1</sub> link 1 <li>
    <li><sub>2</sub> link 2</li>
  </ul>
  </footer>
</div>
 -->
 
