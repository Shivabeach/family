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
</div>

</body>
</html>
