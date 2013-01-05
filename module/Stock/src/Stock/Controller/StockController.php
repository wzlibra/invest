<?php
namespace Stock\Controller;

use Zend\View\Model\ViewModel;

use Zend\Mvc\Controller\AbstractActionController;

class StockController extends AbstractActionController {
	public function indexAction() {
		$vm = new ViewModel();
		$vm->setTemplate("stock/stock/index");
		
		return $vm;
	}
	public function addAction() {
		//return new ViewModel();
	}
	public function editAction() {
		//return new ViewModel();
	}
	public function deleteAction() {
		//return new ViewModel();
	}
}