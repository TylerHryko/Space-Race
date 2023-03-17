<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
                <div style="float:left; display:block;">
                <video preload="auto" autoplay="autoplay" loop="loop" style="width: 268px; height: 200px;">
                    <source src="https://i.imgur.com/seAFHVG.mp4" type="video/mp4"></source>
                    </video>
                </div>
				<div class="page-content" style="float:right; display:block;">
					<p><?php _e( '404: Failure to launch! Maybe try a search?', 'twentyseventeen' ); ?></p>

					<?php get_search_form(); ?>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->
		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer();
https://i.imgur.com/seAFHVG.gifv