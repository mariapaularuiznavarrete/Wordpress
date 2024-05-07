<?php
/* ------------------------------------------------------------------------------
* Author: web-zone.org
* @package Airin Blog
* Description: Social media customizer functionality
* ------------------------------------------------------------------------------ */


function airinblog_fun_customize_register_soc($wp_customize) {

	// List of social networks
	$soc_net = array(
		'off' => '',
		'facebook' => 'Facebook',
		'instagram' => 'Instagram',
		'linkedin' => 'LinkedIn',
		'pinterest' => 'Pinterest',
		'skype' => 'Skype',
		'telegram' => 'Telegram',
		'tiktok' => 'TikTok',
		'twitter' => 'Twitter',
		'twitterx' => 'Twitter X',
		'wechat' => 'WeChat',
		'whatsapp' => 'WhatsApp',
		'youtube' => 'YouTube'
	);
	$soc_net = apply_filters('dmcwzmulti_filter_soc_net', $soc_net);


	//? ========== ========== ========== Social link settings

	$wp_customize->add_setting(
		'airinblog_cus_soc_block',
		array(
		'sanitize_callback' => 'airinblog_fun_sanitize_elastic_soc',
		'default' => json_encode(array(
			array(
				'soc_net'		=> 'off',
				'soc_link'		=> '/',
				'soc_new_link'	=> 0,
			)
		))
	));

	$wp_customize->add_control(
		new airinblog_Elastic_Controler_soc(
			$wp_customize, 
			'airinblog_cus_soc_block',
			array(
				'priority' => 200,
				'label'               => esc_html__('Social links', 'airin-blog'),
				'description'         => esc_html__('Drag the block with the cursor to change the position of the links', 'airin-blog'),
				'section'             => 'airinblog_cus_section_soc',
				'settings'            => 'airinblog_cus_soc_block',
				'airinblog_box_label'       => esc_html__('Section with settings', 'airin-blog'),
				'airinblog_box_add_control' => esc_html__('Add section', 'airin-blog'),
			),
			array(
				'soc_net' => array(
					'type'  => 'select',
					'label' => esc_html__('Picture variant', 'airin-blog'),
					'options' => $soc_net,
					'default'	=> 'off',
					'class'     => 'class-soc-net'
				),
				'soc_link' => array(
					'type'      => 'url',
					'label'     => esc_html__('Link to social network (URL)', 'airin-blog'),
					'default'	=> '/',
					'class'     => 'class-soc-link'
				),
				'soc_new_link' => array(
					'type'      => 'checkbox',
					'label'     => esc_html__('Open link in new tab', 'airin-blog'),
					'default'	=> 0,
					'class'     => 'class-soc-new-link'
				)
			)
		)
	);

}
add_action('customize_register', 'airinblog_fun_customize_register_soc');


