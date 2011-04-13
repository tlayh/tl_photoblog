<?php
/**
 * Tx_TlPhotoblog_System_ExifData
 *
 * ${DESCRIPTION}
 *
 * @author Thomas Layh <thomas@layh.com>
 * Date: 13.04.11
 * Time: 11:37
 */
 
class Tx_TlPhotoblog_System_ExifData {

	public function getExifData($filename) {
		$exifData = array();
		if($filename && file_exists($filename)) {
			$exifData = exif_read_data($filename);
		}
		return $exifData;
	}

}
