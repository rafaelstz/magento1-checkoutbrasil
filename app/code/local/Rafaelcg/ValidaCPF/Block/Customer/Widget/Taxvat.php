<?php
 
class Rafaelcg_ValidaCPF_Block_Customer_Widget_Taxvat extends Mage_Customer_Block_Widget_Taxvat {

    public function _construct()
    {
        parent::_construct();
        $this->setTemplate('rafaelcg/validacpf/customer/widget/taxvat.phtml');
    }
}