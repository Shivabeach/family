<footer>
            <div class="foot-container">
                &copy; <?php
                $fromYear = 2008;
                $thisYear = (int)date('Y');
                echo $fromYear . (($fromYear != $thisYear) ? '-' . $thisYear : '');?> VanHorn Family.
            </div>
            <div>
  <?PHP
  // Original PHP code by Chirp Internet: www.chirp.com.au
    $input = "P6HBAJ4Zk272SiMU^W/%g^4c8";
    //$crypt_options = array(
     // 'cost' => 10
   // );
    echo password_hash($input, PASSWORD_BCRYPT);
  ?>
  <br>
  <?php echo random_string('alnum', 16);?>

            </div>
</footer>
</div>
    <script src="<?php echo base_url('bower_components/jquery/dist/jquery.min.js');?>"></script>
    <script src="<?php echo base_url('bower_components/jquery.validation/dist/jquery.validate.min.js');?>"></script>
    <script src="<?php echo base_url('bower_components/lightbox2/src/js/lightbox.js');?>"></script>
    <script src="<?php echo base_url('bower_components/jquery-ui/jquery-ui.min.js');?>"></script>
    <script src="<?php echo base_url('bower_components/superfish/dist/js/superfish.min.js');?>"></script>
    <script src="<?php echo base_url('bower_components/timeago/jquery.timeago.js');?>"></script>

    <script src="<?php echo base_url('assets/js/functions.min.js');?>"></script>
    <script src="<?php echo base_url('assets/js/main.js');?>"></script>
    <script>
      jQuery.validator.setDefaults({
      debug: true,
      success: "valid"
    });
</script>

    <script>
        $(window).on('scroll', function(){
        var $timeline_block = $(".cd-timeline-block");
        $timeline_block.each(function(){
        if( $(this).offset().top <= $(window).scrollTop()+$(window).height()*0.75 && $(this).find('.cd-timeline-img').hasClass('is-hidden') ) {
            $(this).find('.cd-timeline-img, .cd-timeline-content').removeClass('is-hidden').addClass('bounce-in');
        }
    });
});
    </script>
    <a rel="nofollow" style="display:none;" href="<?php echo site_url('blackhole/');?>">Do NOT follow this link or you will be banned from the site!</a>
</body>
</html>
