<?php
$l = get_field('cta');
?>
<a id="<?=get_field('id')?>" class="anchor"></a>
<section class="text_image_grid py-5">
    <div class="container-xl">
        <div class="image_grid">
            <img class="image_grid__1"
                src="<?=wp_get_attachment_image_url(get_field('image_1'), 'full')?>"
                alt="">
            <img class="image_grid__2"
                src="<?=wp_get_attachment_image_url(get_field('image_2'), 'full')?>"
                alt="">
            <img class="image_grid__3"
                src="<?=wp_get_attachment_image_url(get_field('image_3'), 'full')?>"
                alt="">
            <img class="image_grid__4"
                src="<?=wp_get_attachment_image_url(get_field('image_4'), 'full')?>"
                alt="">
        </div>
        <div class="text_content">
            <h2><?=get_field('title')?></h2>
            <div>
                <?=get_field('content')?>
            </div>
            <a href="<?=$l['url']?>"
                target="<?=$l['target']?>"
                class="btn btn-body"><?=$l['title']?></a>
        </div>
    </div>
</section>