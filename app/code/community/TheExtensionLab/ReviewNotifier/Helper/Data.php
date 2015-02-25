<?php class TheExtensionLab_ReviewNotifier_Helper_Data extends Mage_Core_Helper_Abstract
{
    const XML_PATH_EMAIL_TEMPLATE = 'catalog/review/alert_email_template';
    const XML_PATH_EMAIL_IDENTITY = 'catalog/review/alert_email_identity';
    const XML_PATH_EMAIL_RECIPIENT = 'catalog/review/alert_email';

    public function sendNewReviewAlertEmail(Mage_Review_Model_Review $review)
    {
        if (!Mage::getStoreConfig(self::XML_PATH_EMAIL_RECIPIENT)) {
            return $this;
        }

        $translate = Mage::getSingleton('core/translate');
        /* @var $translate Mage_Core_Model_Translate */
        $translate->setTranslateInline(false);

        $storeId = $review->getStoreId();
        $store = Mage::getModel('core/store')->load($storeId);

        $moderationUrl = $this->getReviewModerationUrl($review->getId());

        $vars = array(
            'review' => $review,
            'store' => $store,
            'moderationUrl' => $moderationUrl
        );

        $emailTemplate = Mage::getModel('core/email_template');
        /* @var $emailTemplate Mage_Core_Model_Email_Template */

        $emailTemplate->setDesignConfig(array('area' => 'backend'));

        //Use this event to add/update email variables if needed
        Mage::dispatchEvent('product_review_alert_send_before',array('vars' => $vars, 'email_template' => $emailTemplate));

        $emailTemplate->sendTransactional(
            Mage::getStoreConfig(self::XML_PATH_EMAIL_TEMPLATE),
            Mage::getStoreConfig(self::XML_PATH_EMAIL_IDENTITY),
            Mage::getStoreConfig(self::XML_PATH_EMAIL_RECIPIENT),
            null,
            $vars
        );

        $translate->setTranslateInline(true);

    }

    public function getReviewModerationUrl($reviewId)
    {
        return Mage::helper("adminhtml")->getUrl("adminhtml/catalog_product_review/edit", array('id' => $reviewId));
    }

}