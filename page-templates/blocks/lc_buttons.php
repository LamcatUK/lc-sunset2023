<section class="buttons">
    <div class="container-xl d-flex justify-content-center">
        <?php
        while (have_rows('buttons')) {
            the_row();
            $l = get_sub_field('link');
            ?>
        <a href="<?=$l['url']?>"
            target="<?=$l['target']?>"
            class="btn btn-body"><?=$l['title']?></a>
        <?php
        }
        ?>
    </div>
</section>