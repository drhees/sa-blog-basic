<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage skeleton
 * @since skeleton 0.1
 */

get_header();
?>
<div class="container">
    <?php 
    do_action('skeleton_navbar');
    do_action('skeleton_before_content');
    get_template_part( 'loop', 'single' );
    do_action('skeleton_after_content');
    get_sidebar();
    ?> 
</div>
<?php 
get_footer();
?>