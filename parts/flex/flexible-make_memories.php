<?php
    $memories_title_1 = get_sub_field('memories_title_1');
    $memories_title_2 = get_sub_field('memories_title_2');
    $memories_content = get_sub_field('memories_content');
    $memories_image = get_sub_field('memories_image');
    $memories_background = get_sub_field('memories_background');
    $picture = $memories_background['sizes']['full_hd'];
?>

<section class="make-memories" <?php if($picture):
echo bg($picture)
?>
<?php endif;?>
>
    <div class="grid-container">
        <div class="for-flex">
            <div class="content-box">
                <?php if($memories_title_1):?>
                    <h2 class="memories-title-1"><?php echo $memories_title_1;?></h2>
                <?php endif;?>

                <?php if($memories_title_2):?>
                    <h2 class="memories-title-2"><?php echo $memories_title_2;?></h2>
                <?php endif;?>

                <?php if($memories_content):?>
                    <div class="memories-content">
                        <?php echo $memories_content;?>
                    </div>
                <?php endif;?>
            </div>

            <?php if($memories_image):?>
                <div class="image-box">
                    <?php echo get_attachment_fallback($memories_image);?>
                </div>
            <?php endif;?>
        </div>

    </div>
</section>
