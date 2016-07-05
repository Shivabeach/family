<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $title;?></title>
    <link rel="stylesheet" href="<?php echo base_url('assets/dist/flex-lay-dist.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('bower_components/pure/pure-min.css');?>">
</head>
<body>
    <div class="container">
        <div class="main-content">
            <h3>Military</h3>
            <?php
                foreach($army as $row)
                {
                    $this->table->add_row(
                        $row->name,
                        $row->military,
                        $row->war,
                        $row->country 
                        );
                }
                echo $this->table->generate();
            ?>
        </div>
        <div class="box-right">
            <p>right box</p>
        </div>

    </div>
</body>
</html>
