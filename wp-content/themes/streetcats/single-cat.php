<?php get_header(); ?>

  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <h1 class="big-text"><?php the_field('name'); ?></h1>
      <br />
    </div>
  </div>
  <div class="row">
    <div class="col-md-4">
      <?php
        $image = get_field('image');
        $size = 'medium';
        $thumb = $image['sizes'][$size];
      ?>
  
      <img class="img" src="<?php echo $thumb ?>" />
      <h3 class="name"><?php the_field('headline'); ?></h3>
    </div>
    <div class="col-md-5">
      <p class="lead text-left"><?php the_field('description'); ?></p>
    </div>
    <div class="col-md-3">
      <h3>Breed: <?php the_field('breed'); ?> </h3>
      <h3>Birthdate: <?php the_field('birthdate'); ?> </h3>
      <h3>Gender: <?php the_field('gender'); ?> </h3>
      <h3>Declawed: <?php the_field('declawed'); ?> </h3>
    </div>
  </div>
  <div class="row">
    <p>
        <?php previous_post_link(); ?> -
        <a href="<?php bloginfo('url'); ?>/?page_id=7">Back to Gallery</a> - 
        <?php next_post_link(); ?>
      </p>
  </div>
<?php get_footer(); ?>