<?php

class Goigi_Comment_Block_Adminhtml_Comment_Edit_Tab_Form extends Mage_Adminhtml_Block_Widget_Form
{
  protected function _prepareForm()
  {
      $form = new Varien_Data_Form();
      $this->setForm($form);
      $fieldset = $form->addFieldset('comment_form', array('legend'=>Mage::helper('comment')->__('Comment information')));
     
      $fieldset->addField('customeremail', 'text', array(
          'label'     => Mage::helper('comment')->__('Customer Email Address'),
          'class'     => 'required-entry',
          'required'  => true,
          'name'      => 'customeremail',
		  'readonly' => TRUE,		  
      ));
	  
	  $fieldset->addField('ordernumber', 'text', array(
          'label'     => Mage::helper('comment')->__('Order Number'),
          'class'     => 'required-entry',
          'required'  => true,
          'name'      => 'ordernumber',
		  'readonly' => TRUE,
      ));

	$fieldset->addField('comment', 'editor', array(
          'name'      => 'comment',
          'label'     => Mage::helper('comment')->__('Order Comment'),
          'title'     => Mage::helper('comment')->__('Order Comment'),
          'style'     => 'width:500px; height:300px;',
          'wysiwyg'   => true,
          'required'  => true,
		  'readonly' => TRUE,
      ));

	/*	
      $fieldset->addField('status', 'select', array(
          'label'     => Mage::helper('comment')->__('Status'),
          'name'      => 'status',
          'values'    => array(
              array(
                  'value'     => 1,
                  'label'     => Mage::helper('comment')->__('Enabled'),
              ),

              array(
                  'value'     => 2,
                  'label'     => Mage::helper('comment')->__('Disabled'),
              ),
          ),
      ));
     
     */
      if ( Mage::getSingleton('adminhtml/session')->getCommentData() )
      {
          $form->setValues(Mage::getSingleton('adminhtml/session')->getCommentData());
          Mage::getSingleton('adminhtml/session')->setCommentData(null);
      } elseif ( Mage::registry('comment_data') ) {
          $form->setValues(Mage::registry('comment_data')->getData());
      }
      return parent::_prepareForm();
  }
}