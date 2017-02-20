<?php
/**
 * The template for displaying all single posts.
 *
 * @package Sydney
 */

get_header(); ?>
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

			<?php get_template_part( 'content', 'single' ); ?>

			<?php sydney_post_navigation(); ?>

		<div class="section">
					<div class="container">
						<!-- Collapse -->
							<div class="panel-group" id="accordion">
									<div class="panel-heading">
											<button style="margin-bottom: 20px;" type="button" class="btn btn-success" data-toggle="collapse" data-target="#collapse-1" data-parent="#Accordion">Apply Now
											</button>
									</div>
									<div id="collapse-1" class="collapse">
										<div class="panel-body">
											 <?php echo do_shortcode( '[contact-form-7 id="203" title="Application Form"] '); ?>
										</div>
									</div>
								</div>
							</div>
						<!--end Collapse-->
					</div>
				</div>

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>