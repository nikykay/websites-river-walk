<?php
$args = array(
    'post_type' => 'footer_cpt',
    'post_status' => 'publish',
    'get_option' => ('posts_per_page'),
    'orderby' => 'date',
    'order' => 'ASC',
); ?>

<section class="footer-cpt-section">
    <div class="grid-container">

        <?php
        $loop = new WP_Query($args);
        while ($loop->have_posts()):
            $loop->the_post();
            ?>
            <div class="footer-cpt-content-box">
                <div class="footer-cpt-content">
                    <?php if (get_the_author()): ?>
                        <h5><?php echo get_the_author(); ?></h5>
                    <?php endif; ?>

                    <?php if (get_the_content()): ?>
                        <p><?php echo get_the_content(); ?></p>
                    <?php endif; ?>
                </div>
            </div>
        <?php endwhile;
        wp_reset_postdata();

        ?>

    </div>

</section>
