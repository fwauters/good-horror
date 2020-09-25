<?php get_header() ?>

<?php if (have_posts()) : ?>
    <section class="row" style="justify-content:center">
        <?php while (have_posts()) : the_post(); ?>

            <article class="card col-md-4 text-white bg-dark mb-3 mx-2" style="max-width: 380px; min-width:350px;">

                <div class="row">
                    <div class="col-5">
                        <?php the_post_thumbnail('post-thumbnail', ['class' => 'card-img ml-3 my-3', 'alt' => 'Movie Poster', 'style' => 'height: auto']); ?>
                    </div>
                    <div class="col-7">
                        <div class="card-body">
                            <h4 class="card-title mb-4" style="font-size:1.3rem"><?php the_title(); ?></h4>
                            <h5 class="card-subtitle" style="font-size:1rem;"><?php the_category(); ?></h5>
                            <p class="card-text"><?php the_excerpt(); ?></p>
                            <a href="<?php the_permalink() ?>" class="btn btn-outline-light">See more</a>
                        </div>
                    </div>
                </div>
            </article>

        <?php endwhile; ?>
    </section>
<?php else : ?>
    <h1>No article</h1>
<?php endif; ?>

<?php get_footer() ?>