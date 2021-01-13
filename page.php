
<?php get_header(); ?>

        <div class="hTag headerBlog">
          <h1>Blog</h1>
        </div>
      </div>
    </div>
  </header>
  <!-- - - - - - - - - - - - - - - -  Blog Single - - - - - - - - - - - - - - - -->
  <section class="blog single">
    <div class="container">
      <div class="row">
        <div class="column">

          <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
          <?php the_content(); ?>
          <?php endwhile; else : ?>
          <?php _e('Nema unetih strana'); ?>
          <?php endif; ?>

        </div>

          <?php get_sidebar(); ?>

      </div>
    </div>
  </section>

<?php get_footer(); ?>
