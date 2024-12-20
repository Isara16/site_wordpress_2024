<?php
if ( ! function_exists('icl_object_id') ) {
    return;
}

function bifrost_wpml_widgets_to_translate_filter(){
	add_filter( 'wpml_elementor_widgets_to_translate', 'bifrost_widgets_to_translate_filter' );
}
add_action( 'init', 'bifrost_wpml_widgets_to_translate_filter' );

function bifrost_widgets_to_translate_filter( $widgets )  {

    $widgets['neuron-search-form'] = [
        'conditions' => [ 'widgetType' => 'neuron-search-form' ],
        'fields'     => [
            [
                'field'       => 'search_form_placeholder',
                'type'        => esc_html__( 'Neuron Search Form: Placeholder', 'neuron-core' ),
                'editor_type' => 'LINE',
            ],
        ],
    ];

    $widgets['neuron-progress-bar'] = [
        'conditions' => [ 'widgetType' => 'neuron-progress-bar' ],
        'fields'     => [
            [
                'field'       => 'progress_bar_title',
                'type'        => esc_html__( 'Neuron Progress Bar: Title', 'neuron-core' ),
                'editor_type' => 'LINE',
            ],
        ],
	];
	
	$widgets['neuron-typed-heading'] = [
        'conditions' => [ 'widgetType' => 'neuron-typed-heading' ],
        'fields'     => [
            [
                'field'       => 'typed_heading_content',
                'type'        => esc_html__( 'Typed Heading: Content', 'neuron-core' ),
                'editor_type' => 'LINE',
            ],
        ],
    ];


    $widgets['neuron-countdown'] = [
        'conditions' => [ 'widgetType' => 'neuron-countdown' ],
        'fields'     => [
            [
                'field'       => 'custom_labels_days',
                'type'        => __( 'Countdown: Label days', 'neuron-core' ),
                'editor_type' => 'LINE'
            ],
            [
                'field'       => 'custom_labels_hours',
                'type'        => __( 'Countdown: Label hours', 'neuron-core' ),
                'editor_type' => 'LINE'
            ],
            [
                'field'       => 'custom_labels_minutes',
                'type'        => __( 'Countdown: Label minutes', 'neuron-core' ),
                'editor_type' => 'LINE'
            ],
            [
                'field'       => 'custom_labels_seconds',
                'type'        => __( 'Countdown: Label seconds', 'neuron-core' ),
                'editor_type' => 'LINE'
            ],
        ],
    ];

    $widgets['neuron-media-gallery'] = [
        'conditions' => [ 'widgetType' => 'neuron-media-gallery' ],
        'fields' => array(),
        'integration-class' => 'Bifrost_MediaGallery',
    ];

    $widgets['neuron-price-list'] = [
        'conditions' => [ 'widgetType' => 'neuron-price-list' ],
        'fields' => array(),
        'integration-class' => 'Bifrost_PriceList',
    ];

    $widgets['neuron-testimonial-carousel'] = [
        'conditions' => [ 'widgetType' => 'neuron-testimonial-carousel' ],
        'fields' => array(),
        'integration-class' => 'Bifrost_TestimonialCarousel',
    ];

    return $widgets;

	class Bifrost_MediaGallery extends WPML_Elementor_Module_With_Items {

		public function get_items_field() {
			return 'media_gallery_query_normal';
		}

		public function get_fields() {
			return array( 'query_title', 'query_subtitle', 'query_description', 'query_url' => array( 'url' ) );
		}

		protected function get_title( $field ) {
			switch( $field ) {
				case 'query_title':
					return esc_html__( 'Gallery: Title', 'neuron-core' );

				case 'query_subtitle':
					return esc_html__( 'Gallery: Subtitle', 'neuron-core' );
					
				case 'query_description':
					return esc_html__( 'Gallery: Description', 'neuron-core' );

				case 'query_url':
					return esc_html__( 'Gallery: link URL', 'neuron-core' );

				default:
					return '';
			}
		}

		protected function get_editor_type( $field ) {
			switch( $field ) {
				case 'query_title':
				case 'query_subtitle':
				case 'query_description':
					return 'LINE';

				case 'query_url':
					return 'LINK';

				default:
					return '';
			}
		}

	}

	class Bifrost_PriceList extends WPML_Elementor_Module_With_Items {

		public function get_items_field() {
			return 'price_lists';
		}

		public function get_fields() {
			return array( 'price', 'title', 'description', 'link' => array( 'url' ) );
		}

		protected function get_title( $field ) {
			switch( $field ) {
				case 'price':
					return esc_html__( 'Price List: Price', 'neuron-core' );

				case 'title':
					return esc_html__( 'Price List: Title', 'neuron-core' );
					
				case 'description':
					return esc_html__( 'Price List: Description', 'neuron-core' );

				case 'link':
					return esc_html__( 'Price List: Link', 'neuron-core' );

				default:
					return '';
			}
		}

		protected function get_editor_type( $field ) {
			switch( $field ) {
				case 'price':
				case 'title':
				case 'description':
					return 'LINE';

				case 'link':
					return 'LINK';

				default:
					return '';
			}
		}
	}

	class Bifrost_TestimonialCarousel extends WPML_Elementor_Module_With_Items {

		public function get_items_field() {
			return 'slides';
		}

		public function get_fields() {
			return array( 'content', 'name', 'title', 'name_url' => array( 'url' ), 'title_url' => array( 'url' ) );
		}

		protected function get_title( $field ) {
			switch( $field ) {
				case 'content':
					return esc_html__( 'Testimonial Carousel: Content', 'neuron-core' );

				case 'name':
					return esc_html__( 'Testimonial Carousel: Name', 'neuron-core' );
					
				case 'title':
					return esc_html__( 'Testimonial Carousel: Title', 'neuron-core' );

				case 'name_url':
					return esc_html__( 'Testimonial Carousel: Name Url', 'neuron-core' );
					
				case 'title_url':
					return esc_html__( 'Testimonial Carousel: Title Url', 'neuron-core' );

				default:
					return '';
			}
		}

		protected function get_editor_type( $field ) {
			switch( $field ) {
				case 'name':
				case 'title':
				case 'content':
					return 'LINE';

				case 'name_url':
				case 'title_url':
					return 'LINK';

				default:
					return '';
			}
		}
	}
}

