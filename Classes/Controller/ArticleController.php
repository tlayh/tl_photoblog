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
 * Controller for the Article object
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */

class Tx_TlPhotoblog_Controller_ArticleController extends Tx_Extbase_MVC_Controller_ActionController {
	

	/**
	 * @var Tx_TlPhotoblog_Domain_Repository_ArticleRepository
	 */
	protected $articleRepository;

	/**
	 * @var Tx_TlPhotoblog_Domain_Repository_CategoryRepository
	 */
	protected $categoryRepository;

	protected function initializeAction() {
		$this->articleRepository = t3lib_div::makeInstance('Tx_TlPhotoblog_Domain_Repository_ArticleRepository');
		$this->categoryRepository = t3lib_div::makeInstance('Tx_TlPhotoblog_Domain_Repository_CategoryRepository');
	}

	/**
	 * index action
	 * @dontvalidate $category
	 * @return void
	 */
	public function indexAction(Tx_TlPhotoblog_Domain_Model_Category $category = NULL) {

		if(isset($this->settings['flexform']['category']) && $this->settings['list']['ignoreCategorySetting'] != 1) {
			$categoryId = $this->settings['flexform']['category'];
			$category = $this->categoryRepository->findByUid($categoryId);
		}

		if($category != NULL) {
			$this->view->assign('articles', $this->articleRepository->findByCategory($category));
		} else {
			$this->view->assign('articles', $this->articleRepository->findAll());
			$category = new Tx_TlPhotoblog_Domain_Model_Category();
		}

		$this->view->assign('category', $category);

		// convert categories to array to unshift the first element
		$categories = $this->categoryRepository->findAll()->toArray();
		$cat = new Tx_TlPhotoblog_Domain_Model_Category();
		$cat->setName('Alle');

		array_unshift($categories, $cat);

		$this->view->assign('itemsPerPage', $this->settings['list']['articlePerPage']);
		$this->view->assign('paginationAbove', $this->settings['list']['showPaginationAbove']);
		$this->view->assign('paginationBelow', $this->settings['list']['showPaginationBelow']);

		$this->view->assign('categories', $categories);
	}

	/**
	 * show action
	 * @param Tx_TlPhotoblog_Domain_Model_Article $article
	 * @dontvalidate $comment
	 * @return void
	 */
	public function showAction(Tx_TlPhotoblog_Domain_Model_Article $article, Tx_TlPhotoblog_Domain_Model_Comment $comment = NULL) {

		// get limit from settings
		$limit = $this->settings['single']['randomArticlePerArticle'];
		if(!is_numeric($limit) || $limit < 1) {
			// if no limit is set, set it to default
			$limit = 3;
		}

		if($this->settings['single']['showCameraInformation'] == 1) {
			$exifData = array();
			$filename = $article->getImage();
			$filename = 'uploads/tx_tlphotoblog/'.$filename;
			$exif = t3lib_div::makeInstance('Tx_TlPhotoblog_System_ExifData');
			$exifData = $exif->getExifData($filename);
			$this->view->assign('exifData', $exifData);
		}

		$this->view->assign('article', $article);

		// check for selection of settings.flexform.singleViewAddon
		$singleViewAddon = $this->settings['flexform']['singleViewAddon'];
		$this->view->assign('singleViewAddon', $singleViewAddon);

		// get category for next/previous function
		$category = NULL;
		if(isset($this->settings['flexform']['category']) && $this->settings['list']['ignoreCategorySetting'] != 1) {
			$categoryId = $this->settings['flexform']['category'];
			$category = $this->categoryRepository->findByUid($categoryId);
		}

		$this->view->assign('next', $this->articleRepository->findNext($article, $category));
		$this->view->assign('previous', $this->articleRepository->findPrevious($article, $category));
		$this->view->assign('category', $this->articleRepository->findByCategories($article->getCategory(), $article, $limit));
		$this->view->assign('comment', $comment);
	}

}
?>
