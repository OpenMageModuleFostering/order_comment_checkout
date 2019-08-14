<?php
class Chandan_Comment_Block_Commentpage extends Mage_Core_Block_Template
{
	protected function _toHtml()
    {
        $this->setTemplate('comment/comment.phtml');
        return parent::_toHtml();
    }
}