<section class="hero-slider">

<div class="swiper heroSwiper">

<div class="swiper-wrapper">

<?php for ($i = 1; $i <= 3; $i++):
    $title = get_field("hero_title_" . $i);
    $subtitle = get_field("hero_subtitle_" . $i);
    $button_text = get_field("hero_button_text_" . $i);
    $button_link = get_field("hero_button_link_" . $i);
    $image = get_field("hero_image_slide_" . $i);

    if ($image): ?>

<div class="swiper-slide">

<div class="relative h-[600px] flex items-center">

<img src="<?php echo $image[
    "url"
]; ?>" class="absolute w-full h-full object-cover">

<div class="container mx-auto relative z-10 text-white">

<h1 class="text-5xl font-bold mb-4">
<?php echo $title; ?>
</h1>

<p class="text-lg mb-6">
<?php echo $subtitle; ?>
</p>

<?php if ($button_text): ?>

<a href="<?php echo $button_link; ?>" class="bg-pink-500 px-8 py-5 rounded shop-now-btn">

<?php echo $button_text; ?>

</a>

<?php endif; ?>

</div>

</div>

</div>

<?php endif;
endfor; ?>

</div>

<div class="swiper-pagination"></div>

</div>

</section>