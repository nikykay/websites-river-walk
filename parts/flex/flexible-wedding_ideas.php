<?php
$blog_post_title = get_sub_field('blog_post_title');
$args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'get_option' => ('posts_per_page'),
    'orderby' => 'date',
    'order' => 'ASC',
); ?>

<section class="wedding-section">
    <div class="grid-container">
        <?php if ($blog_post_title): ?>
            <h5><?php echo $blog_post_title; ?></h5>
        <?php endif; ?>

        <?php
        $loop = new WP_Query($args);
        while ($loop->have_posts()):
            $loop->the_post();
            ?>
            <div class="wedding-content-box">
                <div class="image-box">
                    <?php if (has_post_thumbnail()): ?>
                        <?php get_attachment_fallback(the_post_thumbnail()); ?>
                    <?php endif; ?>
                </div>
                <div class="wedding-content">

                    <h2><?php echo get_the_category(); ?></h2>


                    <?php if (get_the_date()): ?>
                        <h2><?php echo get_the_date(); ?></h2>
                    <?php endif; ?>

                    <?php if (get_the_title()): ?>
                        <h5><?php echo get_the_title(); ?></h5>
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
