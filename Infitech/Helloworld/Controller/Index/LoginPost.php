<?php
/**
 * Created by PhpStorm.
 * User: wsun
 * Date: 11/09/2015
 * Time: 3:54 PM
 */
namespace Infitech\Helloworld\Controller\Index;

class LoginPost extends \Magento\Customer\Controller\Account\LoginPost
{
    /**
     * Product edit form
     *
     * @return \Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        $this->messageManager->addSuccess('Message from new controller.');
        return parent::execute();
    }
}