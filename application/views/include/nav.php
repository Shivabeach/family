<div class="container">
        <nav>
            <ul>
                <li class="main-nav">
                <?php echo anchor('pages/fam', 'Family Insert'); ?></li>

                <li class="main-nav">
                <?php echo anchor('pages/van', 'VanHorns'); ?>
                </li>

                <li class="main-nav">
                <?php echo anchor('pages/fam', 'Bosticks'); ?></li>

                <li class="main-nav">
                <?php echo anchor('pages/fam', 'Family Insert'); ?></li>

                <li class="main-nav">
                <?php echo anchor('pages/dat', 'Data'); ?></li>
            </ul>
            <?php $this->load->view("include/nav_country");?>
       </nav>