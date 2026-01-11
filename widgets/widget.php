<?php
if (!defined ('ABSPATH')) { exit; }

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Repeater;
use Elementor\Utils;
use Elementor\Icons_Manager;

class Elementor_Contacts_Accordion_Widget extends Widget_Base {
  public function get_name() { return 'Contacts Accordion'; }

  public function get_title() { return __( 'Contacts Accordion', 'elementor-contacts-accordion-widget' ); }

  public function get_icon() { return 'eicon-contact'; }

  public function get_categories() { return ['layout']; }

  public function get_keywords() { return ['card', 'contacts', 'accordion']; }

  protected function register_controls() {
		$this->start_controls_section(
			'section_content', [
				'label' => __( 'Contact General Settings', 'elementor-contacts-accordion-widget' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control (
			'closed_accordion_color', [
				'label' => __( 'Closed Accordion Color', 'elementor-contacts-accordion-widget' ),
				'default' => '#4388ffff',
				'type' => Controls_Manager::COLOR,
				'selectors' => [ '{{WRAPPER}} .accordion-contacts-container' => 'background-color: {{VALUE}};', ],
			]
		);

		$this->add_control (
			'opened_accordion_color', [
				'label' => __( 'Opened Accordion Color', 'elementor-contacts-accordion-widget' ),
				'default' => '#b0cdffff',
				'type' => Controls_Manager::COLOR,
				'selectors' => [ '{{WRAPPER}} .accordion-contacts-container:has(#second-row.active)' => 'background-color: {{VALUE}};', ],
			]
		);

		$this->add_control (
			'company_title_alignment', [
				'label' => __( 'Title Alignment', 'elementor-contacts-accordion-widget' ),
				'label_block' => true,
				'type' => Controls_Manager::CHOOSE,
				'options' => [
					'left' => [
						'title' => __( 'Left', 'elementor-contacts-accordion-widget' ),
						'icon' => 'eicon-text-align-left',
					],
					'center' => [
						'title' => __( 'Center', 'elementor-contacts-accordion-widget' ),
						'icon' => 'eicon-text-align-center',
					],
					'right' => [
						'title' => __( 'Right', 'elementor-contacts-accordion-widget' ),
						'icon' => 'eicon-text-align-right',
					],
					'justify' => [
						'title' => __( 'Justify', 'elementor-contacts-accordion-widget' ),
						'icon' => 'eicon-text-align-justify',
					],
				],
				'default' => 'left',
				'toggle' => false,
				'selectors' => [ '{{WRAPPER}} .company-title' => 'text-align: {{VALUE}};', ],
			]
		);

		$this->add_control (
			'company_title_color', [
				'label' => __( 'Title Color', 'elementor-contacts-accordion-widget' ),
				'default' => '#1D2430',
				'type' => Controls_Manager::COLOR,
				'selectors' => [ '{{WRAPPER}} .company-title' => 'color: {{VALUE}};', ],
			]
		);

		$this->add_control (
			'company_title_size', [
				'label' => __( 'Title Size', 'elementor-contacts-accordion-widget' ),
				'label_block' => true,
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 8,
						'max' => 36,
					],
				],
				'default' => [
					'unit' => 'px',
					'size' => 16,
				],
				'selectors' => [ '{{WRAPPER}} .company-title' => 'font-size: {{SIZE}}{{UNIT}};', ],
			]
		);

		$this->add_control (
			'company_title_weight', [
				'label' => __( 'Title Weight', 'elementor-contacts-accordion-widget' ),
				'label_block' => true,
				'type' => Controls_Manager::CHOOSE,
				'options' => [
					'lighter' => [
						'title' => __( 'Lighter', 'elementor-contacts-accordion-widget' ),
						'icon' => 'eicon-arrow-left',
					],
					'normal' => [
						'title' => __( 'Normal', 'elementor-contacts-accordion-widget' ),
						'icon' => 'eicon-editor-bold',
					],
					'bold' => [
						'title' => __( 'Bold', 'elementor-contacts-accordion-widget' ),
						'icon' => 'eicon-arrow-right',
					],
				],
				'default' => 'left',
				'toggle' => false,
				'selectors' => [ '{{WRAPPER}} .company-title' => 'font-weight: {{VALUE}};', ],				
			],
		);

		$this->add_control (
			'company_description_alignment', [
				'label' => __( 'Description Alignment', 'elementor-contacts-accordion-widget' ),
				'label_block' => true,
				'type' => Controls_Manager::CHOOSE,
				'options' => [
					'left' => [
						'title' => __( 'Left', 'elementor-contacts-accordion-widget' ),
						'icon' => 'eicon-text-align-left',
					],
					'center' => [
						'title' => __( 'Center', 'elementor-contacts-accordion-widget' ),
						'icon' => 'eicon-text-align-center',
					],
					'right' => [
						'title' => __( 'Right', 'elementor-contacts-accordion-widget' ),
						'icon' => 'eicon-text-align-right',
					],
					'justify' => [
						'title' => __( 'Justify', 'elementor-contacts-accordion-widget' ),
						'icon' => 'eicon-text-align-justify',
					],
				],
				'default' => 'left',
				'toggle' => false,
				'selectors' => [ '{{WRAPPER}} .company-description' => 'text-align: {{VALUE}};', ],
			]
		);

		$this->add_control (
			'company_description_color', [
				'label' => __( 'Description Color', 'elementor-contacts-accordion-widget' ),
				'default' => '#1D2430',
				'type' => Controls_Manager::COLOR,
				'selectors' => [ '{{WRAPPER}} .company-description' => 'color: {{VALUE}};', ],
			]
		);

		$this->add_control (
			'company_description_size', [
				'label' => __( 'Description Size', 'elementor-contacts-accordion-widget' ),
				'label_block' => true,
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 8,
						'max' => 36,
					],
				],
				'default' => [
					'unit' => 'px',
					'size' => 16,
				],
				'selectors' => [ '{{WRAPPER}} .company-description' => 'font-size: {{SIZE}}px;', ],
			]
		);

