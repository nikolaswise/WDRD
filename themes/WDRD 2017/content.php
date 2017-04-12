<?php while(have_posts() ) : the_post(); ?>
  <article class="page paragraph-breaks">
    <header>
      <h3>
        <a href="<?php the_permalink();?>"><?php the_title();?></a>
      </h3>
    </header>
    <section>
      <?php the_content() ?>
    </section>
  </article>
<?php endwhile ?>