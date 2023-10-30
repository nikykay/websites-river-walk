<?php
$args = array(
    'post_type' => 'header_cpt',
    'post_status' => 'publish',
    'get_option' => ('posts_per_page'),
    'orderby' => 'date',
    'order' => 'ASC',
); ?>

<section class="header-cpt-section">
    <div class="grid-container">
        <div class="grid-x grid-margin-x">
            <?php
            $loop = new WP_Query($args);
            while ($loop->have_posts()):
                $loop->the_post();
                ?>
                <main class="cell large-4 medium-4">
                    <div class="header-cpt-content-box">
                        <div class="image-box">
                            <?php if(has_post_thumbnail()):?>
                                <?php get_attachment_fallback(the_post_thumbnail());?>
                            <?php endif;?>
                        </div>
                        <div class="header-cpt-content">
                            <?php if (get_the_content()): ?>
                                <p><?php echo get_the_content(); ?></p>
                            <?php endif; ?>

                            <?php if (get_the_title()): ?>
                                <h5><?php echo get_the_title(); ?></h5>
                            <?php endif; ?>
                        </div>
                    </div>
                </main>
            <?php endwhile;
            wp_reset_postdata();

            ?>
        </div>
    </div>

</section>




