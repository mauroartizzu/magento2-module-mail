<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Shockwavemk\Mail\Base\Controller\Adminhtml\Mail;

class Edit extends \Shockwavemk\Mail\Base\Controller\Adminhtml\Mail
{
    protected $_mail;
    /**
     * Preview Newsletter template
     *
     * @return void|$this
     */
    public function execute()
    {
        $mailId = $this->_request->getParam('id');
        $this->_mail = $this->_objectManager->get('\Shockwavemk\Mail\Base\Model\Mail');
        $this->_mail->load($mailId);

        $this->_view->loadLayout();
        $this->_view->getPage()->getConfig()->getTitle()->prepend(__($this->_mail->getSubject()));
        $this->_view->renderLayout();
    }
}
