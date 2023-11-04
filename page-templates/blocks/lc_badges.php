<section class="badges py-5">
    <div class="container-xl text-center">
        <?php
        if (get_field('title')) {
            ?>
        <h3><?=get_field('title')?></h3>
        <?php
        }
        ?>
        <div class="badges__grid">
            <?php
            foreach (get_field('badges') as $b) {
                the_row();
                ?>
            <div class="badges__badge">
                <img
                    src="<?=wp_get_attachment_image_url($b, 'full')?>">
            </div>
            <?php
            }
        ?>
        </div>
    </div>
</section>