<footer class="site-footer bg-gray-900 text-white mt-20">

<div class="container mx-auto px-6 py-10 grid md:grid-cols-4 gap-8">

<div>

<h3 class="text-lg font-semibold mb-4">
About
</h3>

<p class="text-gray-400">
Premium cosmetics designed to enhance natural beauty.
</p>

</div>

<div>

<h3 class="text-lg font-semibold mb-4">
Shop
</h3>

<?php
wp_nav_menu([
'theme_location' => 'footer_menu',
'container' => false
]);
?>

</div>

<div>

<h3 class="text-lg font-semibold mb-4">
Customer Service
</h3>

<ul class="text-gray-400">
<li>Shipping</li>
<li>Returns</li>
<li>Contact</li>
</ul>

</div>

<div>

<h3 class="text-lg font-semibold mb-4">
Newsletter
</h3>

<p class="text-gray-400 mb-3">
Subscribe for updates
</p>

<input type="email" placeholder="Email" class="w-full p-2 text-black">

</div>

</div>

<div class="text-center py-4 border-t border-gray-700">

<p>
© <?php echo date('Y'); ?> Daniella's Cosmetics
</p>

</div>

</footer>

<?php wp_footer(); ?>

</body>
</html>