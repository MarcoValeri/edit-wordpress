<?php get_header(); ?>
    <div id="primary" class="content-area extended">
        <main id="main" class="site-main" role="main">
            <!-- Loop throgh the articles -->
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header">
                    <?php the_title('<h1>', '</h1>'); ?>
                </header>
                <div class="entry-content">
                    <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail('full'); ?>
                    </a>
                    <?php the_content(); ?>
                    <p>
                        Skills:
                        <?php the_terms($post->ID, 'skills'); ?>
                    </p>
                    <p>
                        <a class="button" href="<?php the_field('url'); ?>">
                            <?php esc_html_e('Visit the site', 'wphierarchy'); ?>
                        </a>
                    </p>
                </div>
            </article>
            <?php endwhile; else: ?>
                <?php get_template_part('template-parts/content', 'none'); ?>
            <?php endif; ?>
            <p>Template: single-portfolio.php</p>
        </main>
    </div>

<!-- Add footer -->
<?php get_footer(); ?>