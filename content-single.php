<div class="blog-post mb-4 text-secondary">
    <h2 class="blog-post-title">
        <a href="<?php the_permalink(); ?>">
            <?php the_title(); ?>
        </a>
    </h2>
    <p class="blog-post-meta">
        <?php the_date(); ?> by
        <a href="#">
            <?php the_author(); ?>
        </a>
    </p>

    <?php the_content(); ?>

    <?php wp_link_pages( array(
	'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentyfourteen' ) . '</span>',
	'after'       => '</div>',
	'link_before' => '<span>',
	'link_after'  => '</span>',
	) );
?>

</div>