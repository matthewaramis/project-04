<?php

class Simple_Widget_Demo extends WP_Widget {

/**
 * Sets up the widgets name etc
 */
public function __construct() {
    parent::__construct( false, 'Simple Widget Demo' );
}

/**
 * Outputs the content of the widget
 */
public function widget( $args, $instance ) {
    // outputs the content of the widget
}

/**
 * Outputs the options form on admin
 */
public function form( $instance ) {
    // outputs the options form on admin
}

/**
 * Processing widget options on save
 */
public function update( $new_instance, $old_instance ) {
    // processes widget options to be saved
}
}

function swd_register(){
    register_widget('Simple_Widget_Demo');
}

add_action('widgets_init', 'swd_register');