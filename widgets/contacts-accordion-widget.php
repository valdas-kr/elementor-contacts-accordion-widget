<?php
if ( ! defined ( 'ABSPATH' )) { exit; }

class Elementor_Contacts_Accordion_Widget extends Elementor\Widget_Base {
  public function get_name(): string { return 'Contacts Accordion'; }
  public function get_title(): string { return esc_html__( 'Contacts Accordion', 'elementor-contacts-accordion-widget' ); }
  public function get_icon(): string { return 'eicon-contact'; }
  public function get_categories(): array { return [ 'layout']; }
  public function get_keywords(): array { return [ 'card', 'contacts', 'accordion']; }
	public function get_custom_help_url(): string { return 'https://github.com/valdas-kr'; }
	public function has_widget_inner_wrapper(): bool { return false; }
	protected function is_dynamic_content(): bool { return false; }

  protected function register_controls(): void {
		$this->start_controls_section(
			'company_content', [
				'label' => esc_html__( 'Companies', 'elementor-contacts-accordion-widget' ),
				'tab' => Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control (
			'company_repeater', [
				'type' => Elementor\Controls_Manager::REPEATER,
				'fields' => [
					[
						'name' => 'company_title',
						'label' => esc_html__( 'Title', 'elementor-contacts-accordion-widget' ),
						'type' => Elementor\Controls_Manager::TEXT,
						'label_block' => true,
						'default' => esc_html__( 'Title', 'elementor-contacts-accordion-widget' ),
						'placeholder' => esc_html__( 'Title', 'elementor-contacts-accordion-widget' ),
					],
					[
						'name' => 'company_id',
						'label' => esc_html__( 'Company id', 'elementor-contacts-accordion-widget' ),
						'type' => Elementor\Controls_Manager::NUMBER,
						'min' => -100,
						'max' => 100,
						'step' => 1,
						'default' => 0,
						'placeholder' => esc_html__( 'Company and employee id must match', 'elementor-contacts-accordion-widget' ),
					],
					[
						'name' => 'company_description',
						'label' => esc_html__( 'Description', 'elementor-contacts-accordion-widget' ),
						'type' => Elementor\Controls_Manager::TEXT,
						'label_block' => true,
						'default' => esc_html__( 'Description', 'elementor-contacts-accordion-widget' ),
						'placeholder' => esc_html__( 'Description', 'elementor-contacts-accordion-widget' ),
					],
					[
						'name' => 'company_adress',
						'label' => esc_html__( 'Adress', 'elementor-contacts-accordion-widget' ),
						'type' => Elementor\Controls_Manager::TEXT,
						'label_block' => true,
						'default' => esc_html__( 'Adress', 'elementor-contacts-accordion-widget' ),
						'placeholder' => esc_html__( 'Adress', 'elementor-contacts-accordion-widget' ),
					],
					[
						'name' => 'company_schedule',
						'label' => esc_html__( 'Schedule', 'elementor-contacts-accordion-widget' ),
						'type' => Elementor\Controls_Manager::TEXT,
						'label_block' => true,
						'default' => esc_html__( 'I-V: 8:00 - 17:00, VI-VII: -', 'elementor-contacts-accordion-widget' ),
						'placeholder' => esc_html__( 'Schedule', 'elementor-contacts-accordion-widget' ),
					],
					[
						'name' => 'company_social_media',
						'label' => esc_html__( 'Social media type', 'elementor-contacts-accordion-widget' ),
						'type' => Elementor\Controls_Manager::TEXT,
						'label_block' => true,
						'default' => esc_html__( 'WhatsApp', 'elementor-contacts-accordion-widget' ),
						'placeholder' => esc_html__( 'Social media type', 'elementor-contacts-accordion-widget' ),
					],
					[
						'name' => 'company_link',
						'label' => esc_html__( 'Social media link', 'elementor-contacts-accordion-widget' ),
						'type' => \Elementor\Controls_Manager::URL,
						'label_block' => true,
						'placeholder' => esc_html__( 'https://www.google.com', 'elementor-contacts-accordion-widget' ),
						'default' => [
							'url' => 'https://www.google.com',
							'is_external' => true,
						],
					],
				],
				'title_field' => '{{{ company_title }}}',
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'employee_content', [
				'label' => esc_html__( 'Employees', 'elementor-contacts-accordion-widget' ),
				'tab' => Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control (
			'employee_repeater', [
				'type' => Elementor\Controls_Manager::REPEATER,
				'fields' => [
					[
						'name' => 'employee_name',
						'label' => esc_html__( 'Name', 'elementor-contacts-accordion-widget' ),
						'type' => Elementor\Controls_Manager::TEXT,
						'label_block' => true,
						'default' => esc_html__( 'Name', 'elementor-contacts-accordion-widget' ),
						'placeholder' => esc_html__( 'Name', 'elementor-contacts-accordion-widget' ),
					],
					[
						'name' => 'company_id',
						'label' => esc_html__( 'Company id', 'elementor-contacts-accordion-widget' ),
						'type' => Elementor\Controls_Manager::NUMBER,
						'min' => -100,
						'max' => 100,
						'step' => 1,
						'default' => 0,
						'placeholder' => esc_html__( 'Company and employee id must match', 'elementor-contacts-accordion-widget' ),
					],
					[
						'name' => 'employee_image',
						'label' => esc_html__( 'Image', 'elementor-contacts-accordion-widget' ),
						'label_block' => true,
						'type' => Elementor\Controls_Manager::MEDIA,
						'default' => [ 'url' => Elementor\Utils::get_placeholder_image_src() ],
					],
					[
						'name' => 'employee_image_description',
						'label' => esc_html__( 'Image description', 'elementor-contacts-accordion-widget' ),
						'label_block' => true,
						'type' => Elementor\Controls_Manager::TEXT,
						'default' => esc_html__( 'Employee image description', 'elementor-contacts-accordion-widget' ),
						'placeholder' => esc_html__( 'Employee image description', 'elementor-contacts-accordion-widget' ),
					],
					[
						'name' => 'staff_position',
						'label' => esc_html__( 'Work position', 'elementor-contacts-accordion-widget' ),
						'type' => Elementor\Controls_Manager::TEXT,
						'label_block' => true,
						'default' => esc_html__( 'Work position', 'elementor-contacts-accordion-widget' ),
						'placeholder' => esc_html__( 'Work position', 'elementor-contacts-accordion-widget' ),
					],
					[
						'name' => 'employee_phone',
						'label' => esc_html__( 'Phone', 'elementor-contacts-accordion-widget' ),
						'type' => Elementor\Controls_Manager::TEXT,
						'label_block' => true,
						'default' => esc_html__( 'Phone', 'elementor-contacts-accordion-widget' ),
						'placeholder' => esc_html__( 'Phone', 'elementor-contacts-accordion-widget' ),
					],
					[
						'name' => 'employee_email',
						'label' => esc_html__( 'Email', 'elementor-contacts-accordion-widget' ),
						'type' => Elementor\Controls_Manager::TEXT,
						'label_block' => true,
						'default' => esc_html__( 'Email', 'elementor-contacts-accordion-widget' ),
						'placeholder' => esc_html__( 'Email', 'elementor-contacts-accordion-widget' ),
					],
					[
						'name' => 'employee_languages',
						'label' => esc_html__( 'Languages', 'elementor-contacts-accordion-widget' ),
						'type' => \Elementor\Controls_Manager::SELECT2,
						'label_block' => true,
						'multiple' => true,
						'options' => [
							'LT' => esc_html__( 'Lithuanian', 'elementor-contacts-accordion-widget' ),
							'EN' => esc_html__( 'English', 'elementor-contacts-accordion-widget' ),
							'PL' => esc_html__( 'Polish', 'elementor-contacts-accordion-widget' ),
							'FR' => esc_html__( 'French', 'elementor-contacts-accordion-widget' ),
							'ES' => esc_html__( 'Spanish', 'elementor-contacts-accordion-widget' ),
							'GR' => esc_html__( 'German', 'elementor-contacts-accordion-widget' ),
							'NL' => esc_html__( 'Dutch', 'elementor-contacts-accordion-widget' ),
							'UA' => esc_html__( 'Ukrainian', 'elementor-contacts-accordion-widget' ),
							'RO' => esc_html__( 'Romanian', 'elementor-contacts-accordion-widget' ),
							'RU' => esc_html__( 'Russian', 'elementor-contacts-accordion-widget' ),
						],
						'default' => [ 'LT', 'EN' ],
					],
				],
				'title_field' => '{{{ employee_name }}}',
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'company_settings', [
				'label' => esc_html__( 'Company settings', 'elementor-contacts-accordion-widget' ),
				'tab' => Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control (
			'closed_accordion_color', [
				'label' => __( 'Closed accordion color', 'elementor-contacts-accordion-widget' ),
				'default' => '#a8c8ffff',
				'type' => Elementor\Controls_Manager::COLOR,
				'selectors' => [ '{{WRAPPER}} .accordion-contacts-container' => 'background-color: {{VALUE}};', ],
			]
		);

		$this->add_control (
			'opened_accordion_color', [
				'label' => esc_html__( 'Opened accordion color', 'elementor-contacts-accordion-widget' ),
				'default' => '#d8e5faff',
				'type' => Elementor\Controls_Manager::COLOR,
				'selectors' => [ '{{WRAPPER}} .accordion-contacts-container:has(#second-row.active)' => 'background-color: {{VALUE}};', ],
			]
		);

		$this->add_control (
			'company_title_color', [
				'label' => esc_html__( 'Company title color', 'elementor-contacts-accordion-widget' ),
				'default' => '#26292dff',
				'type' => Elementor\Controls_Manager::COLOR,
				'selectors' => [ '{{WRAPPER}} .company-title' => 'color: {{VALUE}};', ],
			]
		);

			$this->add_control (
			'company_description_color', [
				'label' => esc_html__( 'Company description color', 'elementor-contacts-accordion-widget' ),
				'default' => '#26292dff',
				'type' => Elementor\Controls_Manager::COLOR,
				'selectors' => [ 
					'{{WRAPPER}} .company-description' => 'color: {{VALUE}};', 
					'{{WRAPPER}} .company-description svg' => 'fill: {{VALUE}};',
				],
			]
		);

		$this->add_control (
			'socials_button_color', [
				'label' => esc_html__( 'Social media button color', 'elementor-contacts-accordion-widget' ),
				'default' => '#227e22ff',
				'type' => Elementor\Controls_Manager::COLOR,
				'selectors' => [ '{{WRAPPER}} .company-social-button' => 'background-color: {{VALUE}};', ],
			]
		);

		$this->add_control (
			'company_title_weight', [
				'label' => esc_html__( 'Company title style', 'elementor-contacts-accordion-widget' ),
				'label_block' => true,
				'type' => Elementor\Controls_Manager::CHOOSE,
				'options' => [
					'lighter' => [
						'title' => esc_html__( 'Lighter', 'elementor-contacts-accordion-widget' ),
						'icon' => 'eicon-arrow-left',
					],
					'normal' => [
						'title' => esc_html__( 'Normal', 'elementor-contacts-accordion-widget' ),
						'icon' => 'eicon-editor-bold',
					],
					'bold' => [
						'title' => esc_html__( 'Bold', 'elementor-contacts-accordion-widget' ),
						'icon' => 'eicon-arrow-right',
					],
				],
				'default' => 'left',
				'toggle' => false,
				'selectors' => [ '{{WRAPPER}} .company-title' => 'font-weight: {{VALUE}};', ],				
			],
		);

		$this->add_control (
			'company_title_size', [
				'label' => esc_html__( 'Company title size', 'elementor-contacts-accordion-widget' ),
				'label_block' => true,
				'type' => Elementor\Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 8,
						'max' => 32,
					],
				],
				'default' => [
					'unit' => 'px',
					'size' => 18,
				],
				'selectors' => [ '{{WRAPPER}} .company-title' => 'font-size: {{SIZE}}{{UNIT}};', ],
			]
		);

			$this->add_control (
			'company_description_size', [
				'label' => esc_html__( 'Company description size', 'elementor-contacts-accordion-widget' ),
				'label_block' => true,
				'type' => Elementor\Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 8,
						'max' => 28,
					],
				],
				'default' => [
					'unit' => 'px',
					'size' => 18,
				],
				'selectors' => [ '{{WRAPPER}} .company-description' => 'font-size: {{SIZE}}{{UNIT}};', ],
			]
		);

		$this->add_control (
			'company_social_media_icon', [
				'label' => esc_html__( 'Social media icon', 'elementor-contacts-accordion-widget' ),
				'label_block' => true,
				'type' => Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fab fa-whatsapp',
					'library' => 'fa-brands',
				],
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'employee_settings', [
				'label' => esc_html__( 'Employee Settings', 'elementor-contacts-accordion-widget' ),
				'tab' => Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control (
			'employee_container_color', [
				'label' => esc_html__( 'Employee containers color', 'elementor-contacts-accordion-widget' ),
				'default' => '#a8c8ffff',
				'type' => Elementor\Controls_Manager::COLOR,
				'selectors' => [ '{{WRAPPER}} .staff-card-container' => 'background-color: {{VALUE}};', ],
			]
		);

		$this->add_control (
			'employee_name_color', [
				'label' => esc_html__( 'Employee name color', 'elementor-contacts-accordion-widget' ),
				'default' => '#26292dff',
				'type' => Elementor\Controls_Manager::COLOR,
				'selectors' => [ '{{WRAPPER}} .staff-name-container' => 'color: {{VALUE}};', ],
			]
		);

		$this->add_control (
			'employee_position_color', [
				'label' => esc_html__( 'Employee position color', 'elementor-contacts-accordion-widget' ),
				'default' => '#26292dff',
				'type' => Elementor\Controls_Manager::COLOR,
				'selectors' => [ '{{WRAPPER}} .staff-position-container' => 'color: {{VALUE}};', ],
			]
		);

		$this->add_control (
			'employee_button_text_color', [
				'label' => esc_html__( 'Employee button text color', 'elementor-contacts-accordion-widget' ),
				'default' => '#26292dff',
				'type' => Elementor\Controls_Manager::COLOR,
				'selectors' => [ 
					'{{WRAPPER}} .staff-button' => 'color: {{VALUE}};',
					'{{WRAPPER}} .staff-button svg' => 'fill: {{VALUE}};',
				],
			]
		);

		$this->add_control (
			'employee_button_color', [
				'label' => esc_html__( 'Employee button color', 'elementor-contacts-accordion-widget' ),
				'default' => 'azure',
				'type' => Elementor\Controls_Manager::COLOR,
				'selectors' => [ '{{WRAPPER}} .staff-button' => 'background-color: {{VALUE}};', ],
			]
		);

		$this->add_control (
			'employee_name_weight', [
				'label' => esc_html__( 'Employee name style', 'elementor-contacts-accordion-widget' ),
				'label_block' => true,
				'type' => Elementor\Controls_Manager::CHOOSE,
				'options' => [
					'lighter' => [
						'title' => esc_html__( 'Lighter', 'elementor-contacts-accordion-widget' ),
						'icon' => 'eicon-arrow-left',
					],
					'normal' => [
						'title' => esc_html__( 'Normal', 'elementor-contacts-accordion-widget' ),
						'icon' => 'eicon-editor-bold',
					],
					'bold' => [
						'title' => esc_html__( 'Bold', 'elementor-contacts-accordion-widget' ),
						'icon' => 'eicon-arrow-right',
					],
				],
				'default' => 'normal',
				'toggle' => false,
				'selectors' => [ '{{WRAPPER}} .staff-name-container' => 'font-weight: {{VALUE}};', ],				
			],
		);

		$this->add_control (
			'employee_name_size', [
				'label' => esc_html__( 'Employee name size', 'elementor-contacts-accordion-widget' ),
				'label_block' => true,
				'type' => Elementor\Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 8,
						'max' => 28,
					],
				],
				'default' => [
					'unit' => 'px',
					'size' => 16,
				],
				'selectors' => [ '{{WRAPPER}} .staff-name-container' => 'font-size: {{SIZE}}{{UNIT}};', ],
			]
		);

		$this->add_control (
			'employee_position_size', [
				'label' => esc_html__( 'Employee position size', 'elementor-contacts-accordion-widget' ),
				'label_block' => true,
				'type' => Elementor\Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 8,
						'max' => 26,
					],
				],
				'default' => [
					'unit' => 'px',
					'size' => 16,
				],
				'selectors' => [ '{{WRAPPER}} .staff-position-container' => 'font-size: {{SIZE}}px;', ],
			]
		);

		$this->add_control (
			'employee_button_text_size', [
				'label' => esc_html__( 'Employee button text size', 'elementor-contacts-accordion-widget' ),
				'label_block' => true,
				'type' => Elementor\Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 8,
						'max' => 18,
					],
				],
				'default' => [
					'unit' => 'px',
					'size' => 16,
				],
				'selectors' => [ '{{WRAPPER}} .staff-button' => 'font-size: {{SIZE}}px;', ],
			]
		);
		$this->end_controls_section();
	}

