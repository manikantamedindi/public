<?php

acf_add_local_field_group(array(
    'key' => 'group_57ed1cdb4658c',
    'title' => 'Mobility Big Banner',
    'fields' => array(
        array(
            'key' => 'field_57ed1cdfd35f6',
            'label' => 'Image',
            'name' => 'mobility__bigbanner__image',
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
