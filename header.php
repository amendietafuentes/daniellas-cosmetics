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

<header class="site-header">

    <?php get_template_part('template-parts/header/topbar'); ?>

    <?php get_template_part('template-parts/header/header-main'); ?>

    <?php get_template_part('template-parts/header/header-menu'); ?>

</header>