<?php get_header(); ?>

<div class="o-container u-margin-bottom-40 u-margin-top-40">
    <div class="o-row">
        <div class="o-row__column o-row__column-span-12">
            <?php the_archive_title('<h1>', '</h1>'); ?>
            <?php the_archive_description('<p>', '</p>'); ?>
        </div>
        <div class="o-row__column o-row__column--span-12 o-row__column--span-<?php echo is_active_sidebar('primary_sidebar') ? "8" : "12"; ?>@medium">
            <div class="main">
                <?php get_template_part('template-parts/post/content'); ?>
            </div>
        </div>
        <?php if( is_active_sidebar('primary_sidebar') ) : ?>
            <div class="o-row__column o-row__column--span-12 o-row__column--span-4@medium">
                <?php get_sidebar(); ?>
            </div>
        <?php endif; ?>
    </div>
</div>


<?php get_footer(); ?>