<?php 
	Themewrangler::setup_page();get_header('splash'/***Template Name: Homepage */);
	$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
	$current_args = array(
		'posts_per_page' => -1,
		'post_parent'    => $post->ID,
		'post_type'      => 'page',
		'order'          => 'ASC',
		'orderby'        => 'menu_order'
	);
	$current_posts = get_posts( $current_args );
  $sectionImg = get_field('background_image');
?>

<div <?php post_class('section banner banner-medium centered-parent wallpaper'); ?> style="background-color: <?php echo $slideColor; ?>; color: <?php echo $textColor; ?>" <?php if($sectionImg): ?>data-background-options='{"source":"<?php echo $sectionImg; ?>"}'<?php endif; ?>>
  <div class="section__centered banner--centered centered centered-full">
    <div class="fs-row">
      <div class="fs-cell fs-all-full">
        <div class="text-center">
          <img src="/assets/img/hmulogo.svg" class="img-responsive" />
        </div>
      </div>
    </div>
  </div>
</div>

<header id="header">
  <div class="fs-row">
    <menu id="header-navigation" class="fs-cell fs-lg-full fs-md-hide fs-sm-hide text-center">
      <?php echo strip_tags(wp_nav_menu( $mainMenu ), '<a>' ); ?>
    </menu>
  </div>
</header>

<?php 
	foreach ( $current_posts as $post ) : setup_postdata( $post ); 
	$slideColor = get_field('background_color');
	$textColor  = get_field('text_color');
	$pageType   = get_field('page_type');
	$sectionImg = get_field('background_image');
?>

<div id="<?php echo $post->post_name;?>" <?php post_class('section banner banner-medium centered-parent wallpaper'); ?> style="background-color: <?php echo $slideColor; ?>; color: <?php echo $textColor; ?>" <?php if($sectionImg): ?>data-background-options='{"source":"<?php echo $sectionImg; ?>"}'<?php endif; ?>>
	<div class="section__centered centered centered-full">
		<div class="fs-row">
			<div class="fs-cell fs-all-full">
				<header class="text-center"><h2><?php the_title(); ?></h2></header>
				<div class="text-center">
					<span class="ss-gizmo ss-down"></span>
					<?php the_content(); ?>
				</div>
			</div>
		</div>
	</div>

<?php $images = get_field('gallery'); ?>
<?php if ($images): ?>

	<div class="section__covered covered">
		<div class="carousel">

<?php foreach( $images as $image ): ?>

			<div class="carousel__slide banner-medium wallpaper" data-background-options='{"source":"<?php echo $image['url']; ?>"}'>
				<div class="carousel__slide--centered centered centered-full">
					<div class="fs-row">
						<div class="fs-cell fs-all-full">
							Hello
						</div>
					</div>
				</div>
			</div>

<?php endforeach; ?>

		</div>
	</div>

<?php endif; ?>

</div>

<?php endforeach; wp_reset_postdata(); ?>
<?php get_footer(); ?>