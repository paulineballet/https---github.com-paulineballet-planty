<?php


namespace Jet_Form_Builder\Admin\Single_Pages\Meta_Containers;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

class Normal_Meta_Container extends Base_Meta_Container {

	public function get_type(): string {
		return self::TYPE_NORMAL;
	}
}
