<section class="home-products-carousel">

<div class="container">

<h2 class="section-title">
Productos Nuevos
</h2>

<div class="swiper productSwiper">

<div class="swiper-wrapper">

<?php

$args = array(
'post_type' => 'product',
'posts_per_page' => 12,
'post_status' => 'publish',
'orderby' => 'date',
'order' => 'DESC'
);

$loop = new WP_Query($args);

if($loop->have_posts()) :

while($loop->have_posts()) : $loop->the_post();

global $product;
?>

<div class="swiper-slide">

<div class="product-card">

<a href="<?php the_permalink(); ?>" class="product-image">
<?php echo woocommerce_get_product_thumbnail(); ?>
</a>

<h3 class="product-title">
<a href="<?php the_permalink(); ?>">
<?php the_title(); ?>
</a>
</h3>

<div class="product-price">
<?php echo $product->get_price_html(); ?>
</div>

<a href="?add-to-cart=<?php echo $product->get_id(); ?>"
data-quantity="1"
class="btn-add-cart ajax_add_to_cart"
data-product_id="<?php echo $product->get_id(); ?>">

Añadir al carrito

</a>

</div>

</div>

<?php endwhile; wp_reset_postdata(); endif; ?>

</div>

<div class="swiper-button-next"></div>
<div class="swiper-button-prev"></div>

</div>

</div>

</section>