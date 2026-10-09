<?php

acf_add_local_field_group(array(
    'key' => 'group_5601eef558152',
    'title' => 'hero',
    'fields' => array(
        array(
            'key' => 'field_5601eef8e9aa3',
            'label' => 'Image',
            'name' => 'hero__image',
            'type' => 'image',
            'instructions' => '',
            'required' => 1,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'return_format' => 'id',
            'preview_size' => 'large',
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
            'key' => 'field_587ced1ec88d6',
            'label' => 'Show Video',
            'name' => 'hero__video',
            'type' => 'true_false',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'message' => '',
            'default_value' => 0,
        ),
        array(
            'key' => 'field_5601ef29e9aa4',
            'label' => 'Text',
            'name' => 'hero__text',
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
            'layout' => 'row',
            'button_label' => 'Add Row',
            'sub_fields' => array(
                array(
                    'key' => 'field_5601ef3ee9aa5',
                    'label' => 'Content',
                    'name' => 'content',
                    'type' => 'text',
                    'instructions' => '',
                    'required' => 1,
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
                    'key' => 'field_5601e52e9ea6',
                    'label' => 'Format',
                    'name' => 'format',
                    'type' => 'radio',
                    'instructions' => '',
                    'required' => 1,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'choices' => array(
                        'small' => 'Small',
                        'large' => 'Large',
                        'normal' => 'Normal',
                    ),
                    'other_choice' => 0,
                    'save_other_choice' => 0,
                    'default_value' => 'normal',
                    'layout' => 'horizontal',
                ),
            ),
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
                'value' => '124',
            ),
        ),
        array(
            array(
                'param' => 'page',
                'operator' => '==',
                'value' => '109',
            ),
        ),
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
                'value' => '107',
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
                'value' => '113',
            ),
        ),
        array(
            array(
                'param' => 'page',
                'operator' => '==',
                'value' => '95',
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
    'position' => 'acf_after_title',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => array(
        0 => 'the_content',
    ),
    'active' => 1,
    'description' => '',
));
