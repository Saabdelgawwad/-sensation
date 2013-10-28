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
 * Test case for class \KSD\KsdCards\Domain\Model\Person.
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
class PersonTest extends \TYPO3\CMS\Extbase\Tests\Unit\BaseTestCase {
	/**
	 * @var \KSD\KsdCards\Domain\Model\Person
	 */
	protected $fixture;

	public function setUp() {
		$this->fixture = new \KSD\KsdCards\Domain\Model\Person();
	}

	public function tearDown() {
		unset($this->fixture);
	}

	/**
	 * @test
	 */
	public function getSurnameReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setSurnameForStringSetsSurname() { 
		$this->fixture->setSurname('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getSurname()
		);
	}
	
	/**
	 * @test
	 */
	public function getLastnameReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setLastnameForStringSetsLastname() { 
		$this->fixture->setLastname('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getLastname()
		);
	}
	
	/**
	 * @test
	 */
	public function getAddressReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setAddressForStringSetsAddress() { 
		$this->fixture->setAddress('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getAddress()
		);
	}
	
	/**
	 * @test
	 */
	public function getPostcodeReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getPostcode()
		);
	}

	/**
	 * @test
	 */
	public function setPostcodeForIntegerSetsPostcode() { 
		$this->fixture->setPostcode(12);

		$this->assertSame(
			12,
			$this->fixture->getPostcode()
		);
	}
	
	/**
	 * @test
	 */
	public function getLocationReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setLocationForStringSetsLocation() { 
		$this->fixture->setLocation('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getLocation()
		);
	}
	
	/**
	 * @test
	 */
	public function getEmailReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setEmailForStringSetsEmail() { 
		$this->fixture->setEmail('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getEmail()
		);
	}
	
	/**
	 * @test
	 */
	public function getPhoneReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getPhone()
		);
	}

	/**
	 * @test
	 */
	public function setPhoneForIntegerSetsPhone() { 
		$this->fixture->setPhone(12);

		$this->assertSame(
			12,
			$this->fixture->getPhone()
		);
	}
	
	/**
	 * @test
	 */
	public function getNoteReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setNoteForStringSetsNote() { 
		$this->fixture->setNote('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getNote()
		);
	}
	
}
?>