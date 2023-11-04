<a id="<?=get_field('id')?>" class="anchor"></a>
<div class="form_cols">
    <div class="container-xl">
        <div class="row g-4">
            <div class="col-lg-6 form_cols__content">
                <h2><?=get_field('title')?></h2>
                <div>
                    <?=apply_filters('the_content', get_field('content'))?>
                </div>
            </div>
            <div class="col-lg-6">
                <?=do_shortcode('[contact-form-7 id="' . get_field('form_id') . '" title="Register Interest"]')?>
            </div>
        </div>
    </div>
</div>