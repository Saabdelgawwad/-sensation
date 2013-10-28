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
class Person extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * Vorname
	 *
	 * @var \string
	 * @validate NotEmpty
	 */
	protected $surname;

	/**
	 * Nachname
	 *
	 * @var \string
	 * @validate NotEmpty
	 */
	protected $lastname;

	/**
	 * Adresse
	 *
	 * @var \string
	 * @validate NotEmpty
	 */
	protected $address;

	/**
	 * Postleihzahl
	 *
	 * @var \integer
	 * @validate NotEmpty
	 */
	protected $postcode;

	/**
	 * Ort
	 *
	 * @var \string
	 * @validate NotEmpty
	 */
	protected $location;

	/**
	 * E-Mail Adresse
	 *
	 * @var \string
	 * @validate NotEmpty
	 */
	protected $email;

	/**
	 * Telefonnummer
	 *
	 * @var \integer
	 */
	protected $phone;

	/**
	 * Bemerkung
	 *
	 * @var \string
	 */
	protected $note;

	/**
	 * Returns the surname
	 *
	 * @return \string $surname
	 */
	public function getSurname() {
		return $this->surname;
	}

	/**
	 * Sets the surname
	 *
	 * @param \string $surname
	 * @return void
	 */
	public function setSurname($surname) {
		$this->surname = $surname;
	}

	/**
	 * Returns the lastname
	 *
	 * @return \string $lastname
	 */
	public function getLastname() {
		return $this->lastname;
	}

	/**
	 * Sets the lastname
	 *
	 * @param \string $lastname
	 * @return void
	 */
	public function setLastname($lastname) {
		$this->lastname = $lastname;
	}

	/**
	 * Returns the address
	 *
	 * @return \string $address
	 */
	public function getAddress() {
		return $this->address;
	}

	/**
	 * Sets the address
	 *
	 * @param \string $address
	 * @return void
	 */
	public function setAddress($address) {
		$this->address = $address;
	}

	/**
	 * Returns the postcode
	 *
	 * @return \integer $postcode
	 */
	public function getPostcode() {
		return $this->postcode;
	}

	/**
	 * Sets the postcode
	 *
	 * @param \integer $postcode
	 * @return void
	 */
	public function setPostcode($postcode) {
		$this->postcode = $postcode;
	}

	/**
	 * Returns the location
	 *
	 * @return \string $location
	 */
	public function getLocation() {
		return $this->location;
	}

	/**
	 * Sets the location
	 *
	 * @param \string $location
	 * @return void
	 */
	public function setLocation($location) {
		$this->location = $location;
	}

	/**
	 * Returns the email
	 *
	 * @return \string $email
	 */
	public function getEmail() {
		return $this->email;
	}

	/**
	 * Sets the email
	 *
	 * @param \string $email
	 * @return void
	 */
	public function setEmail($email) {
		$this->email = $email;
	}

	/**
	 * Returns the phone
	 *
	 * @return \integer $phone
	 */
	public function getPhone() {
		return $this->phone;
	}

	/**
	 * Sets the phone
	 *
	 * @param \integer $phone
	 * @return void
	 */
	public function setPhone($phone) {
		$this->phone = $phone;
	}

	/**
	 * Returns the note
	 *
	 * @return \string $note
	 */
	public function getNote() {
		return $this->note;
	}

	/**
	 * Sets the note
	 *
	 * @param \string $note
	 * @return void
	 */
	public function setNote($note) {
		$this->note = $note;
	}

}
?>