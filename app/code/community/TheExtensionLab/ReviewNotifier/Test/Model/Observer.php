<?php
/**
 * ReviewNotifier Observer Model Tests
 *
 * @category    TheExtensionLab
 * @package     TheExtensionLab_ReviewNotifier
 * @copyright   Copyright (c) TheExtensionLab (http://www.theextensionlab.com)
 * @license     Open Software License (OSL 3.0)
 * @author      James Anelay @ TheExtensionLab <james@theextensionlab.com>
 */
class TheExtensionLab_ReviewNotifier_Test_Model_Observer
    extends EcomDev_PHPUnit_Test_Case
{
    public function testObserverClass()
    {
        $observer = Mage::getModel('theextensionlab_reviewnotifier/observer');
        $this->assertInstanceOf(
            'TheExtensionLab_ReviewNotifier_Model_Observer', $observer
        );
        return $observer;
    }
}