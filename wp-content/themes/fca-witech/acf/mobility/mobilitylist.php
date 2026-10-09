<?php

acf_add_local_field_group(array(
    'key' => 'group_57edaaa09af04',
    'title' => 'List',
    'fields' => array(
        array(
            'key' => 'field_57edaaad849b6',
            'label' => 'List',
            'name' => 'list',
            'type' => 'repeater',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'min' => '',
            'max' => '',
            'layout' => 'table',
            'button_label' => 'Add Row',
            'sub_fields' => array(
             
                array(
                    'key' => 'field_57edaac1834b8',
                    'label' => 'Documents',
                    'name' => 'documents',
                    'type' => 'repeater',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                ),
            ),
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
