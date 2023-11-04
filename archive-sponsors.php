<?php
// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();

echo '<main>';
// hero
?>
<section class="hero"
    style="background-image:url('<?=wp_get_attachment_image_url(get_field('sponsor_hero_image', 'options'), 'full')?>')">
    <div class="front-hero__overlay"></div>
    <div class="container h-100">
        <div class="row h-100">
            <div class="col-12 col-lg-6 text-center text-lg-start d-flex align-items-center">
                <div class="hero__inner" data-aos="fade-right">
                    <h1 data-aos="fade-right" data-aos-delay="250">Sponsors</h1>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
// featured
$f = new WP_Query(array(
    'post_type' => 'sponsors',
    'post_status' => 'publish',
    'posts_per_page' => 1,
    'meta_query' => array(
      array(
        'key'		=> 'is_featured',
        'value'	=> 'Yes'
      )
    )
));
while ($f->have_posts()) {
    $f->the_post();
    $a = acf_slugify(get_the_title());
    ?>
<a id="<?=$a?>" class="anchor"></a>
<section class="py-5" data-aos="fade">
    <div class="container-xl">
        <h2 class="text-green-400 underline">Featured Sponsor</h2>
        <div class="row py-4">
            <div class="col-12 col-md-6 order-2 order-md-1">
                <h3><?=get_the_title()?></h3>
                <div>
                    <?=apply_filters('the_content', get_field('short_description'))?>
                </div>
                <div class="pt-2"><a class="btn btn-gold btn--has-arrow"
                        href="<?=get_permalink()?>">Read More</a>
                </div>
            </div>
            <div class="col-12 col-md-6 order-1 order-md-2 px-4 text-center">
                <?php
            $img = get_field('featured_sponsor_logo');
    echo '<img src="' . $img . '" class="img-300">'; ?>
            </div>
        </div>
    </div>
</section>
<?php
}
// become a sponsor
?>
<section class="bg--grad" data-aos="fade">
    <div class="container py-4 text-white">
        <h2 class="text-white underline">Become a Sponsor</h2>
        <p>If your company would like to sponsor the Run Barns Green races (Half Marathon, 10K, 5K and Junior events),
            please <a href="/contact-us/">get in touch</a> with our committee.
    </div>
</section>
<section class="pt-5">
    <div class="container-xl">
        <h2 class="text-green-400 underline mb-5" data-aos="fade">Our Partners</h2>
        <?php

// Partners
$p = new WP_Query(array(
    'post_type' => 'sponsors',
    'post_status' => 'publish',
    'posts_per_page' => -1,
    'orderby' => 'rand',
    'meta_query' => array(
        array(
            'key'		=> 'is_featured',
            'value'	=> 'No'
        )
    ),
    'tax_query' => array(
        array(
            'taxonomy'         => 'sptype',
            'terms'            => 'partner',
            'field'            => 'slug',
            'operator'         => 'IN',
        )
    )
));
while ($p->have_posts()) {
    $p->the_post();
    $a = acf_slugify(get_the_title());
    ?>
        <a id="<?=$a?>" class="anchor"></a>
        <div class="row sponsor-container pb-4 mb-4" data-aos="fade">
            <div class="col-12 col-md-4 py-4">
                <img src="<?=wp_get_attachment_image_url(get_field('sponsor_logo', get_the_ID()), 'full')?>"
                    alt="<?=get_the_title()?>" class="img-fluid">
            </div>
            <div class="col-12 col-md-8">
                <div class="detail">
                    <h3 class="h3"><?=get_the_title()?>
                    </h3>
                    <div class="text">
                        <?=apply_filters('the_content', get_the_content())?>
                    </div>
                    <?php
        if (get_field('sponsor_website')) {
            ?>
                    <div class="link"><a
                            href="<?=get_field('sponsor_website')?>"
                            target="_blank">Visit website</a></div>
                    <?php
        }
    ?>
                </div>
            </div>
        </div>
        <?php
}
?>
    </div>
</section>
<section class="pt-5">
    <div class="container-xl">
        <h2 class="text-green-400 underline mb-5" data-aos="fade">Our Sponsors</h2>
        <?php

// Sponsors
$p = new WP_Query(array(
    'post_type' => 'sponsors',
    'post_status' => 'publish',
    'posts_per_page' => -1,
    'orderby' => 'rand',
    'meta_query' => array(
        array(
            'key'		=> 'is_featured',
            'value'	=> 'No'
        )
    ),
    'tax_query' => array(
        array(
            'taxonomy'         => 'sptype',
            'terms'            => 'sponsor',
            'field'            => 'slug',
            'operator'         => 'IN',
        )
    )
));
while ($p->have_posts()) {
    $p->the_post();
    $a = acf_slugify(get_the_title());
    ?>
        <a id="<?=$a?>" class="anchor"></a>
        <div class="row sponsor-container pb-4 mb-4" data-aos="fade">
            <div class="col-12 col-md-4 py-4">
                <img src="<?=wp_get_attachment_image_url(get_field('sponsor_logo', get_the_ID()), 'full')?>"
                    alt="<?=get_the_title()?>" class="img-fluid">
            </div>
            <div class="col-12 col-md-8">
                <div class="detail">
                    <h3 class="h3"><?=get_the_title()?>
                    </h3>
                    <div class="text">
                        <?=apply_filters('the_content', get_the_content())?>
                    </div>
                    <?php
        if (get_field('sponsor_website')) {
            ?>
                    <div class="link"><a
                            href="<?=get_field('sponsor_website')?>"
                            target="_blank">Visit website</a></div>
                    <?php
        }
    ?>
                </div>
            </div>
        </div>
        <?php
}
?>
    </div>
</section>
<?php


echo '</main>';

get_footer();
?>