<?php 
/**
 * Posts > Content Options > Layout
 */

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

$this->add_responsive_control(
    'posts_columns',
    [
        'label' => __('Columns', 'neuron-core'),
        'description' => __('Select the columns of the isotope grid.', 'neuron-core'),
        'type' => Controls_Manager::SELECT,
        'options' => [
            '1-column' => __('1 Column', 'neuron-core'),
            '2-columns' => __('2 Columns', 'neuron-core'),
            '3-columns' => __('3 Columns', 'neuron-core'),
            '4-columns' => __('4 Columns', 'neuron-core'),
            '5-columns' => __('5 Columns', 'neuron-core'),
            '6-columns' => __('6 Columns', 'neuron-core')
        ],
        'default' => '3-columns',
        'tablet_default' => '2-columns',
        'mobile_default' => '1-column',
        'conditions' => [
            'terms' => [
                [
                    'name' => 'posts_layout',
                    'operator' => '==',
                    'value' => 'isotope',
                ],
                [
                    'relation' => 'or',
                    'terms' => [
                        [
                            'name' => 'posts_layout',
                            'operator' => '==',
                            'value' => 'carousel'
                        ], 
                        [
                            'name' => 'posts_layout_type',
                            'operator' => '!==',
                            'value' => 'metro',
                        ],
                    ]
                ]
            ],
        ]
    ]
);

$this->add_control(
    'posts_animation',
    [
        'label' => __('Animation', 'neuron-core'),
        'description' => __('Select initial loading animation for posts.', 'neuron-core'),
        'type' => Controls_Manager::SELECT,
        'options' => [
            'none' 				 	=> __('None', 'neuron-core'),
            'h-fadeInNeuron'	 	=> __('Fade In', 'neuron-core'),
            'h-fadeInUpNeuron' 	  	=> __('Fade In Up', 'neuron-core'),
            'h-fadeInLeftNeuron'  	=> __('Fade In Left', 'neuron-core'),
            'h-fadeInRightNeuron' 	=> __('Fade In Right', 'neuron-core'),
            'h-zoomInNeuron' 	 	=> __('Zoom In', 'neuron-core'),
            'h-zoomOutNeuron' 	 	=> __('Zoom Out', 'neuron-core'),
            'h-preserve3DNeuron' 	=> __('Preserve 3d', 'neuron-core')
        ],
        'default' => 'h-fadeInNeuron',
    ]
);

$this->add_control(
    'posts_animation_delay',
    [
        'label' => __('Animation Delay', 'neuron-core'),
        'description' => __('Activate the delay effect on posts.', 'neuron-core'),
        'type' => Controls_Manager::SWITCHER,
        'return_value' => 'yes',
        'default' => 'no',
        'condition' => [
            'posts_animation!' => 'none'
        ]
    ]
);

$this->add_control(
    'posts_offset',
    [
        'label' => __('Offset', 'neuron-core'),
        'description' => __('Activate an offset layout which will set spacing every second post.', 'neuron-core'),
        'type' => Controls_Manager::SWITCHER,
        'return_value' => 'yes',
        'default' => 'no',
        'prefix_class' => 'h-offset--',
        'condition' => [
            'posts_layout' => 'isotope',
            'posts_layout_type!' => 'metro',
            'posts_layout_type!' => 'justified',
        ]
    ]
);

$this->add_responsive_control(
    'posts_spacing',
    [
        'label' => __('Spacing', 'neuron-core'),
        'description' => __('Move the slider to set the value of spacing. <br /><small>Note: The value is represented in pixels.</small>', 'neuron-core'),
        'type' => Controls_Manager::SLIDER,
        'condition' => [
            'posts_layout' => 'isotope'
        ],
        'size_units' => ['px', 'rem', '%'],
        'range' => [
            'px' => [
                'min' => 0,
                'max' => 200,
                'step' => 1,
            ],
        ],
        'selectors' => [
            '{{WRAPPER}} .masonry' => 'margin-left: calc(-{{SIZE}}{{UNIT}} / 2); margin-right: calc(-{{SIZE}}{{UNIT}} / 2)',
            '{{WRAPPER}} .masonry .selector' => 'padding-left: calc({{SIZE}}{{UNIT}} / 2); padding-right: calc({{SIZE}}{{UNIT}} / 2); margin-bottom: {{SIZE}}{{UNIT}} !important;',
            '{{WRAPPER}}.h-offset--yes .selector[data-columns="2-columns"]:nth-child(2)' => 'margin-top: {{SIZE}}{{UNIT}} !important', 
            '{{WRAPPER}}.h-offset--yes .selector[data-columns="3-columns"]:nth-child(1)' => 'margin-top: {{SIZE}}{{UNIT}} !important',
            '{{WRAPPER}}.h-offset--yes .selector[data-columns="3-columns"]:nth-child(3)' => 'margin-top: {{SIZE}}{{UNIT}} !important',
            '{{WRAPPER}}.h-offset--yes .selector[data-columns="4-columns"]:nth-child(1)' => 'margin-top: {{SIZE}}{{UNIT}} !important',
            '{{WRAPPER}}.h-offset--yes .selector[data-columns="4-columns"]:nth-child(3)' => 'margin-top: {{SIZE}}{{UNIT}} !important',
            '{{WRAPPER}}.h-offset--yes .selector[data-columns="5-columns"]:nth-child(1)' => 'margin-top: {{SIZE}}{{UNIT}} !important',
            '{{WRAPPER}}.h-offset--yes .selector[data-columns="5-columns"]:nth-child(3)' => 'margin-top: {{SIZE}}{{UNIT}} !important',
            '{{WRAPPER}}.h-offset--yes .selector[data-columns="5-columns"]:nth-child(5)' => 'margin-top: {{SIZE}}{{UNIT}} !important',
            '{{WRAPPER}}.h-offset--yes .selector[data-columns="6-columns"]:nth-child(1)' => 'margin-top: {{SIZE}}{{UNIT}} !important',
            '{{WRAPPER}}.h-offset--yes .selector[data-columns="6-columns"]:nth-child(3)' => 'margin-top: {{SIZE}}{{UNIT}} !important',
            '{{WRAPPER}}.h-offset--yes .selector[data-columns="6-columns"]:nth-child(5)' => 'margin-top: {{SIZE}}{{UNIT}} !important'
        ],
        'render_type' => 'template'
    ]
);