<?php
class Goigi_Comment_Block_Adminhtml_Comment extends Mage_Adminhtml_Block_Widget_Grid_Container
{
  public function __construct()
  {
    $this->_controller = 'adminhtml_comment';
    $this->_blockGroup = 'comment';
    $this->_headerText = Mage::helper('comment')->__('Comment Manager');
    $this->_addButtonLabel = Mage::helper('comment')->__('Add Comment');
    parent::__construct();
	 $this->_removeButton('add');
  }
}