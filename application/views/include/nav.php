<div class="container">
        <nav>
            <ul>
                <li class="main-nav">
                <?php echo anchor('pages/fam', 'Family Insert'); ?></li>

                <li class="main-nav">
                <?php echo anchor('pages/fam', 'VanHorns'); ?></li>

                <li class="main-nav">
                <?php echo anchor('pages/fam', 'Bosticks'); ?></li>

                <li class="main-nav">
                <?php echo anchor('pages/fam', 'Family Insert'); ?></li>
            </ul>

            <p>This is the nav
            section</p><?php $this->load->view("include/nav_country");?>
        </nav>
    </div>
<?php $this->load->view("include/nav_country");?>
</nav>