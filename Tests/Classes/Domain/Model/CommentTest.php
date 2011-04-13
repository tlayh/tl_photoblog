<?php

require_once(t3lib_extMgm::extPath('tl_photoblog').'/Classes/Domain/Model/Comment.php');

class Tx_TlPhotoblog_Domain_Model_Comment_Test extends tx_phpunit_testcase {

	/** @var Tx_TlPhotoblog_Domain_Model_Comment */
	protected $comment;

	public function setUp() {
		$this->comment = new Tx_TlPhotoblog_Domain_Model_Comment();
	}

	/**
	 * @test
	 */
	public function canGetAndSetProperties() {
		// name
		$this->comment->setName('myName');
		$this->assertEquals('myName', $this->comment->getName());

		// website
		$this->comment->setWebsite('my website');
		$this->assertEquals('my website', $this->comment->getWebsite());

		// email
		$this->comment->setEmail('my email address');
		$this->assertEquals('my email address', $this->comment->getEmail());

		// comment
		$this->comment->setComment('my comment');
		$this->assertEquals('my comment', $this->comment->getComment());

		// crdate
		$date = new \DateTime();
		$this->comment->setCrdate($date);
		$this->assertEquals($date, $this->comment->getCrdate());
		
	}

}
