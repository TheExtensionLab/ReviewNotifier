<?php 
/**
 * ReviewNotifier Helper Tests
 *
 * @category    TheExtensionLab
 * @package     TheExtensionLab_ReviewNotifier
 * @copyright   Copyright (c) TheExtensionLab (http://www.theextensionlab.com)
 * @license     Open Software License (OSL 3.0)
 * @author      James Anelay @ TheExtensionLab <james@theextensionlab.com>
 */
class TheExtensionLab_ReviewNotifier_Test_Helper_Main
    extends EcomDev_PHPUnit_Test_Case
{
    public function testHelperClass()
    {
        $helper = Mage::helper('theextensionlab_reviewnotifier');
        $this->assertInstanceOf(
            'TheExtensionLab_ReviewNotifier_Helper_Data', $helper
        );
        return $helper;
    }
}