  protected function render(): void { 
		$settings = $this->get_settings_for_display();
		if ( !$settings['company_repeater'] ) { return; }
		?>
		<?php foreach ( $settings['company_repeater'] as $index => $company ) : ?>
			<div class="accordion-contacts-container">
				<div class="first-row">
					<div class="company-info-container">
						<p class="company-title">	<?php echo $company['company_title']; ?> </p>
						<p class="company-description"> <?php echo $company['company_description']; ?> </p>
					</div>
					<div class="mobile-expand-icon">
						<p>></p>
					</div>
					<div class="company-info-container">
						<p class="company-description">
							<?php Elementor\Icons_Manager::render_icon( ['value' => 'fas fa-map',	'library' => 'fa-solid',], ['aria-hidden' => 'true'] ); ?>
							<?php echo $company['company_adress']; ?>
						</p>
						<p class="company-description">
							<?php Elementor\Icons_Manager::render_icon( [ 'value' => 'fas fa-business-time','library' => 'fa-solid',], ['aria-hidden' => 'true'] ); ?>
							<?php echo $company['company_schedule']; ?>
						</p>						
					</div>
					<div class="info-buttons-container">
						<a href="<?php echo $company['company_link']['url']; ?>">
							<button class="company-social-button"><?php Elementor\Icons_Manager::render_icon( $settings['company_social_media_icon'], ['aria-hidden' => 'true'] ); ?> <?php echo $company['company_social_media']; ?></button>
						</a>
						<div class="expand-icon">
							<p>></p>
						</div>
					</div>
				</div>
				<?php if ( $index == 0 ) : ?> <div id="second-row" class="active">
				<?php else : ?> <div id="second-row" class="">
				<?php endif; ?>
					<?php foreach ( $settings['employee_repeater'] as $index => $staff ) : ?>
						<?php	if ( $staff['company_id'] == $company['company_id']) { ?>
							<div class="staff-card-container">
								<div class="staff-img-container">
									<img src="<?php echo esc_url($staff['employee_image']['url'] )?>"
									alt="<?php echo ($staff['employee_image_description'] )?>"
									class="staff-img"/>
								</div>
								<div class="staff-info-container">
									<div class="staff-text-container">
										<div class="staff-description-container">
											<p class="staff-name-container"><?php echo $staff['employee_name']; ?></p>
											<p class="staff-position-container"><?php echo $staff['staff_position']; ?></p>
										</div>
										<div class="staff-languages-container">
											<?php foreach ( $staff['employee_languages'] as $index => $language ) : ?>
												<p class="staff-languages"><?php echo $language; ?></p>
											<?php endforeach; ?>
										</div>
									</div>
									<div class="staff-button-container">
										<a href="tel:<?php echo $staff['employee_phone']; ?>">
											<button class="staff-button">
											<?php Elementor\Icons_Manager::render_icon( ['value' => 'fas fa-envelope', 'library' => 'fa-solid'], ['aria-hidden' => 'true'] ); ?>
											<?php echo $staff['employee_phone']; ?></button>
										</a>
										<a href="mailto:<?php echo $staff['employee_email']; ?>">
											<button class="staff-button">
											<?php Elementor\Icons_Manager::render_icon( ['value' => 'fas fa-comment',	'library' => 'fa-solid'], ['aria-hidden' => 'true'] ); ?>
											<?php echo $staff['employee_email']; ?></button>
										</a>
									</div>
								</div>
							</div>
						<?php } ?>
					<?php endforeach; ?>
				</div>
			</div>
		<?php endforeach; ?>
	<?
  }
}