<?php
/*
  Template Name: Cat Page
*/
?>

<?php get_header(); ?>

<?php
  $args = array(
    'post_type' => 'cat'
  );
  $query = new WP_Query( $args );
?>

<div class="row">
  <div class="col-md-6 col-md-offset-3">
    <h2 class="big-text">Our Cats</h2>
  </div>
</div>

<div class="row gallery">
  <?php if( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>  
    <?php
      $image = get_field('image');
      $size = 'thumbnail';
      $thumb = $image['sizes'][$size];
    ?>
    <div class="col-md-2"> 
      <a href="<?php the_permalink(); ?>"><img src="<?php echo $thumb ?>" /></a>
      <h4><?php the_field( 'name' ); ?></h4>
    </div>

  <?php endwhile; endif; wp_reset_postdata(); ?>
</div>

<div class="row">
  <div class="col-md-6 col-md-offset-3">
    <h2 class="big-text">Ready to Adopt?</h2>
  </div>
</div>
<div class="row">
  <div class="col-md-6">
    <h3>The Adoption Process</h3>
    <ol class="text-left">
      <li>Fill out the StreetCats, Inc. adoption application. The completed application can be emailed, mailed to StreetCats [6520 E. 60th St., Tulsa, OK 74145] or brought to our Adoption Center.</li>
      <li>Interview with an Adoption Counselor. This can be done at our Adoption Center as a drop-in or by appointment.</li>
      <li>Adoption approval can take a couple of days. A committee must review the application and check all references.</li>
    </ol>
      <p class="bg-danger">Please Note: No cats go home the same day that the application is submitted.</p>
    <?php
      $args2 = array(
        'post_type' => 'form'
      );
      $query2 = new WP_Query( $args2 );
    ?>
    <?php if( $query2->have_posts() ) : while ( $query2->have_posts() ) : $query2->the_post(); ?> 
      <h4><a target="_blank" href="<?php the_field('file'); ?>">Click to download the <?php the_field('name'); ?> (PDF)</a></h4>

    <?php endwhile; endif; wp_reset_postdata(); ?>
  </div>
  <div class="col-md-6">
    <h3>About Our Adoption Fee</h3>
    <ul class="text-left">
      <li>Our adoption fee is $75. For two kitties, the adoption fee is $135. We also offer a $65 adoption fee for a Senior Discount. A Senior Discount for 2 cats is $120.</li>
      <li>Each cat that is admitted into StreetCats has a comprehensive physical exam by a veterinarian. If any problems are found, they are treated before the kitty is put on our adoption list.</li>
      <li>In addition, the cats are tested for Feline Leukemia Virus and FIV (Feline Immunodeficiency Virus). Cats are also tested for worms, and if found, are dewormed. A flea treatment is applied and vaccinations (rabies and FVRCP) are given. If not already done, the cat is also spayed/neutered.</li>
      <li>All of the services are valued at $300. This does not include any additional treatment if a medical problem is found. We rely on our donations to help cover the medical costs on our kitties.</li>
    </ul>
  </div>
</div>

<?php get_footer(); ?>