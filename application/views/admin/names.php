<!-- <div class="container">
  <header class="labels">
    <h1>The Family Names</h1>
    <h4>By Family Group</h4>
  </header>

</div>-->
<div class="container">
	<div class="main-content">
    <h1 id="tips" class="page-title">Family Names Enter</h1>

    <article>
      <h2>Names!</h2>
      <p>
        These are names from verified relatives for which we have the complete chain of births in common with someone
      </p>

    </article>
	<article class="form">
    <fieldset>
        <legend>Just the Names</legend>
		<?php
			$attr = [
			"id" => "ajax",
			'class' => "pure-form pure-form-aligned pure-form-stacked"
			];
			echo form_open('forms/namey', $attr);

			echo "<div class = 'pure-control-group'>";
			echo "<label for='family'>Family</label>";

                        $attr1 = array(
                            ''        => 'Pick one',
                            'VanHorn' => 'VanHorn',
                            'Bostick' => 'Bostick',
                            'Hunt'    => 'Hunt',
                            'Reed'    => 'Reed'
                        );
                echo form_dropdown("family", $attr1);

			$attr2 = [
                "id"          => "name",
                "name"        => "name",
                "style"       => "width: 50%",
                "maxlength"   => "50",
                "placeholder" => "Name"
			];

			echo form_input($attr2);
			echo "</div>";
			echo '<div class="pure-controls">';
            $sub = [
                'class' => 'pure-button pure-button-primary',
                'value' => 'Submit',
                'name' => 'submit'
            ];
			echo form_submit($sub);
			echo form_reset('reset', 'Reset');
			echo "</div>";
			echo form_close();
		?>

        </fieldset>
	</article>

    <article class="form">
        <h3>Full names and familys</h3>
        <fieldset>
            <legend>Full On Everything</legend>
        <?php
            $attr = [
            "id"    => "ajax",
            'class' => "pure-form pure-form-aligned pure-form-stacked check"
            ];
            echo form_open('forms/full_names', $attr);

            $attr1 = [
                "id"          => "man",
                "style"       => "width: 50%",
                "maxlength"   => "40",
                "name"        => "man",
                "placeholder" => "Male",
                "required" => "true"
                ];

            echo '<label for="man">Man</label>';
            echo form_input($attr1);
            $attr2 = [
                "id"          => "woman",
                "style"       => "width: 50%",
                "maxlength"   => "40",
                "name"        => "woman",
                "placeholder" => "Woman"
                ];

            echo '<label for="woman">Woman</label>';
            echo form_input($attr2);


            $attr3 = [
                "id"          => "year",
                "style"       => "width: 10%",
                "maxlength"   => "4",
                "name"        => "year",
                "placeholder" => "Year",
                "type"        => "number"
            ];

            echo '<label for="year">Year</label>';
            echo form_input($attr3);


            $attr4 = [
                "id"          => "state",
                "style"       => "width: 50%",
                "maxlength"   => "40",
                "name"        => "state",
                "placeholder" => "State"
            ];

            echo '<label for="state">State</label>';
            echo form_input($attr4);


            $attr5 = [
                "id"          => "kids",
                "style"       => "width: 10%",
                "maxlength"   => "3",
                "name"        => "kids",
                "placeholder" => "Kids",
                "type"        => "number"
            ];

            echo '<label for="kids">Kids</label>';
            echo form_input($attr5);

            $attr7 = [
                "id"          => "relation",
                "style"       => "width: 50%",
                "maxlength"   => "50",
                "name"        => "relation",
                "placeholder" => "relation"

            ];

            echo '<label for="relation">Relation</label>';
            echo form_input($attr7);

            echo "<label for='family'>Family</label>";
                 $attr6 = array(
                     ''        => 'Pick one',
                     'VanHorn' => 'VanHorn',
                     'Bostick' => 'Bostick',
                     'Hunt'    => 'Hunt',
                     'Reed'    => 'Reed'
                 );
                echo form_dropdown("family", $attr6);

            echo "<div class='pure-controls'> ";
            $dub = [
                'class' => 'pure-button pure-button-primary',
                'value' => 'Submit',
                'name' => 'submit'
            ];
                echo form_submit($dub);
                $rest = [
                    'class' => 'pure-button pure-button-error',
                    'value' => 'Reset',
                    'name' => 'reset'
                ];
                echo form_reset($rest);
                echo form_close();
                ?>
        </fieldset>
    </article>
  </div>
  <div class="box-right">
    <article class="form">
        <p>Response</p>
    </article>
    <p id="display">
        <?php echo validation_errors(); ?>
    </p>
  </div>
</div> <!-- end of main stuff -->
