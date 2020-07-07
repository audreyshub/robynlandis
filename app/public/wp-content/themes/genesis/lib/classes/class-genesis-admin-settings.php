<?php
/**
 * Genesis Framework.
 *
 * WARNING: This file is part of the core Genesis Framework. DO NOT edit this file under any circumstances.
 * Please do all modifications in the form of a child theme.
 *
 * @package Genesis\Admin
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://my.studiopress.com/themes/genesis/
 */

/**
 * Registers a new admin page, providing content and corresponding menu item for the Theme Settings page.
 *
 * Although this class was added in 1.8.0, some of the methods were originally* standalone functions added in previous
 * versions of Genesis.
 *
 * @package Genesis\Admin
 *
 * @since 1.8.0
 */
class Genesis_Admin_Settings extends Genesis_Admin_Basic {

	/**
	 * Create an admin menu item and settings page.
	 *
	 * @since 1.8.0
	 */
	public function __construct() {

		$this->redirect_to = admin_url( 'customize.php?autofocus[panel]=genesis' );

		$page_id = 'genesis';

		$menu_ops = apply_filters(
			'genesis_theme_settings_menu_ops',
			[
				'main_menu'     => [
					'sep'        => [
						'sep_position'   => '58.995',
						'sep_capability' => 'edit_theme_options',
					],
					'page_title' => 'Theme Settings',
					'menu_title' => 'Genesis',
					'capability' => 'edit_theme_options',
					'icon_url'   => GENESIS_ADMIN_IMAGES_URL . '/genesis-menu.png',
					'position'   => '58.996',
				],
				'first_submenu' => [ // Do not use without 'main_menu'.
					'page_title' => __( 'Theme Settings', 'genesis' ),
					'menu_title' => __( 'Theme Settings', 'genesis' ),
					'capability' => 'edit_theme_options',
				],
			]
		);

		$this->create( $page_id, $menu_ops );

	}

	/**
	 * Required to use `Genesis_Admin_Basic`.
	 *
	 * @since 3.0
	 */
	public function admin() {}
}
