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
  // Please acknowledge use of this code by including this header.

  function better_crypt($input, $rounds = 10)
  {
    $input = "kwangye";
    $crypt_options = array(
      'cost' => $rounds
    );
    return password_hash($input, PASSWORD_BCRYPT, $crypt_options);
  }
  
?>
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
        $(window).on('scroll', function(){
        var $timeline_block = $(".cd-timeline-block");
        $timeline_block.each(function(){
        if( $(this).offset().top <= $(window).scrollTop()+$(window).height()*0.75 && $(this).find('.cd-timeline-img').hasClass('is-hidden') ) {
            $(this).find('.cd-timeline-img, .cd-timeline-content').removeClass('is-hidden').addClass('bounce-in');
        }
    });
});
    </script>
</body>
</html>
