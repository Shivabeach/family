<div class="container">
  <header class="labels">
    <h1>The Family Names</h1>
    <h4>By Family Group</h4>
  </header>
</div>
<div class="container">
	<section class="flex-one item">
    <h1 id="tips" class="page-title">Family Names Enter</h1>

    <article>
      <h2>Names!</h2>
      <p>
        These are names from verified relatives for which we have the complete chain of births in common with someone
      </p> 
      
    </article>
	<article class="form">
		<p id="display">
			<?php echo validation_errors(); ?>
		</p>

		<?php
			$attr = [
			"id" => "ajax",
			'class' => "pure-form pure-form-aligned"
			];
			echo form_open('forms/namey', $attr);

			$attr1 = [
				"id"        => "family",
				"style"     => "width: 50%",
				"maxlength" => "20",
				"name"      => "family"
				];
			echo "<div class = 'pure-control-group'>";
			echo '<label for "family">Family Name</label>';
			echo form_input($attr1);
			echo "</div>";
			$attr2 = [
				"id"        => "name",
				"name"      => "name",
				"style"     => "width: 50%",
				"maxlength" => "50"
			];
			echo "<div class = 'pure-control-group'>";
			echo '<label for="name">Name</label>';
			echo form_input($attr2);
			echo "</div>";
			echo '<div class="pure-controls">';
			echo form_submit('submit', 'Submit');
			echo form_reset('reset', 'Reset');
			echo "</div>";
			echo form_close();
		?>
	</article>
	<article>
		<p>Response</p>
		

	</article>
  </section>
</div>