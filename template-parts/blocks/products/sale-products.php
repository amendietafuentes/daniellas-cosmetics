<section class="sale-products">

<div class="container">

<div class="section-header">

<h2>Ofertas especiales</h2>

<a href="<?php echo get_permalink( wc_get_page_id('shop') ); ?>" class="view-all">
Ver todo
</a>

</div>


<div class="sale-products-layout">


<!-- GRID PRODUCTOS -->

<div class="products-grid">

<?php

$args = array(
'post_type' => 'product',
'posts_per_page' => 6,
'post_status' => 'publish',
'post__in' => wc_get_product_ids_on_sale()
);

$loop = new WP_Query($args);

if($loop->have_posts()) :

while($loop->have_posts()) : $loop->the_post();

global $product;
?>

<div class="product-card">

<a href="<?php the_permalink(); ?>" class="product-image">

<?php echo woocommerce_get_product_thumbnail('medium'); ?>

</a>

<div class="product-info">

<h3 class="product-title">
<a href="<?php the_permalink(); ?>">
<?php the_title(); ?>
</a>
</h3>

<div class="product-price">
<?php echo $product->get_price_html(); ?>
</div>

<a href="?add-to-cart=<?php echo $product->get_id(); ?>"
class="btn-add-cart ajax_add_to_cart"
data-product_id="<?php echo $product->get_id(); ?>">

Añadir al carrito

</a>

</div>

</div>

<?php endwhile; wp_reset_postdata(); endif; ?>

</div>



<!-- PRODUCTO DESTACADO -->

<div class="featured-product">

<?php

$featured_args = array(
'post_type' => 'product',
'posts_per_page' => 1,
'tax_query' => array(
array(
'taxonomy' => 'product_visibility',
'field' => 'name',
'terms' => 'featured'
)
)
);

$featured = new WP_Query($featured_args);

if($featured->have_posts()) :

while($featured->have_posts()) : $featured->the_post();

global $product;
?>

<div class="featured-card">

<a href="<?php the_permalink(); ?>" class="featured-image">

<?php echo woocommerce_get_product_thumbnail('large'); ?>

</a>

<div class="featured-info">

<h3 class="featured-title">
<?php the_title(); ?>
</h3>

<div class="featured-price">
<?php echo $product->get_price_html(); ?>
</div>

<a href="?add-to-cart=<?php echo $product->get_id(); ?>"
class="btn-buy ajax_add_to_cart"
data-product_id="<?php echo $product->get_id(); ?>">

Comprar ahora

</a>

</div>

</div>

<?php endwhile; wp_reset_postdata(); endif; ?>

</div>


</div>

</div>

</section>