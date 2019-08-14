<?php
class Chandan_Comment_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {    	    		
		$this->loadLayout();     
		$this->renderLayout();
    }
	
	 public function textvalAction()
    {
		Mage::getSingleton('core/session')->unstextval();
    	$val = $_REQUEST['ordercomment'];
		Mage::getSingleton('core/session')->settextval($val);		
	}
}