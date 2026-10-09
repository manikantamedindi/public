<?php

acf_add_local_field_group(array(
    'key' => 'group_57ec24c84e021',
    'title' => 'Bottom Nav',
    'fields' => array(
        array(
            'key' => 'field_57ec24cd7a823',
            'label' => 'Title',
            'name' => 'bottomnav__title',
            'type' => 'text',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'default_value' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'maxlength' => '',
            'readonly' => 0,
            'disabled' => 0,
        ),
        array(
            'key' => 'field_57ec24ef7a824',
            'label' => 'Background',
            'name' => 'bottomnav__image',
            'type' => 'image',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'return_format' => 'id',
            'preview_size' => 'thumbnail',
            'library' => 'all',
            'min_width' => '',
            'min_height' => '',
            'min_size' => '',
            'max_width' => '',
            'max_height' => '',
            'max_size' => '',
            'mime_types' => '',
        ),
    ),
    'location' => array(
        array(
            array(
                'param' => 'page',
                'operator' => '==',
                'value' => '4',
            ),
        ),
        array(
            array(
                'param' => 'page',
                'operator' => '==',
                'value' => '116',
            ),
        ),
        array(
            array(
                'param' => 'page',
                'operator' => '==',
                'value' => '101',
            ),
        ),
        array(
            array(
                'param' => 'page',
                'operator' => '==',
                'value' => '95',
            ),
        ),
    ),
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => '',
    'active' => 1,
    'description' => '',
));
