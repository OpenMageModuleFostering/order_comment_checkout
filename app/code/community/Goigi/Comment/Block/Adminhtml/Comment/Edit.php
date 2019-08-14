<?php

class Goigi_Comment_Block_Adminhtml_Comment_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{
    public function __construct()
    {
        parent::__construct();
		$this->_removeButton('save');		
		$this->_removeButton('reset'); 
		
		$this->_objectId = 'id';
        $this->_blockGroup = 'comment';
        $this->_controller = 'adminhtml_comment';
        
        $this->_updateButton('save', 'label', Mage::helper('comment')->__('Save Comment'));
        $this->_updateButton('delete', 'label', Mage::helper('comment')->__('Delete Comment'));
		
      /*  $this->_addButton('saveandcontinue', array(
            'label'     => Mage::helper('adminhtml')->__('Save And Continue Edit'),
            'onclick'   => 'saveAndContinueEdit()',
            'class'     => 'save',
        ), -100);
*/
        $this->_formScripts[] = "
            function toggleEditor() {
                if (tinyMCE.getInstanceById('comment_content') == null) {
                    tinyMCE.execCommand('mceAddControl', false, 'comment_content');
                } else {
                    tinyMCE.execCommand('mceRemoveControl', false, 'comment_content');
                }
            }

            function saveAndContinueEdit(){
                editForm.submit($('edit_form').action+'back/edit/');
            }
        ";
    }

    public function getHeaderText()
    {
        if( Mage::registry('comment_data') && Mage::registry('comment_data')->getId() ) {
            return Mage::helper('comment')->__("View Comment '%s'", $this->htmlEscape(Mage::registry('comment_data')->getTitle()));
        } else {
            return Mage::helper('comment')->__('Add Comment');
        }
    }
}