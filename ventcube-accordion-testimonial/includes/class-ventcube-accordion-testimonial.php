<?php

class VentCube_Accordion_Testimonial_Widget extends \Elementor\Widget_Base {

    public function get_name() {
        return 'ventcube_accordion_testimonial';
    }

    public function get_title() {
        return __( 'VentCube Accordion Testimonial', 'ventcuebe' );
    }

    public function get_icon() {
        return 'eicon-accordion';
    }

    public function get_categories() {
        return [ 'general' ];
    }

    protected function _register_controls() {
        $this->start_controls_section(
            'content_section',
            [
                'label' => __( 'Content', 'ventcuebe' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'accordion_items',
            [
                'label' => __( 'Accordion Items', 'ventcuebe' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => [
                    [
                        'name' => 'client_name',
                        'label' => __( 'Client Name', 'ventcuebe' ),
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'default' => __( 'Client Name', 'ventcuebe' ),
                        'label_block' => true,
                    ],
                    [
                        'name' => 'year',
                        'label' => __( 'Year', 'ventcuebe' ),
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'default' => __( '2020', 'ventcuebe' ),
                        'label_block' => true,
                    ],
                    [
                        'name' => 'client_image',
                        'label' => __( 'Client Image', 'ventcuebe' ),
                        'type' => \Elementor\Controls_Manager::MEDIA,
                        'default' => [
                            'url' => plugins_url( 'assets/img/Group 40191.svg', __FILE__ ),
                        ],
                    ],
                    
                    [
                        'name' => 'review_text',
                        'label' => __( 'Review Text', 'ventcuebe' ),
                        'type' => \Elementor\Controls_Manager::TEXTAREA,
                        'default' => __( '“What we were looking for and found with Beetroot was close cooperation and proper employees.”', 'ventcuebe' ),
                        'label_block' => true,
                    ],
                    [
                        'name' => 'additional_info_heading',
                        'label' => __( 'Additional Info Heading', 'ventcuebe' ),
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'default' => __( 'Additional Info', 'ventcuebe' ),
                        'label_block' => true,
                    ],
                    [
                        'name' => 'additional_info',
                        'label' => __( 'Additional Info', 'ventcuebe' ),
                        'type' => \Elementor\Controls_Manager::TEXTAREA,
                        'default' => __( 'What we were looking for and found with Beetroot was close cooperation and proper employees.', 'ventcuebe' ),
                        'label_block' => true,
                    ],
                    [
                        'name' => 'client_work_image',
                        'label' => __( 'Client Work Image', 'ventcuebe' ),
                        'type' => \Elementor\Controls_Manager::MEDIA,
                        'default' => [
                            'url' => plugins_url( 'assets/img/client_review.png', __FILE__ ),
                        ],
                    ],
                   [
                        'name' => 'button_left_text',
                        'label' => __( 'Left Button Text', 'ventcuebe' ),
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'default' => __( 'Button Left', 'ventcuebe' ),
                    ],
                    [
                        'name' => 'button_left_url',
                        'label' => __( 'Left Button URL', 'ventcuebe' ),
                        'type' => \Elementor\Controls_Manager::URL,
                        'default' => [
                            'url' => '#',
                        ],
                    ],
                    
                    [
                        'name' => 'button_left_icon',
                        'label' => __( 'Left Button Icon', 'ventcuebe' ),
                        'type' => \Elementor\Controls_Manager::ICONS,
                        'default' => [
                            'value' => 'fas fa-star',
                            'library' => 'fa-solid',
                            'size' => '14px', // Default icon size
                            'width' => '14', // Default icon width
                            'height' => '14', // Default icon height
                        ],
                    ],
                    [
                        'name' => 'button_left_icon_position',
                        'label' => __( 'Left Button Icon Position', 'ventcuebe' ),
                        'type' => \Elementor\Controls_Manager::SELECT,
                        'options' => [
                            'before' => __( 'Before', 'ventcuebe' ),
                            'after' => __( 'After', 'ventcuebe' ),
                        ],
                        'default' => 'before',
                    ],
                    [
                        'name' => 'button_left_icon_spacing',
                        'label' => __( 'Left Button Icon Spacing', 'ventcuebe' ),
                        'type' => \Elementor\Controls_Manager::SLIDER,
                        'range' => [
                            'px' => [
                                'min' => 0,
                                'max' => 50,
                            ],
                        ],
                        'selectors' => [
                            '{{WRAPPER}} .button_left .elementor-button-icon' => 'margin-right: {{SIZE}}{{UNIT}};',
                            '{{WRAPPER}} .button_left .elementor-button-icon-after' => 'margin-left: {{SIZE}}{{UNIT}};',
                        ],
                    ],
                    
                    [
                        'name' => 'button_right_text',
                        'label' => __( 'Right Button Text', 'ventcuebe' ),
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'default' => __( 'Button Right', 'ventcuebe' ),
                    ],
                    [
                        'name' => 'button_right_url',
                        'label' => __( 'Right Button URL', 'ventcuebe' ),
                        'type' => \Elementor\Controls_Manager::URL,
                        'default' => [
                            'url' => '#',
                        ],
                    ],
                    [
                        'name' => 'button_right_icon',
                        'label' => __( 'Right Button Icon', 'ventcuebe' ),
                        'type' => \Elementor\Controls_Manager::ICONS,
                        'default' => [
                            'value' => 'fas fa-star',
                            'library' => 'fa-solid',
                            'size' => '14px', // Default icon size
                            'width' => '14', // Default icon width
                            'height' => '14', // Default icon height
                        ],
                    ],
                    [
                        'name' => 'button_right_icon_position',
                        'label' => __( 'Right Button Icon Position', 'ventcuebe' ),
                        'type' => \Elementor\Controls_Manager::SELECT,
                        'options' => [
                            'before' => __( 'Before', 'ventcuebe' ),
                            'after' => __( 'After', 'ventcuebe' ),
                        ],
                        'default' => 'before',
                    ],
                    [
                        'name' => 'button_right_icon_spacing',
                        'label' => __( 'Right Button Icon Spacing', 'ventcuebe' ),
                        'type' => \Elementor\Controls_Manager::SLIDER,
                        'range' => [
                            'px' => [
                                'min' => 0,
                                'max' => 50,
                            ],
                        ],
                        'selectors' => [
                            '{{WRAPPER}} .button_right .elementor-button-icon' => 'margin-right: {{SIZE}}{{UNIT}};',
                            '{{WRAPPER}} .button_right .elementor-button-icon-after' => 'margin-left: {{SIZE}}{{UNIT}};',
                        ],
                    ],
                ],
                'title_field' => '{{{ client_name }}} - {{{ year }}}',
            ]
        );

        $this->end_controls_section();

        // Header area color and typhography control section
        $this->start_controls_section(
			'header_style_section',
			[
				'label' => esc_html__( 'Header Style', 'elementor-list-widget' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

        $this->add_control(
            'accordion_header_background_color',
            [
                'label' => __( 'Accordion Header Background Color', 'ventcuebe' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .accordion-header' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'accordion_header_text_color',
            [
                'label' => __( 'Accordion Header Text Color', 'ventcuebe' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .accordion-header' => 'color: {{VALUE}};',
                ],
            ]
        );

        // Header Left side tphography style control
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
              [
              'name' => 'header_left_heading_typography',
              'label' => __( 'header left Heading Typography', 'ventcuebe' ),
              'selector' => '{{WRAPPER}} .accordion-header .header-left span',
             ]
         );
         $this->add_group_control(
			\Elementor\Group_Control_Text_Shadow::get_type(),
			[
				'name' => 'header_left_text_shadow',
                'label' => __( 'header left Heading text Shadow', 'ventcuebe' ),
				'selector' => '{{WRAPPER}} .accordion-header.header-left span',
			]
		);

        // header right side style control

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
              [
              'name' => 'header_right_heading_typography',
              'label' => __( 'header Right Heading Typography', 'ventcuebe' ),
              'selector' => '{{WRAPPER}} .accordion-header .header-right h2',
             ]
         );
         $this->add_group_control(
			\Elementor\Group_Control_Text_Shadow::get_type(),
			[
				'name' => 'header_right_text_shadow',
                'label' => __( 'Header Right Heading text Shadow', 'ventcuebe' ),
				'selector' => '{{WRAPPER}} .accordion-header .header-right h2',
			]
		);

        $this->end_controls_section();


        // ===========Client Image Controling================== //
        $this->start_controls_section(
            'client_image_style_section',
            [
                'label' => __( 'Client Image Style', 'ventcuebe' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'client_image',
            [
                'label' => __( 'Client Image', 'ventcuebe' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => plugins_url( 'assets/img/Group 40191.svg', __FILE__ ),
                ],
                'dynamic' => [
                    'active' => true,
                ],
            ]
        );
    
        // Add responsive controls for Client Image Size
        $this->add_responsive_control(
            'client_image_size',
            [
                'label' => __( 'Client Image Size', 'ventcuebe' ),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%' ],
                'desktop_default' => [
                    'unit' => 'px',
                    'size' => 70,
                ],
                'tablet_default' => [
                    'unit' => 'px',
                    'size' => 60,
                ],
                'mobile_default' => [
                    'unit' => 'px',
                    'size' => 50,
                ],
                'range' => [
                    'px' => [
                        'min' => 10,
                        'max' => 500,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 10,
                        'max' => 100,
                        'step' => 1,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .client-image-body' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
    
        // Add responsive controls for Client Image Position
        $this->add_responsive_control(
            'client_image_position_top',
            [
                'label' => __( 'Client Image Top Position', 'ventcuebe' ),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%' ],
                'desktop_default' => [
                    'unit' => 'px',
                    'size' => -80,
                ],
                'tablet_default' => [
                    'unit' => 'px',
                    'size' => -70,
                ],
                'mobile_default' => [
                    'unit' => 'px',
                    'size' => -60,
                ],
                'range' => [
                    'px' => [
                        'min' => -500,
                        'max' => 500,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => -100,
                        'max' => 100,
                        'step' => 1,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .client-image-body' => 'top: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
    
        $this->add_responsive_control(
            'client_image_position_left',
            [
                'label' => __( 'Client Image Left Position', 'ventcuebe' ),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%' ],
                'desktop_default' => [
                    'unit' => 'px',
                    'size' => 'calc(50% - 37px)',
                ],
                'tablet_default' => [
                    'unit' => 'px',
                    'size' => 'calc(50% - 35px)',
                ],
                'mobile_default' => [
                    'unit' => 'px',
                    'size' => 'calc(50% - 30px)',
                ],
                'range' => [
                    'px' => [
                        'min' => -500,
                        'max' => 500,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => -100,
                        'max' => 100,
                        'step' => 1,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .client-image-body' => 'left: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'client_image_position_right',
            [
                'label' => __( 'Client Image Right Position', 'ventcuebe' ),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%' ],
                'desktop_default' => [
                    'unit' => 'px',
                    'size' => 'auto',
                ],
                'tablet_default' => [
                    'unit' => 'px',
                    'size' => 'auto',
                ],
                'mobile_default' => [
                    'unit' => 'px',
                    'size' => 'auto',
                ],
                'range' => [
                    'px' => [
                        'min' => -500,
                        'max' => 500,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => -100,
                        'max' => 100,
                        'step' => 1,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .client-image-body' => 'right: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
    
        $this->add_responsive_control(
            'client_image_position_bottom',
            [
                'label' => __( 'Client Image Bottom Position', 'ventcuebe' ),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%' ],
                'desktop_default' => [
                    'unit' => 'px',
                    'size' => 'auto',
                ],
                'tablet_default' => [
                    'unit' => 'px',
                    'size' => 'auto',
                ],
                'mobile_default' => [
                    'unit' => 'px',
                    'size' => 'auto',
                ],
                'range' => [
                    'px' => [
                        'min' => -500,
                        'max' => 500,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => -100,
                        'max' => 100,
                        'step' => 1,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .client-image-body' => 'bottom: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        // ================Buttons Controling=====================//

         // Button Style Section
        $this->start_controls_section(
            'button_style_section',
            [
                'label' => __( 'Button Style', 'ventcuebe' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        // icon size
        // Icon Size Control
    $this->add_responsive_control(
        'icon_size',
        [
            'label' => __('Icon Size', 'your-text-domain'),
            'type' => \Elementor\Controls_Manager::SLIDER,
            'size_units' => ['px'], // Limit to pixels
            'range' => [
                'px' => [
                    'min' => 10,
                    'max' => 30,
                    'step' => 1,
                ],
            ],
            'selectors' => [
                '{{WRAPPER}} .button_left .custom-icon-class' => 'font-size: {{SIZE}}px; width: {{SIZE}}px; height: {{SIZE}}px;',
                '{{WRAPPER}} .button_right .custom-icon-class' => 'width: {{SIZE}}px; height: {{SIZE}}px;',
            ],
            'devices' => ['desktop', 'tablet', 'mobile'], // Responsive devices
            'tablet_default' => [
                'size' => 20, // Default size for tablet
            ],
            'mobile_default' => [
                'size' => 16, // Default size for mobile
            ],
        ]
    );

    // Other controls registration
    $this->add_control(
        'icon_text_gap',
        [
            'label' => __( 'Icon and Text Spacing', 'your-text-domain' ),
            'type' => \Elementor\Controls_Manager::SLIDER,
            'default' => [
                'size' => 10,
            ],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 50,
                    'step' => 1,
                ],
            ],
            'selectors' => [
                '{{WRAPPER}} .button_left .custom-icon-class' => 'margin-left: {{SIZE}}{{UNIT}};',
                '{{WRAPPER}} .button_right .custom-icon-class' => 'margin-left: {{SIZE}}{{UNIT}};',
            ],
        ]
    );
    

        // Button Typography
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'left_button_typography',
                'label' => __( 'Typography', 'ventcuebe' ),
                'selector' => '{{WRAPPER}} .row_of_btn .button_left',
            ]
        );

        // Button Text Shadow
        $this->add_group_control(
            \Elementor\Group_Control_Text_Shadow::get_type(),
            [
                'name' => 'left_button_text_shadow',
                'label' => __( 'Text Shadow', 'ventcuebe' ),
                'selectors' => [
                    '{{WRAPPER}} .custom-button' => 'text-shadow: {{HORIZONTAL}}{{UNIT}} {{VERTICAL}}{{UNIT}} {{BLUR}}{{UNIT}} {{COLOR}};',
                ],
            ]
        );

        // Button Normal State
        $this->start_controls_tabs( 'tabs_button_style_left' );

        $this->start_controls_tab(
            'tab_button_normal_left',
            [
                'label' => __( 'Normal', 'ventcuebe' ),
            ]
        );

        $this->add_control(
            'left_button_text_color',
            [
                'label' => __( 'Text Color', 'ventcuebe' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .button_left' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'left_button_background_color',
            [
                'label' => __( 'Background Color', 'ventcuebe' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .button_left' => 'background-color: {{VALUE}};',
                ],
            ]
        );


        $this->end_controls_tab();

        // Button Hover State
        $this->start_controls_tab(
            'tab_button_hover_left',
            [
                'label' => __( 'Hover', 'ventcuebe' ),
            ]
        );

        $this->add_control(
            'left_button_hover_text_color',
            [
                'label' => __( 'Text Color', 'ventcuebe' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .button_left:hover' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'left_button_hover_background_color',
            [
                'label' => __( 'Background Color', 'ventcuebe' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .button_left:hover' => 'background-color: {{VALUE}};',
                ],
            ]
        );


        $this->end_controls_tab();

        $this->end_controls_tabs();

        // Button Border
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'left_button_border',
                'selector' => '{{WRAPPER}} .button_left',
            ]
        );

        // Button Box Shadow
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'left_button_box_shadow',
                'label' => __( 'Box Shadow', 'ventcuebe' ),
                'selector' => '{{WRAPPER}} .button_left',
            ]
        );

        // Button Border Radius
        $this->add_control(
            'left_button_border_radius',
            [
                'label' => __( 'Border Radius', 'ventcuebe' ),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%' ],
                'selectors' => [
                    '{{WRAPPER}} .button_left' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        // Button Padding
        $this->add_control(
            'left_button_padding',
            [
                'label' => __( 'Padding', 'ventcuebe' ),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', 'em', '%' ],
                'selectors' => [
                    '{{WRAPPER}} .button_left' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );



        // =============================Right Button Style Controls====================================//
        // Right Button Setting
        // Button Typography
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'right_button_typography',
                'label' => __( 'Typography', 'ventcuebe' ),
                'selector' => ' {{WRAPPER}} .button_right',
            ]
        );

        // Button Text Shadow
        $this->add_group_control(
            \Elementor\Group_Control_Text_Shadow::get_type(),
            [
                'name' => 'right_button_text_shadow',
                'label' => __( 'Text Shadow', 'ventcuebe' ),
                'selector' => '{{WRAPPER}} .button_right',
            ]
        );
		
		   // Button Normal State
        $this->start_controls_tabs( 'tabs_button_style' );

        $this->start_controls_tab(
            'tab_button_normal_right',
            [
                'label' => __( 'Normal', 'ventcuebe' ),
            ]
        );
		
		// Right Button Section

        $this->add_control(
            'right_button_text_color',
            [
                'label' => __( 'Text Color', 'ventcuebe' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .button_right' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'right_button_background_color',
            [
                'label' => __( 'Background Color', 'ventcuebe' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .button_right' => 'background-color: {{VALUE}};',
                ],
            ]
        );
		$this->end_controls_tab();
		
		// Button Hover State
        $this->start_controls_tab(
            'tab_button_hover_right',
            [
                'label' => __( 'Hover', 'ventcuebe' ),
            ]
        );
		
		// Right Button Section
        $this->add_control(
            'right_button_hover_text_color',
            [
                'label' => __( 'Text Color', 'ventcuebe' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    ' {{WRAPPER}} .button_right:hover' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'right_button_hover_background_color',
            [
                'label' => __( 'Background Color', 'ventcuebe' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    ' {{WRAPPER}} .button_right:hover' => 'background-color: {{VALUE}};',
                ],
            ]
        );
		
		$this->end_controls_tab();

        $this->end_controls_tabs();
		
		 //================ Right Button Section ======================//
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'right_button_border',
                'selector' => ' {{WRAPPER}} .button_right',
            ]
        );

        // Button Box Shadow
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'right_button_box_shadow',
                'label' => __( 'Box Shadow', 'ventcuebe' ),
                'selector' => ' {{WRAPPER}} .button_right',
            ]
        );
		
		//================ Right Button Section ======================//

        // Button Border Radius
        $this->add_control(
            'right_button_border_radius',
            [
                'label' => __( 'Border Radius', 'ventcuebe' ),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%' ],
                'selectors' => [
                    '{{WRAPPER}} .button_right' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        // Button Padding
        $this->add_control(
            'right_button_padding',
            [
                'label' => __( 'Padding', 'ventcuebe' ),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', 'em', '%' ],
                'selectors' => [
                    '{{WRAPPER}} .button_right' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();


 // =============================Accordion body area style control section========================= //

        $this->start_controls_section(
            'accordion_style_section',
            [
                'label' => __( 'Body Style', 'ventcuebe' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
              [
              'name' => 'heading_typography',
              'label' => __( 'Additional Heading Typography', 'ventcuebe' ),
              'selector' => '{{WRAPPER}} .additional_info_row h2',
             ]
         );
         $this->add_group_control(
			\Elementor\Group_Control_Text_Shadow::get_type(),
			[
				'name' => 'text_shadow',
                'label' => __( 'Additional Heading text Shadow', 'ventcuebe' ),
				'selector' => '{{WRAPPER}} .additional_info_row h2',
			]
		);

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
              [
              'name' => 'left_btn_text_style',
              'label' => __( 'Additional Button Typography', 'ventcuebe' ),
              'selector' => '{{WRAPPER}} .row_of_btn a',
             ]
         );

         $this->add_group_control(
			\Elementor\Group_Control_Text_Shadow::get_type(),
			[
				'name' => 'left_btn_text_shadow',
                'label' => __( 'Additional Button text Shadow', 'ventcuebe' ),
				'selector' => '{{WRAPPER}} .row_of_btn a',
			]
		);

        $this->add_control(
            'accordion_body_background_color',
            [
                'label' => __( 'Accordion Body Background Color', 'ventcuebe' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .accordion-body' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_section();

        

    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        
        ?>
        <div class="accordion">
            <?php foreach ( $settings['accordion_items'] as $index => $item ) : ?>
                <div class="accordion-item <?php echo $index === 0 ? 'active' : ''; ?>">
                    <div class="accordion-header" data-index="<?php echo $index; ?>">
                        <div class="header-content">
                            <div class="header-left">
                                <span class="number"><?php echo sprintf('%02d', $index + 1); ?></span>
                                <span class="client-name"><?php echo $item['client_name']; ?></span>
                            </div>
                            <div class="header-right"><h2 class="year"><?php echo $item['year']; ?></h2></div>
                        </div>
                    </div>
                    <div class="accordion-body <?php echo $index === 0 ? 'active' : ''; ?>">
                        <img class="client-image-body" src="<?php echo esc_url($item['client_image']['url']); ?>" alt="<?php echo esc_attr($item['client_name']); ?>">
                        <div class="main_row">
                            <div class="column">
                                <div class="row">
                                    <p><?php echo $item['review_text']; ?></p>
                                </div>
                                <div class="separator"></div>
                                <div class="additional_info_row">
                                    <h2><?php echo $item['additional_info_heading']; ?></h2>
                                    <p><?php echo $item['additional_info']; ?></p>
                                </div>
                                <div class="row_of_btn">
                                <a href="<?php echo esc_url($item['button_left_url']['url']); ?>" class="button_left">
                                <?php if ($item['button_left_icon_position'] === 'before') : ?>
                                    <?php \Elementor\Icons_Manager::render_icon( 
                                        $item['button_left_icon'], 
                                        [
                                            'aria-hidden' => 'true',
                                            'class' => 'button-icon custom-icon-class' // Add custom-icon-class here
                                        ]
                                    ); ?>
                                <?php endif; ?>
                                <span class="button-text"><?php echo esc_html($item['button_left_text']); ?></span>
                                <?php if ($item['button_left_icon_position'] === 'after') : ?>
                                    <?php \Elementor\Icons_Manager::render_icon( 
                                        $item['button_left_icon'], 
                                        [
                                            'aria-hidden' => 'true',
                                            'class' => 'button-icon custom-icon-class' // Add custom-icon-class here
                                        ]
                                    ); ?>
                                <?php endif; ?>
                            </a>


                                </div>
                            </div>
                            <div class="column">
                                <div class="row">
                                    <img src="<?php echo esc_url($item['client_work_image']['url']); ?>" alt="<?php echo esc_attr($item['client_name']); ?>">
                                </div>
                                <div class="row">
                                <a href="<?php echo esc_url($item['button_right_url']['url']); ?>" class="button_right">
                                    <?php if ($item['button_right_icon_position'] === 'before') : ?>
                                        <?php \Elementor\Icons_Manager::render_icon( 
                                            $item['button_right_icon'], 
                                            [ 
                                                'aria-hidden' => 'true', 
                                                'style' => 'font-size: ' . $item['button_right_icon_size'] . 'px;', 
                                                'class' => 'custom-icon-class' // Add your specific class here
                                            ] 
                                        ); ?>
                                    <?php endif; ?>
                                    <span class="button-text"><?php echo esc_html($item['button_right_text']); ?></span>
                                    <?php if ($item['button_right_icon_position'] === 'after') : ?>
                                        <?php \Elementor\Icons_Manager::render_icon( 
                                            $item['button_right_icon'], 
                                            [ 
                                                'aria-hidden' => 'true', 
                                                'style' => 'font-size: ' . $item['button_right_icon_size'] . 'px;', 
                                                'class' => 'custom-icon-class' // Add your specific class here
                                            ] 
                                        ); ?>
                                    <?php endif; ?>
                                </a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <?php
    }

    protected function _content_template() {
        ?>
        <# if ( settings.accordion_items.length ) { #>
            <div class="accordion">
                <# _.forEach( settings.accordion_items, function( item, index ) { #>
                    <div class="accordion-item {{ index === 0 ? 'active' : '' }}">
                        <div class="accordion-header" data-index="{{ index }}">
                            <div class="header-content">
                                <div class="header-left">
                                    <span class="number">{{ String(index + 1).padStart(2, '0') }}</span>
                                    <span class="client-name">{{ item.client_name }}</span>
                                </div>
                                <div class="year">{{ item.year }}</div>
                            </div>
                        </div>
                        <div class="accordion-body {{ index === 0 ? 'active' : '' }}">
                            <img class="client-image-body" src="{{ item.client_image.url }}" alt="{{ item.client_name }}">
                            <div class="main_row">
                                <div class="column">
                                    <div class="row">
                                        <p>{{ item.review_text }}</p>
                                    </div>
                                    <div class="separator"></div>
                                    <div class="additional_info_row">
                                        <h2 class="additional_info_heading">{{ item.additional_info_heading }}</h2>
                                        <p>{{ item.additional_info }}</p>
                                    </div>
                                    <div class="row_of_btn">
                                    <a href="{{ item.button_left_url.url }}" class="button_left">
                                        <# if (item.button_left_icon_position === 'before') { #>
                                            <# if (item.button_left_icon && item.button_left_icon.value) { #>
                                                <i class="{{ item.button_left_icon.value }} button-icon custom-icon-class" aria-hidden="true"></i>
                                            <# } #>
                                        <# } #>
                                        <span class="button-text">{{{ item.button_left_text }}}</span> <!-- Use triple curly braces for raw HTML output -->
                                        <# if (item.button_left_icon_position === 'after') { #>
                                            <# if (item.button_left_icon && item.button_left_icon.value) { #>
                                                <i class="{{ item.button_left_icon.value }} button-icon custom-icon-class" aria-hidden="true"></i>
                                            <# } #>
                                        <# } #>
                                    </a>


                                    </div>
                                </div>
                                <div class="column">
                                    <div class="row">
                                        <img src="{{ item.client_work_image.url }}" alt="{{ item.client_name }}">
                                    </div>
                                    <div class="row">
                                    <a href="{{ item.button_left_url.url }}" class="button_left">
                                        <# if ( item.button_left_icon_position === 'before' ) { #>
                                            <# if ( item.button_left_icon && item.button_left_icon.value ) { #>
                                                <i class="{{ item.button_left_icon.value }} button-icon custom-icon-class" aria-hidden="true"></i>
                                            <# } #>
                                        <# } #>
                                        <span class="button-text">{{{ item.button_left_text }}}</span> <!-- Use triple curly braces for raw HTML output -->
                                        <# if ( item.button_left_icon_position === 'after' ) { #>
                                            <# if ( item.button_left_icon && item.button_left_icon.value ) { #>
                                                <i class="{{ item.button_left_icon.value }} button-icon custom-icon-class" aria-hidden="true"></i>
                                            <# } #>
                                        <# } #>
                                    </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <# }); #>
            </div>
        <# } #>
        <?php
    }
}
?>
