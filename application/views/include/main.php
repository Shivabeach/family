<!-- This is the main page feed include -->
<main>
        <header class="top">
            <div class="align">
                <h1>VanHorn Family</h1>
            </div>
        </header>

        <div class="row"><h3 class="hidden">VanHorn Family</h3>
            <div class="grid-2 vanhorn">
                <article class="centered">
                    <h2><a class="vanhorn-link" href="#">VanHorns</a></h2>

                    <p>The VanHorn Story</p>
                </article>
            </div>

            <div class="grid-2 bostick">
                <article class="centered">
                    <h2><a class="bostick-link" href="#">Bosticks</a></h2>

                    <p>The Bostick story</p>
                </article>
            </div>
        </div>

        <article>
            <?php foreach($results as $row):?>

            <section>
                <h2 class="section-header">
                <?php echo $row->title;?></h2><?php echo $this->typography->auto_typography($row->content);?>

                <p>Created <?php echo $row->date;?></p>
                <hr>
            </section><?php endforeach;?>
        </article>
    </main>