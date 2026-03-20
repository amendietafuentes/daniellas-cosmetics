<?php get_header(); ?>

<main class="site-main">

<?php get_template_part('template-parts/blocks/hero/hero-slider'); ?>

<?php get_template_part('template-parts/blocks/value-props'); ?>

<?php get_template_part('template-parts/blocks/products/sale-products'); ?>

<?php get_template_part('template-parts/blocks/products/product-carousel'); ?>

<?php get_template_part('template-parts/blocks/categories'); ?>

<?php get_template_part('template-parts/blocks/products/product-grid'); ?>

<?php echo do_shortcode('[productos_populares]'); ?>

<section class="faq-section">

    <h2>¿Tienes preguntas? ¡Tenemos respuestas!</h2>

    <?php echo do_shortcode('[faq display="accordion"]'); ?>

</section>

<?php get_template_part('template-parts/blocks/promo-banner'); ?>

<?php get_template_part('template-parts/blocks/benefits'); ?>

<?php get_template_part('template-parts/blocks/testimonials'); ?>

<?php get_template_part('template-parts/blocks/instagram'); ?>

<?php get_template_part('template-parts/blocks/newsletter'); ?>

<?php get_template_part('template-parts/blocks/blog'); ?>

</main>

<?php get_footer(); ?>