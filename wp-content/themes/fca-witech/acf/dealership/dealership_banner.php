<?php

acf_add_local_field_group(array(
    'key' => 'group_57eda69b7f29d',
    'title' => 'Dealership Banner',
    'fields' => array(
        array(
            'key' => 'field_57eda6a67370d',
            'label' => 'Background',
            'name' => 'banner__image',
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
        array(
            'key' => 'field_57eda6b57370e',
            'label' => 'Text',
            'name' => 'banner__text',
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
    ),
    'location' => array(
        array(
            array(
                'param' => 'page',
                'operator' => '==',
                'value' => '70',
            ),
        ),
    array(
      array(
        'param' => 'page',
        'operator' => '==',
        'value' => '77',
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
