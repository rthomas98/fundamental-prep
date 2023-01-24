<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package BuddyBoss_Theme
 */

?>

<?php do_action( THEME_HOOK_PREFIX . 'end_content' ); ?>

</div><!-- .bb-grid -->
</div><!-- .container -->
</div><!-- #content -->


<?php if ( is_user_logged_in() ) { ?>

    <footer>
        <div class="container">
            <a href="<?php echo wp_logout_url(); ?>">Logout</a>
        </div>
    </footer>
<?php } else { ?>
    <footer>
        <div class="container">
            <a href="/wp-login.php" title="Members Area Login" rel="home">Members Area</a>
        </div>
    </footer>
<?php } ?>



</div><!-- #page -->

<?php do_action( THEME_HOOK_PREFIX . 'after_page' ); ?>

<?php wp_footer(); ?>

</body>
</html>
