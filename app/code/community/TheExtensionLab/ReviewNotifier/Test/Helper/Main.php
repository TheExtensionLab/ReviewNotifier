<?php class TheExtensionLab_ReviewNotifier_Test_Helper_Main extends EcomDev_PHPUnit_Test_Case
{
    public function testHelperClass()
    {
        $helper = Mage::helper('theextensionlab_reviewnotifier');
        $this->assertInstanceOf('TheExtensionLab_ReviewNotifier_Helper_Data', $helper);
        return $helper;
    }
}