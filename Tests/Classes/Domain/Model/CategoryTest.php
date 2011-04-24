<?php

require_once(t3lib_extMgm::extPath('tl_photoblog').'/Classes/Domain/Model/Category.php');

class Tx_TlPhotoblog_Domain_Model_Category_Test extends tx_phpunit_testcase {

	/** @var Tx_TlPhotoblog_Domain_Model_Category */
	protected $category;

	public function setUp() {
		$this->category = new Tx_TlPhotoblog_Domain_Model_Category();
	}

	/**
	 * @test
	 */
	public function canGetAndSetProperties() {
		// name
		$this->category->setName('category name');
		$this->assertEquals('category name', $this->category->getName());

		// description
		$this->category->setDescription('category description');
		$this->assertEquals('category description', $this->category->getDescription());
	}

}
