<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title><?php wp_title(); ?></title>

  <?php wp_head(); ?>
</head>
<body>
  <div class="container wrapper">
    <header>
      <div class="row">&nbsp;</div>
      <div class="row">&nbsp;</div>
      <div class="row">
        <?php 
          wp_nav_menu(
            array (
                'menu' => 'main-menu',
                'container' => 'div', // parent container 
                'container_id' => 'my_nav', //parent container ID
                'depth' => 1,
                'items_wrap' => '%3$s', // removes ul
            'walker' => new Description_Walker // custom walker to replace li with div
            )
        );
        ?>
      </div>
      <div class="row">&nbsp;</div>
    </header>