<?php

//require_once(t3lib_extMgm::extPath('linkvalidator').'classes/linktype/class.tx_linkvalidator_linktype_External.php');

class Tx_TlPhotoblog_ViewHelpers_LinkvalidatorViewHelper extends Tx_Fluid_Core_ViewHelper_AbstractViewHelper {

	/**
	 * @param string $value
	 * @return string
	 */
	public function render($value) {
		$link = '';

		$link = $value;

		return $link;
	}

}
