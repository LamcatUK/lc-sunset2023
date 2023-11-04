<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package lc-sunset2023
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

?>
<div class="page-bottom-highlight"></div>
</div>
<footer class="footer pt-5">
    <div class="container-xl">
        <div class="footer__grid">
            <img class="logo"
                src="<?=get_stylesheet_directory_uri()?>/img/flhf-logo.png">
            <img class="left_chap"
                src="<?=get_stylesheet_directory_uri()?>/img/left-chap.jpg">
            <img class="right_chap"
                src="<?=get_stylesheet_directory_uri()?>/img/right-chap.jpg">
        </div>
        <div class="colophon">&copy;
            <?=date('Y')?> Florida Home Finders |
            All Rights Reserved
        </div>
    </div>
</footer>
<?php wp_footer();
if (get_field('gtm_property', 'options')) {
    ?>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe
        src="https://www.googletagmanager.com/ns.html?id=<?=get_field('gtm_property', 'options')?>"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<?php
}
?>
</body>

</html>