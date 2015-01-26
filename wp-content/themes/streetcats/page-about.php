<?php
  /*
    Template Name: About Page
  */
?>

<?php get_header(); ?>
<div class="row">
  <div class="col-md-6 col-md-offset-3">
    <h1 class="big-text">About Us</h1>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <h1 class="bg-success"><a class="alert" href="">Want to volunteer? We could use your help!</a></h1>
    <br />
  </div>
</div>

<div class="row">
  <div class="col-md-8 text-left">
    <p class="lead">We are a Tulsa-based all-volunteer nonprofit organization that exists on donations and fund-raising events. We have rescued cats for adoption and we also have a spay/neuter voucher program, “A Stitch in Time” for homeless cats living on the streets. Our Adoption Center and Boutique are run completely by volunteers.</p>
    <p class="lead">All of our StreetCats are tested for feline leukemia and feline AIDS (FIV), as well as vaccinated. Cats that are not already altered are spayed (female) or neutered (male) before placement. Our cats receive proper veterinary care and premium cat food while they are with us. The adoption fee partially covers this; the remainder is subsidized by our fundraising efforts.</p>
  </div>
  <div class="col-md-4">
    <img src="<?php echo get_template_directory_uri() . '/img/logo3.jpg' ?>" />
  </div>
</div>

<?php get_footer(); ?>