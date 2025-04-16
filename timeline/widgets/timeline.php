<?php
use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit;

class Timeline_Widget extends Widget_Base {

	public function get_name() {
		return 'timeline_widget';
	}

	public function get_title() {
		return __( 'Timeline Widget', 'pro' );
	}

	public function get_icon() {
		return 'eicon-time-line';
	}

	public function get_categories() {
		return [ 'basic' ];
	}

	public function get_keywords(): array {
		return [ 'timeline widget', 'timeline', 'link' ];
	}

	protected function register_controls() {
		$this->start_controls_section(
			'content_section',
			[
				'label' => __( 'Timeline Items', 'pro' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'timeline_items',
			[
				'label' => __( 'Timeline', 'pro' ),
				'type' => Controls_Manager::REPEATER,
				'fields' => [
					[
						'name' => 'title',
						'label' => __( 'Title', 'pro' ),
						'type' => Controls_Manager::TEXT,
					],
					[
						'name' => 'description',
						'label' => __( 'Description', 'pro' ),
						'type' => Controls_Manager::TEXTAREA,
					],
				],
				'default' => [],
				'title_field' => '{{{ title }}}',
			]
		);

		$this->end_controls_section();
	}

	protected function render() {
		$settings = $this->get_settings_for_display();
		if ( ! empty( $settings['timeline_items'] ) ) {
			echo '<div class="custom-timeline">';
			foreach ( $settings['timeline_items'] as $item ) {
				echo '<div class="timeline-item">';
				echo '<h4>' . esc_html( $item['title'] ) . '</h4>';
				echo '<p>' . esc_html( $item['description'] ) . '</p>';
				echo '</div>';
			}
			echo '</div>';
		}
	}
}
