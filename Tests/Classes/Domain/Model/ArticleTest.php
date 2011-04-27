<?php

require_once(t3lib_extMgm::extPath('tl_photoblog').'/Classes/Domain/Model/Article.php');
require_once(t3lib_extMgm::extPath('tl_photoblog').'/Classes/Domain/Model/Category.php');
require_once(t3lib_extMgm::extPath('tl_photoblog').'/Classes/Domain/Model/Comment.php');

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
		$this->article->setSmallimage('path/to/image.png');
		$this->assertEquals('path/to/image.png', $this->article->getSmallimage());

		// image
		$this->article->setImage('some/really/big/image.png');
		$this->assertEquals('some/really/big/image.png', $this->article->getImage());

		// text
		$this->article->setText('some text');
		$this->assertEquals('some text', $this->article->getText());

		// category
		$category = new Tx_Extbase_Persistence_ObjectStorage();
		$this->article->setCategory($category);
		$this->assertEquals($category, $this->article->getCategory());

		// comments
		$comment = new Tx_Extbase_Persistence_ObjectStorage();
		$this->article->setComments($comment);
		$this->assertEquals($comment, $this->article->getComments());

		// tags
		$tag = new Tx_Extbase_Persistence_ObjectStorage();
		$this->article->setTags($tag);
		$this->assertEquals($tag, $this->article->getTags());

		// galleryimage
		$galleryimage = new Tx_Extbase_Persistence_ObjectStorage();
		$this->article->setGalleryimage($galleryimage);
		$this->assertEquals($galleryimage, $this->article->getGalleryimage());
	}

}
