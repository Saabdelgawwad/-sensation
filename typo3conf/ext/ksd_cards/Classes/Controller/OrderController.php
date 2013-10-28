<?php
namespace KSD\KsdCards\Controller;

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
class OrderController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

	/**
	 * action new
	 *
	 * @param \KSD\KsdCards\Domain\Model\Order $newOrder
	 * @dontvalidate $newOrder
	 * @return void
	 */
	public function newAction(\KSD\KsdCards\Domain\Model\Order $newOrder = NULL) {
		$this->view->assign('newOrder', $newOrder);
	}

	/**
	 * action create
	 *
	 * @param \KSD\KsdCards\Domain\Model\Order $newOrder
	 * @return void
	 */
	public function createAction(\KSD\KsdCards\Domain\Model\Order $newOrder) {
		$this->orderRepository->add($newOrder);
		$this->flashMessageContainer->add('Your new Order was created.');
		$this->redirect('list');
	}

}
?>