		$this->add_control (
			'company_adress_alignment', [
				'label' => __( 'Adress Alignment', 'elementor-contacts-accordion-widget' ),
				'label_block' => true,
				'type' => Controls_Manager::CHOOSE,
				'options' => [
					'left' => [
						'title' => __( 'Left', 'elementor-contacts-accordion-widget' ),
						'icon' => 'eicon-text-align-left',
					],
					'center' => [
						'title' => __( 'Center', 'elementor-contacts-accordion-widget' ),
						'icon' => 'eicon-text-align-center',
					],
					'right' => [
						'title' => __( 'Right', 'elementor-contacts-accordion-widget' ),
						'icon' => 'eicon-text-align-right',
					],
					'justify' => [
						'title' => __( 'Justify', 'elementor-contacts-accordion-widget' ),
						'icon' => 'eicon-text-align-justify',
					],
				],
				'default' => 'left',
				'toggle' => false,
				'selectors' => [ '{{WRAPPER}} .company-adress' => 'text-align: {{VALUE}};', ],
			]
		);

		$this->add_control (
			'company_adress_color', [
				'label' => __( 'Adress Color', 'elementor-contacts-accordion-widget' ),
				'default' => '#1D2430',
				'type' => Controls_Manager::COLOR,
				'selectors' => [ '{{WRAPPER}} .company-adress' => 'color: {{VALUE}};', ],
			]
		);

