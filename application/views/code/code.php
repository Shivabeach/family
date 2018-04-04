<body>
    <div class="wrapper" role="main">
        <div class="flex1">
            <?php
                $this->load->view("code/navigate");

            ?>
        </div>
        <div class="flex2">
            <header>
                <h1>The VanHorn Family</h1>
            </header>
            <article>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim aspernatur odio officia a iusto at cum hic accusantium ex, ea soluta temporibus nostrum tempora debitis non labore corrupti nobis quidem!</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam rem magnam reprehenderit expedita, dolor quibusdam aspernatur obcaecati deleniti similique fugiat neque minus quam. Consequatur reprehenderit nisi, dolorum beatae repellendus itaque.</p>
            </article>
            <article>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim aspernatur odio officia a iusto at cum hic accusantium ex, ea soluta temporibus nostrum tempora debitis non labore corrupti nobis quidem!</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam rem magnam reprehenderit expedita, dolor quibusdam aspernatur obcaecati deleniti similique fugiat neque minus quam. Consequatur reprehenderit nisi, dolorum beatae repellendus itaque.</p>
            </article>
        </div>
        <div class="flex3">
            <article>
                <h3>Quick Facts</h3>
                <ul>
                    <li><i class="icon-hand-right"></i> 127 Matched relatives</li>
                    <li><i class="icon-hand-right"></i> 13,650 Unmatched relatives</li>
                    <li><i class="icon-hand-right"></i> 15,562 People in the current tree</li>
                    <li><i class="icon-hand-right"></i> 1794 Photos</li>
                    <li><i class="icon-hand-right"></i> 417 4th to 8th Cousins</li>
                </ul>
            </article>
            <article>
                <?php
                $date = new DateTime;
                $ancestor = (new DateTime)->setDate(1640,01,01)->setTime(00,00,00);
                $timeago = $date->diff($ancestor);
                echo $timeago->format('Matthys was born %y Years ago');
              ?>
            </article>
        </div>

    </div>
</body>

</html>
