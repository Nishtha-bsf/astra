<?php
/**
 * Styling Options for Astra Theme.
 *
 * @package     Astra
 * @author      Astra
 * @copyright   Copyright (c) 2020, Astra
 * @link        https://wpastra.com/
 * @since       Astra 1.0.15
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Customizer Sanitizes Initial setup
 */
class Astra_Global_Typo_Configs extends Astra_Customizer_Config_Base {

	/**
	 * Register Body Typography Customizer Configurations.
	 *
	 * @param Array                $configurations Astra Customizer Configurations.
	 * @param WP_Customize_Manager $wp_customize instance of WP_Customize_Manager.
	 * @since 1.4.3
	 * @return Array Astra Customizer Configurations with updated configurations.
	 */
	public function register_configuration( $configurations, $wp_customize ) {

		$_configs = array(

			/**
			 * Option: Font Family
			 */
			array(
				'name'        => 'ast-typography-presets',
				'type'        => 'control',
				'control'     => 'ast-typography-presets',
				'default'     => get_option( 'ast-typography-presets', '' ),
				'options'     => array(
					'typo-preset-01' => array(
						"body-font-family"   => "'Open Sans', sans-serif",
						"body-font-variant"  => "400",
						"body-font-weight"   => "400",
						"font-size-body"     => array(
							"desktop"      => 16,
							"tablet"       => 16,
							"mobile"       => 16,
							"desktop-unit" => "px",
							"tablet-unit"  => "px",
							"mobile-unit"  => "px"
						),
						"font-size-h1"    => array(
							"desktop"      => 54,
							"tablet"       => 45,
							"mobile"       => 32,
							"desktop-unit" => "px",
							"tablet-unit"  => "px",
							"mobile-unit"  => "px"
						),
						"font-size-h2"    => array(
							"desktop"      => 42,
							"tablet"       => 32,
							"mobile"       => 28,
							"desktop-unit" => "px",
							"tablet-unit"  => "px",
							"mobile-unit"  => "px"
						),
						"font-size-h3"    => array(
							"desktop"      => 36,
							"tablet"       => 26,
							"mobile"       => 22,
							"desktop-unit" => "px",
							"tablet-unit"  => "px",
							"mobile-unit"  => "px"
						),
						"font-size-h4"    => array(
							"desktop"      => 25,
							"tablet"       => 22,
							"mobile"       => 15,
							"desktop-unit" => "px",
							"tablet-unit"  => "px",
							"mobile-unit"  => "px"
						),
						"font-size-h5"    => array(
							"desktop"      => 20,
							"tablet"       => 18,
							"mobile"       => 20,
							"desktop-unit" => "px",
							"tablet-unit"  => "px",
							"mobile-unit"  => "px"
						),
						"font-size-h6"    => array(
							"desktop"      => 15,
							"tablet"       => 15,
							"mobile"       => 15,
							"desktop-unit" => "px",
							"tablet-unit"  => "px",
							"mobile-unit"  => "px"
						),
						"body-line-height"      => 1.6,
						"headings-font-family"  => "'Playfair Display', serif",
						"headings-font-weight"  => "700",
						"headings-line-height"  => "",
						"headings-font-variant" => "700",
						"line-height-h1"        => 1.2,
						"line-height-h2"        => 1.2,
						"line-height-h3"        => 1.2,
						"line-height-h4"        => 1.2,
						"line-height-h5"        => 1.2,
						"line-height-h6"        => 1.2,
						"font-size-entry-title" => array(
							"desktop"      => 38,
							"tablet"       => 30,
							"mobile"       => 26,
							"desktop-unit" => "px",
							"tablet-unit"  => "px",
							"mobile-unit"  => "px"
						),
						"font-size-archive-summary-title" => array(
							"desktop"      => 50,
							"tablet"       => 40,
							"mobile"       => 30,
							"desktop-unit" => "px",
							"tablet-unit"  => "px",
							"mobile-unit"  => "px"
						),
						"font-size-page-title"  => array(
							"desktop"      => 30,
							"tablet"       => 28,
							"mobile"       => 25,
							"desktop-unit" => "px",
							"tablet-unit"  => "px",
							"mobile-unit"  => "px"
						),
					),
					'typo-preset-02' => array(
						"body-font-family"   => "'Lora', serif",
						"body-font-variant"  => "700",
						"body-font-weight"   => "700",
						"font-size-body"     => array(
							"desktop"      => 16,
							"tablet"       => 16,
							"mobile"       => 16,
							"desktop-unit" => "px",
							"tablet-unit"  => "px",
							"mobile-unit"  => "px"
						),
						"font-size-h1"    => array(
							"desktop"      => 54,
							"tablet"       => 45,
							"mobile"       => 32,
							"desktop-unit" => "px",
							"tablet-unit"  => "px",
							"mobile-unit"  => "px"
						),
						"font-size-h2"    => array(
							"desktop"      => 42,
							"tablet"       => 32,
							"mobile"       => 28,
							"desktop-unit" => "px",
							"tablet-unit"  => "px",
							"mobile-unit"  => "px"
						),
						"font-size-h3"    => array(
							"desktop"      => 32,
							"tablet"       => 28,
							"mobile"       => 22,
							"desktop-unit" => "px",
							"tablet-unit"  => "px",
							"mobile-unit"  => "px"
						),
						"font-size-h4"    => array(
							"desktop"      => 24,
							"tablet"       => 22,
							"mobile"       => 20,
							"desktop-unit" => "px",
							"tablet-unit"  => "px",
							"mobile-unit"  => "px"
						),
						"font-size-h5"    => array(
							"desktop"      => 20,
							"tablet"       => 18,
							"mobile"       => 17,
							"desktop-unit" => "px",
							"tablet-unit"  => "px",
							"mobile-unit"  => "px"
						),
						"font-size-h6"    => array(
							"desktop"      => 15,
							"tablet"       => 15,
							"mobile"       => 15,
							"desktop-unit" => "px",
							"tablet-unit"  => "px",
							"mobile-unit"  => "px"
						),
						"body-line-height"      => '',
						"headings-font-family"  => "'Lato', sans-serif",
						"headings-font-weight"  => "700",
						"headings-line-height"  => "",
						"headings-font-variant" => "700",
						"line-height-h1"        => 1.2,
						"line-height-h2"        => 1.2,
						"line-height-h3"        => 1.2,
						"line-height-h4"        => 1.2,
						"line-height-h5"        => 1.2,
						"line-height-h6"        => 1.2,
						"font-size-entry-title" => array(
							"desktop"      => 30,
							"tablet"       => 26,
							"mobile"       => 24,
							"desktop-unit" => "px",
							"tablet-unit"  => "px",
							"mobile-unit"  => "px"
						),
						"font-size-archive-summary-title" => array(
							"desktop"      => 50,
							"tablet"       => 40,
							"mobile"       => 30,
							"desktop-unit" => "px",
							"tablet-unit"  => "px",
							"mobile-unit"  => "px"
						),
						"font-size-page-title"  => array(
							"desktop"      => 30,
							"tablet"       => 28,
							"mobile"       => 25,
							"desktop-unit" => "px",
							"tablet-unit"  => "px",
							"mobile-unit"  => "px"
						),
					),
					'typo-preset-03' => array(
						"body-font-family"   => "'Open Sans', sans-serif",
						"body-font-variant"  => "400",
						"body-font-weight"   => "400",
						"font-size-body"     => array(
							"desktop"      => 16,
							"tablet"       => 16,
							"mobile"       => 16,
							"desktop-unit" => "px",
							"tablet-unit"  => "px",
							"mobile-unit"  => "px"
						),
						"font-size-h1"    => array(
							"desktop"      => 54,
							"tablet"       => 45,
							"mobile"       => 32,
							"desktop-unit" => "px",
							"tablet-unit"  => "px",
							"mobile-unit"  => "px"
						),
						"body-line-height"      => 1.6,
						"body-font-family"      => "'Playfair Display', serif",
						"headings-font-weight"  => "700",
						"headings-line-height"  => "",
						"headings-font-variant" => "700",
						"line-height-h1"        => 1.2,
						"line-height-h2"        => 1.2,
						"line-height-h3"        => 1.2,
						"line-height-h4"        => 1.2,
						"line-height-h5"        => 1.2,
						"line-height-h6"        => 1.2,
						"font-size-entry-title" => array(
							"desktop"      => 38,
							"tablet"       => 30,
							"mobile"       => 26,
							"desktop-unit" => "px",
							"tablet-unit"  => "px",
							"mobile-unit"  => "px"
						),
						"font-size-archive-summary-title" => array(
							"desktop"      => 50,
							"tablet"       => 40,
							"mobile"       => 30,
							"desktop-unit" => "px",
							"tablet-unit"  => "px",
							"mobile-unit"  => "px"
						),
						"font-size-page-title"  => array(
							"desktop"      => 30,
							"tablet"       => 28,
							"mobile"       => 25,
							"desktop-unit" => "px",
							"tablet-unit"  => "px",
							"mobile-unit"  => "px"
						),
					),
					"typo-preset-04" => array(
						"body-font-family"   => "'Open Sans', sans-serif",
						"body-font-variant"  => "400",
						"body-font-weight"   => "400",
						"font-size-body"     => array(
							"desktop"      => 16,
							"tablet"       => 16,
							"mobile"       => 16,
							"desktop-unit" => "px",
							"tablet-unit"  => "px",
							"mobile-unit"  => "px"
						),
						"font-size-h1"    => array(
							"desktop"      => 54,
							"tablet"       => 45,
							"mobile"       => 32,
							"desktop-unit" => "px",
							"tablet-unit"  => "px",
							"mobile-unit"  => "px"
						),
						"body-line-height"      => 1.6,
						"body-font-family"      => "'Playfair Display', serif",
						"headings-font-weight"  => "700",
						"headings-line-height"  => "",
						"headings-font-variant" => "700",
						"line-height-h1"        => 1.2,
						"line-height-h2"        => 1.2,
						"line-height-h3"        => 1.2,
						"line-height-h4"        => 1.2,
						"line-height-h5"        => 1.2,
						"line-height-h6"        => 1.2,
						"font-size-entry-title" => array(
							"desktop"      => 38,
							"tablet"       => 30,
							"mobile"       => 26,
							"desktop-unit" => "px",
							"tablet-unit"  => "px",
							"mobile-unit"  => "px"
						),
						"font-size-archive-summary-title" => array(
							"desktop"      => 50,
							"tablet"       => 40,
							"mobile"       => 30,
							"desktop-unit" => "px",
							"tablet-unit"  => "px",
							"mobile-unit"  => "px"
						),
						"font-size-page-title"  => array(
							"desktop"      => 30,
							"tablet"       => 28,
							"mobile"       => 25,
							"desktop-unit" => "px",
							"tablet-unit"  => "px",
							"mobile-unit"  => "px"
						),
					),
					"typo-preset-05" => array(
						"body-font-family"   => "'Open Sans', sans-serif",
						"body-font-variant"  => "400",
						"body-font-weight"   => "400",
						"font-size-body"     => array(
							"desktop"      => 16,
							"tablet"       => 16,
							"mobile"       => 16,
							"desktop-unit" => "px",
							"tablet-unit"  => "px",
							"mobile-unit"  => "px"
						),
						"font-size-h1"    => array(
							"desktop"      => 54,
							"tablet"       => 45,
							"mobile"       => 32,
							"desktop-unit" => "px",
							"tablet-unit"  => "px",
							"mobile-unit"  => "px"
						),
						"body-line-height"      => 1.6,
						"body-font-family"      => "'Playfair Display', serif",
						"headings-font-weight"  => "700",
						"headings-line-height"  => "",
						"headings-font-variant" => "700",
						"line-height-h1"        => 1.2,
						"line-height-h2"        => 1.2,
						"line-height-h3"        => 1.2,
						"line-height-h4"        => 1.2,
						"line-height-h5"        => 1.2,
						"line-height-h6"        => 1.2,
						"font-size-entry-title" => array(
							"desktop"      => 38,
							"tablet"       => 30,
							"mobile"       => 26,
							"desktop-unit" => "px",
							"tablet-unit"  => "px",
							"mobile-unit"  => "px"
						),
						"font-size-archive-summary-title" => array(
							"desktop"      => 50,
							"tablet"       => 40,
							"mobile"       => 30,
							"desktop-unit" => "px",
							"tablet-unit"  => "px",
							"mobile-unit"  => "px"
						),
						"font-size-page-title"  => array(
							"desktop"      => 30,
							"tablet"       => 28,
							"mobile"       => 25,
							"desktop-unit" => "px",
							"tablet-unit"  => "px",
							"mobile-unit"  => "px"
						),
					),
					"typo-preset-06" => array(
						"body-font-family"   => "'Open Sans', sans-serif",
						"body-font-variant"  => "400",
						"body-font-weight"   => "400",
						"font-size-body"     => array(
							"desktop"      => 16,
							"tablet"       => 16,
							"mobile"       => 16,
							"desktop-unit" => "px",
							"tablet-unit"  => "px",
							"mobile-unit"  => "px"
						),
						"font-size-h1"    => array(
							"desktop"      => 54,
							"tablet"       => 45,
							"mobile"       => 32,
							"desktop-unit" => "px",
							"tablet-unit"  => "px",
							"mobile-unit"  => "px"
						),
						"body-line-height"      => 1.6,
						"body-font-family"      => "'Playfair Display', serif",
						"headings-font-weight"  => "700",
						"headings-line-height"  => "",
						"headings-font-variant" => "700",
						"line-height-h1"        => 1.2,
						"line-height-h2"        => 1.2,
						"line-height-h3"        => 1.2,
						"line-height-h4"        => 1.2,
						"line-height-h5"        => 1.2,
						"line-height-h6"        => 1.2,
						"font-size-entry-title" => array(
							"desktop"      => 38,
							"tablet"       => 30,
							"mobile"       => 26,
							"desktop-unit" => "px",
							"tablet-unit"  => "px",
							"mobile-unit"  => "px"
						),
						"font-size-archive-summary-title" => array(
							"desktop"      => 50,
							"tablet"       => 40,
							"mobile"       => 30,
							"desktop-unit" => "px",
							"tablet-unit"  => "px",
							"mobile-unit"  => "px"
						),
						"font-size-page-title"  => array(
							"desktop"      => 30,
							"tablet"       => 28,
							"mobile"       => 25,
							"desktop-unit" => "px",
							"tablet-unit"  => "px",
							"mobile-unit"  => "px"
						),
					),
				),
				'section'     => 'section-typography',
				'transport'   => 'postMessage',
				'priority'    => 5,
				'title'       => __( 'Typography Presets', 'astra' ),
				'divider'     => array( 'ast_class' => 'ast-bottom-divider' ),
			),

		);

		return array_merge( $configurations, $_configs );
	}
}

new Astra_Global_Typo_Configs();