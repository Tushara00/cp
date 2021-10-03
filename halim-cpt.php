<?php
/* ------------
Plugin Name: halim custom post type
Description: Common custom post type
Plugin URI: https://www.bdjobhub.com
Author 
Text Domain: halim
--------------------*/

function halim_custom_post(){
    //slider custom post
    register_post_type('sliders',array(
      'labels' =>array(
        'name' => __('Slides' ,'halim'),
        'singular_name' => __('Slider','halim')
      ),
      'public' =>true,
      'supports' =>array('title', 'editor','thumbnail','custom-fields')
      ));
  
      //slider custom post
    register_post_type('services',array(
      'labels' =>array(
        'name' => __('Services' ,'halim'),
        'singular_name' => __('Service','halim')
      ),
      'public' =>true,
      'supports' =>array('title', 'editor','custom-fields')
      ));
  
       //team custom post
    register_post_type('team',array(
      'labels' =>array(
        'name' => __('teams' ,'halim'),
        'singular_name' => __('team','halim')
      ),
      'public' =>true,
      'supports' =>array('title', 'editor','thumbnail','custom-fields','page-attributes')
      ));
  
      //testimonial custom post
      register_post_type('testimonial',array(
        'labels' =>array(
          'name' => __('testimonials' ,'halim'),
          'singular_name' => __('testimonial','halim')
        ),
        'public' =>true,
        'supports' =>array('thumbnail','custom-fields','page-attributes')
        ));
  
        //gallery custom post
      register_post_type('gallery',array(
        'labels' =>array(
          'name' => __('Gallerys' ,'halim'),
          'singular_name' => __('gallery','halim')
        ),
        'public' =>true,
        'supports' =>array('title','custom-fields','page-attributes')
        ));
  
         //portfolio custom post
      register_post_type('portfolio',array(
        'labels' =>array(
          'name' => __('portfolio' ,'halim'),
          'singular_name' => __('portfolio','halim')
        ),
        'public' =>true,
        'supports' =>array('title','editor','thumbnail','custom-fields','page-attributes')
        ));
  
        //portfolio taxonomy
        register_taxonomy('portfolio-cat','portfolio',array(
          'labels' =>array(
            'name' => __('categories','halim'),
            'singular_name' => __('category','halim')
          ), 
          'hierarchical'=>true,
          'show_admin_column' =>true
        ));
  }
  
  add_action('init', 'halim_custom_post');
  
?>