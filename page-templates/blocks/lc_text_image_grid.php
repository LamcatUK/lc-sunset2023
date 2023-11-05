<?php
$l = get_field('cta');
?>
<a id="<?=get_field('id')?>" class="anchor"></a>
<section class="text_image_grid py-5">
    <div class="container-xl">
        <div class="image_grid">
            <a class="image_grid__1" data-lightbox="gallery"
                href="<?=wp_get_attachment_image_url(get_field('image_1'), 'full')?>">
                <img src="<?=wp_get_attachment_image_url(get_field('image_1'), 'large')?>"
                    alt=""></a>
            <a class="image_grid__2" data-lightbox="gallery"
                href="<?=wp_get_attachment_image_url(get_field('image_2'), 'full')?>">
                <img src="<?=wp_get_attachment_image_url(get_field('image_2'), 'large')?>"
                    alt=""></a>
            <a class="image_grid__3" data-lightbox="gallery"
                href="<?=wp_get_attachment_image_url(get_field('image_3'), 'full')?>">
                <img src="<?=wp_get_attachment_image_url(get_field('image_3'), 'large')?>"
                    alt=""></a>
            <a class="image_grid__4" data-lightbox="gallery"
                href="<?=wp_get_attachment_image_url(get_field('image_4'), 'full')?>">
                <img src="<?=wp_get_attachment_image_url(get_field('image_4'), 'large')?>"
                    alt=""></a>
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