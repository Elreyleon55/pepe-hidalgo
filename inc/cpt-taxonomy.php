<?php
function pepe_hidalgo_register_custom_post_types()
{
  //for Dyptychs
  $diptych_labels = array(
    'name'               => _x('diptychs', 'post type general name'),
    'singular_name'      => _x('diptych', 'post type singular name'),
    'menu_name'          => _x('diptychs', 'admin menu'),
    'name_admin_bar'     => _x('diptych', 'add new on admin bar'),
    'add_new'            => _x('Add New', 'diptych'),
    'add_new_item'       => __('Add New diptych'),
    'new_item'           => __('New diptych'),
    'edit_item'          => __('Edit diptych'),
    'view_item'          => __('View diptych'),
    'all_items'          => __('All diptychs'),
    'search_items'       => __('Search diptychs'),
    'parent_item_colon'  => __('Parent diptych:'),
    'not_found'          => __('No diptychs found.'),
    'not_found_in_trash' => __('No diptychs found in Trash.'),
    'archives'           => __('diptych Archives'),
    'insert_into_item'   => __('Insert into diptych'),
    'uploaded_to_this_item' => __('Uploaded to this diptych'),
    'filter_item_list'   => __('Filter diptychs list'),
    'items_list_navigation' => __('diptychs list navigation'),
    'items_list'         => __('diptychs list'),
    'featured_image'     => __('diptych featured image'),
    'set_featured_image' => __('Set diptych featured image'),
    'remove_featured_image' => __('Remove diptych featured image'),
    'use_featured_image' => __('Use as featured image'),
  );

  $diptych_args = array(
    'labels'             => $diptych_labels,
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => array('slug' => 'diptych'),
    'capability_type'    => 'post',
    'has_archive'        => true,
    'hierarchical'       => false,
    'menu_position'      => 5,
    'menu_icon'          => 'dashicons-archive',
    'supports'           => array('title', 'editor', 'thumbnail'),
  );
  register_post_type('pah-diptych', $diptych_args);


  //regestering collaborators custom post type

  $collaboration_labels = array(
    'name'               => _x('collaborations', 'post type general name'),
    'singular_name'      => _x('collaboration', 'post type singular name'),
    'menu_name'          => _x('collaborations', 'admin menu'),
    'name_admin_bar'     => _x('collaboration', 'add new on admin bar'),
    'add_new'            => _x('Add New', 'collaboration'),
    'add_new_item'       => __('Add New collaboration'),
    'new_item'           => __('New collaboration'),
    'edit_item'          => __('Edit collaboration'),
    'view_item'          => __('View collaboration'),
    'all_items'          => __('All collaborations'),
    'search_items'       => __('Search collaborations'),
    'parent_item_colon'  => __('Parent collaborations:'),
    'not_found'          => __('No collaborations found.'),
    'not_found_in_trash' => __('No collaborations found in Trash.'),
    'archives'           => __('collaboration Archives'),
    'insert_into_item'   => __('Insert into collaboration'),
    'uploaded_to_this_item' => __('Uploaded to this collaboration'),
    'filter_item_list'   => __('Filter collaborations list'),
    'items_list_navigation' => __('collaborations list navigation'),
    'items_list'         => __('collaborations list'),
    'featured_image'     => __('collaboration featured image'),
    'set_featured_image' => __('Set collaboration featured image'),
    'remove_featured_image' => __('Remove collaboration featured image'),
    'use_featured_image' => __('Use as featured image'),
  );

  $collaboration_args = array(
    'labels'             => $collaboration_labels,
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'show_in_nav_menus'  => true,
    'show_in_admin_bar'  => true,
    'show_in_rest'       => true,
    'query_var'          => true,
    'rewrite'            => array('slug' => 'collaborations'),
    'capability_type'    => 'post',
    'has_archive'        => true,
    'hierarchical'       => false,
    'menu_position'      => 5,
    'menu_icon'          => 'dashicons-archive',
    'supports'           => array('title', 'thumbnail', 'editor'),
  );

  register_post_type('pah-collaboration', $collaboration_args);
}

add_action('init', 'pepe_hidalgo_register_custom_post_types');



function pepe_hidalgo_register_custom_taxonomies()
{

  // Labels for the taxonomy dyptych
  $labels = array(
    'name'              => _x('diptych Types', 'taxonomy general name'),
    'singular_name'     => _x('diptych Type', 'taxonomy singular name'),
    'search_items'      => __('Search diptych Types'),
    'all_items'         => __('All diptych Types'),
    'parent_item'       => __('Parent diptych Type'),
    'parent_item_colon' => __('Parent diptych Type:'),
    'edit_item'         => __('Edit diptych Type'),
    'update_item'       => __('Update diptych Type'),
    'add_new_item'      => __('Add New diptych Type'),
    'new_item_name'     => __('New diptych Type Name'),
    'menu_name'         => __('diptych Types'),
  );

  // Arguments for the taxonomy
  $args = array(
    'hierarchical'      => true,
    'labels'            => $labels,
    'show_ui'           => true,
    'show_admin_column' => true,
    'query_var'         => true,
    'rewrite'           => array('slug' => 'diptych-type'),
  );

  // Register the taxonomy for the ppa-diptych post type
  register_taxonomy('pah-diptych-type', array('pah-diptych'), $args);


  // Labels for the taxonomy
  $labels = array(
    'name'              => _x('collaboration Types', 'taxonomy general name'),
    'singular_name'     => _x('collaboration Type', 'taxonomy singular name'),
    'search_items'      => __('Search collaboration Types'),
    'all_items'         => __('All collaboration Types'),
    'parent_item'       => __('Parent collaboration Type'),
    'parent_item_colon' => __('Parent collaboration Type:'),
    'edit_item'         => __('Edit collaboration Type'),
    'update_item'       => __('Update collaboration Type'),
    'add_new_item'      => __('Add New collaboration Type'),
    'new_item_name'     => __('New collaboration Type Name'),
    'menu_name'         => __('collaboration Types'),
  );

  // Arguments for the taxonomy
  $args = array(
    'hierarchical'      => true,
    'labels'            => $labels,
    'show_ui'           => true,
    'show_admin_column' => true,
    'query_var'         => true,
    'rewrite'           => array('slug' => 'collaboration-type'),
  );

  // Register the taxonomy for the pah-collaboration post type
  register_taxonomy('pah-collaboration-type', array('pah-collaboration'), $args);
}

add_action('init', 'pepe_hidalgo_register_custom_taxonomies');
