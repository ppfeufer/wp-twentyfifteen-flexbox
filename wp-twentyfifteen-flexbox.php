<?php

/*
Plugin Name: WP TwentyFifteen Flexbox
Plugin URI: https://github.com/ppfeufer/wp-twentyfifteen-flexbox
Description: Turns the blog page of the TwentyFifteen theme into a Flexbox grid ( inspired by: https://kau-boys.de/3362/wordpress/blog-startseite-mit-flexbox-als-grid-darstellen )
Version: 1.0.0
Author: H.-Peter Pfeufer
Author URI: https://ppfeufer.de
License: GPLv3
*/

/*
Copyright (C) 2017 p.pfeufer

This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
*/

namespace WordPress\Plugins\WP_TwentyFifteen_Flexbox;

\defined('ABSPATH') or die();

class WordPressTwentyFifteenFlexbox {
	public function __construct() {
		$this->init();
	} // END public function __construct()

	public function init() {
		\add_action('wp_enqueue_scripts', array($this, 'enqueueStyles'));
	} // END public function init()

	public function enqueueStyles() {
		if(\WP_DEBUG === true) {
			\wp_enqueue_style('wp-twentyfifteen-flexbox', \plugins_url(\basename(\dirname(__FILE__)) . '/css/wp-twentyfifteen-flexbox.css'), array('twentyfifteen-style'), false, 'all');
		} else {
			// load the minifies version
			\wp_enqueue_style('wp-twentyfifteen-flexbox', \plugins_url(\basename(\dirname(__FILE__)) . '/css/wp-twentyfifteen-flexbox.min.css'), array('twentyfifteen-style'), false, 'all');
		}
	} // END public function enqueueStyles()
} // END class WordPressTwentyFifteenFlexbox

new WordPressTwentyFifteenFlexbox;
