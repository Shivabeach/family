<footer>
    <div class="foot-container">
        &copy; <?php
                $fromYear = 2008;
                $thisYear = (int)date('Y');
                echo $fromYear . (($fromYear != $thisYear) ? '-' . $thisYear : '');?> VanHorn Family.
    </div>
    <!-- <div>
        <?PHP
  // Original PHP code by Chirp Internet: www.chirp.com.au
    $input = "P6HBAJ4Zk272SiMU^W/%g^4c8";
    $options = [
     'cost' => 7
    ];
    echo password_hash($input, PASSWORD_BCRYPT, $options);
  ?>
    </div> -->
</footer>
</div>
<!-- <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script> -->
<script src="<?php echo base_url('bower_components/timeago/jquery.timeago.js');?>"></script>
<script src="<?php echo base_url('assets/js/functions.js');?>"></script>
<script src="<?php echo base_url('assets/js/main.js');?>"></script>

<!-- <script type="text/javascript" src="superfish.js"></script>
<script> -->
	jQuery(document).ready(function() {
		jQuery('ul.sf-menu').superfish();
	});
</script>

<!--
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
-->


</body>

</html>
