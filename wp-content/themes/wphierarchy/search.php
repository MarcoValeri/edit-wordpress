<?php get_header(); ?>
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            <h1>
                <?php esc_html_e('Searching For:', 'wphierarchy'); ?>
                "<?php echo get_search_query(); ?>"
            </h1>
            <!-- Loop throgh the articles -->
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?php get_template_part('template-parts/content', 'search'); ?>
            <?php endwhile; else: ?>
                <?php get_template_part('template-parts/content', 'none'); ?>
            <?php endif; ?>
            <p>Template: search.php</p>
        </main>
    </div>
<!-- Add sidebar -->
<?php get_sidebar('page'); ?>

<!-- Add footer -->
<?php get_footer(); ?>