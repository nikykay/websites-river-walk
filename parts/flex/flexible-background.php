<?php
$background_image = get_sub_field('background_image');
$picture = $background_image['sizes']['full_hd'];
?>
<?php if ($background_image): ?>
    <section class="background-section" <?php echo bg($picture); ?>></section>
<?php endif; ?>
