<?php
		namespace Paarth\Crud\Controller\Index;
		use Magento\Backend\App\Action\Context;
	

class Index extends \Magento\Framework\App\Action\Action
{

    

			public function execute()
			{
                     
                     $this->_view->loadLayout();

					  $crudObj = $this->_objectManager->create('Paarth\Crud\Model\Crud');
				    
					  // get collection 
					  $coll = $crudObj->getCollection();
					  
					  print_r($coll);
					
					
				   // save into table
				      $crudObj->setName("hello");
				  
				      $crudObj->save();
					
					
					
                   $this->_view->renderLayout();
	   
				  
				  

			}
			
			
			
			
			
			

    
	
	

}