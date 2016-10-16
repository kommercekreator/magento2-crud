<?php
namespace Paarth\Crud\Model\ResourceModel;

class Crud extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb {
		public function _construct() {
		$this->_init('custom_table','id');
		}
}