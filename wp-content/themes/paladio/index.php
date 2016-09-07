<?php
/**
 * Template Name: Blog Page
 **/
get_header(); ?>
	<section class="pg-blog">

		<?php get_template_part('templates/newsletter'); ?>

		<section class="wrapper">

			<section>
				<ul>
					<?php

					if (have_posts()) {
						while (have_posts()) : the_post(); ?>

							<?php get_template_part('content'); ?>

						<?php endwhile;
					}
					?>
				</ul>
			</section>

			<?php //get_template_part('templates/blog_sidebar'); ?>


		</section>
	</section>

<?php get_footer(); ?>