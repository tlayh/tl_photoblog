<?php
/***************************************************************
*  Copyright notice
*
*  (c)  TODO - INSERT COPYRIGHT
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
 * Repository for Tx_TlPhotoblog_Domain_Model_Article
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */
class Tx_TlPhotoblog_Domain_Repository_ArticleRepository extends Tx_Extbase_Persistence_Repository {

	/**
	 * @param Tx_TlPhotoblog_Domain_Model_Category $category
	 * @return query result
	 */
	public function findByCategory(Tx_TlPhotoblog_Domain_Model_Category $category) {
		$query = $this->createQuery();
		$query->matching($query->contains('category', $category));
		return $query->execute();
	}

	/**
	 * @param Tx_Extbase_Persistence_ObjectStorage $categories
	 * @param Tx_TlPhotoblog_Domain_Model_Article $currentArticle
	 * @param int $max
	 * @return query result
	 */
	public function findByCategories(Tx_Extbase_Persistence_ObjectStorage $categories, Tx_TlPhotoblog_Domain_Model_Article $currentArticle, $max) {
		$query = $this->createQuery();
		foreach($categories as $cat) {
			$query->matching($query->contains('category', $cat));
		}

		$result = $query->execute()->toArray();

		$count = count($result);

		if($count > $max) {
			$resultKeys = array_rand($result, $max);
			foreach($resultKeys as $key) {
				$randResult[] = $result[$key];
			}
		} else {
			$randResult = $result;
		}

		return $randResult;
	}

	/**
	 * find the previous post
	 *
	 * @param Tx_TlPhotoblog_Domain_Model_Article $article
	 * @return Tx_TlPhotoblog_Domain_Model_Article
	 */
	public function findPrevious(Tx_TlPhotoblog_Domain_Model_Article $article, Tx_TlPhotoblog_Domain_Model_Category $category = null) {
		$query = $this->createQuery();

		// build constraint array
		$constraint = array();
		$constraint[] = $query->lessThan('uid', $article->getUid());
		if($category != null) {
			$constraint[] = $query->contains('category', $category);
		}
		$query->matching($query->logicalAnd($constraint));

		$query->setOrderings(array('uid' => Tx_Extbase_Persistence_QueryInterface::ORDER_DESCENDING));
		return $query->execute()->getFirst();
	}

	/**
	 * find the next post
	 *
	 * @param Tx_TlPhotoblog_Domain_Model_Article $article
	 * @return Tx_TlPhotoblog_Domain_Model_Article
	 */
	public function findNext(Tx_TlPhotoblog_Domain_Model_Article $article, Tx_TlPhotoblog_Domain_Model_Category $category = null) {
		$query = $this->createQuery();

		// build constraint array
		$constraint = array();
		$constraint[] = $query->greaterThan('uid', $article->getUid());
		if($category != null) {
			$constraint[] = $query->contains('category', $category);
		}
		$query->matching($query->logicalAnd($constraint));
		
		$query->setOrderings(array('uid' => Tx_Extbase_Persistence_QueryInterface::ORDER_ASCENDING));
		return $query->execute()->getFirst();
	}


}
?>
