<?php

require_once(t3lib_extMgm::extPath('tl_photoblog').'/Classes/Domain/Model/Tag.php');

class Tx_TlPhotoblog_Domain_Model_Tag_Test extends tx_phpunit_testcase {

	/** @var Tx_TlPhotoblog_Domain_Model_Tag */
	protected $tag;

	public function setUp() {
		$this->tag = new Tx_TlPhotoblog_Domain_Model_Tag();
	}

	/**
	 * @test
	 */
	public function canGetAndSetProperties() {
		// name
		$this->tag->setName('tagName');
		$this->assertEquals('tagName', $this->tag->getName());
	}

}
