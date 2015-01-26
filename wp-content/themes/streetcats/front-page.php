<?php get_header(); ?>

<?php
  // Special Event
  $args = array(
    'post_type' => 'event',
    'posts_per_page' => '1'
  );

  // Kitty of the Month 
  $args2 = array(
    'post_type' => 'cat',
    'posts_per_page' => '1',
    'meta_key' => 'kotm',
    'meta_value' => 'yes'
  );

  // Newest Addition
  $args3 = array(
    'post_type' => 'cat',
    'posts_per_page' => '1',
  );

  $query = new WP_Query( $args );
  $query2 = new WP_Query( $args2 );
  $query3 = new WP_Query( $args3 );
?>
<div class="row">
  <div class="col-md-6 col-md-offset-3">
    <h1 class="big-text">Welcome to StreetCats!</h1>
    <br />
  </div>
</div>

<div class="row">
  <div class="col-md-4">
    <img src="<?php echo get_template_directory_uri() . '/img/logo3.jpg' ?>" />
    <br />
    <br />
  </div>
  <div class="col-md-8 intro-text">
    <p class="med-text">StreetCats, Inc. believes that all cats deserve a home. We wish to reduce the population of unwanted cats by maintaining a spay and neuter program for feral cats and by sheltering cats who no longer have people to care for them. We seek adoptive families who value animals and who will love and protect our StreetCats.</p>
  </div>
</div>

<div class="row">
  <div class="col-md-12 intro-text">
    <p class="lead bg-danger add-padding">Unfortunately, StreetCats Never Takes in Kittens and Our Waiting List for Adult Cats is At Least 6-8 Months Long. Please find a list of other Tulsa Organizations under Contact Us/Important Forms in hopes that another organization can help you or call your local veterinarian for assistance.</p>
  </div>
</div>

<div class="row cat-info">
  <?php if( $query2->have_posts() ) : while ( $query2->have_posts() ) : $query2->the_post(); ?>

    <div class="col-md-4">
      <h1 class="title">Kitty of the Month</h1>
      <?php
        $image = get_field('image');
        $size = 'medium';
        $thumb = $image['sizes'][$size];
      ?>
  
      <a href="<?php the_permalink(); ?>"><img src="<?php echo $thumb ?>" /></a>
      <h3 class="name"><?php the_field( 'name' ); ?></h3>
    </div>

  <?php endwhile; endif; wp_reset_postdata(); ?>

  <?php if( $query3->have_posts() ) : while ( $query3->have_posts() ) : $query3->the_post(); ?>
    
    <div class="col-md-4">
      <h1 class="title">Newest Addition</h1>
      <?php
        $image = get_field('image');
        $size = 'medium';
        $thumb = $image['sizes'][$size];
      ?>
  
      <a href="<?php the_permalink(); ?>"><img src="<?php echo $thumb ?>" /></a>
      <h3 class="name"><?php the_field( 'name' ); ?></h3>
    </div>
  
  <?php endwhile; endif; wp_reset_postdata(); ?>

  <?php if( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>  

    <div class="col-md-4">
      <h1 class="title">Special Event!</h1>
      <?php
        $image = get_field('image');
        $size = 'medium';
        $thumb = $image['sizes'][$size];
      ?>
      <a href="<?php the_permalink(); ?>"><img src="<?php echo $thumb ?>" /></a>
      <h3 class="name"><?php the_field( 'name' ); ?></h3>
    </div>
  <?php endwhile; endif; wp_reset_postdata(); ?>
  <br />
  <br />
</div>

<div class="row">
  <div class="col-md-6">
    <h2 class="title">Inside StreetCats</h2>
    <p class="lead text-left">StreetCats, Inc is a non-profit organization whose purpose is to shelter cats that have been abandoned or lost and to find new homes for them. The cats that we take in are adoptable cats only. We are a society that does not place a time limit on a healthy cat's life; we keep them until a home is found.</p>
    <h3 class="title">Questions?</h3>
    <h4>918.298.0104</h4>
    <h4 id="social-media-icons">
      <a target="_blank" href="http://streetcatstulsa.blogspot.com/" ><span class="socicon">A</span></a>&nbsp;&nbsp;<a target="_blank" href="https://www.facebook.com/streetcatsinc" ><span class="socicon">b</span></a>&nbsp;&nbsp;<a target="_blank" href="http://instagram.com/streetcatstulsa" ><span class="socicon">x</span></a>
    </h4>
  </div>
  <div class="col-md-6">
    <h2 class="title">Visit Us</h2>
    <iframe class="spacer" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12898.766235584004!2d-95.90357655951857!3d36.07662661532172!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x87b69281267214e9%3A0x74ee41323f17e74f!2sStreet+Cats+Inc!5e0!3m2!1sen!2sus!4v1421598868181" width="400" height="300" frameborder="0" style="border:0"></iframe>
  </div>
</div>
<?php get_footer(); ?>