<?php
$img = get_the_post_thumbnail_url(get_the_ID(), 'full');
$l = get_field('cta');
?>
<section class="hero" style="background-image:url(<?=$img?>)">
    <div class="hero__overlay">
        <div class="hero__overlay_inner"></div>
    </div>
    <div class="container-xl h-100 d-flex align-items-center">
        <div class="row">
            <div class="col-md-7 offset-md-1 text-center text-md-end">
                <h1 class="hero__title">
                    <?=get_field('title')?>
                </h1>
                <a href="<?=$l['url']?>"
                    target="<?$l['target']?>"
                    class="btn btn-hero"><?=$l['title']?></a>
            </div>
        </div>
    </div>
</section>