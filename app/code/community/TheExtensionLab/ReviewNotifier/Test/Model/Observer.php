<?php class TheExtensionLab_ReviewNotifier_Test_Model_Observer extends EcomDev_PHPUnit_Test_Case
{
    public function testObserverClass()
    {
        $observer = Mage::getModel('theextensionlab_reviewnotifier/observer');
        $this->assertInstanceOf('TheExtensionLab_ReviewNotifier_Model_Observer', $observer);
        return $observer;
    }
}