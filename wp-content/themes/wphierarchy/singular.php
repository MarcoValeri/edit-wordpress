<?php get_header(); ?>
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            <!-- Loop throgh the articles -->
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?php get_template_part('template-parts/content', 'page'); ?>
            <?php endwhile; else: ?>
                <?php get_template_part('template-parts/content', 'none'); ?>
            <?php endif; ?>
            <p>Template: singular.php</p>
        </main>
    </div>
<!-- Add sidebar -->
<?php get_sidebar(); ?>

<!-- Add footer -->
<?php get_footer(); ?>