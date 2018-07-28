<?php
get_header();
?>

<div class="col-md-2">

</div>

<div class="col-md-8">
    <?php
if (have_posts()): while (have_posts()): the_post();

        get_template_part('content-single', get_post_format());

    endwhile;endif;

if (comments_open() || get_comments_number()):
    comments_template();
endif;
?>

        <?php next_posts_link('Older posts');?>
        <?php previous_posts_link('Newer posts');?>

</div>

<div class="col-md-2">

</div>

<?php
get_footer();
?>