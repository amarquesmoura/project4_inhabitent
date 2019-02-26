<?php
/**
 * The template for displaying the footer.
 *
 * @package Inhabitent_Theme
 */

?>

</div><!-- #content -->

<footer id="colophon" class="site-footer" role="contentinfo">
    <div class="footer-columns container">
        <div class="footer-column">
            <div class="contact-info">
                <h3>Contact Info</h3>
                <p><i class="fa fa-envelope"></i><a href="mailto:info@inhabitent.com">info@inhabitent.com</a></p>
                <p><i class="fa fa-phone"></i><a href="tel:7784567891">778-456-7891</a></p>
                <p>
                    <span><i class="fab fa-facebook-square"></i></span>
                    <span><i class="fab fa-twitter-square"></i></span>
                    <span><i class="fab fa-google-plus-square"></i></span>
                </p>
            </div>
        </div>
        <div class="footer-column">
            <div class="business-hours">
                <h3>Business Hours</h3>
                <p><span class="day-of-week">Monday-Friday:</span> 9am to 5pm</p>
                <p><span class="day-of-week">Saturday:</span> 10am to 2pm</p>
                <p><span class="day-of-week">Sunday:</span> Closed</p>
            </div>
        </div>
        <div class="footer-column">
            <div class="text-logo">
                <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                    <img class="logo-text" src="<?php echo get_template_directory_uri() . '/images/inhabitent-logo-text.svg' ?>" />
                </a>
            </div>
        </div>
    </div>
    <div class="site-info">
        <div class="container">Copyright &copy; 2019 Inhabitent</div>
    </div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html> 