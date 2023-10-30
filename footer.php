<?php
/**
 * Footer
 */

$phone = get_field('phone','options');
$email = get_field('email','options');
$socials = get_field('socials', 'options');
$images = get_field('footer_gallery','options');

?>

<!-- BEGIN of footer -->
<footer class="footer">
	<div class="grid-container">
		<div class="grid-x grid-margin-x">
			<div class="cell medium-3">
				<div class="footer__logo">
					<?php if ( $footer_logo = get_field( 'footer_logo', 'options' ) ):
						$logo_image = wp_get_attachment_image( $footer_logo['id'], 'medium', [
							'class'    => 'custom-logo',
							'itemprop' => 'siteLogo',
							'alt'      => get_bloginfo( 'name' ),
						] );
						echo sprintf( '<a href="%1$s" class="custom-logo-link" rel="home" title="%2$s" itemscope>%3$s</a>', esc_url( home_url( '/' ) ), get_bloginfo( 'name' ), $logo_image );
					else:
						show_custom_logo();
					endif; ?>
				</div>
			</div>
			<div class="cell medium-6">
				<?php
				if ( has_nav_menu( 'footer-menu' ) ) {
					wp_nav_menu( array( 'theme_location' => 'footer-menu', 'menu_class' => 'footer-menu menu', 'depth' => 1 ) );
				}
				?>
			</div>
			<div class="cell medium-3 footer__sp">
				<?php get_template_part( 'parts/socials' ); // Social profiles ?>
			</div>
		</div>
	</div>


    <div class="socials-box">
        <?php get_template_part('parts/socials') ?>
    </div>


    <div class="options-footer-box">
        <a href="tel:<?php echo sanitize_number($phone); ?>" target="_blank"><?php echo $phone; ?><span
                    class="info-number"></span></a>

        <a href="mailto:<?php echo $email;?>"><?php echo "E-Mail Us";?></a>

        <?php if ( $address = get_field( 'address', 'options' ) ): ?>
            <a href="<?php echo get_address_url($address); ?>" target="_blank">
                <h5 class="footer-address"><?php echo $address; ?></h5>
            </a>
        <?php endif; ?>

    </div>









    <?php if (class_exists('GFAPI') && ($footer_form = get_field('footer_form', 'options')) && is_array($footer_form)): ?>
        <div class="cell medium-6 footer_form_div">
            <div class="footer__form">
                <?php echo do_shortcode("[gravityform id='{$footer_form['id']}' title='false' description='false' ajax='true']"); ?>
            </div>
        </div>
    <?php endif; ?>












    <div class="gallery-box">
        <?php
        if ($images): ?>
            <ul>
                <?php foreach ($images as $image): ?>
                    <li>
                        <a href="<?php echo esc_url($image['url']); ?>">
                            <img src="<?php echo esc_url($image['sizes']['thumbnail']); ?>"
                                 alt="<?php echo esc_attr($image['alt']); ?>"/>
                            <?php echo wp_get_attachment_image($image['sizes']['thumbnail']); ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
    </div>



	<?php if ( $copyright = get_field( 'copyright', 'options' ) ): ?>
		<div class="footer__copy">
			<div class="grid-container">
				<div class="grid-x grid-margin-x">
					<div class="cell ">
						<?php echo $copyright; ?>
					</div>
				</div>
			</div>
		</div>
	<?php endif; ?>
</footer>
<!-- END of footer -->

<?php wp_footer(); ?>
</body>
</html>