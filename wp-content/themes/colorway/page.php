<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the wordpress construct of pages
 * and that other 'pages' on your wordpress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Colorway
 * @since Colorway 1.0
 */
get_header(); ?>
<!--Start Content Grid-->
<div class="grid_24 content">
  <div class="grid_16 alpha">
    <div class="content-wrap">
      <div class="sl">
        <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        <?php if ( is_front_page() ) { ?>
        <h2>
          <?php the_title(); ?>
        </h2>
        <?php } else { ?>
        <h1>
          <?php the_title(); ?>
        </h1>
        <?php } ?>
        <?php the_content(); ?>
           <div class="clear"></div>
		<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . 'Pages:' . '</span>', 'after' => '</div>' ) ); ?>
        <?php edit_post_link('Edit','', '' ); ?>
        <div class="clear"></div>
        <?php endwhile; ?>
      </div>
      <div class="folio-page-info">
        <?php inkthemes_pagination(); ?>
      </div>
    </div>
  </div>
  <?php get_sidebar(); ?>
</div>
<div class="clear"></div>
<!--End Content Grid-->
</div>
<!--End Container Div-->
<?php get_footer(); ?>
