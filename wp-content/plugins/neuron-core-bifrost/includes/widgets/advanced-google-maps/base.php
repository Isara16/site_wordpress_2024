<?php
namespace NeuronElementor\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Repeater;
use \Elementor\Plugin;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * @since 1.0.0
 */
class NeuronAdvancedGoogleMaps extends Widget_Base {

	public function get_name() {
		return 'neuron-advanced-google-maps';
	}

	public function get_title() {
		return __('Advanced Google Maps', 'neuron-core');
	}

	public function get_icon() {
		return 'eicon-google-maps neuron-badge';
	}

	public function get_categories() {
		return ['neuron-category'];
    }
    
    public function get_script_depends() {
		return [ 'neuron-google-maps' ];
	}

	protected function register_controls() {

		$this->start_controls_section(
			'functionality_tab',
			[
				'label' => __('Functionality', 'neuron-core'),
			]
        );

        $this->add_control(
			'api_key_raw',
			[
                'raw' => __('<small>Do not forget to enter the API Key in the Customizer > Utility > <a href='. esc_url( admin_url( 'customize.php' )) .'>Google Maps</a></small>', 'neuron-core'),
                'type' => Controls_Manager::RAW_HTML,
                'field_type' => 'html'
			]
		);
        
        $this->add_control(
			'map_lat_long',
			[
                'raw' => __('<small>Enter the map latitude coordinates, to get map coordinates <a href="https://www.latlong.net/" target="_BLANK">click here</a>.</small>', 'neuron-core'),
                'type' => Controls_Manager::RAW_HTML,
                'field_type' => 'html'
			]
		);

        $this->add_control(
			'map_latitude',
			[
				'label'   => __('Map Latitude', 'neuron-builder'),
                'type' => Controls_Manager::TEXT,
                'default' => '40.783058',
				'separator' => 'before',
				'frontend_available' => true,
			]
        );

        $this->add_control(
			'map_longitude',
			[
				'label'   => __('Map Longitude', 'neuron-builder'),
                'type' => Controls_Manager::TEXT,
				'default' => '-73.971252',
				'frontend_available' => true,
			]
        );

        $this->end_controls_section();
        
        $this->start_controls_section(
			'options_tab',
			[
				'label' => __('Options', 'neuron-core'),
			]
        );

        $this->add_control(
			'zoom',
			[
				'label' => __('Zoom', 'neuron-core'),
				'type' => Controls_Manager::NUMBER,
				'default' => 13,
				'min'     => 1,
				'max'     => 20,
                'step'    => 1,
                'frontend_available' => true,
			]
        );
        
        $this->add_control(
			'style',
			[
                'label' => __('Style', 'neuron-core'),
				'type' => \Elementor\Controls_Manager::SELECT,
				'options' => [
					'default' => __('Default', 'neuron-core'),
					'classic' => __('Classic', 'neuron-core'),
					'custom' => __('Custom', 'neuron-core')
				],
                'default' => 'classic',
                'frontend_available' => true,
			]
		);
		
		 $this->add_control(
			'custom_style',
			[
				'label'   => __('Custom Style', 'neuron-core'),
                'type' => Controls_Manager::TEXTAREA,
                'description' => __('Enter the custom style, get custom style <a href="https://snazzymaps.com/" target="_BLANK">here</a>.', 'neuron-core'),
                'frontend_available' => true,
                'condition' => [
                    'style' => 'custom'
                ]
			]
        );

        $this->add_responsive_control(
			'height',
			[
				'label' => __('Height', 'neuron-core'),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => ['vh', 'px'],
				'selectors' => [
					'{{WRAPPER}} .map-holder > .map' => 'height: {{SIZE}}{{UNIT}} !important;',
				],
				'default' => [
					'unit' => 'px',
					'size' => 500
				],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
						'step' => 5,
					]
				]
			]
		);

        $this->add_control(
			'map_controls_heading',
			[
				'label' => __('Map Controls', 'neuron-core'),
				'type' => \Elementor\Controls_Manager::HEADING
			]
        );

        $this->add_control(
			'scroll_zoom',
			[
				'label' => __('Scroll Zoom', 'neuron-core'),
				'type' => Controls_Manager::SWITCHER,
				'return_value' => 'yes',
                'default' => 'no',
                'frontend_available' => true,
			]
        );

        $this->add_control(
			'type',
			[
				'label' => __('Type', 'neuron-core'),
				'type' => Controls_Manager::SWITCHER,
				'return_value' => 'yes',
                'default' => 'no',
                'frontend_available' => true,
			]
        );

        $this->add_control(
			'zoom_control',
			[
				'label' => __('Zoom', 'neuron-core'),
				'type' => Controls_Manager::SWITCHER,
				'return_value' => 'yes',
                'default' => 'yes',
                'frontend_available' => true,
			]
        );

        $this->add_control(
			'fullscreen',
			[
				'label' => __('Fullscreen', 'neuron-core'),
				'type' => Controls_Manager::SWITCHER,
				'return_value' => 'yes',
                'default' => 'no',
                'frontend_available' => true,
			]
        );

        $this->add_control(
			'street_view',
			[
				'label' => __('Street View', 'neuron-core'),
				'type' => Controls_Manager::SWITCHER,
				'return_value' => 'yes',
                'default' => 'no',
                'frontend_available' => true,
			]
        );

        $this->add_control(
			'draggable',
			[
				'label' => __('Draggable', 'neuron-core'),
				'type' => Controls_Manager::SWITCHER,
				'return_value' => 'yes',
                'default' => 'yes',
                'frontend_available' => true,
			]
        );

        $this->end_controls_section();
        
        $this->start_controls_section(
			'markers_tab',
			[
				'label' => __('Markers', 'neuron-core'),
			]
        );

		$repeater = new Repeater();

		$repeater->add_control(
			'map_latitude', 
			[
				'label' => __('Map Latitude', 'neuron-builder'),
				'type' => Controls_Manager::TEXT
			]
		);

		$repeater->add_control(
			'map_longitude', 
			[
				'label' => __('Map Longitude', 'neuron-builder'),
				'type' => Controls_Manager::TEXT
			]
		);

		$repeater->add_control(
			'image', 
			[
				'label' => __('Image', 'neuron-builder'),
				'type' => Controls_Manager::MEDIA,
				'default' => [
					'url' => [],
				],
			]
		);

		$repeater->add_control(
			'image_width', 
			[
				'label' => __('Width ', 'neuron-builder') . '(px)',
				'type' => Controls_Manager::NUMBER,
				'default' => 100,
				'step' => 5,
				'condition' => [
					'image[url]!' => ''
				]
			]
		);

		$repeater->add_control(
			'image_height', 
			[
				'label' => __('Height ', 'neuron-builder') . '(px)',
				'type' => Controls_Manager::NUMBER,
				'default' => 100,
				'step' => 5,
				'condition' => [
					'image[url]!' => ''
				]
			]
		);

		$repeater->add_control(
			'retina', 
			[
				'label' => __('Retina Ready', 'neuron-builder'),
				'type' => Controls_Manager::SWITCHER,
				'default' => 'yes'
			]
		);

		$repeater->add_control(
			'title', 
			[
				'label' => __('Title', 'neuron-builder'),
				'type' => Controls_Manager::TEXT,
			]
		);

		$repeater->add_control(
			'content', 
			[
				'label' => __('Content', 'neuron-builder'),
				'type' => Controls_Manager::TEXTAREA
			]
		);

		$this->add_control(
            'markers',
            [
                'label' => __('Markers', 'neuron-builder'),
                'description' => __('Add markers to the map.', 'neuron-builder'),
                'type' => Controls_Manager::REPEATER,
                'prevent_empty' => false,
                'frontend_available' => true,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'map_latitude' => '40.775541',
                        'map_longitude' => '-73.986267',
                        'title' => __('Marker Title 1#', 'neuron-builder'),
                        'content' => __('Marker Content 1#', 'neuron-builder'),
                        'retina' => 'yes'
                    ],
                    [
                        'map_latitude' => '40.787239',
                        'map_longitude' => '-73.945772',
                        'title' => __('Marker Title 2#', 'neuron-builder'),
                        'content' => __('Marker Content 2#', 'neuron-builder'),
                        'retina' => 'yes'
                    ]
                ]
            ]
		);

		$this->end_controls_section();
    }

	/**
	 * Render the widget output on the frontend.
	 *
	 * Written in PHP and used to generate the final HTML.
	 *
	 * @since 1.0.0
	 *
	 * @access protected
	 */
	protected function render() {
        $settings = $this->get_settings_for_display();
	?>
        <div class="map-holder">
            <div id="map-<?php echo esc_attr($this->get_id()); ?>" class="map"></div>
        </div>
	<?php
	}

	/**
	 * Render the widget output in the editor.
	 *
	 * Written as a Backbone JavaScript template and used to generate the live preview.
	 *
	 * @since 1.0.0
	 *
	 * @access protected
	 */
	protected function _content_template() {}
}
