<?php

namespace KSD\KsdCards\Tests;
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
 * Test case for class \KSD\KsdCards\Domain\Model\Order.
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @package TYPO3
 * @subpackage KSD Tageskarten
 *
 * @author Sammy Abdel Gawwad <s.a.gawwad@sunrise.ch>
 */
class OrderTest extends \TYPO3\CMS\Extbase\Tests\Unit\BaseTestCase {
	/**
	 * @var \KSD\KsdCards\Domain\Model\Order
	 */
	protected $fixture;

	public function setUp() {
		$this->fixture = new \KSD\KsdCards\Domain\Model\Order();
	}

	public function tearDown() {
		unset($this->fixture);
	}

	/**
	 * @test
	 */
	public function getDatetimeReturnsInitialValueForDateTime() { }

	/**
	 * @test
	 */
	public function setDatetimeForDateTimeSetsDatetime() { }
	
	/**
	 * @test
	 */
	public function getAmountReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getAmount()
		);
	}

	/**
	 * @test
	 */
	public function setAmountForIntegerSetsAmount() { 
		$this->fixture->setAmount(12);

		$this->assertSame(
			12,
			$this->fixture->getAmount()
		);
	}
	
	/**
	 * @test
	 */
	public function getStatusReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setStatusForStringSetsStatus() { 
		$this->fixture->setStatus('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getStatus()
		);
	}
	
	/**
	 * @test
	 */
	public function getPersonIDReturnsInitialValueForPerson() { 
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->fixture->getPersonID()
		);
	}

	/**
	 * @test
	 */
	public function setPersonIDForObjectStorageContainingPersonSetsPersonID() { 
		$personID = new \KSD\KsdCards\Domain\Model\Person();
		$objectStorageHoldingExactlyOnePersonID = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$objectStorageHoldingExactlyOnePersonID->attach($personID);
		$this->fixture->setPersonID($objectStorageHoldingExactlyOnePersonID);

		$this->assertSame(
			$objectStorageHoldingExactlyOnePersonID,
			$this->fixture->getPersonID()
		);
	}
	
	/**
	 * @test
	 */
	public function addPersonIDToObjectStorageHoldingPersonID() {
		$personID = new \KSD\KsdCards\Domain\Model\Person();
		$objectStorageHoldingExactlyOnePersonID = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$objectStorageHoldingExactlyOnePersonID->attach($personID);
		$this->fixture->addPersonID($personID);

		$this->assertEquals(
			$objectStorageHoldingExactlyOnePersonID,
			$this->fixture->getPersonID()
		);
	}

	/**
	 * @test
	 */
	public function removePersonIDFromObjectStorageHoldingPersonID() {
		$personID = new \KSD\KsdCards\Domain\Model\Person();
		$localObjectStorage = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$localObjectStorage->attach($personID);
		$localObjectStorage->detach($personID);
		$this->fixture->addPersonID($personID);
		$this->fixture->removePersonID($personID);

		$this->assertEquals(
			$localObjectStorage,
			$this->fixture->getPersonID()
		);
	}
	
}
?>