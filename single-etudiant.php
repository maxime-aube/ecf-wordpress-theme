<?php get_header(); ?>

<main id="main-content" class="student-post">
<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
    
  <div class="container">
      <?php the_post_thumbnail('post-thumbnail', ['class' => 'student-post-img']); ?>
      <h1 class="student-post-title"><?php the_title(); ?></h1>
      <div class="field">
        <div class="field-title">Son film</div>
        <div class="field-content"><?php the_field('film'); ?></div>
      </div>
      <div class="field">
        <div class="field-title">Son film</div>
        <div class="field-content"><?php the_field('serie'); ?></div>
      </div>
      <div class="field">
        <div class="field-title">Son film</div>
        <div class="field-content"><?php the_field('jeu_video'); ?></div>
      </div>
      <div class="field">
        <div class="field-title">Son film</div>
        <div class="field-content"><?php the_field('heros'); ?></div>
      </div>
      <div class="field">
        <div class="field-title">Son film</div>
        <div class="field-content"><?php the_field('livre'); ?></div>
      </div>
      <div class="field">
        <div class="field-title">Son film</div>
        <div class="field-content"><?php the_field('chanson'); ?></div>
      </div>
      <div class="field">
        <div class="field-title">Son film</div>
        <div class="field-content"><?php the_field('application'); ?></div>
      </div>
      <div class="field">
        <div class="field-title">Son film</div>
        <div class="field-content"><?php the_field('site_web'); ?></div>
      </div>
      <div class="field">
        <div class="field-title">En deux mots</div>
        <div class="field-content"><?php the_field('en_deux_mots'); ?></div>
      </div>
    </div>

<?php endwhile; endif; ?>

</main>

<?php get_footer(); ?>