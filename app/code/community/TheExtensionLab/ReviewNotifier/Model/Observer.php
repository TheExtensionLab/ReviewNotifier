<?php class TheExtensionLab_ReviewNotifier_Model_Observer
{
    /**
     * @param Varien_Event_Observer $observer
     *
     * @return $this|bool
     */
    public function reviewSaveAfter(Varien_Event_Observer $observer)
    {
        $review = $observer->getEvent()->getObject();

        //If review is not a new one - don't do anything
        if(!$review->isObjectNew()){
            return false;
        }

        //Send admin alert e-mail here

        $helper = $this->getHelper();
        $helper->sendNewReviewAlertEmail($review);

        return $this;
    }

    protected function getHelper()
    {
        return Mage::helper('theextensionlab_reviewnotifier');
    }
}