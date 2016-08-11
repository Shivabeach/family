<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="<?php echo base_url('assets/dist/flex-lay-dist.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('bower_components/pure/pure-min.css');?>">
    <title><?php echo $title; ?></title>
</head>
<body>
<div class="container">
    <div class="main-content">
    <ul>
    <?php
        // script on http://stackoverflow.com/questions/13637145/split-text-string-into-first-and-last-name-in-php
        foreach($testor as $row){

            $this->table->add_row(
                $row->male,
                $row->family2
                 );
        }
echo $this->table->generate();
     ?>
    </ul>
    </div>
    <div class="box-right">
    <h3>Bower</h3>
    <p>
    Chocolat is a responsive jQuery lightbox plugin What you are looking for is in the /dist/ folder.<br>
    <a href="https://github.com/nicolas-t/Chocolat">Chocolat</a>
    </p>
    <p>
        Echo is a standalone JavaScript lazy-loading image micro-library. Echo is fast, 2KB, and uses HTML5 data-* attributes for simple. Check out a [demo](http://toddmotto.com/labs/echo). Echo works in IE8+.
    </p>
    <p>
    Font Awesome is a full suite of 634 pictographic icons for easy scalable vector graphics on websites, created and maintained by Dave Gandy. Stay up to date with the latest release and announcements on Twitter: @fontawesome.<br>
    Get started at http://fontawesome.io!
    </p>
    </div>
</div>

</body>
</html>
