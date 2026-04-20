<?php get_header(); ?>

<div id="main" class="row">
    <div class="col-12">
        <h1><?php single_post_title(); ?></h1>
    </div>

    <?php if (have_posts()) : ?>

        <?php while (have_posts()) : the_post(); ?>
        <div class="post-container row">
            <div class="col-md-3">
                <div class="meta-date">
                    <?php the_date('d.m.Y'); ?>
                </div>
                <div class="meta-categories">
                    <?php the_category(', '); ?>
                </div>
            </div>
            <div class="col-md-9">
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <div class="entry">
                    <?php $content = get_the_content(); echo mb_strimwidth(strip_tags($content), 0, 240, '...'); ?>
                </div>
            </div>
        </div>
        <?php endwhile; ?>

        <?php if ( next_posts_link() || previous_posts_link() ) { ?>
        <p class="page-nav" align="center">
            <?php next_posts_link('&laquo; Ältere Beiträge') ?>
            |
            <?php previous_posts_link('Neuere Beiträge &raquo;') ?>
        </p>
        <?php } ?>

    <?php else : ?>
        <div class="post-container">
            <div class="col-12">
                <p>Aktuell gibt es keine Beiträge.</p>
            </div>
        </div>
    <?php endif; ?>

</div><!-- main -->

<?php get_footer(); ?>