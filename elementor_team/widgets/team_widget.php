<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class Elementor_Team extends \Elementor\Widget_Base {

	public function get_name(): string {
		return 'team';
	}
// team name
	public function get_title(): string {
		return esc_html__( 'Team', 'shohag');
	}

	public function get_icon(): string {
		return 'eicon-preferences';
	}
    public function get_categories(): array {
		return [ 'basic' ];
	}
	public function get_keywords(): array {
		return [ 'shohag', 'url', 'link' ];
	}

    // register control=============

	protected function register_controls(): void {

		$this->start_controls_section(
			'content_section',
			[
				'label' => esc_html__( 'Content', 'shohag' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);


// team image
        $this->add_control(
			'image',
			[
				'label' => esc_html__( 'Choose Image', 'shohag' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);
// image height,width
$this->add_responsive_control(
    'image_width',
    [
        'label' => esc_html__( 'Image Width', 'shohag' ),
        'type' => \Elementor\Controls_Manager::SLIDER,
        'size_units' => [ 'px', '%', 'em' ],
        'range' => [
            'px' => [
                'min' => 50,
                'max' => 1200,
            ],
        ],
        'selectors' => [
            '{{WRAPPER}} .team_image' => 'width: {{SIZE}}{{UNIT}};',
        ],
    ]
);


// team name
		$this->add_control(
			'team_name',
			[
				'label' => esc_html__( 'Team Name', 'shohag' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => esc_html__( 'Enter Your title', 'shohag' ),
                'label_block'=>true
			]
		);

// team description
$this->add_control(
    'team_description',
    [
        'label' => esc_html__( 'Team Description', 'shohag' ),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'placeholder' => esc_html__( 'Enter Your Desc', 'shohag' )
      
    ]
);

$this->end_controls_section();
// register style=============
$this->start_controls_section(
    'style_section',
    [
        'label' => esc_html__( 'Style', 'shohag' ),
        'tab' => \Elementor\Controls_Manager::TAB_STYLE,
    ]
);

// image alignment
$this->add_control(
    'image_align',
    [
        'label' => esc_html__( ' Image Alignment', 'textdomain' ),
        'type' => \Elementor\Controls_Manager::CHOOSE,
        'options' => [
            'left' => [
                'title' => esc_html__( 'Left', 'textdomain' ),
                'icon' => 'eicon-text-align-left',
            ],
            'center' => [
                'title' => esc_html__( 'Center', 'textdomain' ),
                'icon' => 'eicon-text-align-center',
            ],
            'right' => [
                'title' => esc_html__( 'Right', 'textdomain' ),
                'icon' => 'eicon-text-align-right',
            ],
        ],
        'default' => 'left',
        'toggle' => true,
        'selectors' => [
            '{{WRAPPER}} .terms' => 'text-align: {{VALUE}};',
        ],
         'separator' => 'before'
    ]
);

// title alignment
$this->add_control(
    'text_align',
    [
        'label' => esc_html__( 'Alignment', 'textdomain' ),
        'type' => \Elementor\Controls_Manager::CHOOSE,
        'options' => [
            'left' => [
                'title' => esc_html__( 'Left', 'textdomain' ),
                'icon' => 'eicon-text-align-left',
            ],
            'center' => [
                'title' => esc_html__( 'Center', 'textdomain' ),
                'icon' => 'eicon-text-align-center',
            ],
            'right' => [
                'title' => esc_html__( 'Right', 'textdomain' ),
                'icon' => 'eicon-text-align-right',
            ],
        ],
        'default' => 'left',
        'toggle' => true,
        'selectors' => [
            '{{WRAPPER}} .terms h4' => 'text-align: {{VALUE}};',
        ],
         'separator' => 'before'
    ]
);


// title color
$this->add_control(
    'title_color',
    [
        'label' => esc_html__( 'Color', 'shohag' ),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .terms h4' => 'color: {{VALUE}};',

        ],
    ]
);
// title typography
$this->add_group_control(
    \Elementor\Group_Control_Typography::get_type(),
    [
        'name' => 'title_typography',
        'selector' => '{{WRAPPER}} .terms h4',
    ]
);

// description alignment
$this->add_control(
    'desc_align',
    [
        'label' => esc_html__( 'Alignment', 'textdomain' ),
        'type' => \Elementor\Controls_Manager::CHOOSE,
        'options' => [
            'left' => [
                'title' => esc_html__( 'Left', 'textdomain' ),
                'icon' => 'eicon-text-align-left',
            ],
            'center' => [
                'title' => esc_html__( 'Center', 'textdomain' ),
                'icon' => 'eicon-text-align-center',
            ],
            'right' => [
                'title' => esc_html__( 'Right', 'textdomain' ),
                'icon' => 'eicon-text-align-right',
            ],
        ],
        'default' => 'left',
        'toggle' => true,
        'selectors' => [
            '{{WRAPPER}} .terms p' => 'text-align: {{VALUE}};',
        ],
         'separator' => 'before'
    ]
);

// description color
$this->add_control(
    'desc_color',
    [
        'label' => esc_html__( 'Color', 'shohag' ),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .terms p' => 'color: {{VALUE}};',

        ],
    ]
);
// description typography
$this->add_group_control(
    \Elementor\Group_Control_Typography::get_type(),
    [
        'name' => 'description_typography',
        'selector' => '{{WRAPPER}} .terms p',
     
    ]
);

$this->end_controls_section();

	}

// render part=============
protected function render() {
    $settings = $this->get_settings_for_display();

    $team_image = $settings['image']['url'];
    $team_name = $settings['team_name'];
    $team_description = $settings['team_description'];
    ?>
<div class="terms">
    <img class="team_image" src="<?php echo esc_url( $team_image ); ?>" alt="<?php echo esc_attr( $team_name ); ?>">
    <h4 class=""><?php echo esc_html( $team_name ); ?></h4>
    <p><?php echo esc_html( $team_description ); ?></p>
</div>
<?php
}

}


// Second widget