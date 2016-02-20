<li>
    <figure>
        <?php the_post_thumbnail(); ?>
    </figure>
    <div class="texto">
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <p>
            <?php the_content(); ?>
        </p>
        <time><?php the_time('d/m/Y'); ?></time>

        <footer>
            <?php echo get_the_category_list(' ') ?>
        </footer>
    </div>

    <a href="<?php the_permalink(); ?>"><i>Leia Mais</i></a>
</li>
