<?php $this->load->view("head/head");?>

	<body>
		<div class="container">
			<div class="leftbox">
				<article>
					<section>
						<h2>Family Relations Insert</h2>
						<p>
							<?php echo anchor('/', 'Home');?>
						</p>

						<fieldset>
							<?php echo validation_errors(); ?>
								<input type="button" value="Bold" id="font-button"></input>​
								<br>
								<?php $attr1 = array(
							'id' => "ajax", 'class' => 'pure-form pure-form-aligned' );?>
							<?php echo form_open('/forms/form1', $attr1) ;?>
								<div class="pure-control-group">
									<label for="family">Family</label>
							<?php
						$attr2 = array(
							'' => 'Pick one',
							'Family' => 'family2',
							'Family' => 'family1'
						);
						echo form_dropdown("family", $attr2);?>
										</div>
										<div class="pure-control-group">
											<label for="male">Male</label>
											<?php
						$attr4 = array(
							'id'				=> "male",
							'name'      => 'male',
							'maxlength' => '100',
							'style'     => 'width:50%'
						);?>
						<?php echo form_input($attr4);?>
					</div>

					<div class="pure-control-group">
					<label for="female">Male Name</label>
					<?php
					$attr16 = array (
						'name'      => 'male_name',
						'maxlength' => '100',
						'style'     => 'width:50%'
					);?>
					<?php echo form_input($attr16);?>
					</div>



					<div class="pure-control-group">
					<label for="female">Female</label>
					<?php
					$attr5 = array (
						'name'      => 'female',
						'maxlength' => '100',
						'style'     => 'width:50%'
					);?>
					<?php echo form_input($attr5);?>
					</div>

					<div class="pure-control-group">
					<label for="female">Female Name</label>
					<?php
					$attr15 = array (
						'name'      => 'female_name',
						'maxlength' => '100',
						'style'     => 'width:50%'
					);?>
					<?php echo form_input($attr15);?>
					</div>


					<div class="pure-control-group">
						<label for="branch2">2nd Branch</label>
					<?php
					$attr10 = array (
						'name'        => 'branch2',
						'maxlength'   => '100',
						'style'       => 'width:50%',
						'placeholder' => "Other family branch start"
					);?>
												<?php echo form_input($attr10);?>
										</div>
										<div class="pure-control-group">
											<label for="relationship">Relationship</label>
											<?php
					$attr6 = array(
						'name'      => 'relationship',
						'maxlength' => '100',
						'style'     => 'width:50%'
					);?>
												<?php echo form_input($attr6);?> <span>8th Great Grandfather</span>
										</div>
										<div class="pure-control-group">
											<label for="relative">Relative From Ancestry</label>
											<?php
					$attr7 = array (
						'name'        => 'relative',
						'maxlength'   => '100',
						'placeholder' => "Ancestry Relative",
						'style'       => 'width:50%'
					);?>
												<?php echo form_input($attr7);?>
										</div>
										<div class="pure-control-group">
											<label for="level">Cousin Level</label>
											<?php
					$attr8 = array (
						'name'      => 'level',
						'maxlength' => '2',
						'type'      => 'number'
					);?>
												<?php echo form_input($attr8);?> <span><u>3</u>rd cousin</span>
										</div>
										<div class="pure-control-group">
											<label for="Year">Year Born</label>
											<?php
					$attr9 = [
						'name'      => 'year',
						'maxlength' => '4',
						'type'      => 'number'
					];?>
												<?php echo form_input($attr9);?>
										</div>
										<div class="pure-control-group">
											<label for="country">Country of Birth</label>
											<?php
					$attr11 = [
						'name'      => 'country',
						'maxlength' => '100',
						'type'      => 'text',
						'id'        => 'country'
					];?>
												<?php echo form_input($attr11);?>
										</div>
										<div class="pure-control-group">
											<label for="comment">Comment</label>
											<br>
											<?php
					$attr12 = [
						'name' => 'comment',
						'id'   => 'comment'
					];?>
												<?php echo form_textarea($attr12);?>
										</div>
										<div class="pure-controls">
											<?php echo form_submit('submit', 'Submit');
				echo form_reset('reset', 'Reset');
				echo form_close();?>
										</div>
						</fieldset>
					</section>
				</article>
			</div>
			<div class="rightbox">
				<h3 class="display">We should see results here</h3>
				<div id="display"></div>
				<h3 class="highlite">List of completed Connections</h3>
				<?php $this->load->view("include/done");?>

			</div>
		</div>
		<footer>
			<div class="foot-container">
				<div class="foot-header">
					<h3>Lemon Footer</h3>
				</div>
				<p>A picture of what man in space can do</p>
				<p>
					<?php echo anchor('/', 'Home');?>
				</p>
			</div>
			<div class="row">
				<div class="grid-6 box1">
					<p>backdrop</p>
				</div>
				<div class="grid-6 box2">
					<p>Primary</p>
				</div>
				<div class="grid-6 box3">
					<p>Secondary</p>
				</div>
				<div class="grid-6 box4">
					<p>Accent</p>
				</div>
				<div class="grid-6 box5">
					<p>Lightprimary</p>
				</div>
				<div class="grid-6 box6">
					<p>Primetext</p>
				</div>
			</div>
		</footer>
		</div>
		<script src="<?php echo base_url('bower_components/jquery.validation/dist/jquery.validate.min.js');?>"></script>
		<script src="<?php echo base_url('bower_components/jquery-ui/jquery-ui.min.js');?>"></script>
		<script src="<?php echo base_url('bower_components/timeago/jquery.timeago.js');?>"></script>
		<script src="<?php echo base_url('bower_components/superfish/dist/js/superfish.min.js');?>"></script>
		<script src="<?php echo base_url('assets/js/functions.min.js');?>"></script>
	</body>

	</html>
