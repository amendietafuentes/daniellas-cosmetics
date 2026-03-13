<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://cdn.tailwindcss.com"></script>
<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<header class="site-header bg-white shadow">

<div class="container mx-auto px-6 py-4 flex items-center justify-between">

<!-- Logo -->

<div class="logo">

<a href="<?php echo home_url(); ?>">

<?php
if (has_custom_logo()) {
    the_custom_logo();
} else {
?>
<h1 class="text-xl font-bold">
<?php bloginfo('name'); ?>
</h1>
<?php } ?>

</a>

</div>

<!-- Navigation -->

<nav class="main-navigation">

<?php
wp_nav_menu([
'theme_location' => 'main_menu',
'container' => false,
'menu_class' => 'flex gap-6 text-gray-700'
]);
?>

</nav>

<!-- Icons -->

<div class="header-icons flex gap-4">

<a href="<?php echo wc_get_cart_url(); ?>">
🛒
</a>

<a href="<?php echo get_permalink(get_option('woocommerce_myaccount_page_id')); ?>">
👤
</a>

</div>

</div>

</header>