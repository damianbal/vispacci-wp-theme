<?php 
    get_header();
?>

<div class="col-md-2">
    <?php wp_meta();?>
</div>

<div class="col-md-8 text-center">
    <?php
                        if (have_posts()): while (have_posts()): the_post();

                                get_template_part('content', get_post_format());

                            endwhile;endif;
                        ?>


        <div class="paginator">
            <?php next_posts_link( 'Older posts' ); ?>
            <?php previous_posts_link( 'Newer posts' ); ?>
        </div>

</div>

<div class="col-md-2">
    <?php wp_meta();?>
</div>

<?php
    get_footer();
?>