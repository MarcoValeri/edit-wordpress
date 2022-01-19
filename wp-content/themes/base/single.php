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
                <?php previous_post_link(); ?>
            </div>
            <div>
                <?php next_post_link(); ?>
            </div>
        </section>
    <?php endwhile; endif; ?>
</main>