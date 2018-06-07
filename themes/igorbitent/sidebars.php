<?php 
$args = array(
	'name'          => __( 'business_hours', 'theme_text_domain' ),
	'id'            => 'unique-sidebar-id',    // ID should be LOWERCASE  ! ! !
	'description'   => '',
        'class'         => '',
	'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>' ); ?>

<?php register_sidebar( $args ); ?>
