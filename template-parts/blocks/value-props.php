<section class="value-props">

<div class="container">

<div class="value-grid">

<?php for ($i = 1; $i <= 5; $i++): 

$icon = get_field("value_icon_" . $i);
$title = get_field("value_title_" . $i);
$text = get_field("value_text_" . $i);

if ($title):
?>

<div class="value-item">

<i class="fa-solid <?php echo $icon; ?>"></i>

<h3><?php echo $title; ?></h3>

<p><?php echo $text; ?></p>

</div>

<?php endif; endfor; ?>

</div>

</div>

</section>