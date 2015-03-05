<?php
/**
 * ReviewNotifier Observer Model
 *
 * @category    TheExtensionLab
 * @package     TheExtensionLab_ReviewNotifier
 * @copyright   Copyright (c) TheExtensionLab (http://www.theextensionlab.com)
 * @license     Open Software License (OSL 3.0)
 * @author      James Anelay @ TheExtensionLab <james@theextensionlab.com>
 */
class TheExtensionLab_ReviewNotifier_Model_Observer
{
    /**
     * @param Varien_Event_Observer $observer
     *
     * @return $this|bool
     */
    function reviewSaveAfter(Varien_Event_Observer $observer)
    {
        $review = $observer->getEvent()->getObject();

        //If review is not a new one - don't do anything
        if (!$review->isObjectNew()) {
            return false;
        }

        //Send admin alert e-mail here
        $helper = $this->getHelper();
        $helper->sendNewReviewAlertEmail($review);

        return $this;
    }


    /**
     * @return TheExtensionLab_ReviewNotifier_Helper_Data
     */
    protected function getHelper()
    {
        return Mage::helper('theextensionlab_reviewnotifier');
    }

}