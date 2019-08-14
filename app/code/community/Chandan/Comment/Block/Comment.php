<?php
class Chandan_Comment_Block_Comment extends Mage_Core_Block_Template
{
	public function _prepareLayout()
    {
		return parent::_prepareLayout();
    }
    
     public function getComment()     
     { 
        if (!$this->hasData('comment')) {
            $this->setData('comment', Mage::registry('comment'));
        }
        return $this->getData('comment');
        
    }
}