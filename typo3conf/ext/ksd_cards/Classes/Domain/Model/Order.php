<?php
namespace KSD\KsdCards\Domain\Model;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2013 Sammy Abdel Gawwad <s.a.gawwad@sunrise.ch>, KSD
 *  
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
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
 *
 *
 * @package ksd_cards
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 */
class Order extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * Bestelldatum
	 *
	 * @var \DateTime
	 * @validate NotEmpty
	 */
	protected $datetime;

	/**
	 * Anzahl Tageskarten
	 *
	 * @var \integer
	 * @validate NotEmpty
	 */
	protected $amount;

	/**
	 * Bestell Status
	 *
	 * @var \string
	 * @validate NotEmpty
	 */
	protected $status;

	/**
	 * Fremdschlüssel
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\KSD\KsdCards\Domain\Model\Person>
	 */
	protected $personID;

	/**
	 * __construct
	 *
	 * @return Order
	 */
	public function __construct() {
		//Do not remove the next line: It would break the functionality
		$this->initStorageObjects();
	}

	/**
	 * Initializes all ObjectStorage properties.
	 *
	 * @return void
	 */
	protected function initStorageObjects() {
		/**
		 * Do not modify this method!
		 * It will be rewritten on each save in the extension builder
		 * You may modify the constructor of this class instead
		 */
		$this->personID = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
	}

	/**
	 * Returns the datetime
	 *
	 * @return \DateTime $datetime
	 */
	public function getDatetime() {
		return $this->datetime;
	}

	/**
	 * Sets the datetime
	 *
	 * @param \DateTime $datetime
	 * @return void
	 */
	public function setDatetime($datetime) {
		$this->datetime = $datetime;
	}

	/**
	 * Returns the amount
	 *
	 * @return \integer $amount
	 */
	public function getAmount() {
		return $this->amount;
	}

	/**
	 * Sets the amount
	 *
	 * @param \integer $amount
	 * @return void
	 */
	public function setAmount($amount) {
		$this->amount = $amount;
	}

	/**
	 * Returns the status
	 *
	 * @return \string $status
	 */
	public function getStatus() {
		return $this->status;
	}

	/**
	 * Sets the status
	 *
	 * @param \string $status
	 * @return void
	 */
	public function setStatus($status) {
		$this->status = $status;
	}

	/**
	 * Adds a Person
	 *
	 * @param \KSD\KsdCards\Domain\Model\Person $personID
	 * @return void
	 */
	public function addPersonID(\KSD\KsdCards\Domain\Model\Person $personID) {
		$this->personID->attach($personID);
	}

	/**
	 * Removes a Person
	 *
	 * @param \KSD\KsdCards\Domain\Model\Person $personIDToRemove The Person to be removed
	 * @return void
	 */
	public function removePersonID(\KSD\KsdCards\Domain\Model\Person $personIDToRemove) {
		$this->personID->detach($personIDToRemove);
	}

	/**
	 * Returns the personID
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\KSD\KsdCards\Domain\Model\Person> $personID
	 */
	public function getPersonID() {
		return $this->personID;
	}

	/**
	 * Sets the personID
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\KSD\KsdCards\Domain\Model\Person> $personID
	 * @return void
	 */
	public function setPersonID(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $personID) {
		$this->personID = $personID;
	}

}
?>