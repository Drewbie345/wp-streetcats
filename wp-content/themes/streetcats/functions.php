<?php

  add_theme_support( 'menus' );
  add_theme_support( 'post-thumbnails' );

  function register_theme_menus() {
    register_nav_menus(
      array(
        'primary-menu' => __( 'Primary Menu' )
      )
    );
  }

  add_action( 'init', 'register_theme_menus' );

  function sc_theme_styles() {
    wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css' );
    wp_enqueue_style( 'google_fonts', 'http://fonts.googleapis.com/css?family=Shadows+Into+Light|Fredericka+the+Great|Open+Sans' );
    wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );
  }

  add_action( 'wp_enqueue_scripts', 'sc_theme_styles' );

  function sc_theme_js() {
    wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '', true );
    wp_enqueue_script( 'main_js', get_template_directory_uri() . '/js/script.js', array('jquery', 'bootstrap_js'), '', true );
  }

  add_action( 'wp_enqueue_scripts', 'sc_theme_js' );

  class Description_Walker extends Walker_Nav_Menu
  {
      function start_el(&$output, $item, $depth, $args)
      {
          $classes = empty($item->classes) ? array () : (array) $item->classes;
          $class_names = join(' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) );
          !empty ( $class_names ) and $class_names = ' class="'. esc_attr( $class_names ) . '"';
          $output .= "<div id='menu-item-$item->ID' $class_names>";
          $attributes  = '';
          !empty( $item->attr_title ) and $attributes .= ' title="'  . esc_attr( $item->attr_title ) .'"';
          !empty( $item->target ) and $attributes .= ' target="' . esc_attr( $item->target     ) .'"';
          !empty( $item->xfn ) and $attributes .= ' rel="'    . esc_attr( $item->xfn        ) .'"';
          !empty( $item->url ) and $attributes .= ' href="'   . esc_attr( $item->url        ) .'"';
          $title = apply_filters( 'the_title', $item->title, $item->ID );
          $item_output = $args->before
          . "<a $attributes>"
          . $args->link_before
          . $title
          . '</a></div>'
          . $args->link_after
          . $args->after;
          $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
      }
  }
flush_rewrite_rules();
?>