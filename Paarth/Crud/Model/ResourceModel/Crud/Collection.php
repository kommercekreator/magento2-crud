<?php
namespace Paarth\Crud\Model\ResourceModel\Crud;
/**
* Subscription Collection
*/
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection {
/**
* Initialize resource collection
*
* @return void
*/
public function _construct() {
   $this->_init('Paarth\Crud\Model\Crud','Paarth\Crud\Model\ResourceModel\Crud');
}
}