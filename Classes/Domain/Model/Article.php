<?php

/***************************************************************
*  Copyright notice
*
*  (c) 2010 Thomas Layh <thomas@layh.com>
*  			
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 2 of the License, or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/

/**
 * Article
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */
class Tx_TlPhotoblog_Domain_Model_Article extends Tx_Extbase_DomainObject_AbstractEntity {
	
	/**
	 * title
	 * @var string
	 */
	protected $title;
	
	/**
	 * smallimage
	 * @var string
	 */
	protected $smallimage;
	
	/**
	 * image
	 * @var string
	 */
	protected $image;
	
	/**
	 * text
	 * @var string
	 */
	protected $text;
	
	/**
	 * category
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_TlPhotoblog_Domain_Model_Category>
	 */
	protected $category;
	
	/**
	 * comments
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_TlPhotoblog_Domain_Model_Comment>
	 */
	protected $comments;
	
	/**
	 * tags
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_TlPhotoblog_Domain_Model_Tag>
	 */
	protected $tags;
	
	/**
	 * galleryimage
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_TlPhotoblog_Domain_Model_Galleryimage>
	 */
	protected $galleryimage;
	
	
	
	/**
	 * Setter for title
	 *
	 * @param string $title title
	 * @return void
	 */
	public function setTitle($title) {
		$this->title = $title;
	}

	/**
	 * Getter for title
	 *
	 * @return string title
	 */
	public function getTitle() {
		return $this->title;
	}
	
	/**
	 * Setter for smallimage
	 *
	 * @param string $smallimage smallimage
	 * @return void
	 */
	public function setSmallimage($smallimage) {
		$this->smallimage = $smallimage;
	}

	/**
	 * Getter for smallimage
	 *
	 * @return string smallimage
	 */
	public function getSmallimage() {
		return $this->smallimage;
	}
	
	/**
	 * Setter for image
	 *
	 * @param string $image image
	 * @return void
	 */
	public function setImage($image) {
		$this->image = $image;
	}

	/**
	 * Getter for image
	 *
	 * @return string image
	 */
	public function getImage() {
		return $this->image;
	}
	
	/**
	 * Setter for text
	 *
	 * @param string $text text
	 * @return void
	 */
	public function setText($text) {
		$this->text = $text;
	}

	/**
	 * Getter for text
	 *
	 * @return string text
	 */
	public function getText() {
		return $this->text;
	}
	
	/**
	 * Setter for category
	 *
	 * @param Tx_Extbase_Persistence_ObjectStorage<Tx_TlPhotoblog_Domain_Model_Category> $category category
	 * @return void
	 */
	public function setCategory(Tx_Extbase_Persistence_ObjectStorage $category) {
		$this->category = $category;
	}

	/**
	 * Getter for category
	 *
	 * @return Tx_Extbase_Persistence_ObjectStorage<Tx_TlPhotoblog_Domain_Model_Category> category
	 */
	public function getCategory() {
		return $this->category;
	}
	
	/**
	 * Adds a Category
	 *
	 * @param Tx_TlPhotoblog_Domain_Model_Category The Category to be added
	 * @return void
	 */
	public function addCategory(Tx_TlPhotoblog_Domain_Model_Category $category) {
		$this->category->attach($category);
	}
	
	/**
	 * Removes a Category
	 *
	 * @param Tx_TlPhotoblog_Domain_Model_Category The Category to be removed
	 * @return void
	 */
	public function removeCategory(Tx_TlPhotoblog_Domain_Model_Category $category) {
		$this->category->detach($category);
	}
	
	/**
	 * Setter for comments
	 *
	 * @param Tx_Extbase_Persistence_ObjectStorage<Tx_TlPhotoblog_Domain_Model_Comment> $comments comments
	 * @return void
	 */
	public function setComments(Tx_Extbase_Persistence_ObjectStorage $comments) {
		$this->comments = $comments;
	}

	/**
	 * Getter for comments
	 *
	 * @return Tx_Extbase_Persistence_ObjectStorage<Tx_TlPhotoblog_Domain_Model_Comment> comments
	 */
	public function getComments() {
		return $this->comments;
	}
	
	/**
	 * Adds a Comment
	 *
	 * @param Tx_TlPhotoblog_Domain_Model_Comment The Comment to be added
	 * @return void
	 */
	public function addComment(Tx_TlPhotoblog_Domain_Model_Comment $comment) {
		$this->comments->attach($comment);
	}
	
	/**
	 * Removes a Comment
	 *
	 * @param Tx_TlPhotoblog_Domain_Model_Comment The Comment to be removed
	 * @return void
	 */
	public function removeComment(Tx_TlPhotoblog_Domain_Model_Comment $comment) {
		$this->comments->detach($comment);
	}
	
	/**
	 * Setter for tags
	 *
	 * @param Tx_Extbase_Persistence_ObjectStorage<Tx_TlPhotoblog_Domain_Model_Tag> $tags tags
	 * @return void
	 */
	public function setTags(Tx_Extbase_Persistence_ObjectStorage $tags) {
		$this->tags = $tags;
	}

	/**
	 * Getter for tags
	 *
	 * @return Tx_Extbase_Persistence_ObjectStorage<Tx_TlPhotoblog_Domain_Model_Tag> tags
	 */
	public function getTags() {
		return $this->tags;
	}
	
	/**
	 * Adds a Tag
	 *
	 * @param Tx_TlPhotoblog_Domain_Model_Tag The Tag to be added
	 * @return void
	 */
	public function addTag(Tx_TlPhotoblog_Domain_Model_Tag $tag) {
		$this->tags->attach($tag);
	}
	
	/**
	 * Removes a Tag
	 *
	 * @param Tx_TlPhotoblog_Domain_Model_Tag The Tag to be removed
	 * @return void
	 */
	public function removeTag(Tx_TlPhotoblog_Domain_Model_Tag $tag) {
		$this->tags->detach($tag);
	}
	
	/**
	 * Setter for galleryimage
	 *
	 * @param Tx_Extbase_Persistence_ObjectStorage<Tx_TlPhotoblog_Domain_Model_Galleryimage> $galleryimage galleryimage
	 * @return void
	 */
	public function setGalleryimage(Tx_Extbase_Persistence_ObjectStorage $galleryimage) {
		$this->galleryimage = $galleryimage;
	}

	/**
	 * Getter for galleryimage
	 *
	 * @return Tx_Extbase_Persistence_ObjectStorage<Tx_TlPhotoblog_Domain_Model_Galleryimage> galleryimage
	 */
	public function getGalleryimage() {
		return $this->galleryimage;
	}
	
	/**
	 * Adds a Galleryimage
	 *
	 * @param Tx_TlPhotoblog_Domain_Model_Galleryimage The Galleryimage to be added
	 * @return void
	 */
	public function addGalleryimage(Tx_TlPhotoblog_Domain_Model_Galleryimage $galleryimage) {
		$this->galleryimage->attach($galleryimage);
	}
	
	/**
	 * Removes a Galleryimage
	 *
	 * @param Tx_TlPhotoblog_Domain_Model_Galleryimage The Galleryimage to be removed
	 * @return void
	 */
	public function removeGalleryimage(Tx_TlPhotoblog_Domain_Model_Galleryimage $galleryimage) {
		$this->galleryimage->detach($galleryimage);
	}
	
}
?>