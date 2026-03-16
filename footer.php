<footer class="site-footer bg-gray-900 text-white mt-20">

<div class="container mx-auto px-6 py-10 grid md:grid-cols-4 gap-8">

<!-- Columna 1 -->
<div class="footer-col footer-col-1">

<?php
// LOGO DEL SITIO
if ( function_exists( 'the_custom_logo' ) ) {
the_custom_logo();
}
?>

<?php
if ( is_active_sidebar( 'footer-1' ) ) :
dynamic_sidebar( 'footer-1' );
endif;
?>

</div>


<!-- Columna 2 -->
<div class="footer-col">

<?php
if ( is_active_sidebar( 'footer-2' ) ) :
dynamic_sidebar( 'footer-2' );
endif;
?>

</div>


<!-- Columna 3 -->
<div class="footer-col">

<?php
if ( is_active_sidebar( 'footer-3' ) ) :
dynamic_sidebar( 'footer-3' );
endif;
?>

</div>


<!-- Columna 4 -->
<div class="footer-col">

<?php
if ( is_active_sidebar( 'footer-4' ) ) :
dynamic_sidebar( 'footer-4' );
endif;
?>

</div>

</div>


<!-- Copyright -->

<div class="text-center py-4 border-t border-gray-700">

<p>
© <?php echo date('Y'); ?> <?php bloginfo('name'); ?>
</p>

</div>

<?php if ( is_active_sidebar( 'footer-payments' ) ) : ?>

<div class="footer-payments">

<?php dynamic_sidebar( 'footer-payments' ); ?>

</div>

<?php endif; ?>


</footer>

<?php wp_footer(); ?>

</body>
</html>