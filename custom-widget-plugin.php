<?php
/*
Plugin Name: Custom Widget Plugin
Description: Adds a custom widget to display "Hello, World!" message.
Version: 1.0
Author: Arsal
*/

// Register custom widget
function custom_widget_init() {
    register_widget('Custom_Widget');
}
add_action('widgets_init', 'custom_widget_init');

// Custom widget class
class Custom_Widget extends WP_Widget {
    // Constructor
    public function __construct() {
        parent::__construct(
            'custom_widget', // Base ID
            __('Custom Widget', 'text_domain'), // Name
            array('description' => __('Widget to display "Hello, World!" message', 'text_domain')) // Widget description
        );
    }

    // Widget output
    public function widget($args, $instance) {
        echo $args['before_widget'];
        echo $args['before_title'] . __('Hello, World!', 'text_domain') . $args['after_title'];
        echo '<p>This is a custom widget message.</p>';
        echo $args['after_widget'];
    }
}