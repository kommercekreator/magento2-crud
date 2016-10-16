# Magento2 CRUD Module


<h2>Welcome</h2>
Welcome to Magento 2 CRUD Module! here you will learn magento2 crud opertions.

These instructions guide you how to get, save and delete data using Model, Resource Model, Collection in magento2 custom module.

## Step1

Go to magento root directory then run this command to install CRUD module.

php bin/magento setup:upgrade


## Model, Resource Model and Collection.

#Model 

<pre>

namespace Paarth\Crud\Model;
class Crud extends	\Magento\Framework\Model\AbstractModel  {
			
			public function __construct(
							\Magento\Framework\Model\Context $context,
							\Magento\Framework\Registry $registry,
							\Magento\Framework\Model\ResourceModel\AbstractResource
							$resource = null,
							\Magento\Framework\Data\Collection\AbstractDb
							$resourceCollection = null,
							array $data = []
			)

			{
					parent::__construct($context, $registry, $resource,$resourceCollection, $data);
			}
							public function _construct() {
							$this->_init('\Paarth\Crud\Model\ResourceModel\Crud');
							}
}

</pre>


# Resource Model

<pre>

namespace Paarth\Crud\Model\ResourceModel;

class Crud extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb {
		public function _construct() {
		$this->_init('custom_table','id');
		}
}
</pre>

# Collection 

<pre>
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

</pre>


## How to save ,delete and get data using Model class.

<pre>

$crudObj = $this->_objectManager->create('Paarth\Crud\Model\Crud');
				    
					  // get collection 
					  $coll = $crudObj->getCollection();
					  
					  print_r($coll);
					
					
				   // save into table (custom_table auto generated using schema script)
				      $crudObj->setName("hello");
				      $crudObj->save();


</pre> 
 
