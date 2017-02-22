<?php
/**
 * The template for displaying all single posts.
 *
 * @package Sydney
 */
 get_header('career');

?>
<style>
.panel, .panel-group .panel-heading+.panel-collapse>.panel-body{
    border: none;
}
.panel-default .panel-heading {
      /*border: 1px solid silver; --------- remove this line ----------*/
      min-height: 100px;
      background-color: white;
      border-radius: 0px;

  }

    }
</style>
	<?php if (get_theme_mod('fullwidth_single')) { //Check if the post needs to be full width
		$fullwidth = 'fullwidth';
	} else {
		$fullwidth = '';
	} ?>

	<?php do_action('sydney_before_content'); ?>

	<div id="primary" class="content-area col-md-9 <?php echo $fullwidth; ?>">
		<main id="main" class="post-wrap" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<div style="width:55%;padding:0 10pt 0 0;float:left;">
				<?php get_template_part( 'content', 'single' ); ?>
					<?php sydney_post_navigation(); ?>
			</div>

			<div class="section" style="width:40%;padding:0 10pt 0 0;float:right;">
					<div class="container">
						<!-- Collapse -->
							<h4 class="panel-title" style="text-align: left">APPLY NOW!</h4>

							<div class="panel-body" style="float: left">
								 <?php echo do_shortcode( '[contact-form-7 id="203" title="Application Form"] '); ?>
							</div>
					</div>
			</div>
	</div>
			<div style=”clear:both;”></div>
					<!--end Collapse-->
		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
