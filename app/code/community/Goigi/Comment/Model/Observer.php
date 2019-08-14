<?php

class Goigi_Comment_Model_Observer extends Varien_Object
{
	 public function commentadd(Varien_Event_Observer $observer) {
		$order = $observer->getEvent()->getOrder();
		$orderid = $order->getIncrementId();
		$customeremail = $order->getCustomerEmail();	
		$orderComment = Mage::getSingleton('core/session')->gettextval();
		$write = Mage::getSingleton('core/resource')->getConnection('core_write');
		$write->insert(
        "comment", 
        array("ordernumber" => $orderid, "customeremail" => $customeremail, "comment" => $orderComment)
		);	
		Mage::getSingleton('core/session')->unstextval();
    }   
}