<?php
/**
 * Created by PhpStorm.
 * User: wsun
 * Date: 13/05/2015
 * Time: 5:02 PM
 */
namespace Infitech\Helloworld\Block;

class Login extends \Magento\Customer\Block\Form\Login
{

    public function getPostActionUrl()
    {
        return $this->_customerUrl->getLoginPostUrl();
    }

    protected function _toHtml()
    {
        $this->setModuleName($this->extractModuleName('Magento\Customer\Block\Form\Login'));
        return parent::_toHtml();
    }
}