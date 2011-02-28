<?php

class Tx_TlPhotoblog_ViewHelpers_GalleryViewHelper extends Tx_Fluid_Core_ViewHelper_AbstractViewHelper {

	/**
	 * @param string $value
	 * @return string
	 */
	public function render($value) {
		$images = explode(',', $value);

		$galleryHTML = '';
		if($images && count($images) > 0) {
			foreach($images as $img) {
				$galleryHTML .= '<a href="uploads/tx_tlphotoblog/'.$img.'">';
			    $galleryHTML .= '<img width="150" height="150" src="uploads/tx_tlphotoblog/'.$img.'" />';
			    $galleryHTML .= '</a>';
			}
		}

		return $galleryHTML;
	}

}
