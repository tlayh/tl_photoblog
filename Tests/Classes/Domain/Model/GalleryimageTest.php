<?php

require_once(t3lib_extMgm::extPath('tl_photoblog').'/Classes/Domain/Model/Galleryimage.php');

class Tx_TlPhotoblog_Domain_Model_Galleryimage_Test extends tx_phpunit_testcase {

	/** @var Tx_TlPhotoblog_Domain_Model_Galleryimage */
	protected $ga;

	public function setUp() {
		$this->ga = new Tx_TlPhotoblog_Domain_Model_Galleryimage();
	}

	/**
	 * @test
	 */
	public function canGetAndSetProperties() {

		// name
		$this->ga->setName('some gallery name');
		$this->assertEquals('some gallery name', $this->ga->getName());

		// image
		$this->ga->setImage('some image');
		$this->assertEquals('some image', $this->ga->getImage());

	}

}
