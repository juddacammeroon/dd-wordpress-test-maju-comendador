<?php

get_header();

?>

<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
		<?php

		$start_date = get_field('dd_test_start_date', get_the_ID(), TRUE);
		$end_date = get_field('dd_test_end_date', get_the_ID(), TRUE);
		$description = get_field('dd_test_description', get_the_ID(), TRUE);
		$cover_image = get_field('dd_test_cover_image', get_the_ID(), TRUE);
		$application_link = get_field('dd_test_application_link', get_the_ID(), TRUE);

		?>

		<div class="inner-page">
			<?php if ($cover_image) : ?>
				<div class="container">
					<div class="full">
						<div class="cover-image">
							<img src="<?php echo $cover_image; ?>" loading="lazy" alt="<?php the_title(); ?>" />
							<div class="caption">
								<div class="content">
									<h1><?php the_title(); ?></h1>
									<?php if ($description) : ?>
										<p><?php echo $description; ?></p>
									<?php endif; ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php endif; ?>
			<div class="container column">
				<div class="box">
					<div class="custom-fields">
						<?php if ($start_date) : ?>
							<p>Start date: <strong><?php echo $start_date; ?></strong></p>
						<?php endif; ?>
						<?php if ($start_date) : ?>
							<p>End date: <strong><?php echo $end_date; ?></strong></p>
						<?php endif; ?>
					</div>
				</div>
				<div class="box">
					<?php the_content(); ?>
					<?php if ($application_link) : ?>
						<div class="cta">
							<a href="<?php echo $application_link; ?>">Apply now</a>
						</div>
					<?php endif; ?>
				</div>
			</div>
		</div>

	<?php endwhile; ?>
<?php endif; ?>



<?php get_footer(); ?>