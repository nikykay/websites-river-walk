<?php
$reservations_content = get_sub_field('reservations_content');
?>

<section class="reservations-section">
    <div class="grid-container">
        <?php if($reservations_content):?>
            <div class="reservations-content">
                <?php echo $reservations_content;?>
            </div>
        <?php endif;?>
    </div>
</section>

