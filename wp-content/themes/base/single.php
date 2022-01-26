<!-- Include header.php --> 
<?php get_header(); ?>

<main>
    <h2>Single PHP</h2>
    <!-- Loop through the pages if them exists --> 
    <?php if (have_posts()) : while(have_posts()) : the_post(); ?>
        <section>
            <div>
                <?php the_title('<h1>', '</h1>'); ?>
            </div>
            <div>
                <?php the_content(); ?>
            </div>
            <div>
                <p>URL: <?php the_permalink(); ?></p>
                <p>LINK: <?= get_permalink(); ?></p>
            </div>
            <div>
                <?php previous_post_link(); ?>
            </div>
            <div>
                <?php next_post_link(); ?>
            </div>
            <div>
                <p>Edit the post: <?php edit_post_link(); ?></p>
            </div>
            <div>
                <p>Come back to <a href="<?= home_url(); ?>">Home</a></p>
            </div>
            <div>
                <p>Site URL: <?= site_url('/header'); ?></p>
            </div>
            <!-- Call the comment template if there are some comments --> 
            <div>
                <?php
                if (comments_open() || get_comments_number()) {
					comments_template();
				}
                ?>
            </div>
        </section>
    <?php endwhile; endif; ?>
</main>