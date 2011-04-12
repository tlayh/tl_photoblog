<?php

 
class Tx_TlPhotoblog_Domain_Model_Article_Test extends tx_phpunit_testcase {

	/** @var Tx_TlPhotoblog_Domain_Model_Article */
	protected $article;

	public function setUp() {
		$this->article = new Tx_TlPhotoblog_Domain_Model_Article();
	}

	/**
	 * @test
	 */
	public function canGetAndSetProperties() {
		// title
		$this->article->setTitle('some title');
		$this->assertEquals('some title', $this->article->getTitle());

		// smallimage

		// image

		// text

		// category

		// comments

		// tags

		// galleryimage
	}

}
