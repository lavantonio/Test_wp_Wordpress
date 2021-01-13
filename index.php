
<?php get_header(); ?>

        <div class="hTag headerBlog">
          <h1>Blog</h1>
        </div>
      </div>
    </div>
  </header>
  <!-- - - - - - - - - - - - - - - -  Blog - - - - - - - - - - - - - - - -->
  <section class="blog">
    <div class="container">
      <div class="row">
        <div class="column">

        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
          <article>
            <div class="row">
              <div class="photo featured-image">
                <?php the_post_thumbnail(); ?>
              </div>
              <div class="hTag">
                <h4><?php the_title(); ?></h4>
                <p><span><?php the_author(); ?></span> | <?php the_date(); ?></p>
                <?php the_excerpt(); ?>
                <a href="<?php the_permalink(); ?>" class = "button"><?php _e('Ceo tekst'); ?></a>
              </div>
            </div>
          </article>
        <?php endwhile; else : ?>
        <?php _e('Nema unetih blog postova'); ?>
        <?php endif; ?>

        </div>
  
            <?php get_sidebar(); ?>

      </div>
    </div>
  </section>

<?php get_footer(); ?>
