<!-- Include header.php --> 
<?php get_header(); ?>

        <h2>Last articles</h2>
        <!-- Loop through the articles --> 
        <?php 
            $args = [
                'post_per_page'  => 5,
            ];

            $query = new WP_Query($args);

            if ($query->have_posts()) : while($query->have_posts()) : $query->the_post();
        ?>
            <a href="<?php the_permalink(); ?>">
                <section <?php post_class(); ?>>
                    <div>
                        <?php the_title('<h2>', '</h2>'); ?>
                    </div>
                    <div>
                        <?php the_excerpt(); ?>
                    </div>
                    <div>
                        <?= get_the_date(); ?>
                    </div>
                    <div>
                        <?= get_the_author(); ?>
                    </div>
                </section>
            </a>
        <?php endwhile; endif; ?>
    </body>
</html>