if (class_exists('WP_Customize_Control')) {
	class airinblog_Elastic_Controler_soc extends WP_Customize_Control {

		public $type = 'multi-elastic';

		public $airinblog_box_label = '';

		public $airinblog_box_add_control = '';

		private $cats = '';

		public $fields = array();

		public function __construct($manager, $id, $args = array(), $fields = array()) {
			$this->fields = $fields;
			$this->airinblog_box_label = $args['airinblog_box_label'] ;
			$this->airinblog_box_add_control = $args['airinblog_box_add_control'];
			$this->cats = get_categories(array( 'hide_empty' => false ));
			parent::__construct($manager, $id, $args);
		}

		public function render_content() {

			$values = json_decode($this->value());
			?>
			<span class="customize-control-title"><?php echo esc_html($this->label); ?></span>

			<?php if ($this->description) { ?>
				<span class="description customize-control-description">
					<?php echo wp_kses_post($this->description); ?>
				</span>
			<?php } ?>

			<ul class="multi-elastic-field-control-wrap">
				<?php
				$this->airinblog_fun_get_fields();
				?>
			</ul>

			<input type="hidden" <?php esc_attr($this->link()); ?> class="multi-elastic-collector" value="<?php echo esc_attr($this->value()); ?>">
			<button type="button" class="button airinblog-add-control-field"><?php echo esc_html($this->airinblog_box_add_control); ?></button>
			<?php

		}

		private function airinblog_fun_get_fields() {
			$fields = $this->fields;
			$values = json_decode($this->value());

			if (is_array($values)) {
				foreach ($values as $value) {
					?>
					<li class="multi-elastic-field-control">
						<h3 class="multi-elastic-field-title">
							<?php esc_html_e('Social link', 'airin-blog'); ?>

						</h3>
						<div class="multi-elastic-fields">

							<?php
							foreach ($fields as $key => $field) {
								$class = isset($field['class']) ? $field['class'] : '';
								?>
								<div class="airinblog-fields airinblog-type-<?php echo esc_attr($field['type']).' '.$class; ?>">

									<?php
									$label = isset($field['label']) ? $field['label'] : '';
									$description = isset($field['description']) ? $field['description'] : '';
									if ($field['type'] != 'checkbox') { ?>
										<span class="customize-control-title"><?php echo esc_html($label); ?></span>
										<span class="description customize-control-description"><?php echo esc_html($description); ?></span>
									<?php
									}

									$new_value = isset($value->$key) ? $value->$key : '';
									$default = isset($field['default']) ? $field['default'] : '';

									switch ($field['type']) {

										case 'checkbox':
											echo '<label class="airinblog-def-checkbox" data-val="'.esc_attr($option).'">';
											echo '<input data-default="'.esc_attr($default).'" value="'.$new_value.'" data-name="'.esc_attr($key).'" type="checkbox" '.checked($new_value, 1, false).'>';
											echo esc_html($label);
											echo '<span class="description customize-control-description">'.esc_html($description).'</span>';
											echo '</label>';
											break;

										case 'url':
											echo '<input data-default="'.esc_attr($default).'" data-name="'.esc_attr($key).'" type="text" value="'.esc_url($new_value).'">';
											break;

										case 'selector':
											$options = $field['options'];
											echo '<div class="selector-labels-soc">';
											foreach ($options as $option => $val) {
												$class = ($new_value == $option) ? 'selector-soc-selected': '';
												echo '<label class="'.$class.'" data-val="'.esc_attr($option).'">';
												echo '<span class="airinblog-customize-soc">'.esc_html($val).'</span>';
												echo '</label>';
											}
											echo '</div>';
											echo '<input data-default="'.esc_attr($default).'" type="hidden" value="'.esc_attr($new_value).'" data-name="'.esc_attr($key).'">';
											break;

										case 'select':
											$options = $field['options'];
											echo '<select  data-default="'.esc_attr($default).'"  data-name="'.esc_attr($key).'">';
												foreach ($options as $option => $val) {
													// Add a class for popular social networks (highlight in bold)
													switch ($option) {
														case 'facebook':
														case 'instagram':
														case 'linkedin':
														case 'pinterest':
														case 'skype':
														case 'telegram':
														case 'tiktok':
														case 'twitter':
														case 'twitterx':
														case 'wechat':
														case 'whatsapp':
														case 'youtube':
															$soc_select_css = 'airinblog-css-soc-select-bold';
															break;
														case 'web':
														case 'rss':
														case 'link':
														case 'address':
														case 'home':
														case 'plus':
															$soc_select_css = 'airinblog-css-soc-select-color';
															break;
														default:
															$soc_select_css = 'clear';
													}
													// Dropdown list of social networks
													printf('<option class="'.esc_attr($soc_select_css).'" value="%s" %s>%s</option>', esc_attr($option), selected($new_value, $option, false), esc_html($val));
												}
											echo '</select>';
											break;

									} ?>
								</div>
								<?php
							} ?>

							<div class="clearfix multi-elastic-footer">
								<div class="alignright">
									<a class="button multi-elastic-field-close" href="#close"><?php esc_html_e('Roll up block', 'airin-blog') ?></a>
									<a class="button multi-elastic-field-remove" href="#remove"><?php esc_html_e('Delete block', 'airin-blog') ?></a>
								</div>
							</div>
						</div>
					</li>
					<?php	
				}
			}
		}

	}
}

function airinblog_fun_sanitize_elastic_soc($input) {
	$input_decoded = json_decode($input, true);
	if (!empty($input_decoded)) {
		foreach ($input_decoded as $boxes => $box) {
			foreach ($box as $key => $value) {
				if ($key == 'soc_net') {
					$input_decoded[$boxes][$key] = sanitize_text_field($value);
				} else if ($key == 'soc_link') {
					$input_decoded[$boxes][$key] = esc_url_raw($value);
				} else if ($key == 'soc_new_link') {
					$input_decoded[$boxes][$key] = ($value == 1) ? 1 : 0;
				}
			}
		}
		return json_encode($input_decoded);
	}
	return $input;
}