		$this->add_control (
			'company_adress_size', [
				'label' => __( 'Adress Size', 'elementor-contacts-accordion-widget' ),
				'label_block' => true,
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 8,
						'max' => 36,
					],
				],
				'default' => [
					'unit' => 'px',
					'size' => 16,
				],
				'selectors' => [ '{{WRAPPER}} .company-adress' => 'font-size: {{SIZE}}px;', ],
			]
		);

		$this->add_control (
			'company_schedule_alignment', [
				'label' => __( 'Adress Alignment', 'elementor-contacts-accordion-widget' ),
				'label_block' => true,
				'type' => Controls_Manager::CHOOSE,
				'options' => [
					'left' => [
						'title' => __( 'Left', 'elementor-contacts-accordion-widget' ),
						'icon' => 'eicon-text-align-left',
					],
					'center' => [
						'title' => __( 'Center', 'elementor-contacts-accordion-widget' ),
						'icon' => 'eicon-text-align-center',
					],
					'right' => [
						'title' => __( 'Right', 'elementor-contacts-accordion-widget' ),
						'icon' => 'eicon-text-align-right',
					],
					'justify' => [
						'title' => __( 'Justify', 'elementor-contacts-accordion-widget' ),
						'icon' => 'eicon-text-align-justify',
					],
				],
				'default' => 'left',
				'toggle' => false,
				'selectors' => [ '{{WRAPPER}} .company-schedule' => 'text-align: {{VALUE}};', ],
			]
		);

		$this->add_control (
			'company_schedule_color', [
				'label' => __( 'Schedule Color', 'elementor-contacts-accordion-widget' ),
				'default' => '#1D2430',
				'type' => Controls_Manager::COLOR,
				'selectors' => [ '{{WRAPPER}} .company-schedule' => 'color: {{VALUE}};', ],
			]
		);

		$this->add_control (
			'company_schedule_size', [
				'label' => __( 'Schedule Size', 'elementor-contacts-accordion-widget' ),
				'label_block' => true,
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 8,
						'max' => 36,
					],
				],
				'default' => [
					'unit' => 'px',
					'size' => 16,
				],
				'selectors' => [ '{{WRAPPER}} .company-schedule' => 'font-size: {{SIZE}}px;', ],
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'repeater_content', [
				'label' => __( 'Contacts', 'elementor-contacts-accordion-widget' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control (
			'list', [
				'label' => __( 'Contacts', 'elementor-contacts-accordion-widget' ),
				'type' => Controls_Manager::REPEATER,
				'fields' => [
					[
						'name' => 'company_title',
						'label' => __( 'Company Title', 'elementor-contacts-accordion-widget' ),
						'type' => Controls_Manager::TEXT,
						'label_block' => true,
						'default' => 'My Company Title',
						'placeholder' => __( 'Enter Company Title', 'elementor-contacts-accordion-widget' ),
					],
					[
						'name' => 'company_description',
						'label' => __( 'Company Description', 'elementor-contacts-accordion-widget' ),
						'type' => Controls_Manager::TEXT,
						'label_block' => true,
						'default' => 'My Company Description',
						'placeholder' => __( 'Company Description', 'elementor-contacts-accordion-widget' ),
					],
					[
						'name' => 'company_adress_icon',
						'label' => __( 'Company Adress Icon', 'elementor-contacts-accordion-widget' ),
						'label_block' => true,
						'type' => Controls_Manager::ICONS,
						'default' => [
							'value' => 'fas fa-map',
							'library' => 'fa-solid',
						],
					],
					[
						'name' => 'company_adress',
						'label' => __( 'Company Adress', 'elementor-contacts-accordion-widget' ),
						'type' => Controls_Manager::TEXT,
						'label_block' => true,
						'default' => 'My Company Adress',
						'placeholder' => __( 'Enter Company Adress', 'elementor-contacts-accordion-widget' ),
					],
					[
						'name' => 'company_schedule_icon',
						'label' => __( 'Company Schedule Icon', 'elementor-contacts-accordion-widget' ),
						'label_block' => true,
						'type' => Controls_Manager::ICONS,
						'default' => [
							'value' => 'fas fa-business-time',
							'library' => 'fa-solid',
						],
					],
					[
						'name' => 'company_schedule',
						'label' => __( 'Company Description', 'elementor-contacts-accordion-widget' ),
						'type' => Controls_Manager::TEXT,
						'label_block' => true,
						'default' => 'I-V: 8:00 - 17:00, VI-VII: -',
						'placeholder' => __( 'Company Schedule', 'elementor-contacts-accordion-widget' ),
					],
					[
						'name' => 'company_id',
						'label' => __( 'company id', 'elementor-contacts-accordion-widget' ),
						'label_block' => true,
						'type' => Controls_Manager::TEXT,
						'label_block' => true,
						'default' => 'company id',
						'placeholder' => __( 'company id', 'elementor-contacts-accordion-widget' ),
					],
				],
				'title_field' => '{{{ company_title }}}',
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'staff_content', [
				'label' => __( 'Staff', 'elementor-contacts-accordion-widget' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control (
			'staff_list', [
				'label' => __( 'Staff', 'elementor-contacts-accordion-widget' ),
				'type' => Controls_Manager::REPEATER,
				'fields' => [
					[
						'name' => 'company_id',
						'label' => __( 'company id', 'elementor-contacts-accordion-widget' ),
						'label_block' => true,
						'type' => Controls_Manager::TEXT,
						'label_block' => true,
						'default' => 'company id',
						'placeholder' => __( 'company id', 'elementor-contacts-accordion-widget' ),
					],
					[
						'name' => 'staff_name',
						'label' => __( 'Staff Name', 'elementor-contacts-accordion-widget' ),
						'type' => Controls_Manager::TEXT,
						'label_block' => true,
						'default' => 'My Staff Name',
						'placeholder' => __( 'Enter Staff Name', 'elementor-contacts-accordion-widget' ),
					],
					[
						'name' => 'staff_image',
						'label' => __( 'Choose Image', 'elementor-vector-map-plugin' ),
						'label_block' => true,
						'type' => Controls_Manager::MEDIA,
						'default' => [ 'url' => Utils::get_placeholder_image_src() ],
					],
					[
						'name' => 'staff_image_description',
						'label' => __( 'Image description', 'elementor-vector-map-plugin' ),
						'label_block' => true,
						'type' => Controls_Manager::TEXT,
						'default' => 'Staff image',
						'placeholder' => __( 'Image description', 'elementor-vector-map-plugin' ),
					],
					[
						'name' => 'staff_position',
						'label' => __( 'Staff Position', 'elementor-contacts-accordion-widget' ),
						'type' => Controls_Manager::TEXT,
						'label_block' => true,
						'default' => 'My Staff Position',
						'placeholder' => __( 'Enter Staff Position', 'elementor-contacts-accordion-widget' ),
					],
					[
						'name' => 'staff_number',
						'label' => __( 'Staff Number', 'elementor-contacts-accordion-widget' ),
						'type' => Controls_Manager::TEXT,
						'label_block' => true,
						'default' => 'My Number Position',
						'placeholder' => __( 'Enter Staff Number', 'elementor-contacts-accordion-widget' ),
					],
					[
						'name' => 'staff_email',
						'label' => __( 'Staff Email', 'elementor-contacts-accordion-widget' ),
						'type' => Controls_Manager::TEXT,
						'label_block' => true,
						'default' => 'My Email Position',
						'placeholder' => __( 'Enter Staff Email', 'elementor-contacts-accordion-widget' ),
					],
				],
				'title_field' => '{{{ staff_name }}}',
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'staff_settings_content', [
				'label' => __( 'Staff General Settings', 'elementor-contacts-accordion-widget' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control (
			'staff_container_color', [
				'label' => __( 'Staff Container Color', 'elementor-contacts-accordion-widget' ),
				'default' => '#b0cdffff',
				'type' => Controls_Manager::COLOR,
				'selectors' => [ '{{WRAPPER}} .staff-card-container' => 'background-color: {{VALUE}};', ],
			]
		);

		$this->add_control (
			'staff_name_color', [
				'label' => __( 'Staff Name Color', 'elementor-contacts-accordion-widget' ),
				'default' => '#1D2430',
				'type' => Controls_Manager::COLOR,
				'selectors' => [ '{{WRAPPER}} .staff-name-container' => 'color: {{VALUE}};', ],
			]
		);

		$this->add_control (
			'staff_name_size', [
				'label' => __( 'Staff Name Size', 'elementor-contacts-accordion-widget' ),
				'label_block' => true,
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 8,
						'max' => 32,
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
			'staff_name_weight', [
				'label' => __( 'Staff Name Weight', 'elementor-contacts-accordion-widget' ),
				'label_block' => true,
				'type' => Controls_Manager::CHOOSE,
				'options' => [
					'lighter' => [
						'title' => __( 'Lighter', 'elementor-contacts-accordion-widget' ),
						'icon' => 'eicon-arrow-left',
					],
					'normal' => [
						'title' => __( 'Normal', 'elementor-contacts-accordion-widget' ),
						'icon' => 'eicon-editor-bold',
					],
					'bold' => [
						'title' => __( 'Bold', 'elementor-contacts-accordion-widget' ),
						'icon' => 'eicon-arrow-right',
					],
				],
				'default' => 'left',
				'toggle' => false,
				'selectors' => [ '{{WRAPPER}} .staff-name-container' => 'font-weight: {{VALUE}};', ],				
			],
		);

		$this->add_control (
			'staff_position_color', [
				'label' => __( 'Staff Position Color', 'elementor-contacts-accordion-widget' ),
				'default' => '#1D2430',
				'type' => Controls_Manager::COLOR,
				'selectors' => [ '{{WRAPPER}} .staff-position-container' => 'color: {{VALUE}};', ],
			]
		);

		$this->add_control (
			'staff_position_size', [
				'label' => __( 'Staff Position Size', 'elementor-contacts-accordion-widget' ),
				'label_block' => true,
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 8,
						'max' => 32,
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
			'staff_position_weight', [
				'label' => __( 'Staff Position Weight', 'elementor-contacts-accordion-widget' ),
				'label_block' => true,
				'type' => Controls_Manager::CHOOSE,
				'options' => [
					'lighter' => [
						'title' => __( 'Lighter', 'elementor-contacts-accordion-widget' ),
						'icon' => 'eicon-arrow-left',
					],
					'normal' => [
						'title' => __( 'Normal', 'elementor-contacts-accordion-widget' ),
						'icon' => 'eicon-editor-bold',
					],
					'bold' => [
						'title' => __( 'Bold', 'elementor-contacts-accordion-widget' ),
						'icon' => 'eicon-arrow-right',
					],
				],
				'default' => 'left',
				'toggle' => false,
				'selectors' => [ '{{WRAPPER}} .staff-position-container' => 'font-weight: {{VALUE}};', ],				
			],
		);

		$this->add_control (
			'staff_button_font_color', [
				'label' => __( 'Button Font Color', 'elementor-contacts-accordion-widget' ),
				'default' => '#1D2430',
				'type' => Controls_Manager::COLOR,
				'selectors' => [ '{{WRAPPER}} .staff-button' => 'font-color: {{VALUE}};', ],
			]
		);

		$this->add_control (
			'staff_button_font_size', [
				'label' => __( 'Button Text Size', 'elementor-contacts-accordion-widget' ),
				'label_block' => true,
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 8,
						'max' => 32,
					],
				],
				'default' => [
					'unit' => 'px',
					'size' => 16,
				],
				'selectors' => [ '{{WRAPPER}} .staff-button' => 'font-size: {{SIZE}}px;', ],
			]
		);

		$this->add_control (
			'staff_button_color', [
				'label' => __( 'Button Color', 'elementor-contacts-accordion-widget' ),
				'default' => '#fafcffff',
				'type' => Controls_Manager::COLOR,
				'selectors' => [ '{{WRAPPER}} .staff-button' => 'background-color: {{VALUE}};', ],
			]
		);
		$this->end_controls_section();
	}

  protected function render() { 
		$settings = $this->get_settings_for_display();
		if ( !$settings['list'] ) { return; }
		?>

		<div class="accordion-widget-container">
			<?php foreach ( $settings['list'] as $index => $company ) : ?>
				<div class="accordion-contacts-container">
					<div class="first-row">
						<div class="company-names-container">
							<p class="company-title">	
								<?php echo $company['company_title']; ?>
							</p>
							<p class="company-description">
								<?php echo $company['company_description']; ?>
							</p>
						</div>
						<div class="company-locations-container">
							<p class="company-adress">
								<?php Icons_Manager::render_icon( $company['company_adress_icon'], ['aria-hidden' => 'true'] ); ?>
								<?php echo $company['company_adress']; ?>
							</p>
							<p class="company-schedule">
								<?php Icons_Manager::render_icon( $company['company_schedule_icon'], ['aria-hidden' => 'true'] ); ?>
								<?php echo $company['company_schedule']; ?>
							</p>
						</div>
						<div class="info-buttons-container">
							<a>	WhatsApp </a>
							<button class="more-info-btn">More info</button>
						</div>
					</div>
					<div id="second-row">
						<?php foreach ( $settings['staff_list'] as $index => $staff ) : ?>
							<?php	if ($staff['company_id'] == $company['company_id']) { ?>
								<div class="staff-card-container">
									<div class="staff-img-container">
										<img src="<?php echo esc_url($staff['staff_image']['url'] )?>"
										alt="<?php echo ($staff['staff_image_description'] )?>"
										class="staff-img"/>
									</div>
									<div class="staff-info-container">
										<div class="staff-name-container">
											<p><?php echo $staff['staff_name']; ?></p>
										</div>
										<div class="staff-position-container">
											<p><?php echo $staff['staff_position']; ?></p>
										</div>
										<div class="staff-number-container">
											<a href="tel:<?php echo $staff['staff_number']; ?>">
												<button class="staff-button">
												<?php echo $staff['staff_number']; ?></button>
											</a>
										</div>
										<div class="staff-email-container">
											<a href="mailto:<?php echo $staff['staff_email']; ?>">
												<button class="staff-button">
												<?php echo $staff['staff_email']; ?></button>
											</a>
										</div>
									</div>
								</div>
							<?php } ?>
						<?php endforeach; ?>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
		<?
  }
}