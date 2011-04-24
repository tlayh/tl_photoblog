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
 * Comment
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */
class Tx_TlPhotoblog_Domain_Model_Comment extends Tx_Extbase_DomainObject_AbstractEntity {
	
	/**
	 * name
	 * @validate NotEmpty
	 * @var string
	 */
	protected $name;
	
	/**
	 * email
	 * @validate NotEmpty
	 * @var string
	 */
	protected $email;
	
	/**
	 * website
	 * @var string
	 */
	protected $website;
	
	/**
	 * comment
	 * @validate NotEmpty
	 * @var string
	 */
	protected $comment;

	/**
	 * crdate
	 * @var DateTime
	 */
	protected $crdate;

	/**
	 * Setter for name
	 *
	 * @param string $name name
	 * @return void
	 */
	public function setName($name) {
		$this->name = $name;
	}

	/**
	 * Getter for name
	 *
	 * @return string name
	 */
	public function getName() {
		return $this->name;
	}
	
	/**
	 * Setter for email
	 *
	 * @param string $email email
	 * @return void
	 */
	public function setEmail($email) {
		$this->email = $email;
	}

	/**
	 * Getter for email
	 *
	 * @return string email
	 */
	public function getEmail() {
		return $this->email;
	}
	
	/**
	 * Setter for website
	 *
	 * @param string $website website
	 * @return void
	 */
	public function setWebsite($website) {
		$this->website = $website;
	}

	/**
	 * Getter for website
	 *
	 * @return string website
	 */
	public function getWebsite() {
		return $this->website;
	}
	
	/**
	 * Setter for comment
	 *
	 * @param string $comment comment
	 * @return void
	 */
	public function setComment($comment) {
		$this->comment = $comment;
	}

	/**
	 * Getter for comment
	 *
	 * @return string comment
	 */
	public function getComment() {
		return $this->comment;
	}

	/**
	 * @param DateTime $crdate
	 * @return void
	 */
	public function setCrdate(DateTime $crdate) {
		$this->crdate = $crdate;
	}

	/**
	 * @return DateTime
	 */
	public function getCrdate() {
		return $this->crdate;
	}

}
?>
