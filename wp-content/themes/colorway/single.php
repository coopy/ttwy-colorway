<?php
/**
 * The Template for displaying all single posts.
 *
 */
get_header();
?>
<!--Start Content Grid-->
<div class="grid_24 content">
    <div  class="grid_16 alpha">
        <div class="content-wrap">
            <!--Start Blog Post-->
            <div class="blog">
                <ul class="single">
            <?php if (have_posts()) while (have_posts()) : the_post(); ?>
                            <li>
                                <h1><?php the_title(); ?></h1>
                                <div class="clear"></div>
                                <?php the_content(); ?>
                                <div class="clear"></div>
                                <div class="tags">
                                    <?php the_tags('Post Tagged with ', ', ', ''); ?>
                                </div>
                                <div class="clear"></div>
                                <?php wp_link_pages(array('before' => '<div class="page-link"><span>' . 'Pages:' . '</span>', 'after' => '</div>')); ?>
								<div class="post_date single_post_date">
                                <?php
                                    printf(
                                        _x('Posted on %1$s by %2$s.', 'Time, Author', 'colorway'), get_the_time(get_option('date_format')), get_the_author()
                                    );
                                ?>
								</div>
								<div class="clear"><div>
                            <?php endwhile; ?>
                        <nav id="nav-single"> <span class="nav-previous">
                                <?php previous_post_link('%link', '<span class="meta-nav">&larr;</span> Previous Post '); ?>
                            </span> <span class="nav-next">
                                <?php next_post_link('%link', 'Next Post <span class="meta-nav">&rarr;</span>'); ?>
                            </span> </nav>
                    </li>
                    <!-- End the Loop. -->          
                </ul>
            </div>
            <div class="hrline"></div>
            <!--End Blog Post-->
            <div class="clear"></div>
            <div class="social_logo">
				<a title="Tweet this!" href="http://twitter.com/home/?status=<?php the_title(); ?> : <?php the_permalink(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/twitter-share.png" alt="twitter" title="twitter"/></a>
				<a title="Share on Facebook" href="http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>&amp;amp;t=<?php the_title(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/facebook-share.png" alt="facebook" title="facebook"/></a>
			</div>
            <div class="clear"></div>
        </div>
    </div>
    <?php get_sidebar(); ?>
</div>
<div class="clear"></div>
<!--End Content Grid-->
</div>
<!--End Container Div-->
<?php get_footer(); ?>
