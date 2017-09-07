<?php
// SIDEBARS AND WIDGETIZED AREAS
function joints_register_sidebars() {
	register_sidebar(array(
		'id' => 'sidebar1',
		'name' => __('Sidebar 1', 'jointstheme'),
		'description' => __('The first (primary) sidebar.', 'jointstheme'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));

	register_sidebar(array(
		'id' => 'offcanvas',
		'name' => __('Offcanvas', 'jointstheme'),
		'description' => __('The offcanvas sidebar.', 'jointstheme'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));

	/*
	to add more sidebars or widgetized areas, just copy
	and edit the above sidebar code. In order to call
	your new sidebar just use the following code:

	Just change the name to whatever your new
	sidebar's id is, for example: */

	register_sidebar(array(
		'id' => 'sidebar2',
		'name' => __('Footer Image 001', 'jointstheme'),
		'description' => __('First image for Footer about content.', 'jointstheme'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h5 class="widgettitle">',
		'after_title' => '</h5>',
	));

  register_sidebar(array(
    'id' => 'sidebar3',
    'name' => __('Footer Image 002', 'jointstheme'),
    'description' => __('Second image for Footer about content.', 'jointstheme'),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h5 class="widgettitle">',
    'after_title' => '</h5>',
  ));

  register_sidebar(array(
    'id' => 'sidebar4',
    'name' => __('Footer Text', 'jointstheme'),
    'description' => __('Text entry for Footer about content.', 'jointstheme'),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>'
  ));

  register_sidebar(array(
    'id' => 'sidebar5',
    'name' => __('Homepage Featured Article #1', 'jointstheme'),
    'description' => __('Featured Articles ', 'jointstheme'),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>'
  ));

  register_sidebar(array(
    'id' => 'sidebar6',
    'name' => __('Homepage Featured Article #2', 'jointstheme'),
    'description' => __('Featured Articles ', 'jointstheme'),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>'
  ));

  register_sidebar(array(
    'id' => 'sidebar7',
    'name' => __('Homepage Featured Article #3', 'jointstheme'),
    'description' => __('Featured Articles ', 'jointstheme'),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>'
  ));

  register_sidebar(array(
    'id' => 'sidebar8',
    'name' => __('Homepage Featured Article #4', 'jointstheme'),
    'description' => __('Featured Articles ', 'jointstheme'),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>'
  ));

  register_sidebar(array(
    'id' => 'sidebar9',
    'name' => __('Homepage Featured Article #5', 'jointstheme'),
    'description' => __('Featured Articles ', 'jointstheme'),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>'
  ));

  register_sidebar(array(
    'id' => 'sidebar10',
    'name' => __('Homepage Featured Article #6', 'jointstheme'),
    'description' => __('Featured Articles ', 'jointstheme'),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>'
  ));

  register_sidebar(array(
    'id' => 'sidebar11',
    'name' => __('Homepage Featured Article #7', 'jointstheme'),
    'description' => __('Featured Articles ', 'jointstheme'),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>'
  ));

  register_sidebar(array(
    'id' => 'sidebar12',
    'name' => __('Homepage Featured Article #8', 'jointstheme'),
    'description' => __('Featured Articles ', 'jointstheme'),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>'
  ));

  register_sidebar(array(
    'id' => 'sidebar13',
    'name' => __('Homepage Featured Article #9', 'jointstheme'),
    'description' => __('Featured Articles ', 'jointstheme'),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>'
  ));

  register_sidebar(array(
    'id' => 'sidebar14',
    'name' => __('Header Search', 'jointstheme'),
    'description' => __('Featured Articles ', 'jointstheme'),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>'
  ));

	/*To call the sidebar in your template, you can just copy
	the sidebar.php file and rename it to your sidebar's name.
	So using the above example, it would be:
	sidebar-sidebar2.php

	*/
} // don't remove this bracket!
?>

