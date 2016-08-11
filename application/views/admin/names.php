<!-- <div class="container">
  <header class="labels">
    <h1>The Family Names</h1>
    <h4>By Family Group</h4>
  </header>

</div>-->
<div class="container">
	<div class="main-content">
    <h1 id="tips" class="page-title">Family Names Enter</h1>

    <article class="form">
        <h3>Full names and familys</h3>
        <fieldset>
            <legend>Fill The Form</legend>
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
                "required"    => "true"
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
                "placeholder" => "Year"
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
                ""                       => "Relative",
                "grandfather"            => "grandfather",
                "great-grandfather"      => "great-grandfather",
                "2nd great-grandfather"  => "2nd great-grandfather",
                "3rd great-grandfather"  => "3rd great-grandfather",
                "4th great-grandfather"  => "4th great-grandfather",
                "5th great-grandfather"  => "5th great-grandfather",
                "6th great-grandfather"  => "6th great-grandfather",
                "7th great-grandfather"  => "7th great-grandfather",
                "8th great-grandfather"  => "8th great-grandfather",
                "9th great-grandfather"  => "9th great-grandfather",
                "10th great-grandfather" => "10th great-grandfather",
                "11th great-grandfather" => "11th great-grandfather",
                "12th great-grandfather" => "12th great-grandfather",
                "13th great-grandfather" => "13th great-grandfather"
            ];

            echo '<label for="relation">Relation</label>';
            echo form_dropdown("relation", $attr7);

            echo "<label for='family'>Family</label>";
                 $attr6 = array(
                     ''        => 'Pick one',
                     'VanHorn' => 'VanHorn',
                     'Bostick' => 'Bostick',
                     'Hunt'    => 'Hunt',
                     'Reed'    => 'Reed',
                     'Clay'    => "Clay"
                 );
                echo form_dropdown("family", $attr6);
                $attr8 = [
                "id"          => "family2",
                "style"       => "width: 50%",
                "maxlength"   => "40",
                "name"        => "family2",
                "placeholder" => "2nd family",
                "required"    => "true"
                ];

            echo '<label for="family2">2nd Family</label>';
            echo form_input($attr8);

            $attr9 = [
                "id"          => "male",
                "style"       => "width: 50%",
                "maxlength"   => "40",
                "name"        => "male",
                "placeholder" => "Male",
                "required"    => "true"
                ];

            echo '<label for="male">Male</label>';
            echo form_input($attr9);

            echo "<div class='pure-controls'> ";
            $dub = [
                'class' => 'pure-button pure-button-primary',
                'value' => 'Submit',
                'name'  => 'submit'
            ];
                echo form_submit($dub);
                $rest = [
                    'class' => 'pure-button pure-button-error',
                    'value' => 'Reset',
                    'name'  => 'reset'
                ];
                echo form_reset($rest);
                echo form_close();
                ?>
       
        </fieldset>
     <p>Response</p>
     <p id="display">
        <?php echo validation_errors(); ?>
    </p>
   </div>
  <div class="box-right">
    <p>need something here</p>
  </div>
</div> <!-- end of main stuff -->
